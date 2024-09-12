<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Products;
use App\Models\Brands;


class ProductsPage extends Component
{

    #[Title('favtech | Products')]

    public $products_list;
    public $id;

    public function mount( $id ) {
        $this->id = $id;
    }

    public function render() {
        
        $brands = Brands::get();

        // $products_list = Products::orderBy( 'id', 'ASC' )->paginate(12);

        if( $this->id === 'all' ) {
            $products_list = Products::orderBy( 'id', 'ASC' )->paginate(12);
        } else {
            $products_list = Products::where('brands_id' , $this->id )->paginate(12);
        }

        return view('livewire.products', [
            'products' => $products_list,
            'brands' => $brands
        ]);

    }
}
