<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>پنل مدیریت</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= asset('css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= asset('css/simple-sidebar.css'); ?>" rel="stylesheet">

    <!-- Form CSS -->
    <link href="<?= asset('css/form.css'); ?>" rel="stylesheet">

    <!-- Table CSS -->
    <link href="<?= asset('css/table.css'); ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div id="wrapper">

            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="#">
                            داشبورد
                        </a>
                    </li>
                    <li>
                        <a href="#">مشاهده فروشگاه</a>
                    </li>
                    <li>
                        <a href="#">محصولات</a>
                    </li>
                    <li>
                        <a href="#">سفارشات</a>
                    </li>
                    <li>
                        <a href="#">کاربران</a>
                    </li>
                    <li>
                        <a href="#">تنظیمات</a>
                    </li>
                    <li>
                        <a href="#">خروج</a>
                    </li>
                    <li>
                        <a href="#">تماس</a>
                    </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php echo $__env->yieldContent('content'); ?>
                        <!-- h1>نوار ساده</h1>
                        <p>
این قالب دارای یک سیستم منو روشن نمی پاسخگو. منو ظاهر می شود سقوط در صفحه نمایش کوچکتر، و به نظر می رسد غیر سقوط بر روی صفحه نمایش بزرگتر است. هنگامی که با استفاده از دکمه زیر جابجا، منو ظاهر می شود / ناپدید می شوند. در صفحه نمایش کوچک، محتوای صفحه خواهد شد بوم تحت فشار قرار دادند.</p>
                        <p>اطمینان حاصل کنید که برای حفظ همه محتوای صفحه <code>#page-content-wrapper</code>.</p>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">منو ضامن</a!-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="<?= asset('js/jquery.js'); ?>"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?= asset('js/bootstrap.min.js'); ?>"></script>

        <!-- CK editor js file -->
        <!-- script src="<?= asset('resources/bootstrap.min.js'); ?>"></script -->
        <?php echo $__env->yieldContent('ckeditor'); ?>

    </body>

    </html>
