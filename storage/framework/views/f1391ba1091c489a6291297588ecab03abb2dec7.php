<?php $__env->startSection('content'); ?>

<?php

use App\lib\GridView;

$array1 = array('ردیف','عنوان محصول','تاریخ انتشار','تعداد فروش','عملیات','');
$array2 = array('-','title','date','sales_number');

$GridView = new GridView($array1, $array2, $model);

?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>