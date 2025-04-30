<?php

namespace App\Livewire;

use App\Models\Customers;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Mockery\Generator\StringManipulation\Pass\Pass;
use Illuminate\Support\Str;

class ResetPasswordPage extends Component
{
    #[Title('Home | Reset Password')]

    public $token;

    #[Url()]
    public $email;
    public $password;
    public $password_confirmation;

    public function mount( $token ) {
        $this->token = $token;
    }

    public function submit() {

        $this->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|max:255|confirmed'
        ]);

        // Customers table connect with guards
        $status = Password::broker('customers')->reset(
            [
                'email' => $this->email,
                'password' => $this->password,
                'password_confirmation' => $this->password_confirmation,
                'token' => $this->token
            ],
            function( Customers $user, string $password ) {

                $password = $this->password;

                $user->forceFill([
                    'password' => Hash::make( $password )
                ])->setRememberToken(Str::random(60) );

                $user->save();

                event( new PasswordReset( $user ));

            }
        );

        return $status === Password::PASSWORD_RESET?redirect('/gust/login'):session()->flash('error', 'Something went wrong');

    }

    public function render()
    {
        return view('livewire.reset-password-page');
    }
}
