<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {

        $products = [
            ['name' => 'キウイ', 
            'price' => 800,
            'fruits-img' => 'kiwi.png'
            ],

            ['name' => 'ストロベリー',
             'price'=> 1200,
             'fruits-img' => 'strawberry.png'],

            ['name' => 'オレンジ', 
            'price'=> 850,
            'fruits-img' => 'orange.png'],

            ['name' => 'スイカ', 
             'price'=> 700,
             'fruits-img' => 'watermelon.png'],

            ['name' => 'ピーチ', 
             'price'=> 1000,
             'fruits-img' => 'peach.png'],

            ['name' => 'シャインマスカット',
             'price'=> 1400,
             'fruits-img' => 'muscat.png'],
        ];

        return view('index', compact('products'));
    }

    public function register() {
        return view('register');
    }

    public function detail() {
        return view('detail');
    }

}
