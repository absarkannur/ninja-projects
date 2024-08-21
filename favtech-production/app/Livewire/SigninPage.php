<?php

namespace App\Livewire;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;
use Illuminate\Validation\ValidationException;

class SigninPage extends Component implements HasForms{

    use InteractsWithForms;

    public ?array $data = [];
    public $username = '';
    public $password = '';
    public $remember = false;
    
    public function mount(): void {
        $this->form->fill();
    }

    public function form(Form $form): Form {
        return $form
            ->schema([
                TextInput:: make('email')->required()->email(),
                TextInput:: make('password')->required()->password(),
                // ...
            ])
            ->statePath('data');
    }

    public function signin(): void {

        $state = $this->form->getState();

        if (! auth()->attempt([
            'email' => $state['email'],
            'password' => $state['password']
        ])){
            $this->throwFailureValidationException();
        }

        $user = auth()->user();

        // session()->regenerate();
        session()->put( 'user', $user );

        $this->redirect('/price-list');

        // if( $state['password'] === $state['confirm_password']) {
            
        //     User::create($this->form->getState());
        //     $this->redirect('/signin');

        // } else {
        //     session()->flash( 'error', 'Passwords did not match' );
        // }

    }

    protected function throwFailureValidationException(): never
    {
        throw ValidationException::withMessages([
            'data.email' => __('filament-panels::pages/auth/login.messages.failed'),
        ]);
    }

    public function render(){
        return view('livewire.signin-page');
    }
}
