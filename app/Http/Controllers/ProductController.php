<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use App\Comment;
use App\Helpers\ImageSaver;
use App\Product;
//use Faker\Provider\Image;
use App\ProductSize;
use App\Services\ImageUploader;
use App\Size;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;
use function foo\func;
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

    public function index(Request $request)
    {
        $products = Product::all()->sortAndFilter($request)->paginate(9);
        return view('products.index', [
            'products' => $products,
            'requestValues' => $request,
            'backRequest' => $request,
            'categories' => Category::all(),
        ]);
    }

    public function index2(Request $request)
    {
        $last_15_days = Product::where('created_at', '>=', Carbon::now()->subdays(30))->get();
        $products = $last_15_days->sortAndFilter($request)->paginate(9);

        return view('products.week_products', [
            'products' => $products,
            'categories' => Category::all(),
            'newProducts' => $products,
        ]);
    }

    public function discount(Request $request)
    {
        $discount = Product::where('discount', '>', 0)->get();
        $products = $discount->sortAndFilter($request)->paginate(9);
        return view('products.discount_products', [
            'products' => $products,
            'disProducts' => $discount,
            'categories' => Category::all(),
        ]);
    }
    public function hit(Request $request){
//        $products = Product::all()->sortAndFilter($request)->paginate(9);
        $hit = Product::where('hit', '=', 1)->get();

        $products = $hit->sortAndFilter($request)->paginate(9);

        return view('products.hit', [
            'products' => $products,
//            'hits' => $hit,
            'prods' => \App\Product::where('created_at', '>=', \Carbon\Carbon::now()->subDays(30))->get(),
            'categories' => Category::all(),
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product($request->all());
        $product->fill(['wholesale_price' => $request->wholesale]);
//        dd($product);
        $product->save();
        $arrColors = [];
        $arrFileNames = [];
//Розница
        if (empty($request->wholesale)) {
            foreach ($request->colorsize as $key1 => $item) {
                $arrFileNames = [];
                foreach ($item['images'] as $image) {
                    $filename = ImageUploader::upload($image, "products", "nintex", 40);
                    $arrFileNames[] = $filename;
                }
                foreach ($item['sizes'] as $key => $value) {
                    $product->sizes()->attach($key, ['price' => $request->price, 'color' => $key1, 'quantity' => $value, 'images' => json_encode($arrFileNames), 'type' => 'retail']);
                }
            }
        } elseif (empty($request->colorsize)) {
//Оптом

            $sizes = [];
            foreach ($request->size as $key) {
                $sizes[] = $key;
            }
            foreach ($request->color as $k => $val) {
                $arrFileNames = [];
                foreach ($val['images'] as $image) {
                    $filename = ImageUploader::upload($image, "products", "nintex", 40);
                    $arrFileNames[] = $filename;
                }
                $product->sizes()->attach($k, ['sizes' => json_encode($sizes), 'color' => $k, 'quantity' => $val[0], 'images' => json_encode($arrFileNames), 'price' => $request->wholesale, 'type' => 'wholesale']);
            }
        } else {
//            dd($request);
            foreach ($request->colorsize as $key1 => $item) {
                $arrFileNames = [];
                foreach ($item['images'] as $image) {
                    $filename = ImageUploader::upload($image, "products", "nintex", 40);
                    $arrFileNames[] = $filename;
                }
                foreach ($item['sizes'] as $key => $value) {
                    $product->sizes()->attach($key, ['price' => $request->price, 'color' => $key1, 'quantity' => $value, 'images' => json_encode($arrFileNames), 'retail']);
                }
            }
            $sizes = [];
            foreach ($request->size as $key) {
                $sizes[] = $key;
            }
            foreach ($request->color as $k => $val) {
                $arrFileNames = [];
                foreach ($val['images'] as $image) {
                    $filename = ImageUploader::upload($image, "products", "nintex", 40);
                    $arrFileNames[] = $filename;
                }
                $product->sizes()->attach($k, ['sizes' => json_encode($sizes), 'color' => $k, 'quantity' => $val[0], 'images' => json_encode($arrFileNames), 'price' => $request->wholesale, 'type' => 'wholesale']);
            }
        }
        if ($logo = $request->logo) {
            $filename = ImageUploader::upload($image, "products", "nintex_logo_", 40);
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
        //Определение переменных

        $productWholesaleSizes = null;
        $productWholesaleColors = null;
        $productWholesaleSizes = ProductSize::where('product_id', $product->id)->where('type', "wholesale")->get()->unique('sizes');    //выбор размеров продукта для оптовой продажи
        $productWholesaleColors = ProductSize::where('product_id', $product->id)->where('type', "wholesale")->where('quantity', '>', '0')->get()->unique('color');   //выбор всех цветов продукта для оптовой продажи
        $comments = Comment::where('product_id', $product->id)->where('parent_id', 0)->get();
        $commentsQuantity = Comment::where('product_id', $product->id);
        $commentCount = $commentsQuantity->count();
        $images = [];
        $sameproducts = Product::where('category_id', $product->category_id)->get()->except([$product->id]);
        foreach ($productWholesaleSizes as $value) {
            $images[] = $value->images;
        }
        return view('products.show', [
            'product' => $product,
            'sameProducts' => $sameproducts,
            'productWholesaleSizes' => $productWholesaleSizes,
            'productWholesaleColors' => $productWholesaleColors,
            'products' => Product::all(),
            'comments' => $comments,
            'user' => \auth()->user(),
            'commentCount' => $commentCount,

        ]);

        //итог:
        //выбор размеров продукта для розничной продажи
        //выбор всех цветов продукта в розницу
        //количество продукта в розницу

        //выбор размеров продукта для оптовой продажи
        //выбор всех цветов продукта для оптовой продажи
        //количество продукта оптом

    }

    public function selectColorsForRetailSize(Request $request)
    {
        $s = Size::where('size', $request->size)->get();
        $productSizeColors = ProductSize::where('product_id', $request->product_id)->
        where('sizes', $s[0]->id)->
        where('quantity', '>', '0')->
        where('type', 'retail')->get()->unique('color');
        $retailQuantity = (int)ProductSize::where('product_id', $request->product_id)->
        where('sizes', $s[0]->id)->
        where('quantity', '>', '0')->
        where('type', 'retail')->sum('quantity');
        return response()->json(['colors' => $productSizeColors, 'quantity' => $retailQuantity]);
    }

    public function selectQuantityProductColor(Request $request)
    {
        $quantityProduct = (int)ProductSize::where('product_id', $request->product_id)->
        where('sizes', $request->size)->
        where('color', $request->color)->
        sum('quantity');
        return response()->json(['quantity' => $quantityProduct]);
    }

    public function selectProductSize(Request $request)
    {
        $productSize = ProductSize::where('product_id', $request->product_id)->
        where('sizes', $request->size)->
        where('color', $request->color)->get();
        return response()->json($productSize->first());
    }

    public function card(Product $products, Request $request)
    {
//        $productSize = ProductSize::where;
//        dd($productSize);

//        return view('catalog_blocks.product_card', [
//            'products' => $products,
//            'productSize' => $productSize,
//        ]);
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
            'categories' => Category::all(),
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

        return redirect()->route('admin.product.datatable');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
//        if (count($product->images)) {
//            foreach ($product->images as $image) {
//                if (file_exists(storage_path('public/') . $image->image)) {
//                    unlink(storage_path('public/') . $image->image);
//                }
//            }
//        }
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
        return DataTables::of(Product::query())
            ->addColumn('action', function (Product $product) {
                return view('admin.products.action', ['product' => $product]);
            })
            ->addColumn('checkbox', function ($product) {
                return view('admin.products.checkbox', ['product' => $product]);
            })
            ->rawColumns(['checkbox', 'action'])
            ->make(true);
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

    public function filter(Request $request)
    {

    }

    public function checkbox(Request $request)
    {
        $check = Product::find($request->id);
        if ($request->value) {
            $check->hit = !$check->hit;
            $check->save();
        }
        return response()->json('Успех');
    }

    public function check_color(Request $request){
//        dd($request);
        $product = ProductSize::where('color', $request->value)
            ->where('product_id', $request->id)
            ->get(['images']);

        $product = json_decode($product[0]->images, true);
        return response()->json(['images' => $product]);
    }

    public function fetch(Request $request) {
        if($request->get('query')){
            $query = $request->get('query');
            $data = Product::where('title', 'LIKE', "%{$query}%")
                ->get();
            $output = '    <div class="container">
                            <div class="row">';
            foreach ($data as $row)
            {
                $output .='
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card align-items-center rounded border-0 shadow ">
                        <!--Card image-->
                        <div class="view overlay">
                            <a href="'. route('product.show', $row) .'">
                             
                                <img src="'. asset('storage/medium/'.$row->logo) .'" class="img-fluid" alt="">
                    
                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                            </div>
                        </div>
                        <!--Card image-->
                        <!--Card content-->
                        <div class="card-body px-1 card-width">
                            <!--Category & Title-->
                            <a href="{{route(\'product.show\', $product)}}" class="text-dark card-text"><p
                                    class="">'. $row->title .'</p></a>
                            <div class="col-12 text-left">
                                <div class="row">
                                <div class="col-4 pt-2 pl-0 pr-0">
                                    <label for="size" class="card-price  text-dark">Оптовая цена:</label>
                                </div>
                                <div class="col-8 pl-0 pr-0 text-center">
                                    <div class="col-7 text-right ml-3 ml-sm-5 pt-2 pl-0 pr-0">
                                        <p class="text-dark text-bold card-price" style="">'. $row->wholesale_price .'</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Card content-->
                    </div>
                    <!--Card-->
                </div>
                
                ';
            }
            $output .= '</div></div>';
            echo $output;
        }
    }
}
