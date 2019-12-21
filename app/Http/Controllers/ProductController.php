<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use App\Helpers\ImageSaver;
use App\Product;
//use Faker\Provider\Image;
use App\Size;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('products.index', [
            'products' => $products,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.products.create', [
            'categories' => $categories,
            'sizes' => Size::all(),
            'products' => Product::all(),
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
        $product = new Product($request->all());
        $product->save();
        $arrColors = [];
        if ($images = $request->images)
        {
            foreach ($request->colors as $index => $color) {
                $arrFileNames = [];
                foreach ($images[$index] as $image) {
                    $filename = ImageSaver::save($image, "uploads", "nintex");
                    $arrFileNames[] = $filename;
                }

                $arrColors[$color][] = $arrFileNames;
            }
            $product->colors = $arrColors;
            $product->save();
        }
        if ($logo = $request->logo)
        {
            $filename = ImageSaver::save($logo, 'uploads', 'nintex_logo');
            $product->logo = $filename;
            $product->save();
        }
            $file =$request->file('video');
            $destination_path = public_path().'/videos';
            $extension =$file->getClientOriginalExtension();
            $files =$file->getClientOriginalName();
            $fileName = $file.'_'.time().'.'.$extension;
            $file->move($destination_path, $fileName);
            $product->video = $fileName;
            $product->save();


            return redirect()->back();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product, Request $request)
    {
//        $colors =array('colors' => json_decode($request->colors));
        return view('products.show', [
           'product' => $product,
            'sizes' => Size::all(),
            'products' => Product::all(),
//            'colors' => $colors,
        ]);
    }

    public function card(Product $products) {
        return view('products.card', [
            'products' => $products,
            'sizes' => Size::all(),
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', [
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        if ($images = $request->images)
        {
            foreach ($images as $image)
            {
                $filename = ImageSaver::save($image, "uploads", "nintex");
                $product->images = $filename;
                $product->save();
            }
        }
        if ($logo = $request->logo)
        {
            $filename = ImageSaver::save($logo, 'uploads', 'nintex_logo');
            $product->logo = $filename;
            $product->save();
        }

        Session::flash('status', ['status' => 'success', 'message' => 'Товар был успешно обнолен']);

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if (count($product->images)) {
            foreach ($product->images as $image) {
                if (file_exists(storage_path('public/').$image->image)) {
                    unlink(storage_path('public/').$image->image);
                }
            }
        }
        $product->delete();

        return redirect()->back();
    }

    public function datatable(Request $request)
    {
        return view('admin.products.index', [
            'products' => Product::all(),
        ]);
    }

    public function datatableData(Request $request)
    {
        return DataTables::of(Product::query())->make(true);
    }

    public function favorite(Request $request, Product $product)
    {
        $status = ['status' => 'fail', 'message' => 'Не удалось выполнить действие'];
        try {
            $user = $product->users->whereIn('id', [auth()->user()->id]);
            if ($user) {
                $product->users()->detach(auth()->user()->id);
                $status = ['status' => 'success', 'message' => 'Товар был исключен из избранных'];
            } else {
                $product->users()->attach(auth()->user()->id);
                $status = ['status' => 'success', 'message' => 'Товар был добавлен в избранные'];
            }
        } catch (\Exception $exception) {
            $status = ['status' => 'fail', 'message' => $exception];
        }

        return response()->json($status);
    }
    public function add_to_favorites_with_auth_user(Request $request){
        $product = Product::first();
        $user = $request->user();
        $this->be($user);

        $product->addFavorite();

        $this->assertDatabaseHas('favorites', [
            'user_id' =>$user->id,
            'favoriteable_id' => $product->id,
            'favoriteable_type' => get_class($product),
        ]);
        $this->assertTrue($product->isFavorited());
    }
    public function slider(){
        return view('product_blocks.slider', ['products' => Product::all()]);
    }
}
