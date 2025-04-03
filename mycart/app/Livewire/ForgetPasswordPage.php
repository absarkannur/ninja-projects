<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Password;
use Livewire\Component;
use Livewire\Attributes\Title;
use Mockery\Generator\StringManipulation\Pass\Pass;

class ForgetPasswordPage extends Component
{

    #[Title('Home | Forgot Password')]

    public $email;

    protected function broker()
    {
        return Password::broker('customers'); //set password broker name according to guard which you have set in config/auth.php
    }

    public function submit(){

        $this->validate([
            'email' => 'required|email|exists:customers,email'
        ]);

        // Customers table connect with guards
        $status = Password::broker('customers')->sendResetLink([ 'email' => $this->email ]);

        if( $status === Password::RESET_LINK_SENT ){
            session()->flash( 'success', 'Password reset link has been sent to your email address' );
            $this->email = '';
        } else {
            session()->flash( 'error', $status );
        }

    }

    public function render()
    {
        return view('livewire.forget-password-page');
    }

}
