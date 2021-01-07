<?php


namespace App\Http\Controllers;


use App\Models\User;
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
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password1' => 'required',
            'password2' => 'required|same:password1',
            'phone' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'address' => 'required'
        ]);

            $user = new User();

            $user->username = $request->username;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->state = $request->state;
            $user->city = $request->city;
            $user->address = $request->address;
            $user->phone = $request->phone;
            $user->password = $request->password1;
            $user->zip = $request->zip;


            $user->save();

            return redirect('/');


        }



}
