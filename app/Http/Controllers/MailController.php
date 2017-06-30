<?php

namespace App\Http\Controllers;

//use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

//use App\Http\Requests;



use Mail;
use Session;
//require ('date_of_training/date_of_training');

class mailController extends Controller
{
    public function postContact(Request $request) {
          $this->validate($request, [
             'template-contactform-email' => 'required|email',
              'template-contactform-name' => 'min:3',
              'template-contactform-phone' => 'required|min:4|numeric'
             ]);

        $name = isset( $_POST['template-contactform-name'] ) ? $_POST['template-contactform-name'] : '';
        $email = isset( $_POST['template-contactform-email'] ) ? $_POST['template-contactform-email'] : '';
        $phone = isset( $_POST['template-contactform-phone'] ) ? $_POST['template-contactform-phone'] : '';
        $body = isset( $_POST['template-contactform-message'] ) ? $_POST['template-contactform-message'] : '';
        $link = $_SERVER['HTTP_REFERER'] ? 'Страница регистрации: ' . $_SERVER['HTTP_REFERER'] : '';


        $subject = 'Регистрация';

        $data = array(
            'email' => $email,
            'name' => $name,
            'subject' => $subject,
            'phone' => $phone,
            'body' => $body,
            'link' => $link
        );

            Mail::send('emails.contact',  $data, function($message)use ($data){
                    $message->from($data['email']);
                    $message->to($data['email'])->cc('lesia@tridentsoftlab.com');
                    $message->subject($data['subject']);
        });

        Session::flash('success', 'Your email was sent!');

        return redirect($request->headers->get('referer', '/'));

    }
}
