<?php


namespace App\Http\Controllers;



use App\Models\User;
use http\Env\Request;

class CheckoutController extends Controller
{

    public function getViewForCheckOutPage() {
        return view('checkout');
    }


 public function getViewForRegisteredCheckout() {

        if (session()->get('user')) {

            $user = User::where('id', '=', session()->get('user')['id'])->first();

            return view('registeredCheckout', ['user' => $user]);
        }
        else {
            return redirect('/');
        }


 }

    public function saveRegistered(Request $request) {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'address' => 'required'
        ]);







    }


}
