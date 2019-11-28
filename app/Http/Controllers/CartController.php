<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\TokenResolve;
use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function checkout(Request $request){
        $token = $request->token ? $request->token : uniqid();
        $continue = $request->continue;
        TokenResolve::resolve($token);
        $cart = CartFacade::session($token);

        Session::put('cart', $cart->getContent());
        Session::flash('cart_checkout', true);
        if ($continue) {
            Session::flash('continue', true);
            return view('cart.checkout', [
                'cartItems' => $cart->getContent(),
                'total' => $cart->getTotal(),
            ]);
        }
        return view('cart.checkout', [
            'cartItems' => $cart->getContent(),
            'total' => $cart->getTotal(),
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $token = $request->token ? $request->token : Session::has('token') ? Session::get('token') : uniqid();

        TokenResolve::resolve($token);
        $cart = CartFacade::session($token);

        $newCart = new Cart();
        $newCart->cart = [
            'cart' => $cart->getContent(),
            'total' => $cart->getTotal(),
        ];
        $newCart->user_id = auth()->check() ? auth()->user()->id : null;
//        $newCart->comment = $request->comment;
        $newCart->name = $request->name;
        $newCart->email = $request->email;
        $newCart->phone = $request->phone;
        $newCart->address = $request->address;
//        $newCart->total = $request->total;
        if ($request->delivery == 'on'){
            $newCart->delivery = true;
            $newCart->sum = $request->sum;
            $newCart->diff = $request->diff;
        }
        $newCart->save();

        Session::forget(['cart', 'token']);
        Session::flash('cart_success', 'Your info has successfully created!');

        return redirect('/');
    }
//    /**
////     * Display a listing of the resource.
////     *
////     * @return \Illuminate\Http\Response
////     */
    public function index(Request $request)
    {
        $token = $request->token ? $request->token : uniqid();

        $token = TokenResolve::resolve($token);
        $cart = CartFacade::session($token);

        Session::put('put', $cart->getContent());
        if (preg_match('/checkout/', $request->server->get('HTTP_REFERER'))){
            Session::flash('cart_checkout', true);
        }

        return response()->json([
            'message' => 'Cart',
            'status' => 'success',
            'cart' => $cart->getContent()->sortKeys(),
            'token' => $token,
            'total' => $cart->getTotalQuantity(),
            'html' => view('partials.cart', [
                'cartItems' => $cart->getContent()->sortKeys(),
                'total' => $cart->getTotal(),
            ])->render(),
        ]);
    }

    public function add(Request $request){
        $product = Product::find($request->product_id);
        $count = $request->count;
        $token = $request->token ? $request->token : uniqid();

        if (!$product) {
             return response()->json([
                 'message' => 'product not found!',
                 'status' => 'error',
             ]);
        }
        $token = TokenResolve::resolve($token);

        Cart::add($product, $count, $token);

        Session::put('cart', CartFacade::session($token)->getContent());
        if (preg_match('/checkout/', $request->server->get('HTTP_REFERER'))) {
            Session::flash('cart_checkout', true);
        }

        return response()->json([
            'status' => 'success',
            'meassage' => 'product added tp cart',
            'cart' => CartFacade::session($token)->getContent(),
            'token' => $token,
        ]);
    }
    public function remove(Request $request){
        $product = Product::find($request->product_id);
        $count = $request->count;
        $token = $request->token;

        if (!$product) {
            return response()->json([
                'message' => 'book not found',
                'status' => 'error',
            ]);
        }
        $token =TokenResolve::resolve($token);

        if (!Cart::remove($product, $count, $token)) {
            return response()->json([
                'status' => 'error',
                'message' => 'book not found in cart',
                'cart' => CartFacade::session($token)->getContent(),
                'token' => $token,
            ]);
        }
        Session::put('cart', CartFacade::session($token)->getContent());
        if (preg_match('/checkout/', $request->server->get('HTTP_REFERER'))){
            Session::flash('cart_checkout', true);
        }
        return response()->json([
            'status' => 'success',
            'message' => 'book updated in cart',
            'cart' => CartFacade::session($token)->getContent(),
            'token' => $token,
        ]);
    }
    public function delete(Request $request)
    {
        $product = Product::find($request->product_id);
        $token = $request->token;
        if (!$product) {
            return response()->json([
                'message' => 'product not found',
                'status' => 'error'
            ]);
        }
        $token = TokenResolve::resolve($token);
        if (!Cart::deleteProduct($product, $token)) {
            return response()->json([
                'status' => 'error',
                'message' => 'product not found in cart',
                'cart' => CartFacade::session($token)->getContent(),
                'token' => $token,
            ]);
        }
        Session::put('cart', CartFacade::session($token)->getContent());
        if (preg_match('/checkout/', $request->server->get('HTTP_REFERER'))) {
            Session::flash('cart_checkout', true);
        }
        return response()->json([
            'status' => 'success',
            'message' => 'product added to cart',
            'cart' => CartFacade::session($token)->getContent(),
            'token' => $token,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
