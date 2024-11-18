<?php

namespace App\Http\Services;

use App\Facades\AnitaConfig;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Config;
use stdClass;

class AboutPage
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
        $pageId  = AnitaConfig::getConfig()['active_about_page'];
        $includes = [
            'field_about_components.field_intro_gallery.field_media_image',
            'field_about_components.field_person.field_profile_picture.field_media_image'
        ];
        $response = $client->get($base_url . '/node/page/' . $pageId . "?include=" . implode(',', $includes));
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
        $page->subtitle = self::$data['attributes']['field_sub_title'];
        $page->description = self::$data['attributes']['body']['value'];
        $page->cover = $this->processCover();
        $page->components = $this->processComponents();
        return $page;
    }

    private function processComponents(): array
    {
        $components = [];

        foreach (self::$included as $included) {
            if ($included['type'] == 'paragraph--image_gallery_with_intro') {
                $component = new \stdClass();
                $component->type = $included['type'];
                $component->title = $included['attributes']['field_intro_title'];
                $component->description= $included['attributes']['field_intro_description'];
                $component->gallery = $this->processGallery($included['relationships']['field_intro_gallery']['data']);
                $components[] = $component;
            }

            if($included['type'] == 'paragraph--person_collection'){
                $component = new \stdClass();
                $component->type = $included['type'];
                $component->title = $included['attributes']['field_collection_title'];
                $component->description= $included['attributes']['field_collection_desccription'];
                $component->persons = $this->processPersons($included['relationships']['field_person']['data']);
                $components[] = $component;
            }
        }
        return $components;
    }

    private function processGallery(mixed $data): array
    {
        $gallery = [];
        $mediaIds = [];
        foreach ($data as $item) {
            $mediaIds[] = $item['id'];
        }

        foreach (self::$included as $included) {
            if ($included['type'] == 'media--image' && in_array($included['id'], $mediaIds)) {
                $image = new \stdClass();
                $image->meta = $included['relationships']['field_media_image']['data']['meta'];
                $image->fileId =  $included['relationships']['field_media_image']['data']['id'];
                $image->url = $this->getImageUrl($image->fileId);
                $gallery[] = $image;
            }
        }

        return $gallery;
    }

    private function getImageUrl(mixed $fileId): string
    {
        foreach (self::$included as $included) {
            if ($included['type'] == 'file--file' && $included['id'] == $fileId) {
                return '/cms-files/web/' . $included['attributes']['uri']['url'];
            }
        }
        return '';
    }

    private function processPersons(mixed $data): array
    {

        $personIds = [];
        $persons = [];
        foreach ($data as $item) {
            $personIds[] = $item['id'];
        }

        foreach (self::$included as $included) {
            if ($included['type'] == 'paragraph--person' && in_array($included['id'], $personIds)) {
                $person = new \stdClass();
                $person->fullname = $included['attributes']['field_full_name'];
                $person->position = $included['attributes']['field_position'];
                $person->profilePicture = $this->getProfileImage($included['relationships']['field_profile_picture']['data']);
                $persons[] = $person;
            }
        }

        return $persons;

    }

    private function getProfileImage(mixed $data)
    {
        foreach (self::$included as $included) {
            if ($included['type'] == 'media--image' && $included['id'] == $data['id']) {
                $image = new \stdClass();
                $image->meta = $included['relationships']['field_media_image']['data']['meta'];
                $image->url =  $this->getImageUrl($included['relationships']['field_media_image']['data']['id']);
                return $image;
            }
        }
    }

    private function processCover(): ?stdClass
    {
        $mediaData = self::$data['relationships']['field_page_cover_image']['data'];

        if (!isset($mediaData)) {

            return null;
        }

        $mediaId = self::$data['relationships']['field_page_cover_image']['data']['id'];

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
