<?php


namespace App\Http\Controllers;



use App\Models\User;

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

}
