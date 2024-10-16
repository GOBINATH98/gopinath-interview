<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Car;

class JobController extends Controller
{
   
    public function index()
    {
        
        $hii = Car::all();
    
        
        $totalPrice = $hii->sum('product_price');
    
        $totalPrice2 = $hii->sum('product_stock');
    
        return view('home', compact('hii', 'totalPrice', 'totalPrice2'));
    }
    

  
    public function insert(Request $request)
    {
        $ne=new Car();
        $ne->product_name=$request->name;
        $ne->product_price=$request->price;
        $ne->product_stock=$request->stock;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('images'); 
            $image->move($path, $filename);
            $ne->product_image = 'images/' . $filename; 
        } else {
         
            $ne->product_image = null; 
        }
        $ne->save();
        return back();
    }


    public function edit($id)
    {
        $ky=Car::where('id',$id)->first();
        return view("edit",compact("ky"));
    }

    /**
     * Display the specified resource.
     */
    public function update(Request $request,$id)
    {
        $sky=Car::where('id',$id)->first();
        $sky->product_name=$request->name;
        $sky->product_price=$request->price;
        $sky->product_stock=$request->stock;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('images'); 
            $image->move($path, $filename);
            $sky->product_image = 'images/' . $filename; 
        } else {
         
            $sky->product_image = null; 
        }
        $sky->update();
       return back();
    }

    public function destroy(string $id)
    {
        $ki=Car::destroy($id);
        return back();
    }
}
