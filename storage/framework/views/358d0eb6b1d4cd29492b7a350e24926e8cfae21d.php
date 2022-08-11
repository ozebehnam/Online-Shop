<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $Products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="block grid9 block-product-list-parent">
	<div class="block-product-list">
		<div class="product-wrap">
			<?php if(($Product->img)): ?>
			<div class="product-image"><a href="<?php echo e(url()->current().'/'.$Product->url); ?>"><img src="<?php echo e(asset($Product->img)); ?>"></a></div>
			<?php endif; ?>
			<div class="product-name"><a href="<?php echo e(url()->current().'/'.$Product->url); ?>"><?php echo e($Product->title); ?></a></div>
			<div class="product-info">
				<div class="product-price">
					<?php if(!empty($Product->price)): ?>
					<span><?php echo e(number_format($Product->price)); ?></span><span>تومان</span>
					<?php endif; ?>
				</div>
				<div class="product-rating"><img src="<?= asset('site/images/rating-3.png'); ?>"></div>
			</div>
			<div class="product-desc"><?php echo html_entity_decode($Product->content); ?></div>
			<div class="product-buttons">
				<a class="button icon-cart" onclick="add_product('<?php echo e($Product->id); ?>');">افزودن به سبد خرید</a><a class="wishlist-link" href="#">لیست انتخاب</a><a class="compare-link" href="<?php echo e(url()->current().'/'.$Product->url); ?>">بررسی بیشتر</a>
			</div>
		</div>
	</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>