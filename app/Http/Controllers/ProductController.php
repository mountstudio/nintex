<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use App\Helpers\ImageSaver;
use App\Product;
//use Faker\Provider\Image;
use App\ProductSize;
use App\Size;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;
use function GuzzleHttp\Promise\all;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Builder;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function filter($request)
    {
        if (!empty($request->allCatalog)) {
            $catProducts = Category::all()->whereIn('title', $request->allCatalog)->map(function ($item) {
                return $item->products;
            });
            $products = [];
            foreach ($catProducts as $p) {
                foreach ($p as $product) {
                    $products[] = $product;
                }
            }
            if (!empty($request->sizes)) {
                $productTemp = [];
                $flag = true;
                foreach ($products as $product) {
                    foreach ($product->sizes as $size) {
                        if ($flag == true) {
                            foreach ($request->sizes as $s1) {
                                if ($size == $s1) {
                                    $productTemp = $product;
                                    $flag = false;
                                }
                            }
                        }
                    }
                    $flag = true;
                }
                $products = $productTemp;
            }
        } else {
            $products = Product::all();
            if (!empty($request->sizes)) {
                $productTemp = [];
                $flag = true;
                foreach ($products as $product) {
                    foreach ($product->sizes as $size) {
                        if ($flag == true) {
                            foreach ($request->sizes as $s1) {
                                if ($size == $s1) {
                                    $productTemp = $product;
                                    $flag = false;
                                }
                            }
                        }
                    }
                    $flag = true;
                }
                $products = $productTemp;
            }
        }
        //цвета
        $white = $request->white;
        $blue = $request->blue;
        $black = $request->black;

        ////////////////////////
        $size = [];
        $size[0] = 'XS';
        $size[1] = 'S';
        $size[2] = 'M';
        $size[3] = 'L';
        $size[4] = 'XL';
        $size[5] = 'XXL';
        return view('products.index', [
            'products' => $products,
            'sizes' => $size,
        ]);
    }

    public function index(Request $request)
    {
        // поиск по категориям
        if (!empty($request->allCatalog))
        {
            //если был выбран тип продукта в каталоге размеров, то выбрать необходимые продукты
            $catProducts = Category::all()->whereIn('title', $request->allCatalog)->map(function ($item) {
                return $item->products;
            });
            $products = [];
            foreach ($catProducts as $p) {
                foreach ($p as $product) {
                    $products[] = $product;
                }
            }
        }
        else
        {
            //иначе извлечь все продукты
            $products = Product::all();
        }

        //поиск по размерам
        if (!empty($request->sizes))
        {
            if (($request->retail == 'on' && $request->wholesale == 'on') == true ||
                (is_null($request->retail) && is_null($request->wholesale)) == true)
            {
                $products = $this->searchProductByRetailAndWholesaleSize($products, $request);
            }
            if ($request->retail == 'on')
            {
                $products = $this->searchProductByRetailSize($products, $request);
            }
            if ($request->wholesale == 'on')
            {
                $products = $this->searchProductByWholesaleSize($products, $request);
            }
        }

        //поиск по стоимости
        if (!is_null($request->inputFirst) && !is_null($request->inputSecond))
        {
            if (($request->retail == 'on' && $request->wholesale == 'on') == true ||
                (is_null($request->retail) && is_null($request->wholesale)) == true)
            {
                $products = $this->searchProductByRetailAndWholesalePrice($products, $request);
            }
            if ($request->retail == 'on')
            {
                $products = $this->searchProductByRetailPrice($products, $request);
            }
            if ($request->wholesale == 'on')
            {
                $products = $this->searchProductByWholesalePrice($products, $request);
            }
        }

        $productsSizes = [[]];
        foreach ($products as $product)
        {
            $productsSizesUniqe = ProductSize::where('product_id', $product->id)->get()->unique('sizes');
            foreach ($productsSizesUniqe as $productsSizeUniqe)
            {
                if (is_array(json_decode($productsSizeUniqe->sizes)))
                {
                    $productsSizes[$product->id][] = $productsSizeUniqe;
                }
            }
        }

        $sizes = Size::all();   //извлечение вех размеров
        return view('products.index', [
            'products' => $products,
            'sizes' => $sizes,
            'requestValues' => $request,
            'productsSizes' => $productsSizes,
        ]);
    }
    //поиск продуктов по розничной стоимости
    public function searchProductByRetailPrice($products, $request)
    {
        $productTemp = [];
        foreach ($products as $product) {
            $productSizeByPrice = ProductSize::where('product_id', $product->id)->
            where('price', '>=', $request->inputFirst)->
            where('price', '>=', $request->inputSecond)->get();
            if (!empty($productSizeByPrice[0]))
            {
                foreach ($productSizeByPrice as $productSize)
                {
                    if (!is_array(json_decode($productSize->sizes)))
                    {
                        $productTemp[] = $product;
                        break;
                    }
                }
            }
        }
        return $productTemp;
    }
    //поиск продуктов по оптовой стоимости
    public function searchProductByWholesalePrice($products, $request)
    {
        $productTemp = [];
        foreach ($products as $product) {
            $productSizeByPrice = ProductSize::where('product_id', $product->id)->
                    where('price', '>=', $request->inputFirst)->
                    where('price', '>=', $request->inputSecond)->get();
            if (!empty($productSizeByPrice[0]))
            {
                foreach ($productSizeByPrice as $productSize)
                {
                    if (is_array(json_decode($productSize->sizes)))
                    {
                        $productTemp[] = $product;
                        break;
                    }
                }
            }
        }
        return $productTemp;
    }
    //поиск продуктов по оптовой и розничной стоимости
    public function searchProductByRetailAndWholesalePrice($products, $request)
    {
        $productTemp = [];
        $flag = true;
        foreach ($products as $product) {
            $productSizeByPrice = ProductSize::where('product_id', $product->id)->
                where('price', '>=', $request->inputFirst)->
                where('price', '>=', $request->inputSecond)->get();
            if (!empty($productSizeByPrice[0]))
            {
                $productTemp[] = $product;
            }
        }
        return $productTemp;
    }

    //поиск продуктов по размеру в розницу
    public function searchProductByRetailSize($products, $request)
    {
        //если в фильтре были укзаны размеры, то выбрать все продукты у которых есть размеры указанные в фильтре
        $productTemp = [];
        $flag = true;
        //проход по все продуктам
        foreach ($products as $product) {
            //если у продукта есть размеры для розничной продажи
            if (!empty($product->sizes[0])) {
                //проход по всем размерам продукта
                foreach ($product->sizes->unique('id') as $size) {
                    if ($flag == true) {
                        //проход по размерам которые были укзаны в фильтре
                        foreach ($request->sizes as $s1) {
                            if ($size->size == $s1) {
                                //проверка на совпадение размеров, если размер совпал,
                                //то добавить продукт в промежуточный массив продуктов
                                // и перключить флаг в "false"
                                $productTemp[] = $product;
                                $flag = false;
                            }
                        }
                    }
                }
                $flag = true;
            }
        }
        return $productTemp;
    }
    //поиск продуктов по размеру в оптом
    public function searchProductByWholesaleSize($products, $request)
    {
        //если в фильтре были укзаны размеры, то выбрать все продукты у которых есть размеры указанные в фильтре
        $productTemp = [];
        $flag = true;
        //проход по все продуктам
        foreach ($products as $product) //В отдельных ветках поиска можно избавиться от этого цикла,
                                        // просто используя вызов это функци в цикле продуктов из вне
        {
            //если у продукта есть размеры для розничной продажи
            if (empty($product->sizes[0]))
            {
                $productSizes = ProductSize::where('product_id', $product->id)->where('sizes', 'LIKE', '%[%')->get()->unique('sizes');
                if (!empty($productSizes[0]))
                {
                    foreach ($productSizes as $pS)
                    {
                        foreach (json_decode($pS->sizes) as $size)
                        {
                            if ($flag == true)
                            {
                                foreach ($request->sizes as $s1)
                                {
                                    if ($size == $s1)
                                    {
                                        $productTemp[] = $product;
                                        $flag = false;
                                    }
                                }
                            }
                        }
                    }
                    $flag = true;
                }
            }
        }
        return $productTemp;
    }
    //поиск продуктов по размеру оптом и в розницу
    public function searchProductByRetailAndWholesaleSize($products, $request)
    {
        //если в фильтре были укзаны размеры, то выбрать все продукты у которых есть размеры указанные в фильтре
        $productTemp = [];
        $flag = true;
        //проход по все продуктам
        foreach ($products as $product)
        {
            //если у продукта есть размеры для розничной продажи
            if (!empty($product->sizes[0]))
            {
                //проход по всем размерам продукта
                foreach ($product->sizes->unique('id') as $size)
                {
                    if ($flag == true)
                    {
                        //проход по размерам которые были укзаны в фильтре
                        foreach ($request->sizes as $s1)
                        {
                            if ($size->size == $s1)
                            {
                                //проверка на совпадение размеров, если размер совпал,
                                //то добавить продукт в промежуточный массив продуктов
                                // и перключить флаг в "false"
                                $productTemp[] = $product;
                                $flag = false;
                            }
                        }
                    }
                }
                $flag = true;
            }
            else
            {
                $productSizes = ProductSize::where('product_id', $product->id)->where('sizes', 'LIKE', '%[%')->get()->unique('sizes');
                if (!empty($productSizes[0]))
                {
                    foreach ($productSizes as $pS)
                    {
                        foreach (json_decode($pS->sizes) as $size)
                        {
                            if ($flag == true)
                            {
                                foreach ($request->sizes as $s1)
                                {
                                    if ($size == $s1)
                                    {
                                        $productTemp[] = $product;
                                        $flag = false;
                                    }
                                }
                            }
                        }
                    }
                    $flag = true;
                }
            }
        }
        return $productTemp;
    }

    public function colorFilter(Request $request)
    {
        $catProducts = Category::all()->whereIn('title', $request->allCatalog)->map(function ($item) {
            return $item->products;
        });
        $products = [];
        foreach ($catProducts as $p) {
            foreach ($p as $product) {
                $products[] = $product;
            }
        }

        foreach ($products as $product) {
            foreach ($product->colors as $key => $c) {
                $colors[] = $key;
            }
        }
        dd($colors);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product($request->all());
        $product->save();
        $arrColors = [];
        $arrFileNames = [];

        foreach ($request->colorsize as $key1 => $item) {
            $arrFileNames = [];

            foreach ($item['images'] as $image) {
                $filename = ImageSaver::save($image, "uploads", "nintex");
                $arrFileNames[] = $filename;
            }
            foreach ($item['sizes'] as $key => $value) {
                $product->sizes()->attach($key, ['price' => $request->price, 'color' => $key1, 'quantity' => $value, 'images' => json_encode($arrFileNames)]);
            }
        }
//        dd($product->sizes);
//            $sizes = Size::all();
//            foreach ($sizes as $size) {
//                $product->sizes()->attach($size->id, ['price' => $request->price, 'images' => json_encode($arrFileNames), 'color' => $request->color]);
//            }
////        $product->sizes()->save($size->id, ['price' => $request->price, 'images' => $request->images]);

        if ($logo = $request->logo) {
            $filename = ImageSaver::save($logo, 'uploads', 'nintex_logo');
            $product->logo = $filename;
            $product->save();
        }
//        $file = $request->file('video');
//        $destination_path = public_path() . '/videos';
//        $extension = $file->getClientOriginalExtension();
//        $files = $file->getClientOriginalName();
//        $fileName = $file . '_' . time() . '.' . $extension;
//        $file->move($destination_path, $fileName);
//        $product->video = $fileName;
//        $product->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product, Request $request)
    {
//        $colors =array('colors' => json_decode($request->colors));
//        dd($product);
        return view('products.show', [
            'product' => $product,
            'sizes' => Size::all(),
            'products' => Product::all(),
//            'colors' => $colors,
        ]);
    }

    public function card(Product $products)
    {
        return view('products.card', [
            'products' => $products,
            'sizes' => Size::all(),
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Product $product
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
     * @param \Illuminate\Http\Request $request
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        if ($images = $request->images) {
            foreach ($images as $image) {
                $filename = ImageSaver::save($image, "uploads", "nintex");
                $product->images = $filename;
                $product->save();
            }
        }
        if ($logo = $request->logo) {
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
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if (count($product->images)) {
            foreach ($product->images as $image) {
                if (file_exists(storage_path('public/') . $image->image)) {
                    unlink(storage_path('public/') . $image->image);
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

    public function add_to_favorites_with_auth_user(Request $request)
    {
        $product = Product::first();
        $user = $request->user();
        $this->be($user);

        $product->addFavorite();

        $this->assertDatabaseHas('favorites', [
            'user_id' => $user->id,
            'favoriteable_id' => $product->id,
            'favoriteable_type' => get_class($product),
        ]);
        $this->assertTrue($product->isFavorited());
    }

    public function slider()
    {
        return view('product_blocks.slider', ['products' => Product::all()]);
    }
}
