<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Product;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    
    public function product(){  

        $response = Http::withHeaders(
           [
              'x-auth-token' => 'ien2lht2n0b1ere066bnl1podtzuvws',
            'Content-Type' => 'application/json',
           ]
        )->get('https://api.bigcommerce.com/stores/vhakoioo13/v3/catalog/products');
   
        $data = json_decode($response,true);
        $checks=($data['data']);
  
     
        foreach($checks as $check)
        
        {
        
         product::UpdateOrCreate([
        'id' => $check['id']],
        [
        
           'id' => $check['id'],
           'name'=>$check['name'],
           'description'=>$check['description'],
           'price'=>$check['price'],
           'view_count'=>$check['view_count'],
           'inventory_level'=>$check['inventory_level']  
        
        ]);
     
        }
      

    }

    public function create(){

        $get=  product::all();
           return view('product',['reads'=>$get]);
           
     }
     
     public function edit($id){
     
     
        $product = Product::find($id);
        return view('editform',['read'=>$product]);
     }
     
     
     
     public function update(Request $request, $id){
        $product = Product::find($id);
        $product->name =$request->name;
        $product->description =$request->description;
        $product->price =$request->price;
        $product->inventory_level =$request->inventory_level;
        $product->save();
        return redirect(url('product'));
     
     }
     


}
