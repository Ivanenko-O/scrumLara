<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Requests;
use Mail;
use Session;
require ('date_of_training/date_of_training');

class mailController extends Controller
{
    public function postContact(Request $request) {
          $this->validate($request, [
             'template-contactform-email' => 'required|email',
//              'template-contactform-message' => 'min:10'
             ]);

        $name = isset( $_POST['template-contactform-name'] ) ? $_POST['template-contactform-name'] : '';
        $email = isset( $_POST['template-contactform-email'] ) ? $_POST['template-contactform-email'] : '';
        $phone = isset( $_POST['template-contactform-phone'] ) ? $_POST['template-contactform-phone'] : '';
        $body = isset( $_POST['template-contactform-message'] ) ? $_POST['template-contactform-message'] : '';

        $subject = 'Регистрация';

        $data = array(
            'email' => $email,
            'name' => $name,
            'subject' => $subject,
            'phone' => $phone,
            'body' => $body
        );

            Mail::send('emails.contact',  $data, function($message)use ($data){
                    $message->from($data['email']);
                    $message->to($data['email'])->cc('lesia@tridentsoftlab.com');
                    $message->subject($data['subject']);
        });



        Session::flash('success', 'Your email was sent!');

        return redirect('/');


    }
}
