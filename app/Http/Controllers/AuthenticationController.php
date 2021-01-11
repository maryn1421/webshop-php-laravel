<?php


namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

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
        $user->password = Hash::make($request->password1);
        $user->zip = $request->zip;
        $user->isAdmin = 0;


        $user->save();

        return redirect('/');


    }


    public function loginUser(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password1' => 'required'
        ]);


        $email = $request->email;
        $password = $request->password1;


        $user = User::where('email', '=', $email)->first();



        if ($user !== null) {
            if (Hash::check($password, $user->password)) {

                $userSession = session()->get('user');

                if(!$userSession) {

                    $userSession = [
                            "id" => $user -> id,
                            "username" =>  Hash::make($user->username)
                    ];
                    session()->put('user', $userSession);
                }
                return redirect('/');
            }
            else {
                return Redirect::back()->withErrors(['Invalid password, please try again']);
            }
        }
        else {
            return Redirect::back()->withErrors(['Invalid email address, please try again or register a new account']);
        }





    }


}
