<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
	/**
	 * retrieve all products
	 * @return [type] [description]
	 */
    public function index(Request $request)
    {
    	$products = Product::where([])->select('products.*' , DB::raw('1 as quantity'));

    	/**
    	 * Filter By price from:to
    	 */
        if ( $request->priceRange ) {
            $products->where('price' , '>=' , $request->priceRange[0]);
            $products->where('price' , '<=' , $request->priceRange[1]);
        }

    	/**
    	 * Filter By brands
    	 */
    	if ( $request->brands ) {
    		$products->whereIn('brand_id' , $request->brands);
    	}

    	/**
    	 * Filter By Category
    	 */
    	if ( $request->category ) {
    		$products->where('category_id' , $request->category);
    	}


    	return $products->orderBy('id' , 'DESC')->paginate(10);
    }
}
