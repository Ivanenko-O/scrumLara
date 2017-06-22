<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Requests;
use Mail;
use Session;
class mailController extends Controller
{
    public function postContact(Request $request) {
//          $this->validate($request, [
//             'template-contactform-email' => 'required|email'
//             ]);

        $name = isset( $_POST['template-contactform-name'] ) ? $_POST['template-contactform-name'] : '';
        $email = isset( $_POST['template-contactform-email'] ) ? $_POST['template-contactform-email'] : '';
        $phone = isset( $_POST['template-contactform-phone'] ) ? $_POST['template-contactform-phone'] : '';
        $subject = 'Регистрация';

        $data = array(
            'email' => $email,
            'name' => $name,
            'subject' => $subject,
            'phone' => $phone
        );

        Mail::send('emails.contact', $data, function($message)use ($data){

            $message->from($data['email']);
            $message->to('lesia@tridentsoftlab.com');
            $message->subject($data['subject']);
            $message->replyTo($data['email']);
        });

        Session::flash('success', 'Your email was sent!');

        return redirect('/');


    }
}
