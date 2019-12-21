<?php

namespace App\Http\Controllers;

use App\Cart_product;
use App\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $user = $request->user();
////        dd($user->id);
        $quantity = Cart_product::where('user_id','=', $user->id)
        ->where('created_at', '>=', Carbon::now()->startOfMonth()->subMonth()->toDateString())->sum('quantity');
        return view('profile.home', [
            'quantity' => $quantity,
            'users' => $request->user(),
        ]);
    }

}
