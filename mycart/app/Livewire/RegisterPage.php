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
    public $confirm_password = '';

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required',
        'confirm_password' => 'required',
    ];

    public function submit() {

        if( $this->password == $this->confirm_password ) {

            $name = $this->name;
            $email = $this->email;
            $password = $this->password;

            try {

                if(Customers::create([
                    'customer_name' => $name,
                    'customer_email' => $email,
                    'password' => $password,
                ])){

                    $credentials = array( "customer_email" => $email, "password" => $password );

                    if (Auth::guard('customers')->attempt($credentials)) {

                        $customers = Auth::guard('customers')->user();

                        $customer_stack = array(
                            "id" => $customers->id,
                            "customer_name" => $customers->customer_name,
                            "customer_email" => $customers->customer_email,
                            "customer_email_verified_at" => $customers->customer_email_verified_at
                        );

                        session()->put( 'user', $customer_stack );

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
