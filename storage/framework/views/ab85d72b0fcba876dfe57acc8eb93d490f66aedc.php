<?php $__env->startSection('content'); ?>

<?php

use App\lib\GridView;

$array1 = array('ردیف','نام دسته','نام لاتین دسته','زیر دسته','عملیات','');
$array2 = array('-','name','ename','sub');

$GridView = new GridView($array1, $array2, $model);

?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>