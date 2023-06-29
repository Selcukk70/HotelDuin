<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
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
        return view('/auth/changeinfo');
    } 
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => ['string', 'max:255'],
            'email' => ['string', 'email', 'max:255', 'unique:users'],
        ]);
   
        User::find(auth()->user()->id)->update(['name' => $request->name, 'email' => $request->email, 'adres' => $request->adres, 'postcode' => $request->postcode , 'phonenumber' => $request->phonenumber]);

        echo "<script> alert('Information changed succesfully'); </script>";
        return view('index');
    }
}

