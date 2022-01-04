<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
   function index(Request $request){

    //Request Instance
    
    //Storing Data
//     $request->session()->put('name','Hasssan');
//     $request->session()->put('city','Lahore');

//     //Retrive Data
//     $name=$request->session()->get('name');
//     $roll=$request->session()->get('roll');
//     $city=$request->session()->get('city','Karachi');
//   //  $price=$request->session()->get('price',101);
//  // Clouser Method
//     $price=$request->session()->get('price',function(){
//         return 101;
//     });
    // $data=$request->session()->all();
    // dd($data);
   // check if item exists in Session
//    if($request->session()->has('name')){
//        dd('yes');
//    }else{
//        dd('no');
//    }
// check if item not exists in Session
//    if($request->session()->exists('roll')){
//        dd('yes');
//    }else{
//        dd('no');
//    }
  // check if item not present in Session
//    if($request->session()->missing('roll')){
//        dd('yes');
//    }else{
//        dd('no');
//    }
// echo($request->session()->get('name'));
// $request->session()->forget('name');
// echo($request->session()->get('name'));


//$request->session()->flush();

    //         $data=['name'=>$name,'roll'=>$roll,'city'=>$city,'price'=>$price];
    //          //dd($name);
    //    return view('welcome',$data);

    //Global Session
    //storing Data
  //  session(['name'=>'Husnain']);
//     $name= session('name');
//     $roll= session('roll');
//     $city= session('city','Lahore');
//     $data=['name'=>$name,'roll'=>$roll,'city'=>$city];

//   //  dd($name);
//     return view('welcome',$data);

$request->session()->flash('status','Login success');
   }
}
