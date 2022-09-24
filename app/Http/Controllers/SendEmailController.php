<?php

namespace App\Http\Controllers;

use App\Mail\FormIndexContactoMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function sendEmailContact(Request $request){
        
        $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'subject' => 'required',
            'message_contact' => 'required'
        ]);
        
        //$request->post('email')
        Mail::to('cotacto@miempresa.com')->send(new FormIndexContactoMailable($request->post()));

        return redirect()->route('index');
    }
}
