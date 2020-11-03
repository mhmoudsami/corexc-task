<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;

class CartController extends Controller
{
	/**
	 * cart items
	 * @var [type]
	 */
	protected $items;

	/**
	 * store user selection
	 * @return [type] [description]
	 */
    public function submit(Request $request)
    {
    	$this->items = $request->cart;

    	$order = new Order([
    		'total' => $this->getCartTotal(),
    	]);
    	$saved = $order->save();

    	if ( ! $saved ) {
    		return [
    			'success' => false,
    			'message' => 'could not save order , try again',
    		];
    	}

    	/**
    	 * store order items
    	 * @note product(price + name) should be collected from db not request
    	 */
    	foreach ($this->items as $item) {
    		$orderItem = new OrderItem([
    			'name' => $item['name'],
    			'price' => $item['price'],
    			'quantity' => $item['quantity'],
    			'product_id' => $item['id'],
    			'order_id' => $order->id,
    		]);
    		$orderItem->save();
    	}

    	
		return [
			'success' => true,
			'message' => 'order has been submitted successfully',
		];
    }

    /**
     * calc cart total
     * @return [type] [description]
     */
    protected function getCartTotal()
    {
    	$total = 0;

    	foreach ($this->items as $item) {
    		$total += ($item['quantity'] * $item['price']);
    	}

    	return $total;
    }
}
