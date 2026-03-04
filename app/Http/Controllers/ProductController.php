<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function list()
    {
        $products = [
            ['name' => 'Laptop Gaming', 'price' => 25000000],
            ['name' => 'Bàn phím cơ', 'price' => 2000000],
            ['name' => 'Điện thoại', 'price' => 12000000],
            ['name' => 'Tai nghe', 'price' => 1500000],
        ];

        return view('products', compact('products'));
    }
}
