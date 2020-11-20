<?php

namespace App\Http\Controllers;
use App\Products;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('CheckUser');
    }
    public function index()
    {
    	return view("product.index",["products"=>Products::get()]);
    }
    public function create()
    {
    	return view("product.create");
    }
    public function store(Request $request)
    {
    	Products::create([
    		"title"=>$request->input("title"),
    		"text"=>$request->input("text"),
    		"short_description"=>$request->input("description")
    	]);
    	return "daemata";

    }
}
