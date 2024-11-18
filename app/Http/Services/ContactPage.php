<?php

namespace App\Http\Services;

use App\Facades\AnitaConfig;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Config;
use stdClass;

class ContactPage
{

    private static mixed $id;
    private static mixed $data;
    private static mixed $included;

    /**
     * @throws GuzzleException
     */
    public function getPageData(): stdClass
    {
        $client = $this->getAuthenticatedClient();
        $base_url = Config::get('app.api_base_endpoint');
        $pageId  = AnitaConfig::getConfig()['active_contact_page'];
        $includes = [
            'field_page_background.field_media_image',
        ];
        $response = $client->get($base_url . '/node/contact_us/' .$pageId . "?include=" . implode(',', $includes) );
        $response = json_decode($response->getBody()->getContents(), true);

        self::$id = $response['data']['id'];
        self::$data = $response['data'];

        if (isset($response['included'])) {
            self::$included = $response['included'];
        }

        return $this->processPageData();
    }



    public function getAuthenticatedClient(): Client
    {

        $headers = ['Authorization' => 'Basic ' . base64_encode(Config::get('app.api_username') . ':' . Config::get('app.api_password')), 'Content-Type' => 'application/json', 'Accept' => 'application/json',];

        return new Client(['headers' => $headers]);
    }

    private function processPageData(): \stdClass
    {
        $page = new \stdClass();
        $page->title = self::$data['attributes']['title'];
        $page->description = self::$data['attributes']['body']['value'];
        $page->physical_address =  self::$data['attributes']['field_physical_address'];
        $page->email_address =  self::$data['attributes']['field_email_address'];
        $page->telephone_number =  self::$data['attributes']['field_telephone_number'];
        $page->working_hours =  self::$data['attributes']['field_working_hours']['value'];
        $page->should_add_social_media_links =  self::$data['attributes']['field_should_add_social_media_li'];
        $page->social_media_links =  AnitaConfig::getConfig()['socials'];
        $page->cover = $this->processCover();
        return $page;
    }

    private function processCover(): ?stdClass
    {
        $mediaData = self::$data['relationships']['field_page_background']['data'];

        if (!isset($mediaData)) {

            return null;
        }

        $mediaId = self::$data['relationships']['field_page_background']['data']['id'];

        $coverImage = new stdClass();
        $coverImage->fileId = 0;

        foreach (self::$included as $item) {
            if ($item['id'] === $mediaId) {
                $coverImage->fileId = $item['relationships']['field_media_image']['data']['id'];
                $coverImage->meta = $item['relationships']['field_media_image']['data']['meta'];
            }

            if ($item['type'] == 'file--file' && $item['id'] === $coverImage->fileId) {
                $coverImage->url = '/cms-files/web' . $item['attributes']['uri']['url'];
            }
        }
        return $coverImage;
    }

}
