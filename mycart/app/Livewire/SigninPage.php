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

    public function submit() {

        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = array( "email" => $this->email, "password" => $this->password );

        if (Auth::guard('customers')->attempt($credentials)) {

            $customers = Auth::guard('customers')->user();

            $customer_stack = array(
                "id" => $customers->id,
                "customer_name" => $customers->customer_name,
                "customer_email" => $customers->email,
                "customer_email_verified_at" => $customers->email_verified_at
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
