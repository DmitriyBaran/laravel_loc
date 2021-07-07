<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\mail\newMail;

class mailController extends Controller
{
    public function send()
    {
        Mail::send(new newMail());
    }

    public function emial()
    {
        return view('email');
    }
}
