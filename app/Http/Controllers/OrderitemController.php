<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Orderitem;
use Illuminate\Support\Facades\DB;

class OrderitemController extends Controller
{
    public function order(){
        $response = Http::withHeaders(
            [
               'x-auth-token' => '2k16l1vym7txxbzrhkn4uda0f7kezl2',
             'Content-Type' => 'application/json',
             'Accept' => 'application/json'
            ]
         )->get('https://api.bigcommerce.com/stores/55idhktz1s/v2/orders/products');
         
         $datas = json_decode($response,true);
      
       foreach($datas as $data){

        orderitem::UpdateOrCreate([
            'id' => $data['id']],
            [
               'id' => $data['id'],
               'order_id'=>$data['order_id'],
               'product_id'=>$data['product_id'],
               'name'=>$data['name'],
               'sku'=>$data['sku']
            ]);




       }
       dd("data is stored");
    }
}
