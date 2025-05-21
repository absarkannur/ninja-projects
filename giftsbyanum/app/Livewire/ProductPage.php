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
    public $product_qty = 1;
    public $product_stock = 0;
    public $slug = '';
    public $offer_ended;

    // Price
    public $sale_price = 0;

    public function mount( $slug ){

        $this->slug = $slug;
        $this->product = static::getProduct( $slug );
        $this->product_stock = $this->product['product_qty_in_stock'];


        $expire = date('Y-m-d', strtotime('0 days'));
        if (strtotime( $this->product->offer_end_date ) <= strtotime($expire)) {
            $this->offer_ended = 1;
            $this->sale_price = floatval($this->product['product_sales_price']);
        } else {
            $this->sale_price = floatval($this->product['product_sales_price'])-floatval($this->product['product_discount_price']);
        }

    }

    public function addToCart( $product_id, $qty ){

        $total_count =  CartManagement::addItemToCart( $product_id, $qty );
        $this->dispatch('update-cart');

        if( $total_count != false ){
            toastr()->success('Product successfully added to your cart.');
        }

        $this->product_qty = 1;

    }

    public function incrementCart(){

        if( $this->product_stock !== $this->product_qty ) {
            $this->product_qty++;
        }

    }

    public function decrementCart(){
        if( $this->product_qty > 1 ) {
            $this->product_qty--;
        }
    }

    public function getProduct( $slug ){
        $data = Products::select(
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
        ->leftJoin( 'offers', 'offers.id', 'products.offers_id' )
        ->first();

        return $data;
    }

    public function render() {

        $this->product = static::getProduct( $this->slug );

        return view('livewire.product-page', [
            "product" => $this->product,
            "offer_ended" => $this->offer_ended,
            'sale_price' => $this->sale_price
        ]);
    }
}
