<?php $__env->startSection('content'); ?>

<?php echo Form::open(['url'=>'admin/category','class'=>'form-style-8']); ?>


<legend>دسته جدید</legend>
<div style="margin:10px;">
<div>
	<?php echo Form::label('name','نام دسته'); ?>

	<?php echo Form::text('name',null); ?>

</div>

<div>
	<?php echo Form::label('ename','نام لاتین دسته'); ?>

	<?php echo Form::text('ename',null); ?>

</div>

<div>
	<?php echo Form::label('sub','انتخاب زیر دسته'); ?>

	<?php echo Form::select('sub',$sub,null); ?>

</div>

<div>
	<?php echo Form::submit('ذخیره'); ?>

</div>
</div>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>