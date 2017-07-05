<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payments;

class PaymentsController extends Controller
{
    //
    public function getPayments(){

        $payments = Payments::get();
        return view('pages.course-scrum.course-scrum')->with('payments', $payments);
    }


}
