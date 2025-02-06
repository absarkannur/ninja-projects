<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

// Models
use App\Models\Products;
use App\Models\Brands;
use App\Models\Series;

class ProductsPage extends Component
{

    use WithPagination;

    #[Title('favtech | Products')]

    public $products_list;
    public $id;

    protected $paginationTheme = 'bootstrap';

    public function mount( $id ) {
        $this->id = $id;
    }

    public function render() {

        $brands = Brands::get();

        $series = Series::get();

        // $products_list = Products::leftJoin( 'brands', 'brands.id', 'products.brands_id' )->paginate(12);

        if( $this->id === 'all' ) {
            $products_list = Products::leftJoin( 'brands', 'brands.id', 'products.brands_id' )
                                ->leftJoin( 'colors', 'colors.id', 'products.colors_id' )
                                ->paginate(12);

        } else {
            $products_list = Products::where('brands_id' , $this->id )
                                ->leftJoin( 'brands', 'brands.id', 'products.brands_id' )
                                ->leftJoin( 'colors', 'colors.id', 'products.colors_id' )
                                ->paginate(12);
        }

        return view('livewire.products', [
            'products' => $products_list,
            'brands' => $brands,
            'series' => $series
        ]);

    }
}
