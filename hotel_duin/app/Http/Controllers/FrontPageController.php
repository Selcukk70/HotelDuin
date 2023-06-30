<?php

namespace App\Http\Controllers;

use App\Models\Kamer;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FrontPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kamer::all();
        return view('index', compact('data'));
    }

    public function checkrooms()
    {
        $data = Kamer::all();
        return view('kamers', compact('data'));

        $query = "SELECT k.id, k.kamer, k.aantal, COUNT(o.id) AS total_reservations
                    FROM kamer k
                    LEFT JOIN `order` o ON k.id = o.kamer_id
                    WHERE o.reserved_time >= '' AND o.end_reserved_time <= ''
                    GROUP BY k.id, k.kamer";
    }

    public function detail()
    {
        $data = Kamer::find($_GET['id']);
        return view('detail_room_page', compact('data'));
    }
    
    public function contact()
    {
        return view('contact');
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create_order = new Order;
        $create_order->klant_id = auth()->user()->id;
        $create_order->product_id = $request->product_id;
        $create_order->reserved_time = $request->reserved_time;
        $create_order->end_reserved_time = $request->end_reserved_time;
        $create_order->save();

        return redirect('user_dashboard')->with('success', 'Uw auto is gereserveerd');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
       if (Auth::check())
       {
        $id = $_GET['id'];
        $data = Product::find($id);
        return view('detail_car_page', compact('data'));
       } else {
        return view('auth/login');
       }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
