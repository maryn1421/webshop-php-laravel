<?php


namespace App\Http\Controllers;


use App\Models\GuestOrder;
use App\Models\RegisteredOrder;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;


class CheckoutController extends Controller
{

    public function getViewForCheckOutPage()
    {
        return view('checkout');
    }


    public function getViewForRegisteredCheckout()
    {

        if (session()->get('user')) {

            $user = User::where('id', '=', session()->get('user')['id'])->first();

            return view('registeredCheckout', ['user' => $user]);
        } else {
            return redirect('/');
        }


    }

    public function saveRegistered(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'address' => 'required'
        ]);

        if (session()->get('cart')) {
            if (session()->get('user')) {

                $order = new RegisteredOrder();

                $order->cart = $this->convert_multi_array(session()->get('cart'));
                $order->user_id = session()->get('user')['id'];
                $order->status = "new";

                $order->save();



                return redirect('/');
            } else {
                return Redirect::back()->withErrors(['An error is with the cart, please check it']);
            }
        } else {
            return Redirect::back()->withErrors(['Error with login, please log in or  log in again']);
        }


    }

    function convert_multi_array($array): string
    {
        return implode("&", array_map(function ($a) {
            return implode("~", $a);
        }, $array));
    }

    public function getViewForGuestCheckout()
    {
        return view('guestCheckout');
    }


    public function saveGuest(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'address' => 'required',
            'state' => 'required',
        ]);


        if (session()->get('cart')) {
            $order = new GuestOrder();

            $order->cart = $this->convert_multi_array(session()->get('cart'));
            $order->name = $request->name;
            $order->email = $request->email;
            $order->state = $request->state;
            $order->city = $request->city;
            $order->address = $request->address;
            $order->phone = $request->phone;
            $order->state = $request->state;
            $order->zip = $request->zip;
            $order->status = 'new';

            $order->save();

            return redirect("/");
        }
        else {
                return Redirect::back()->withErrors(['An error is with the cart, please check it']);
            }


        }

}
