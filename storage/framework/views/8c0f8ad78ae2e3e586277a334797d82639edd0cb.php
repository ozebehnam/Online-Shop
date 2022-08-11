<?php $__env->startSection('content'); ?>

<?php echo Form::model($model,['method'=>'PATCH','files'=>true,'class'=>'form-style-8','route'=>['product.update',$model->id]]); ?>


<legend>ویرایش محصول</legend>
<div style="margin:10px;">
<div>
	<?php echo Form::label('title','عنوان محصول'); ?>

	<?php echo Form::text('title',null); ?>

</div>

<div>
	<?php echo Form::textarea('content',null,['class'=>'ckeditor']); ?>

</div>

<div>
	<?php echo Form::label('price','قیمت محصول'); ?>

	<?php echo Form::text('price',null); ?>

</div>

<div>
	<?php echo Form::label('تصویر'); ?>

	<?php echo Form::file('image'); ?>

</div>

<div>
	<?php echo Form::submit('ذخیره'); ?>

</div>
</div>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('ckeditor'); ?>
<script src="<?php echo asset('/ckeditor/ckeditor.js'); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>