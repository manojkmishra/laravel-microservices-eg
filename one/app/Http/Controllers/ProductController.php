<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    public function index(){  return Product::all();    }
    public function show($id){  return Product::find($id);    }
    public function store(Request $request)
        {  // return $request;
           // $aa=$request->only('title','image');
            //return $aa;
            $product= Product::create($request->only('title','image')); 
           // return response($product,201); 
            return response($product,Response::HTTP_CREATED);   
    
        }
   public function update($id,Request $request)
        {   $product=Product::find($id);
            $product->update($request->only('title','image')); 
            return response($product,Response::HTTP_ACCEPTED);  
            //return $id;        
        }
    public function destroy($id,Request $request)
        { 
            Product::destroy($id);
            return response(null,Response::HTTP_NO_CONTENT);    
           //return "aa";      
        } 
}
