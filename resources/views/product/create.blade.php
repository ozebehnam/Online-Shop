@extends('layouts.admin')

@section('content')

{!! Form::open(['url'=>'admin/product','class'=>'form-style-8','files'=>true]) !!}

<legend>محصول جدید</legend>
<div style="margin:10px;">
<div>
	{!! Form::label('title','عنوان محصول') !!}
	{!! Form::text('title',null) !!}
</div>

<div>
	{!! Form::textarea('content',null,['class'=>'ckeditor']) !!}
</div>

<div>
	{!! Form::label('price','قیمت محصول') !!}
	{!! Form::text('price',null) !!}
</div>

<div>
	{!! Form::label('تصویر') !!}
	{!! Form::file('image') !!}
</div>

<div>
	{!! Form::submit('ذخیره') !!}
</div>
</div>
{!! Form::close() !!}
@endsection()

@section('ckeditor')
<script src="{!! asset('/ckeditor/ckeditor.js') !!}"></script>
@endsection()