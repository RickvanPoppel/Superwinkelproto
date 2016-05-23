<?php

namespace App\Http\Controllers;
use App\Product;

/**
 * Created by PhpStorm.
 * User: Superwinkel
 * Date: 20-5-2016
 * Time: 13:35
 */

class ProductController extends Controller
{
    public function productList() {
        $products = Product::all();
        return View('Product.list', array('products' => $products));
    }
}