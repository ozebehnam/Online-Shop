@extends('layouts.site')

@section('content')

@foreach ($Products as $Product)
<div class="block grid9 block-product-list-parent">
	<div class="block-product-list">
		<div class="product-wrap">
			@if(($Product->img))
			<div class="product-image"><a href="{{ url()->current().'/'.$Product->url }}"><img src="{{ asset($Product->img) }}"></a></div>
			@endif
			<div class="product-name"><a href="{{ url()->current().'/'.$Product->url }}">{{ $Product->title }}</a></div>
			<div class="product-info">
				<div class="product-price">
					@if(!empty($Product->price))
					<span>{{ number_format($Product->price) }}</span><span>تومان</span>
					@endif
				</div>
				<div class="product-rating"><img src="<?= asset('site/images/rating-3.png'); ?>"></div>
			</div>
			<div class="product-desc">{!! html_entity_decode($Product->content) !!}</div>
			<div class="product-buttons">
				<a class="button icon-cart" onclick="add_product('{{ $Product->id }}');">افزودن به سبد خرید</a><a class="wishlist-link" href="#">لیست انتخاب</a><a class="compare-link" href="{{ url()->current().'/'.$Product->url }}">بررسی بیشتر</a>
			</div>
		</div>
	</div>
</div>
@endforeach

@endsection()