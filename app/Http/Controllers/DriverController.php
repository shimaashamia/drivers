<?php

namespace App\Http\Controllers;
use App\Driver;
use App\InfoDriver;
use App\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use DB;


use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index(){

          $driver_list=Driver::all(); 
      
         $product=Product::all();
   
         $info_driver=InfoDriver::with(['Product','Driver'])->orderBy('id','desc')->get();

        //dd($info_driver);
         //$response=array('driver_list','product','info_driver');
     
       
        return view ('drive.index',compact('driver_list','product','info_driver'));
         
    }

    // public function index_Product(){
     
    //       $product =  Product::all();
    //      return view('drive.index',compact('product'));
    // }

//     public function index_Info_Driver(){
//         $info_driver=Info_Driver::paginate(10);
//         return view ('drive.index',compact('info_driver'));
//    }

    public function store(Request $request){
     //dd($request->all());
     
      Validator::make($request->all(),[
        'price'=>'require',
        'quantity' =>'required',
        'products_id'=>'require',
        'drivers_id'=>'required',
       
       ]);
        $info_driver=new InfoDriver();
       // $order=Order::all();
         $info_driver->fill($request->all());
          $info_driver->save();
         // $order->sortBy('id');
        // Session::flash('success', 'Data has been saved successfully!');

    //Redirect to another page
   // return redirect()->route('drive.index', $post->id);
   //return view('order',['items'=>$item,'orders'=>$order->sortBy('id', SORT_REGULAR, true),'users'=>$user]);
          return redirect()->back()->with('success','book has been saved successfully');
    }

    public function update(Request $request, $id)
{ 
  //return 1;
    $status = InfoDriver::find($id);
   // return $status;
    $status->stauts=0;
    $status->save();
     //$status->stauts=$request->get('stauts');
    // Set ALL records to a status of 0
  //  DB::table('infodrivers')->where('status',1)->update(['status' => 0]);

    // Set the passed record to a status of what ever is passed in the Request
   // $infodrivers->status = $request->status;
  //  $infodrivers->save();
  return response('successfully', 200);
   // return redirect()->back()->with('message', 'Status changed!');
}


}
