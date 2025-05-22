<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Models\Products;
use App\View\Composers\HeaderComposer;
use App\Livewire\NavBar;
use Illuminate\Http\Request;
use Livewire\Attributes\Title;
use Livewire\Component;


class HomePage extends Component
{

    #[Title('Gifts By Anum')]

    public $sessions;
    public $currency;
    public $products;

    public function mount() {

        $this->currency = env('APP_CURRENCY');

         // Initial Load
        $request = Request();
        $this->sessions = $request->session()->get('users_session');

        $this->products = $this->getProduct();

    }

    public function getProduct(){

        $data = array();
        $products = Products::select(
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
                                'offers.offer_status',
                                'sub_categories.sub_category_name',
                                'sub_categories.sub_category_slug',
                                'categories.category_name',
                                'categories.category_slug'
                            )->leftJoin( 'offers', 'offers.id', 'products.offers_id' )
                            ->leftJoin( 'sub_categories', 'sub_categories.id', 'products.sub_categories_id' )
                            ->leftJoin( 'categories','categories.id', 'sub_categories.categories_id' )
                            ->get();


        foreach ($products as $key => $product ) {

            $expire = date('Y-m-d', strtotime('0 days'));

            $stach = array(
                "id" => $product['id'],
                "brands_id" => $product['brand_id'],
                "sub_categories_id" => $product['sub_categories_id'],
                "offers_id" => $product['offers_id'],
                "taxes_id" => $product['taxes_id'],
                "product_name" => $product['product_name'],
                "product_slug" => $product['product_slug'],
                "product_description" => $product['product_description'],
                "product_content" => $product['product_content'],
                "product_images" => $product['product_images'],
                "product_original_price" => $product['product_original_price'],
                "product_sales_price" => $product['product_sales_price'],
                "product_discount_price" => $product['product_discount_price'],
                "product_tax_price" => $product['product_tax_price'],
                "product_qty_in_stock" => $product['product_qty_in_stock'],
                "product_sku" => $product['product_sku'],
                "product_status" => $product['product_status'],
                "offer_name" => $product['offer_name'],
                "offer_description" => $product['offer_description'],
                "offer_discount_percent" => $product['offer_discount_percent'],
                "offer_end_date" => $product['offer_end_date'],
                "offer_status" => $product['offer_status'],
                "sub_category_name" => $product['sub_category_name'],
                "sub_category_slug" => $product['sub_category_slug'],
                "category_name" => $product['category_name'],
                "category_slug" => $product['category_slug']
            );

            if( $product['offer_status'] == 'inactive' ){
                $stach['offer_discount_percent'] = null;
                $stach['product_discount_price'] = 0;
            }

            if (strtotime( $product['offer_end_date'] ) <= strtotime($expire)) {
                $stach['offer_discount_percent'] = null;
                $stach['product_discount_price'] = 0;
            }

            array_push( $data, $stach );

        }


        // dd( $data );

        return $data;

    }

    public function render() {
        return view('livewire.home-page', [
            'products' => $this->products
        ]);
    }

}
