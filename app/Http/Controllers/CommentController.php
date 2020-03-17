<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Product;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Method;
use Yajra\DataTables\Facades\DataTables;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
            $user = auth()->user();
            if (preg_match('/\/product\//', url()->previous())) {
                $attrs = explode('/', url()->previous());

                $comment = new Comment($request->all());
                if (\Auth::user()){
                    if  ($user->admin == 1){
                        $comment->fill(['product_id' => array_pop($attrs), 'user_id' => $user->id, 'email' => $user->email, 'name' => $user->name, 'parent_id' => $request->parent_id]);
                    }
                    else {
                        $comment->fill(['product_id' => array_pop($attrs), 'user_id' => $user->id, 'email' => $user->email, 'name' => $user->name, 'parent_id' => 0]);
                    }
                }
                else{
                    $comment->fill(['product_id' => array_pop($attrs)]);
                }
                $comment->save();
                return redirect()->back();
            }
            abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {

    }

    public function datatable(Request $request)
    {
        return view('admin.comment.index', [
            'comments' => Comment::all(),
        ]);
    }

    public function datatableData(){
        $comment = Comment::with('product');
        return DataTables::of($comment)
            ->addColumn('action', function($comment) {
                return view('admin.comment.actions', ['comment' => $comment]);
            })
            ->make(true);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        return view('admin.comment.edit', [
            'comment' => $comment,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        $comment->update($request->all());
        return redirect()->route('admin.comment.datatable');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->back();
    }
}
