<?php

namespace App\Livewire;

use App\Models\MailSubscribe;
use Livewire\Component;

class SubscribeComponent extends Component
{

    public $email;
    public $checkbox;
    public $message;

    protected $rules = [
        'email' => 'required|email',
    ];

    public function submit() {

        $this->validate();

        // if( $this->checkbox === true ) {
            $mail = new MailSubscribe();
            $mail->email = $this->email;
            $mail->save();

            $this->email = '';
            $this->message = 'Successfully added';
        // }

    }

    public function render() {
        return view('livewire.subscribe-component');
    }
}
