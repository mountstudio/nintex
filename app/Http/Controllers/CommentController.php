<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

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
                    $comment->fill(['product_id' => array_pop($attrs), 'user_id' => $user->id, 'email' => $user->email, 'name' => $user->name]);
                }
                elseif  ($user->admin == 1){
                    $comment->fill(['product_id' => array_pop($attrs), 'user_id' => $user->id, 'email' => $user->email, 'name' => $user->name, 'parent_id' => $request->parent_id]);
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
