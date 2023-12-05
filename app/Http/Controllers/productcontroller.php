<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class productcontroller extends Controller
{
    public function index(){
        return view('index');
    }
    public function add(){
        return view('addproduct');
    }
    function insertdata(Request $req){
        $imagename=time().'.'.$req->image->extension();
        $req->image->move(public_path('products'),$imagename);
        dd($imagename);
        $input=$req->all();
        Product::create($input);

        // $req->image->move(public_path('products'),$imagename);
        // $req->validate([
        //     'name'=>'required',
        //     'descrip'=>'required',
        //     'image'=>'required|mimes:jpeg,jpg,png,gif|max:1000',
        // ]);
        // $imagename=time().'.'.$req->image->extension();
        // $req->image->move(public_path('products'),$imagename);
        // return "gello";
    }
}
