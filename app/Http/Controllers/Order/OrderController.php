<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\OrderRequest;
use App\Models\Order;
use App\Models\OrderProduct;


class OrderController extends Controller
{
    public function __invoke(OrderRequest $request)
    {
        $data = $request->validated();

        $order = Order::create([
            'total_price' => $data['total_price'],
            'total_count' => $data['total_count'],
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'comment' => $data['comment'],
        ]);

        $productArr = $data['products'];

        foreach ($productArr as $product) {
            OrderProduct::create([
                'order_id' => $order['id'],
                'product_id' => $product['id'],
                'product_name' => $product['title'],
                'product_count' => $product['count'],
                'product_price' => $product['price'],
            ]);
        }

        return $order;
    }
}
