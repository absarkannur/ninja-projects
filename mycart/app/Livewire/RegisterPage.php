<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customers;
use Illuminate\Support\Facades\Auth;

class RegisterPage extends Component
{

    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';

    public function submit() {

        $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:customers,email|max:255',
            'password' => 'required|min:6|max:255|confirmed',
            'password_confirmation' => 'required|min:6|max:255',
        ]);

        if( $this->password == $this->password_confirmation ) {

            $name = $this->name;
            $email = $this->email;
            $password = $this->password;

            try {

                if(Customers::create([
                    'customer_name' => $name,
                    'email' => $email,
                    'password' => $password,
                ])){

                    $credentials = array( "email" => $email, "password" => $password );

                    if (Auth::guard('customers')->attempt($credentials)) {

                        $customers = Auth::guard('customers')->user();

                        $customer_stack = array(
                            "id" => $customers->id,
                            "customer_name" => $customers->customer_name,
                            "customer_email" => $customers->email,
                            "customer_email_verified_at" => $customers->customer_email_verified_at
                        );

                        session()->put( 'users_session', $customer_stack );

                        return redirect()->intended('user/orders');

                    }
                }

            } catch (\Illuminate\Database\QueryException $e ) {

                if( $e->getCode() == 23000 ){
                    session()->flash( 'error', "This email address already registered." );
                } else {
                    session()->flash( 'error', 'Server Error' );
                }
            }

        } else {
            session()->flash( 'error', 'Password not Matching' );
        }

    }

    public function render() {
        return view('livewire.register-page');
    }
}
