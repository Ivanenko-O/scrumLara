<?php
/**
 * Created by IntelliJ IDEA.
 * User: Леся
 * Date: 27.04.2017
 * Time: 15:16
 */
namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getAbout() {

    }

    public function getBlog() {

    }

    public function getContact() {
        return view('pages.contact.contact');
    }
}