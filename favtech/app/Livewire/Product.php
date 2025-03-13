<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Products;
use Livewire\Attributes\Title;
class Product extends Component {

    protected $brand_slug;
    protected $product_data;
    protected $page_title = "";
    protected $products;

    public function mount( $slug ) {

        $this->brand_slug = $slug;

        $slice = explode( '~', $this->brand_slug );

        $product_name = $slice[0];
        $product_model = $slice[1];
        $color_name = $slice[2]; // NOT taking now
        $product_parts = $slice[3]; // NOT taking now
        $product_part_number = $slice[4];

        $where=array();
        $where[] = ['product_name', '=', $product_name ];
        $where[] = ['product_model', '=', $product_model ];
        $where[] = ['product_part_number', '=', $product_part_number ];

        $this->product_data = Products::select('products.id AS product_id','products.*', 'brands.*', 'colors.*', 'series.*', 'screen_types.*')->where($where)
                                ->leftJoin( 'brands', 'brands.id', 'products.brands_id' )
                                ->leftJoin( 'colors', 'colors.id', 'products.colors_id' )
                                ->leftJoin( 'series', 'series.id', 'products.series_id' )
                                ->leftJoin( 'screen_types', 'screen_types.id', 'products.screen_types_id' )
                                ->first();


        $title = $this->product_data;
        $this->page_title = $title->product_name . ' ' .
                            $title->product_model .', '.
                            $title->product_series .', '.
                            $title->color_name . ', '.
                            $title->product_parts .', '.
                            $title->product_part_number;


        $this->products = Products::where( 'products.series_id', '=' , $this->product_data->series_id  )
                            ->leftJoin( 'brands', 'brands.id', 'products.brands_id' )
                            ->leftJoin( 'colors', 'colors.id', 'products.colors_id' )
                            ->inRandomOrder()
                            ->take(12)
                            ->get();




        if( !session()->has('_views') ){

            $last_view = Products::select('product_view')->where('id', $this->product_data->product_id )->first();

            $count = intval($last_view->product_view)+1;

            Products::where('id', $this->product_data->product_id )->update(['product_view'=> $count ]);

            session()->flash( '_views', 'First Session' );

        }


    }

    public function render() {
        return view('livewire.product', [
            "data" => $this->product_data,
            "page_title" => $this->page_title,
            "products" => $this->products
        ])->title( 'Favtech FZCO | ' . $this->page_title );
    }
}
