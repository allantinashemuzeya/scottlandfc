<?php

namespace App\Http\Controllers;

use App\Facades\AnitaConfig;
use App\Http\Services\AboutPage;
use App\Http\Services\ContactPage;
use App\Mail\ContactUsMail;
use App\Mail\SelfContactUsMail;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactPageController extends Controller
{
    //

    /**
     * @throws GuzzleException
     */
    public function index(ContactPage $page): View|Factory|Application
    {
        $pageData = $page->getPageData();
        return view('Contact.Contact', [
            'data' => $pageData,
            'hasBackground' => true
        ]);
    }

    public function sendEmail(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        $phone = $request->input('phone');

        $receiptMail  = AnitaConfig::getConfig()['contact_email'];

        // laravel send mail
        $mail = Mail::to([$email])->send(new ContactUsMail($name, $email, $message, $phone));
        $mail2 = Mail::to([$receiptMail])->send(new SelfContactUsMail($name, $receiptMail, $message, $phone));

        if($mail){
            return 'Message sent successfully, thank you for your email';
        }
        else{
            return 'Message not sent, please try again later.';
        }
    }
}
