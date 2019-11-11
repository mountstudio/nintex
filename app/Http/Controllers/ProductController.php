<?php

namespace App\Http\Controllers;

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
            'product' => Product::all(),
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
        $product->sizes()->sync($request->sizes);
        $product->sizes()->attach($request->size_id);

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

        for ($i = 0; $i < count($request->file('video')); $i++)
        {
            $file =$request->file('video')[$i];
            $destination_path = public_path().'/videos';
            $extension =$file->getClientOriginalExtension();
            $files =$file->getClientOriginalName();
            $fileName = $file.'_'.time().'.'.$extension;
            $file->move($destination_path, $fileName);
        }


            return redirect()->back();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', [
           'product' => $product,
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
}
