<?php

namespace App\Http\Controllers;

use App\Http\Services\AboutPage;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class AboutPageController extends Controller
{
    //

    /**
     * @throws GuzzleException
     */
    public function index(AboutPage $page): View|Factory|Application
    {
        $pageData = $page->getPageData();
        return view('About.About', ['data' => $pageData, 'hasBackground' => true]);
    }
}
