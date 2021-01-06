<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function getViewForLogin()
    {
        return view('login');
    }


    public function getViewForRegistration()
    {
        return view('registration');
    }


    public function saveNewUser(Request $request)
    {
        $validated = $request->validate([
            'username' => ['required|unique:users,username'],
            'email' => ['required|email|unique:users,email'],
            'password1' => ['required'],
            'password2' => ['required|same:password1'],
            'phone' => ['required|regex:/(01)[0-9]{9}/'],
            'city' => ['required'],
            'zip' => ['required'],
            'address' => ['required']
        ]);
    }


}
