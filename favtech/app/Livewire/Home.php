<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Banners;
use App\Models\Products;
use App\Models\Faq;
use App\Models\Brands;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;

class Home extends Component
{

    #[Title('favtech | Home')]

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
            'subject' => 'Al Kenz Pharmaceutical | Contact Form Lead',
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'message' => $this->message,
        ];

        // contact@alkenzpharma.net

        Mail::to('absarkannur@gmail.com')->send(new ContactEmail($mailData));

        session()->flash( 'success', 'Our Team will contact you shortly' );

        $this->redirect('/contact-us');

    }

    public function render() {

        $banners =  Banners::get();
        // $products = Products::latest()->take(8)->get();
        $brands = Brands::latest()->take(6)->get();
        $faq = Faq::orderBy('id', 'desc')->take(3)->get();

        $products = Products::where( 'product_latest', '=' , 1 )
                            ->leftJoin( 'brands', 'brands.id', 'products.brands_id' )
                            ->leftJoin( 'colors', 'colors.id', 'products.colors_id' )
                            ->get();


        return view('livewire.home', [
            'banners' => $banners,
            'products' => $products,
            'faq' => $faq,
            'brands' => $brands,
        ]);

    }
}
