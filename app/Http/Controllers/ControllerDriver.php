<?php
use App\Driver;
//use App\Info_Driver;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerDriver extends Controller
{
    public function index_api(){
        // $drivers = Driver::paginate(10);
        // return parent::success( $drivers);

          $drivers=Driver::all(); 
    //     // dd($drivers);
    //    // return response()->json($drivers);
         return view('drive.index',compact('drivers'));
    }

//     public function create(){
//         $drivers=Info_Driver::all(); 
//        // dd($drivers);
//        return view('drive.index',compact('drivers'));
//    }


    // public function store(Request $request)
    // {

    //     // $driver=new Driver();
    //     // $driver->fill($request->all());
    //     // $driver->save();
    //     // return redirect()->back()->with('success', 'book has been saved successfully');
    
    //     $data=request()->validate([
    //         'quantity' =>'required|min:3',
    //         'stauts' =>'require',

    //     ]);

    //     return redirect(drive);
    // }

}
