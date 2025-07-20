<?php

namespace App\Livewire;

use App\Models\Brands;
use App\Models\Categories;
use App\Models\Products;
use App\Models\SubCategories;
use Illuminate\Support\Arr;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsPage extends Component {

    use WithPagination;

    #[Url]
    public $cat = [];

    #[Url]
    public $brand = [];

    #[Url]
    public $category = '';

    public $categories = [];
    public $brands = [];

    public function mount(){

        $this->brands = Brands::get();
        $categories = Categories::get();

        $temp_categories = array();

        foreach ($categories as $key => $category ) {

            $sub_categories = SubCategories::where( 'categories_id', $category['id'] )->get();

            $sub = array();

            $stack = array(
                "category_name" => $category['category_name'],
                "category_slug" => $category['category_slug'],
                "category_image" => $category['category_image'],
                "sub_categories" =>  array()
            );

            foreach ( $sub_categories as $key => $value) {

                $temp = array(
                    "sub_category_id" => $value['id'],
                    "sub_category_name" => $value['sub_category_name'],
                    "sub_category_slug" => $value['sub_category_slug'],
                );

                array_push( $sub, $temp );

            }

            $stack['sub_categories'] = $sub;

            array_push( $temp_categories, $stack );

        }

        $this->categories = $temp_categories;

    }

    public function render() {

        $products = Products::query();

        if( !empty($this->category)){

            $list_id = Array();

            $cat_id = Categories::where( 'category_slug', $this->category )->first();
            $sub_cat = SubCategories::where( 'categories_id', $cat_id->id )->get();

            foreach ( $sub_cat as $key => $cat ) {
                array_push( $list_id, $cat->id );
            }

            $products = Products::whereIn( 'sub_categories_id', $list_id );

        }

        if( !empty($this->cat)){
            $products = Products::whereIn( 'sub_categories_id', $this->cat );
        }

        if( !empty($this->brand)){
            $products = Products::whereIn( 'brands_id', $this->brand );
        }



        return view('livewire.products-page', [
            'products' => $products->paginate(1),
            'categories' => $this->categories,
            'brands' => $this->brands,
            'category' => $this->category
        ]);
    }
}
