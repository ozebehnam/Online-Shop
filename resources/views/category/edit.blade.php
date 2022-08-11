@extends('layouts.admin')

@section('content')

{!! Form::model($model,['method'=>'PATCH','class'=>'form-style-8','route'=>['category.update',$model->id]]) !!}

<legend>دسته جدید</legend>
<div style="margin:10px;">
<div>
	{!! Form::label('name','نام دسته') !!}
	{!! Form::text('name',null) !!}
</div>

<div>
	{!! Form::label('ename','نام لاتین دسته') !!}
	{!! Form::text('ename',null) !!}
</div>

<div>
	{!! Form::label('sub','انتخاب زیر دسته') !!}
	{!! Form::select('sub',$sub,null) !!}
</div>

<div>
	{!! Form::submit('ذخیره') !!}
</div>
</div>
{!! Form::close() !!}
@endsection()