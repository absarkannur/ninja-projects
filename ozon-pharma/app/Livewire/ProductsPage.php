<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Products;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class ProductsPage extends Component
{

    use WithPagination;

    protected $paginationTheme = "bootstrap";

    #[Url()]
    public $search = '';
    #[Url()]
    public $filter = 'Product Name';

    public function render()
    {
        if( $this->filter == 'Product Name' ){
            $products = Products::orderBy( 'created_at', 'ASC' )->paginate(2);
        } else {
            $products = Products::orderBy( 'created_at', 'ASC' )->paginate(10);
        }


        return view('livewire.products-page', [
            'products' => $products,
            'filter' => $this->filter
        ]);

    }
}
