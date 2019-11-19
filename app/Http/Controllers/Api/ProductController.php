<?php

namespace App\Http\Controllers\Api;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all()->sortByDesc('id')->paginate(15);

        return response()->json([
            'html' => view('api.products', [
                'products' => $products,
            ])->render(),
            'products' => $products,
            'count' => count($products),
            'filters' => $request->query->all(),
        ]);
    }
}
