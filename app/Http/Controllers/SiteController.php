<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SiteController extends Controller
{
    public function index()
    {
        $Products = Product::orderBy('id','desc')->get();
        return View('site.index',['Products'=>$Products]);
    }

    public function store(Request $request)
    {
    	$Product = new Product($request->all());
    	$Product->save();
    }

    public function show($title)
    {
        $Product = Product::where('url',$title)->first();
        return View('site.show',['Product'=>$Product]);
    }

    public function session()
    {
        //session(['user' => 'behnam']);
        //echo session('user');
        session('user')->forget();
    }
}
