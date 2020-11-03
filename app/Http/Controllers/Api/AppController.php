<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;

class AppController extends Controller
{
	/**
	 * return required data for the frontend app to bbotstrap
	 * @return array of [products , brands , minprice , maxprce]
	 */
    public function data()
    {
    	$categories = Category::withCount(['products'])->get();
    	$brands = Brand::withCount(['products'])->get();
    	$minPrice = Product::min('price');
    	$maxPrice = Product::max('price');

    	return [
    		'brands' => $brands,
    		'categories' => $categories,
    		'priceMin' => $minPrice,
    		'priceMax' => $maxPrice,
    	];
    }
}
