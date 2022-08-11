@extends('layouts.admin')

@section('content')

<?php

use App\lib\GridView;

$array1 = array('ردیف','نام دسته','نام لاتین دسته','زیر دسته','عملیات','');
$array2 = array('-','name','ename','sub');

$GridView = new GridView($array1, $array2, $model);

?>

@endsection()