<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use WhatsapiTool;
use Whatsapi;

class RegisterWhatsapp extends Controller
{
    public function registerWhatsappNumber()
    {
        $number = '254723959503';
        $type = 'sms';
        
        $response = WhatsapiTool::requestCode($number, $type);
        dd($response);
    }

    public function sendMessage()
    {       
        var_dump('Sending message');

        Whatsapi::sendMessage('254723959503','Hello Geoffrey, Whats app works!');
    }
}
