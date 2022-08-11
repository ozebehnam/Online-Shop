<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
	public function index()
	{
		$model = Category::orderBy('id','desc')->get();
		return View('category.index',['model'=>$model]);
	}

	public function create()
	{
		$sub = ['-'=>'یک دسته را انتخاب کنید']+Category::where('sub','-')->orderBy('id','desc')->pluck('name','name')->toArray();
		return View('category.create',['sub'=>$sub]);
	}

	public function store(Request $request)
	{
		$Category=new Category($request->all());
		if($Category->save())
		{
			$url = 'admin/category/'.$Category->id.'/edit';
			return redirect($url);
		}
		//var_dump($request);
	}

	public function edit($id)
	{
		$model = Category::find($id);
		$sub = ['-'=>'یک دسته را انتخاب کنید']+Category::where('sub','-')->orderBy('id','desc')->pluck('name','name')->toArray();
		return View('category.edit',['model'=>$model,'sub'=>$sub]);
	}

	public function update(Request $request, $id)
	{
		$Category = Category::find($id);
		$Category->update($request->all());
		$url = 'admin/category/'.$id.'/edit';
		return redirect($url);
	}

	public function destroy($id)
	{
		$cat_name = Category::where('id',$id)->first()['name'];
		$delete = Category::where('sub',$cat_name)->delete();
		$model=Category::find($id)->delete();
		return redirect('admin/category');
	}
}
