<?php

namespace App\Livewire;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Livewire\Component;

class SigninPage extends Component
{

    public $email = '';
    public $password = '';

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function submit( Request $request ) {

        $credentials = array( "customer_email" => $this->email, "password" => $this->password );

        if (Auth::guard('customers')->attempt($credentials)) {

            $customers = Auth::guard('customers')->user();

            $customer_stack = array(
                "id" => $customers->id,
                "customer_name" => $customers->customer_name,
                "customer_email" => $customers->customer_email,
                "customer_email_verified_at" => $customers->customer_email_verified_at
            );

            session()->put( 'users_session', $customer_stack );


            return redirect()->intended('user/orders');

        } else {
            session()->flash( 'error', 'You have entered an invalid username or password' );
        }

    }

    public function render()
    {
        return view('livewire.signin-page');
    }
}
