<?php

namespace App\Http\Controllers;

use App\Email;
use App\Image;
use App\Mail\WelcomeMail;
use App\Services\EmailService;
use App\Services\ImageUploader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Exception\ImageException;
use Yajra\DataTables\Facades\DataTables;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->image);
        $img = new Image($request->all());
        if ($picture = $request->image) {
            $filename = ImageUploader::upload($request->image, 'products', "nintex_img");
            $img->image = $filename;
            $img->save();
        }
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        $image->delete();
        return redirect()->back();
    }

    public function datatable(){
        return view('admin.images.index', [
            'images' => Image::all(),
        ]);
    }

    public function datatableData(Request $request){
        return DataTables::of(Image::query())
            ->addColumn('action', function (Image $image){
                return view('admin.images.image', ['image' => $image]);
            })
            ->addColumn('checkbox', function (Image $image){
                return view('admin.images.checkbox', ['image' => $image]);
            })
            ->addColumn('act', function (Image $image){
                return view('admin.images.action', ['image' => $image]);
            })
            ->addColumn('send', function (Image $image) {
                return '<button type="button" class="btn btn-primary send" id="'. $image->id .'">Отправить</button>';
            })
            ->rawColumns(['action', 'act', 'checkbox', 'send'])
            ->make(true);
    }

    public function checkbox(Request $request)
    {
        $image = Image::find($request->id);

        if ($request->value) {
//            EmailService::send($image);

            $image->active = !$image->active;
            $image->save();
        }
        return response()->json('Успех');
    }

    //Метод для рассылки сообщений
    public function send(Request $request){
//        dd($request);
        $image = Image::find($request->id);
        EmailService::send($image);
    }
}
