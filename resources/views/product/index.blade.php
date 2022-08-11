@extends('layouts.admin')

@section('content')

<?php

use App\lib\GridView;

$array1 = array('ردیف','عنوان محصول','تاریخ انتشار','تعداد فروش','عملیات','');
$array2 = array('-','title','date','sales_number');

$GridView = new GridView($array1, $array2, $model);

?>

@endsection()