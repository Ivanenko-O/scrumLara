<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payments;


class PaymentsController extends Controller
{
    //
    public function __construct(Payments $payments) {
         $this -> payments = $payments;
    }

    public function getPayments(){

        $payments = $this -> payments -> getPayments();

//        dd($payments);
        return view('pages.course-scrum.course-scrum')->with('payments', $payments);
    }




}
