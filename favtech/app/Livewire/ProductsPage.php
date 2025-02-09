<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;
use Livewire\Attributes\Url;

// Models
use App\Models\Products;
use App\Models\Brands;
use App\Models\Series;

class ProductsPage extends Component
{

    use WithPagination;

    #[Title('favtech | Products')]

    #[Url()]
    public $series;
    #[Url()]
    public $filter = [];

    public $products_list;
    public $brand_slug;

    protected $paginationTheme = 'tailwind';

    public function mount( $slug ) {

        $this->brand_slug = $slug;

    }

    public function render() {

        $brands = $this->get_brands();
        $series_list = $this->get_series();

        if( $this->brand_slug === 'all' ) {

            $products_select_list = [];

            $products_list = Products::leftJoin( 'brands', 'brands.id', 'products.brands_id' )
                ->leftJoin( 'colors', 'colors.id', 'products.colors_id' )
                ->orderBy( 'products.id', 'DESC')
                ->paginate(12);

        } else {

            // if Series Only

            if( $this->series != null && $this->filter == null ){

                $series_id = $this->get_series_id( $this->series );

                $brand_id = $this->get_brand_id( $this->brand_slug );
                $products_select_list = $this->get_products_select_list();

                $products_list = Products::where('brands_id' , $brand_id )
                                ->where( 'series_id', $series_id )
                                ->leftJoin( 'brands', 'brands.id', 'products.brands_id' )
                                ->leftJoin( 'colors', 'colors.id', 'products.colors_id' )
                                ->orderBy( 'products.id', 'DESC')
                                ->paginate(12);


            } else if( $this->series != null && $this->filter != null ) {

                $series_id = $this->get_series_id( $this->series );
                $brand_id = $this->get_brand_id( $this->brand_slug );
                $products_select_list = $this->get_products_select_list();

                $products_list = Products::where('brands_id' , $brand_id )
                                ->where( 'series_id', $series_id )
                                ->whereIn( 'products.id', $this->filter )
                                ->leftJoin( 'brands', 'brands.id', 'products.brands_id' )
                                ->leftJoin( 'colors', 'colors.id', 'products.colors_id' )
                                ->orderBy( 'products.id', 'DESC')
                                ->paginate(12);

            } else {

                $brand_id = $this->get_brand_id( $this->brand_slug );
                $products_select_list = $this->get_products_select_list();
                $products_list = Products::where('brands_id' , $brand_id )
                                ->leftJoin( 'brands', 'brands.id', 'products.brands_id' )
                                ->leftJoin( 'colors', 'colors.id', 'products.colors_id' )
                                ->orderBy( 'products.id', 'DESC')
                                ->paginate(12);

            }

        }

        return view('livewire.products', [
            'products' => $products_list,
            'brands' => $brands,
            'series_list' => $series_list,
            'product_select_list' => $products_select_list,
            'slug' => $this->brand_slug,
            'filter' => $this->filter
        ]);

    }

    public function get_brand_id( $slug ) {
        $brand = Brands::where( 'brand_slug', $slug )->first();
        return $brand->id;
    }

    public function get_series_id( $slug ) {
        if( $this->series ){

            try {

                $series = Series::where( 'product_series_slug', $slug )->first();
                return $series->id;

            } catch (\Throwable $th) {
                return null;
            }

        }
    }

    public function get_brands() {
        return Brands::get();
    }

    public function get_products_select_list() {

        $series_id = $this->get_series_id( $this->series );

        $products = Products::select('products.id AS p_id','products.product_name', 'products.product_model', 'products.product_part_number','colors.color_name')
                        ->where( 'products.series_id', $series_id )
                        ->leftJoin( 'brands', 'brands.id', 'products.brands_id' )
                        ->leftJoin( 'colors', 'colors.id', 'products.colors_id' )
                        ->get();

        return $products;

    }

    public function get_series() {

        if( $this->brand_slug !== 'all' ){
            $brand_id = $this->get_brand_id( $this->brand_slug );
            return Series::where( 'brands_id', $brand_id )->get();
        } else {
            return Series::get();
        }

    }

}
