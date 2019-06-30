<?php

namespace App\Http\Controllers;
use APP\Info_Driver;
use Illuminate\Http\Request;

class InfoDriverController extends Controller
{

  public function update(Request $request, InfoDriver $infodrivers)
{
    // Set ALL records to a status of 0
    DB::table('infodrivers')->where('status',1)->update(['status' => 0]);

    // Set the passed record to a status of what ever is passed in the Request
    $infodrivers->status = $request->stauts;
    $infodrivers->save();
    return redirect()->back()->with('message', 'Status changed!');
}

  // public function index_api(){
  //      $info_driver=Info_Driver::paginate(10);
  //      return view ('drive.index',compact('info_driver'));
  // }


  //   public function store_api(Request $request){
  //     $this->validate($request,[
  //             'created_at_time'=>'require',
  //             'price'=>'require',
  //             'quantity' =>'required',
  //            'stauts' =>'require',
  //     ]);
  //     $info_driver=new Info_Driver();
  //      $info_driver->fill($request->all());
  //       $info_driver->save();
  //       return redirect()->back()->with('success', 'book has been saved successfully');
    
      //  $info_driver=new Info_Driver();
      //  $info_driver->fill($request->all());
      //  $info_driver->save();
      //  return redirect()->back()->with('success', 'book has been saved successfully');
    
      //   $data=request()->validate([
      //       'created_at_time'=>'require',
      //       'price'=>'require',
      //       'quantity' =>'required',
      //       'stauts' =>'require',


       //  ]);

      //   return redirect(drive);  
         
//  }
}
