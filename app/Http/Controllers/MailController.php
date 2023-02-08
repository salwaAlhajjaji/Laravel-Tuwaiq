<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Cache;

class MailController extends Controller
{
    // public $mailData;
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        dd(Cache::get('price'));
        $mailData = [
            'title' => 'Salwa',
            'body' => 'This is for testing email using smtp.'
        ];
        // ssyd12@hotmail.com
        Mail::to('salwa.alhajjaji@hotmail.com')->send(new DemoMail($mailData));
           
        dd("Email is sent successfully.");
    }
}