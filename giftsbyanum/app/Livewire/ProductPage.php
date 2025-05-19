<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Models\Products;
use Livewire\Attributes\Title;
use Livewire\Component;


class ProductPage extends Component
{
    #[Title('Gifts By Anum')]

    public $product;

    public function mount( $slug ){

        $this->product = Products::select( 
                            'products.id',
                            'products.brands_id',
                            'products.sub_categories_id',
                            'products.offers_id',
                            'products.taxes_id',
                            'products.product_name',
                            'products.product_slug',
                            'products.product_description',
                            'products.product_content',
                            'products.product_images',
                            'products.product_original_price',
                            'products.product_sales_price',
                            'products.product_discount_price',
                            'products.product_tax_price',
                            'products.product_qty_in_stock',
                            'products.product_sku',
                            'products.product_status',
                            'offers.offer_name',
                            'offers.offer_description',
                            'offers.offer_discount_percent',
                            'offers.offer_end_date',
                            'offers.offer_status'
                        )
                        ->where( 'product_slug', $slug )
                        ->leftJoin( 'offers', 'offers.id', 'products.offers_id' )->first();  

    }

    public function addToCart( $product_id, $qty ){

        $total_count =  CartManagement::addItemToCart( $product_id, $qty );
        $this->dispatch('update-cart');

        session()->flash('info','Your product in cart');

    }

    public function render() {
        return view('livewire.product-page', [
            "product" => $this->product
        ]);
    }
}
