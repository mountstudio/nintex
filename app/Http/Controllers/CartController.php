<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Cart_product;
use App\Product;
use App\ProductSize;
use App\Size;
use App\TokenResolve;
use App\User;
use Carbon\Carbon;
use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use PHPUnit\Framework\Constraint\Callback;
use Yajra\DataTables\Exceptions\Exception;
use Yajra\DataTables\Facades\DataTables;
use function GuzzleHttp\Promise\all;


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

        $cartID = Cart::latest()->first();
        $user = $request->user();
        foreach ($newCart->cart['cart'] as $cart)
        {
            $cart_product = new Cart_product();
            $cart_product->cart_id = $cartID->id;
            $cart_product->product_size_id = $cart['attributes']['productSizeId'];
            $cart_product->quantity = $cart['quantity'];
            $cart_product->user_id = auth()->check() ? auth()->user()->id : null;
            $cart_product->save();
        }

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
        $product = Product::find($request->id);
        $count = $request->count;
        $size = $request->size;
        $color = $request->color;
        $logo = $request->logo;
        $token = $request->token ? $request->token : uniqid();
        $product_id = $request->product_id;
        $size = str_replace("'",'"', $size);
        $sizeName = null;
        if (is_numeric($size)){
            $sizeName = Size::find($size)->size;
        }

        if (!$product) {
             return response()->json([
                 'message' => 'product not found!',
                 'status' => 'error',
             ]);
        }
        $cartProduct = CartFacade::session($token)->get($product_id);
        $productSize = ProductSize::where('product_id', $request->id)->
                                            where('sizes', $size)->where('color', $color)->get();
         if ($cartProduct != null)
        {
            if ($productSize->first()->quantity == 0){
                CartFacade::session($token)->remove($product_id);
                return response()->json([
                    'quantityError' => 'Количество товара в наличии = '
                        .$productSize->first()->quantity.'! Вы не можете приобрести товар больше чем есть в наличии!',
                ]);
            }
            else if ($productSize->first()->quantity < $cartProduct->quantity) {
                CartFacade::session($token)->update($product_id, ['quantity' => -1]);
                return response()->json([
                    'quantityError' => 'Количество товара в наличии = '
                        .$productSize->first()->quantity.'! Вы не можете приобрести товар больше чем есть в наличии!',
                ]);
            }
            else if ($productSize->first()->quantity < ($cartProduct->quantity + 1)) {
                return response()->json([
                    'quantityError' => 'Количество товара в наличии = '
                        .$productSize->first()->quantity.'! Вы не можете приобрести товар больше чем есть в наличии!',
                ]);
            }
        }
        $token = TokenResolve::resolve($token);
        $size = str_replace('"',"'", $size);

        Cart::add($product, $count, $token, ['product_id' => $product_id, 'color' => $color,
                                            'size' => $size, 'sizeName' => $sizeName, 'productSizeId' => $productSize->first()->id,
                                            'images' => $productSize->first()->images, 'objProduct' => $product, 'price' => $productSize->first()->price, 'logo' => $logo]);
        Session::put('cart', CartFacade::session($token)->getContent());
        if (preg_match('/checkout/', $request->server->get('HTTP_REFERER'))) {
            Session::flash('cart_checkout', true);
        }

//        dd('условие не сработало');

        return response()->json([
            'status' => 'success',
            'meassage' => 'product added tp cart',
            'cart' => CartFacade::session($token)->getContent(),
            'token' => $token,
            'quantityError' => '1',
        ]);
    }
    public function remove(Request $request){
        $product = Product::find($request->product_id);
        $count = $request->count;
        $token = $request->token;
        $product_id = $request->product_id;

        if (!$product) {
            return response()->json([
                'message' => 'book not found',
                'status' => 'error',
            ]);
        }
        $token = TokenResolve::resolve($token);

        if (!Cart::remove($product, $count, $token, ['product_id' => $product_id])) {
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
        $size = $request->size;
        $color = $request->color;
        $product_id = $request->product_id;

        if (!$product) {
            return response()->json([
                'message' => 'product not found',
                'status' => 'error'
            ]);
        }
        $token = TokenResolve::resolve($token);
        if (!Cart::deleteProduct($product, $token, ['product_id' => $product_id, 'size' => $size, 'color' => $color])) {
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
//        return view('')
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        return view('profile.history', [
            'cart' => $cart,
            'products' => Product::all(),
        ]);
    }

    public function shopping(Request $request){

        $user = $request->user();
//        dd($user->id);
        $carts = Cart::where('user_id', $user->id)->get();

        return view('profile.shopping', [
            'carts' => $carts,
        ]);
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

    public function datatable(Request $request)
    {
        return view('admin.orders.index', [
            'carts' => Cart::all(),
        ]);
    }

    public function datatableData(Request $request)
    {

//        return DataTables::of(Product::query())->make(true);
        return DataTables::of(Cart::query())
            ->addColumn('action', function($row) {
                $select = '<select class="form-control status-order select_id" id="s" data-id="'.$row->id.'" data-action="'.$row->action.'">';
                if ($row->action == Cart::$INWAIT) {
                    $select .= '<option value="'.Cart::$INWAIT.'" data-action="'.$row->action.'" selected>В ожидании</option>';
                } else {
                    $select .= '<option value="'.Cart::$INWAIT.'" data-action="'.$row->action.'">В ожидании</option>';
                }
                if ($row->action == Cart::$INPROGRESS) {
                    $select .= '<option value="'.Cart::$INPROGRESS.'" data-action="'.$row->action.'" selected>В процессе</option>';
                } else {
                    $select .= '<option value="'.Cart::$INPROGRESS.'" data-action="'.$row->action.'">В процессе</option>';
                }
                if ($row->action == Cart::$DELIVERED) {
                    $select .= '<option value="'.Cart::$DELIVERED.'" data-action="'.$row->action.'" selected>Доставлено</option>';
                } else {
                    $select .= '<option value="'.Cart::$DELIVERED.'" data-action="'.$row->action.'">Доставлено</option>';
                }
                if ($row->action == Cart::$FINISHED) {
                    $select .= '<option value="'.Cart::$FINISHED.'" data-action="'.$row->action.'" selected>Закончено</option>';
                } else {
                    $select .= '<option value="'.Cart::$FINISHED.'" data-action="'.$row->action.'">Закончено</option>';
                }
                $select .= '</select>';


                return $select;
            })
            ->make(true);
    }
    public function purchases(Request $request) {
        $user = $request->user();

        $quantity = Cart_product::sum('quantity')->where('user_id', $user->id)->get();
//        dd($quantity);
        return view('profile.dashboard', [ 'quantity' => $quantity]);
    }
    public function save_select(Request $request){
//        dd($id);
        $cart = Cart::find($request->id);
        $cart->action = $request->value;
        $cart->save();
        return response()->json('Успехх');
    }
}
