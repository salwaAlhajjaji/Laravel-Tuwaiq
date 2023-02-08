<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
class PhoneAppController extends Controller
{
    //
    function welcome(){
        dd('welcome');
    }


    function getPhone(){
        $list = [
            ['type'=> 'iPhone', 'color'=> 'Purple','price'=> '5300'],
            ['type'=> 'Huawei', 'color'=> 'Black','price'=> '2500'],
            ['type'=> 'Samsong', 'color'=> 'Silver','price'=> '2300']
            ]
        ;

        // return Response() -> json($list);
        return Response() -> $list;
    }

    function getAllPhones(){

        $phoneList = DB::table('products')->get();
        // $list = [];
        // dd($poneList);
        // dd(json($list));
        // return Response() -> json($poneList);
        // return Response() -> $list;
        return view('showPhone', ['phoneList' => $phoneList]);
        // return view('test', ['phoneList' => $phoneList]);
    }
    function checkout($id){
        // dd($id);
// return($name);
        $phoneDetails = DB::table('products')
        ->where('id','=',$id)
        ->first();
        $phoneDetails = DB::table('products')->find($id);
        // dd($phoneDetails);
        // $list = [];
        // dd($poneList);
        // dd(json($list));
        // return Response() -> json($poneList);
        // return Response() -> $list;
        // ['phoneList' => $phoneList]
        $phoneDetails = DB::table('products')
        ->where('id','=',$id)
        ->first();
        return view('checkout', ['phoneDetails' => $phoneDetails]);
        // return view('test', ['phoneList' => $phoneList]);
    }
    function getInvoice(Request $request){
        
        DB::table('invoice')
        ->insert(['fullname' => $request->firstName.' '.$request->lastName,
                 'email' => $request->email, 
                 'address' => $request->address,
                 'product_name'=> $request->p_name, 
                 'price'=> $request->price,
                 'vat'=> $request->vat,
                 'total'=> $request->total]);
       
        Cache::put('price',$request->price);
        $invoice = [
            'fullname' => $request->firstName.' '.$request->lastName,
            'email' => $request->email,
            'address' => $request->address,
            'product_name' => $request->p_name,
            'price' => $request->price,
            'vat' => $request->vat,
            'total' => $request->total,
        ];
    
         
        return view('invoice', ["invoice"=>$invoice]);
    }
    
}
