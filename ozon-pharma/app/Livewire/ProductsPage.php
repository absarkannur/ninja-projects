<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Products;
use App\Models\TherapeuticCategories;

use Livewire\Attributes\Url;
use Livewire\WithPagination;

class ProductsPage extends Component
{

    use WithPagination;

    protected $paginationTheme = "bootstrap";
    protected $products_list;


    #[Url()]
    public $search = '';
    #[Url()]
    public $filter = '';
    #[Url()]
    public $categories = '';


    public function submit(){


        if( $this->filter == 'Product Name' ){


            $this->products_list = Products::where( 'product_name', 'like', '%'. $this->search .'%' )
                        ->orderBy( 'created_at', 'ASC' )->paginate(10);

            $this->categories = '';


        } else if( $this->filter == 'Therapeutic Categories' ) {

            // Clear Search
            $this->search = '';

            if( $this->categories !== '' ){

                // Get Therapeutic Categories
                $get_id = TherapeuticCategories::where( 'therapeutic_category_slug', '=', $this->categories  )->first();
                $this->products_list = Products::where( 'therapeutic_categories_id', '=', $get_id->id )
                            ->orderBy( 'created_at', 'ASC' )->paginate(10);

            } else {

                $this->products_list = Products::orderBy( 'created_at', 'ASC' )->paginate(10);

            }


        } else {

            $this->products_list = Products::orderBy( 'created_at', 'ASC' )->paginate(10);

        }

    }

    // public function mount(){

    //     $this->products_list = Products::orderBy( 'created_at', 'ASC' )->paginate(10);

    // }

    public function render() {

        $therapeutic_categories = TherapeuticCategories::get();

        if( $this->filter == 'Product Name' ){


            $this->products_list = Products::where( 'product_name', 'like', '%'. $this->search .'%' )
                        ->orderBy( 'created_at', 'ASC' )->paginate(10);

            $this->categories = '';


        } else if( $this->filter == 'Therapeutic Categories' ) {

            // Clear Search
            $this->search = '';

            if( $this->categories !== '' ){

                // Get Therapeutic Categories
                $get_id = TherapeuticCategories::where( 'therapeutic_category_slug', '=', $this->categories  )->first();
                $this->products_list = Products::where( 'therapeutic_categories_id', '=', $get_id->id )
                            ->orderBy( 'created_at', 'ASC' )->paginate(10);

            } else {

                $this->products_list = Products::orderBy( 'created_at', 'ASC' )->paginate(10);

            }


        } else {

            $this->products_list = Products::orderBy( 'created_at', 'ASC' )->paginate(10);

        }

        return view('livewire.products-page', [
            'products' => $this->products_list,
            'filter' => $this->filter,
            'therapeutic_categories' => $therapeutic_categories,
        ]);

    }
}
