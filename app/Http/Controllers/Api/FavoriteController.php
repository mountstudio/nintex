<?php

namespace App\Http\Controllers\Api;

use App\Product;
use ChristianKuri\LaravelFavorite\Models\Favorite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FavoriteController extends Controller
{

    public function favorite(Request $request)
    {
//        dd($request->id);
        try {
            $product = Product::find($request->id);
            $product->toggleFavorite($request->user_id);
        } catch (\Exception $exception) {
            return response()->json(['status' => 'error', 'message' => 'Product not found']);
        }

        return response()->json(['status' => 'success', 'production' => $product->only(['id', 'title', 'price',]), 'isFavorited' => $product->isFavorited($request->user_id), 'message' => 'You have successfully added to favorites']);
    }

    public function show(Request $request){
        $favorites = auth()->user()->favorite(Product::class);

        return view('profile.favorites', [
            'favorites' => $favorites,
        ]);
    }
}
