<?php

namespace App\Livewire;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Contracts\View\View;
use Livewire\Component;

// Call Register Model
use App\Models\User;

class RegisterPage extends Component implements HasForms {

    use InteractsWithForms;

    public ?array $data = [];
    
    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                TextInput:: make('email')->required()->email(),
                TextInput:: make('password')->required()->password(),
                TextInput:: make('confirm_password')->required()->password()
                // ...
            ])
            ->statePath('data');
    }

    public function create(): void
    {
        $state = $this->form->getState();

        if( $state['password'] === $state['confirm_password']) {
            
            try {
                
                User::create($this->form->getState());
                // Redirect to :-
                $this->redirect('/signin');

            } catch (\Throwable $th) {
                session()->flash( 'error', $th );
            }

        } else {
            session()->flash( 'error', 'Passwords did not match' );
        }

    }

    public function render() {
        return view('livewire.register-page');
    }


}
