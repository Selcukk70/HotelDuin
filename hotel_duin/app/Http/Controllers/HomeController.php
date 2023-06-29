<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

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
    public function index()
    {
        $orders = Order::join('users', 'users.id', '=', 'order.klant_id')
                         ->join('kamer', 'kamer.id', '=', 'order.kamer_id')->get();
        
        return view('admin\admin_dashboard', ['orders' => $orders]);
    }

    public function user_index()
    {    
        $user_orders = Order::where('klant_id', Auth::id())->
                        join('users', 'users.id', '=', 'order.klant_id')
                        ->join('kamer', 'kamer.id', '=', 'order.kamer_id')->get();;

                        
        return view('user\user_dashboard', compact('user_orders'));
    }
}
