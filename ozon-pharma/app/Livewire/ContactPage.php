<?php

namespace App\Livewire;

use Livewire\Component;
use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;

class ContactPage extends Component{

    public $name = '';
    public $phone = '';
    public $email = '';
    public $message = '';

    protected $rules = [
        'name' => 'required',
        'phone' => 'required',
        'email' => 'required|email',
    ];

    public function submit(){

        $this->validate();

        $mailData = [
            'subject' => 'Ozon Pharmaceutical | Website Contact Mail',
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'message' => $this->message,
        ];

        Mail::to('absarkannur@gmail.com')->send(new ContactEmail($mailData));

        session()->flash( 'success', 'Our Team will contact you shortly' );

        $this->redirect('/contact');

    }

    public function render(){
        return view('livewire.contact-page');
    }
}
