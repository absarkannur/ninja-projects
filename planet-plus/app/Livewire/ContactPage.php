<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;

class ContactPage extends Component
{

    public $name = '';
    public $phone = '';
    public $email = '';
    public $message = '';

    protected $rules = [
        'name' => 'required',
        'phone' => 'required',
        'email' => 'required|email',
    ];

    public function submit() {

        $this->validate();

        $mailData = [
            'subject' => 'Planet Plus | Website Lead',
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'message' => $this->message,
        ];

        Mail::to('absarkannur@gmail.com')->send(new ContactEmail($mailData));

        session()->flash( 'success', 'Our Team will contact you shortly' );

        $this->redirect('/contact-us');

    }

    public function render()
    {
        return view( 'livewire.contact-page' );
    }
}
