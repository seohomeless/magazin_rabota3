<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
class ProductController extends Controller
{
    public function getProducts()
    {
        return view('products.list')
            ->with('products', Product::all());
    }

    public function getProduct($id)
    {
        $product = Product::find($id);
	     return view('products.view', compact('product'));
		
		 
    }
	
	
	public function getCatalog($id)
    {
         $product = Product::where('category_id', '=', $id)->orWhere('id', '=', $id)->get();
		   
        return view('products.catalog', compact('product'));
    }
	
}
