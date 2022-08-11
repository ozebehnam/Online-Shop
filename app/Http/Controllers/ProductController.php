<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
	public function index()
	{
		$model = Product::orderBy('id','desc')->get();
        return View('product.index',['model'=>$model]);
	}

    public function create()
	{
		return View('product.create');
	}

	public function store(Request $request)
	{
		$Product=new Product($request->all());
		$Product->url=str_replace(' ', '-', $Product->title);
		if ($request->hasfile('image'))
		{
			$FileName=time().'.'.$request->file('image')->getClientOriginalExtension();
			
			if ($request->file('image')->move('upload',$FileName)) 
			{
				$Product->img=url('/').'/upload/'.$FileName;
			}
		}
		if($Product->save())
		{
			$url = 'admin/product/'.$Product->id.'/edit';
			return redirect($url);
		}
	}

	public function show($id)
	{
		echo "show-".$id;
	}

	public function edit($id)
	{
		$model=Product::find($id);
		return View('product.edit',['model'=>$model]);
	}
	public function update(Request $request, $id)
	{
		$Product=Product::find($id);
		if ($request->hasfile('image'))
		{
			$FileName=time().'.'.$request->file('image')->getClientOriginalExtension();
			
			if ($request->file('image')->move('upload',$FileName)) 
			{
				$Product->img=url('/').'/upload/'.$FileName;
			}
		}
		$Product->update($request->all());
		$url = 'admin/product/'.$id.'/edit';
		return redirect($url);
	}
	public function destroy($id)
	{
		$model=Product::find($id)->delete();
		return redirect('admin/product');
	}
}
