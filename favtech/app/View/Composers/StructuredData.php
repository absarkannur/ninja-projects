<?php

namespace App\View\Composers;

use App\Repositories\UserRepository;
use Illuminate\View\View;
use App\Models\Header;
use App\Models\SiteInfo;
use App\Models\Products;

class StructuredData {


    protected $structuredData;

    public function __construct() {

        $products = Products::leftJoin( 'brands', 'brands.id', 'products.brands_id' )
            ->leftJoin( 'colors', 'colors.id', 'products.colors_id' )
            ->get();

        $data = '';

        foreach ( $products as $key => $product) {

            $data .= '{
                        "@context": "http://schema.org",
                        "@type": "Product",
                        "name": "'. $product['product_name'] . ' ' . $product['product_class'] . '-' . $product['product_model'] . '-' . $product['product_part_number'] . '",
                        "image": "'. asset( 'storage/' . $product['product_image'] ) .'",
                        "description": "'. $product['product_parts'] . ' + ' .  $product['color_name'] . ' + ' . $product['product_part_number'] .'",
                        "url": "'. 'https://favtech/product/' . $product['product_name'] .'~'. $product['product_model'] .'~'. $product['color_name'] .'~'. $product['product_parts'] .'~'. $product['product_part_number'] .'",
                        "offers": {
                            "@type": "Offer",
                            "priceCurrency": "AED",
                            "price": '. $product['product_price_aed'] .'
                        },
                        "brand": {
                            "@type": "Brand",
                            "name": "'. $product['brand_name'] .'"
                        }
                    },';

        }

        $this->structuredData = '<script type="application/ld+json">'. $data . '</script>';

    }

    public function compose(View $view) {

        $view->with('structuredData', $this->structuredData );

    }
}
