<?php
/**
 * Created by IntelliJ IDEA.
 * User: Леся
 * Date: 27.04.2017
 * Time: 15:16
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Requests;
use Mail;
use Session;


class PagesController extends Controller {

     public function getContact() {
        return view('pages.contact.contact');
    }

    public function getAnalysis() {
         return view ('pages.services.analysis-and-implementation.analysis-and-implementation');
    }

    public function getCoaching() {
        return view('pages.services.coaching-and-support.coaching-and-support');
    }

    public function getCorporateStudy() {
        return view('pages.services.corporate-study.corporate-study');
    }

    public function getHome() {

        return view('pages.home.home');
    }

    public function getScrum0() {

        return view('pages.scrum0.scrum0');
    }

    public function getMasterScrum() {

        return view('pages.master-of-scrum.master-of-scrum');
    }

    public function getManagement30() {

        return view('pages.management30.management30');
    }

    public function getEventlist() {

        return view('pages.eventlist.eventlist');
    }

    public function getAndriipavlenko() {

        return view('pages.about.andriipavlenko.andriipavlenko');
    }

    public function getAboutus() {

        return view('pages.about.aboutus.aboutus');
    }

}

