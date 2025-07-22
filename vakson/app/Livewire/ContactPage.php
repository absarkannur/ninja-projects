<?php

namespace App\Livewire;

use App\Mail\ContactEmail;
use App\Models\ContactPage as ModelsContactPage;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactPage extends Component
{

    public $name = '';
    public $phone = '';
    public $email = '';
    public $message = '';
    public $agree = '';

    protected $rules = [
        'name' => 'required',
        'phone' => 'required',
        'email' => 'required|email',
    ];

    public function submit(){

        $this->validate();

        $mailData = [
            'subject' => 'Vakson | Website Lead',
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'message' => $this->message,
            'agree' => $this->agree,
        ];

        Mail::to('absarkannur@gmail.com')->send(new ContactEmail($mailData));

        session()->flash( 'success', 'Our Team will contact you shortly' );

        $this->redirect('/contact');

    }

    public function render() {

        $data = ModelsContactPage::first();

        return view('livewire.contact-page', [
            'contact_data' => $data
        ]);
    }
}
