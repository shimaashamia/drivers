<?php

namespace App\Http\Controllers;
use App\Product;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index_api(){
      // $drivers_product=DB::table('products')
      //                          ->groupBy('product')
      //                          ->get();
      // return view('drive.index')->with('drivers_product',$drivers_product);
        $product =  Product::all();
        //dd($product);
  //    // return response()->json($drivers);
       return view('drive.index',compact('product'));
  }
}
