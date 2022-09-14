<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Order;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{

    public function show()
{

    $response = Http::withHeaders(
        [
           'x-auth-token' => '2k16l1vym7txxbzrhkn4uda0f7kezl2',
         'Content-Type' => 'application/json',
         'Accept' => 'application/json'
        ]
     )->get('https://api.bigcommerce.com/stores/55idhktz1s/v2/orders');
    
     $datas = json_decode($response,true);

    foreach($datas as $data){

    
        order::UpdateOrCreate([
            'id' => $data['id']],
            [
            
               'id' => $data['id'],
               'customer_id'=>$data['customer_id'],
               'first_name'=>$data['billing_address']['first_name'],
               'last_name'=>$data['billing_address']['last_name'],
               'email'=>$data['billing_address']['email'],
               'city'=>$data['billing_address']['city'],
               'state'=>$data['billing_address']['state'],
               'zip'=>$data['billing_address']['zip']
    
            
            ]);
           
        }
     
   
}

 
public function makeorder(){
    $get=  order::all();
    return view('order',['reads'=>$get]);
       
}

public function editorder($id){
     
     
    $order = Order::find($id);
    return view('editformorder',['read'=>$order]);
 }


public function updateorder(Request $request, $id){
    $order = Order::find($id);
    $order->first_name =$request->first_name;
    $order->last_name =$request->last_name;
    $order->email =$request->email;
    $order->city =$request->city;
    $order->state =$request->state;
    $order->zip =$request->zip;
    $order->save();
    return redirect(url('order'));
 
 }

}