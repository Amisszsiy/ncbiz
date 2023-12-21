<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class MailController extends Controller
{
    public function notifyContact(Request $request){
        $form = $request;
        Mail::to('th_sales@nc-net.or.jp')->send(new Contact($form));
        return redirect('/contact-us');
    }
}
