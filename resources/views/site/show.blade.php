@extends('layouts.single')

@section('content')

<div class="full12">
 <div class="block grid12">
  <div class="block-standart block-product-view">
   <div class="product-content">
     <div class="product-images">
       <a href="{{ asset($Product->img) }}" class="jqzoom" rel="product" target="_blank"><img src="{{ asset($Product->img) }}"></a>

     </div>
     <script type="text/javascript">
     $(document).ready(function(){
       $('.jqzoom').jqzoom({
        zoomType: 'standard',
        title:false,
        zoomWidth:334,
        zoomHeight:334,
        xOffset:20,
        lens:true,
        preloadImages: false,
        alwaysOn:false
      });
     });
     </script>
     <div class="product-details">
       <div class="product-row">
         <h1 class="product-name">{{ $Product->title }}</h1>
         <div class="product-rating"><img src="<?= asset('site/images/rating-3.png'); ?>"></div>
       </div>
               <!-- <div class="product-row product-info">
                   <div class="key">برند:</div>
                   <div class="value">LG</div>
                   <div class="key">مدل:</div>
                   <div class="value">KLS-574</div>
                   <div class="key">امتیازدهی:</div>
                   <div class="value">۹۵</div>
                   <div class="key">میزان محبوبیت:</div>
                   <div class="value">زیار</div>
                 </div> -->
                 <div class="product-row">
                   <div class="product-desc-short">
                     {!! html_entity_decode($Product->content) !!}
                   </div>
                   <div class="product-tags">
                     <a href="#">تکنولوژی تلفن همراه</a>
                     <a href="#">تلفن هوشمند</a>
                     <a href="#">دوربین 8 مگا پیکسل</a>
                   </div>
                 </div>

                 <div class="product-row product-cart">
                   <!--<div class="product-price">$357.00</div>-->
                   <div class="product-price"><span class="product-price-last">{{ number_format($Product->price) }} تومان</span> <span class="product-price-new">{{ number_format($Product->price) }} تومان</span></div>
                   <div class="product-cart-controls">
                    تعداد
                    <div class="count">
                      <a class="count-left"></a>
                      <a class="count-right"></a>
                      <input class="count-text" type="text" value="۱">
                    </div>
                    <a class="button icon-cart" onclick="add_product({{ $Product->id }})">افزودن به سبد خرید</a>
                  </div>
                </div>
                <div class="product-row">
                  <div class="product-social">
                    <!-- AddThis Button BEGIN -->
                    <div class="addthis_toolbox addthis_default_style ">
                      <a class="addthis_button_preferred_1"></a>
                      <a class="addthis_button_preferred_2"></a>
                      <a class="addthis_button_preferred_3"></a>
                      <a class="addthis_button_preferred_4"></a>
                      <a class="addthis_button_compact"></a>
                      <a class="addthis_counter addthis_bubble_style"></a>
                    </div>
                    <script type="text/javascript" src="../../s7.addthis.com/js/300/addthis_widget.js#pubid=xa-512539a161451696"></script>
                    <!-- AddThis Button END -->
                  </div>
                  <div class="product-buttons">
                    <a class="wishlist-link" href="#">لیست انتخاب</a><a class="compare-link" href="#">بررسی</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="block grid12">
          <div class="block-fluid">
           <div class="fluid50">
             <div id="tabs-descspec" class="tabs">
               <a class="selected" href="#tab-description">توضیحات</a>
               <a href="#tab-specification">مشخصات</a>
             </div>
             <div class="separator"></div>
             <div id="tab-description" class="tab block-text">
              <h1>درباره محصول</h1>
              <p>
               هیولای قالب های وبسایت   در جهت رفاه شما کاربران گرامی اقدام به تهیه اسکریپتهای همگانی جهت برپایی سایت شما عزیزان را دارد. در همین راستا اولین محصول  گروهم ما با نام فروشگاه آنلاین در سبد فروش سایت قرار گرفته است. قالبی که  به آن نگاه می کنید قالب این فروشگاه می باشد.شما می توانید با پرداخت مبلغ مورد نظر جهت خرید سایت کامل فروشگاه آنلاین اقدام کنید.
             </p>
             <img class="left" src="assets/image_1.jpg" width="200px">
             <h4>بهترین انتخاب</h4>
             <p>
               هیولای قالب های وبسایت   در جهت رفاه شما کاربران گرامی اقدام به تهیه اسکریپتهای همگانی جهت برپایی سایت شما عزیزان را دارد. در همین راستا اولین محصول  گروهم ما با نام فروشگاه آنلاین در سبد فروش سایت قرار گرفته است. قالبی که  به آن نگاه می کنید قالب این فروشگاه می باشد.شما می توانید با پرداخت مبلغ مورد نظر جهت خرید سایت کامل فروشگاه آنلاین اقدام کنید.
               
               هیولای قالب های وبسایت   در جهت رفاه شما کاربران گرامی اقدام به تهیه اسکریپتهای همگانی جهت برپایی سایت شما عزیزان را دارد. در همین راستا اولین محصول  گروهم ما با نام فروشگاه آنلاین در سبد فروش سایت قرار گرفته است. قالبی که  به آن نگاه می کنید قالب این فروشگاه می باشد.شما می توانید با پرداخت مبلغ مورد نظر جهت خرید سایت کامل فروشگاه آنلاین اقدام کنید.
             </p>
             <p>
               هیولای قالب های وبسایت   در جهت رفاه شما کاربران گرامی اقدام به تهیه اسکریپتهای همگانی جهت برپایی سایت شما عزیزان را دارد. در همین راستا اولین محصول  گروهم ما با نام فروشگاه آنلاین در سبد فروش سایت قرار گرفته است. قالبی که  به آن نگاه می کنید قالب این فروشگاه می باشد.شما می توانید با پرداخت مبلغ مورد نظر جهت خرید سایت کامل فروشگاه آنلاین اقدام کنید.
             </p>
             <h5>با ما همراه باشید</h5>
             <p>
               هیولای قالب های وبسایت   در جهت رفاه شما کاربران گرامی اقدام به تهیه اسکریپتهای همگانی جهت برپایی سایت شما عزیزان را دارد. در همین راستا اولین محصول  گروهم ما با نام فروشگاه آنلاین در سبد فروش سایت قرار گرفته است. قالبی که  به آن نگاه می کنید قالب این فروشگاه می باشد.شما می توانید با پرداخت مبلغ مورد نظر جهت خرید سایت کامل فروشگاه آنلاین اقدام کنید.
             </p>
           </div>
           <div id="tab-specification" class="tab block-standart">
             <table class="table-spec">
               <tbody>
                 <tr>
                   <th class="table-spec-title" colspan="2">مشخصات محصول</th>
                 </tr>
                 <tr>
                   <th class="table-spec-key"><span>مدل</span></th>
                   <td class="table-spec-value">LGA1155</td>
                 </tr>
                 <tr>
                   <th class="table-spec-key"><span>سرعت</span></th>
                   <td class="table-spec-value">3.4 GHz</td>
                 </tr>
                 <tr>
                   <th class="table-spec-key"><span>DMIمشخصه </span></th>
                   <td class="table-spec-value">5 GT/s</td>
                 </tr>
                 <tr>
                   <th class="table-spec-key"><span>کش پردازنده</span></th>
                   <td class="table-spec-value">6 MB</td>
                 </tr>
                 <tr>
                   <th class="table-spec-key"><span>عرض</span></th>
                   <td class="table-spec-value">22 nm</td>
                 </tr>
                 <tr>
                   <th class="table-spec-title" colspan="2">قرت دستگاه</th>
                 </tr>
                 <tr>
                   <th class="table-spec-key"><span>قابلیت اتصال با دیسک</span></th>
                   <td class="table-spec-value">Pc</td>
                 </tr>
                 <tr>
                   <th class="table-spec-key"><span>ریزپردازنده</span></th>
                   <td class="table-spec-value">3.4 GHz</td>
                 </tr>
                 <tr>
                   <th class="table-spec-key"><span>تعداد ریزپردازنده</span></th>
                   <td class="table-spec-value">4</td>
                 </tr>
                 <tr>
                   <th class="table-spec-title" colspan="2">سیستم عامل</th>
                 </tr>
                 <tr>
                   <th class="table-spec-key"><span>سیستم عامل</span></th>
                   <td class="table-spec-value">Windows</td>
                 </tr>
                 <tr>
                   <th class="table-spec-title" colspan="2">وزن و اندازه</th>
                 </tr>
                 <tr>
                   <th class="table-spec-key"><span>سایز (LWH)</span></th>
                   <td class="table-spec-value">5 inches, 5.7 inches, 3.2 inches</td>
                 </tr>
                 <tr>
                   <th class="table-spec-key"><span>وزن</span></th>
                   <td class="table-spec-value">14.72 ounces</td>
                 </tr>
               </tbody>
             </table>
           </div>
         </div>
         <script type="text/javascript">
         $('#tabs-descspec a').tabs();
         </script>

         <script type="text/javascript">
         $('#tabs-revwrite a').tabs();
         </script>
       </div>
     </div>
     <div class="block grid12">
       <h2 class="block-header">محصولات مشابه</h2>
     </div>
     <div class="block grid3 block-product-grid-parent">
       <div class="block-product-grid">
         <div class="product-badge"><img src="images/badge-sale.png"></div>
         <div class="product-image"><a href="#"><img src="assets/product_180x180x0.jpg"></a></div>
         <div class="relative">
           <div class="product-buttons">
             <div class="product-buttons-body">
               <div class="product-buttons-wrap">
                 <a class="button icon-cart" href="#">افزودن به سبد خرید</a><br>
                 <a class="wishlist-link" href="#">لیست انتخاب</a><a class="compare-link" href="#">بررسی</a>
               </div>
             </div>
           </div>
           <div class="product-name"><a href="#">نام محصول</a></div>
         </div>
         <div class="product-rating"><img src="images/rating-4.png"></div>
         <div class="product-price"><span class="product-price-last">۲.۵۰۰.۰۰۰ ریال</span> <span class="product-price-new">۲.۵۰۰.۰۰۰ ریال</span></div>
       </div>
     </div>
     <div class="block grid3 block-product-grid-parent">
       <div class="block-product-grid">
        <div class="product-image"><a href="#"><img src="assets/product_180x180x1.jpg"></a></div>
        <div class="relative">
         <div class="product-buttons">
           <div class="product-buttons-body">
             <div class="product-buttons-wrap">
               <a class="button icon-cart" href="#">افزودن به سبد خرید</a><br>
               <a class="wishlist-link" href="#">لیست انتخاب</a><a class="compare-link" href="#">بررسی</a>
             </div>
           </div>
         </div>
         <div class="product-name"><a href="#">نام محصول</a></div>
       </div>
       <div class="product-rating"><img src="images/rating-3.png"></div>
       <div class="product-price">۲.۵۰۰.۰۰۰ ریال</div>
     </div>
   </div>
   <div class="block grid3 block-product-grid-parent">
     <div class="block-product-grid">
      <div class="product-image"><a href="#"><img src="assets/product_180x180x2.jpg"></a></div>
      <div class="relative">
       <div class="product-buttons">
         <div class="product-buttons-body">
           <div class="product-buttons-wrap">
             <a class="button icon-cart" href="#">افزودن به سبد خرید</a><br>
             <a class="wishlist-link" href="#">لیست انتخاب</a><a class="compare-link" href="#">بررسی</a>
           </div>
         </div>
       </div>
       <div class="product-name"><a href="#">نام محصول</a></div>
     </div>
     <div class="product-rating"><img src="images/rating-5.png"></div>
     <div class="product-price">۲.۵۰۰.۰۰۰ ریال</div>
   </div>
 </div>
 <div class="block grid3 block-product-grid-parent">
   <div class="block-product-grid">
    <div class="product-image"><a href="#"><img src="assets/product_180x180x3.jpg"></a></div>
    <div class="relative">
     <div class="product-buttons">
       <div class="product-buttons-body">
         <div class="product-buttons-wrap">
           <a class="button icon-cart" href="#">افزودن به سبد خرید</a><br>
           <a class="wishlist-link" href="#">لیست انتخاب</a><a class="compare-link" href="#">بررسی</a>
         </div>
       </div>
     </div>
     <div class="product-name"><a href="#">نام محصول</a></div>
   </div>
   <div class="product-rating"><img src="images/rating-2.png"></div>
   <div class="product-price">۲.۵۰۰.۰۰۰ ریال</div>
 </div>
</div>
</div>

<!-- {!! Html::script('js/jquery3.js') !!} -->

@endsection()

@section('script')

<script type="text/javascript">

add_product=function(id)
{
  alert(id);
}

</script>

@endsection()