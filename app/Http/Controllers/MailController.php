<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

//use App\Http\Requests;
use Mail;
use Session;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class mailController extends Controller
{

    public function postContact(Request $request) {
          $this->validate($request, [
             'template-contactform-email' => 'required|email',
              'template-contactform-phone' => 'required|numeric',
              'template-contactform-message' => 'min:10']);


        $name = isset( $_POST['template-contactform-name'] ) ? $_POST['template-contactform-name'] : '';
        $email = isset( $_POST['template-contactform-email'] ) ? $_POST['template-contactform-email'] : '';
        $phone = isset( $_POST['template-contactform-phone'] ) ? $_POST['template-contactform-phone'] : '';
        $service = isset( $_POST['template-contactform-service'] ) ? $_POST['template-contactform-service'] : '';
        $body = isset( $_POST['template-contactform-message'] ) ? $_POST['template-contactform-message'] : '';
        $date = isset( $_POST['contact-date'] ) ? $_POST['contact-date'] : '';
//        $referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>This Form was submitted from: ' . $_SERVER['HTTP_REFERER'] : '';


        $subject = 'Регистрация';
        $ar_body = "Вы получили это письмо, потому что отправили заявку на сайте ScrumMasters.com.ua<br><br>"." ".$date."Мы ответим вам в ближайшие 24 часа.<br><br>С наилучшими пожеланиями,<br>ScrumMasters.com.ua";

        $data = array(
            'email' => $email,
            'name' => $name,
            'subject' => $subject,
            'phone' => $phone,
            'message' => $body,
            'service' => $service,
            'date' => $date
        );

        Mail::send('emails.contact', $data, function($message)use ($data){

            $message->from($data['email']);
            $message->to('lesia@tridentsoftlab.com');
            $message->subject($data['subject']);
            $message->to($data['email']);
        });

//        dd('Your email was sent!');
        echo '{ "alert": "error", "message": "Email <strong>could not</strong> be sent due to some Unexpected Error. Please Try Again later." }';
        Session::flash('success', 'Your email was sent!');

        return redirect('/');
    }
}
