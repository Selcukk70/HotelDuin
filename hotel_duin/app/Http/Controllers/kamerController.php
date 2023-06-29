<?php

namespace App\Http\Controllers;
use App\Models\Kamer;
use Illuminate\Http\Request;

class kamerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = Kamer::all();
        return view ('admin\rooms', compact('data'));
    }

    public function addroom()
    {
        return view ('admin\kameradd');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
                'kamer' => 'required',
                'aantal' => 'required',
                'prijs' => 'required',
                'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3048'
        ]);
        
        if($request->hasfile('filename'))
        {
            foreach($request->file('filename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/image/', $name);
                $data[] = $name;  
            }
        }
        
        $Upload_model = new Kamer;
        $Upload_model->kamer = $request->kamer;
        $Upload_model->aantal = $request->aantal;
        $Upload_model->prijs = $request->prijs;
        $Upload_model->filename = json_encode($data);
        $Upload_model->save();
        return back()->with('success', 'Uw product is toegevoegd');
    }

    public function wijzig_kamer()
    {
        $kamer = Kamer::find($_GET['id']);
        return view ('admin\wijzig-product', compact('kamer'));
    }
    
    public function update(Request $request)
    {

        $Update_model = Kamer::find($request->id);
        $Update_model->kamer = $request->kamer;
        $Update_model->aantal = $request->aantal;
        $Update_model->prijs = $request->prijs;

        if($request->hasfile('filename'))
        {
            foreach($request->file('filename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/image/', $name);
                $data[] = $name;  
            }
            
            $Update_model->filename = json_encode($data);
        }
        $Update_model->save();
        return back()->with('success', 'Kamer is bijgewerkt');
    }

    public function delete()
    {
        Kamer::destroy($_GET['id']);
        return back()->with('success', 'Kamer is verwijderd');
    }

    public function detail(Request $request)
    {

    }

    public function allProducts()
    {

    }

}
