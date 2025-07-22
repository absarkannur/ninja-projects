<?php

namespace App\Livewire;

use App\Mail\ContactEmail;
use App\Models\PropertiesList;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class PropertyPage extends Component {

    public $data;

    public $name = '';
    public $code = '';
    public $phone = '';
    public $email = '';
    public $interest = '';
    public $project = '';
    public $agree = '';

    public $modal_name = '';
    public $modal_code = '';
    public $modal_phone = '';
    public $modal_email = '';
    public $modal_interest = '';
    public $modal_project = '';
    public $modal_agree = '';

    public function mount($slug){

        $this->data = PropertiesList::where( 'slug', $slug )->first();

    }

    public function submit(){

        $this->validate([
            'name' => 'required',
            'code' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);

        $ag = "";

        if( $this->agree == 1 ){
           $ag = "I agree to share my data with Vakson Real Estate(VRE), and VRE or its affiliates to collect, control or process my data in order to communicate with me. Should I wish to unsubscribe, I will send an email to info@vaksondevelopment.com";
        }

        $mailData = [
            'subject' => 'Vakson | Website Lead',
            'name' => $this->name,
            'phone' => $this->code . ' ' . $this->phone,
            'email' => $this->email,
            'message' => $this->interest . " - " . $this->project,
            'agree' => $ag
        ];

        Mail::to('absarkannur@gmail.com')->send(new ContactEmail($mailData));

        session()->flash( 'success', 'Our Team will contact you shortly' );

        $this->redirect('/');

    }


    public function submitmodal(){

        $this->validate([
            'modal_name' => 'required',
            'modal_code' => 'required',
            'modal_phone' => 'required',
            'modal_email' => 'required|email',
        ]);

        $ag = "";

        if( $this->modal_agree == 1 ){
           $ag = "I agree to share my data with Vakson Real Estate(VRE), and VRE or its affiliates to collect, control or process my data in order to communicate with me. Should I wish to unsubscribe, I will send an email to info@vaksondevelopment.com";
        }


        $mailData = [
            'subject' => 'Vakson | Website Lead',
            'name' => $this->modal_name,
            'phone' => $this->modal_code . ' ' . $this->modal_phone,
            'email' => $this->modal_email,
            'message' => $this->modal_interest . " - " . $this->modal_project,
            'agree' => $ag
        ];

        Mail::to('absarkannur@gmail.com')->send(new ContactEmail($mailData));

        session()->flash( 'success', 'Our Team will contact you shortly' );

        $this->redirect('/');

    }

    public function render()
    {
        return view('livewire.property-page', [
            "property_data" => $this->data,
        ]);
    }
}
