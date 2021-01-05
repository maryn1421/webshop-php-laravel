<?php


namespace App\Http\Controllers;


class AuthenticationController extends Controller
{
    public function getViewForLogin() {
        return view('login');
    }


    public function getViewForRegistration() {
        return view('registration');
    }
}
