

<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('about-us/general-information.general-information'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('about-us/general-information.general-information-2'); ?></span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('about-us/general-information.kdb-general'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/about-us/general-information.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container general-information">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="row item no-gutters">
                    <div class="col-5">
                        <p class="main">
                            <?php echo app('translator')->get('about-us/general-information.full-name'); ?>
                        </p>
                    </div>
                    <div class="col-7">
                        <p class="small-paragraph">
                            <?php echo app('translator')->get('about-us/general-information.joint-stock'); ?>
                        </p>
                    </div>
                </div>
                <div class="row item no-gutters">
                    <div class="col-5">
                        <p class="main">
                            <?php echo app('translator')->get('about-us/general-information.short-name'); ?>
                        </p>
                    </div>
                    <div class="col-7">
                        <p class="small-paragraph">
                            <?php echo app('translator')->get('about-us/general-information.jsc-kdb'); ?>
                        </p>
                    </div>
                </div>
                <div class="row item no-gutters">
                    <div class="col-5">
                        <p class="main">
                            <?php echo app('translator')->get('about-us/general-information.year-of'); ?>
                        </p>
                    </div>
                    <div class="col-7">
                        <p class="small-paragraph">
                            <?php echo app('translator')->get('about-us/general-information.1997'); ?>
                        </p>
                    </div>
                </div>
                <div class="row item no-gutters">
                    <div class="col-5">
                        <p class="main">
                            <?php echo app('translator')->get('about-us/general-information.branches'); ?>
                        </p>
                    </div>
                    <div class="col-7">
                        <p class="small-paragraph">
                            <?php echo app('translator')->get('about-us/general-information.head-office'); ?>
                        </p>
                        <p class="small-paragraph">
                            <?php echo app('translator')->get('about-us/general-information.yunusabad-branch'); ?>
                        </p>
                        <p class="small-paragraph">
                            <?php echo app('translator')->get('about-us/general-information.yakkasaray-branch'); ?>
                        </p>
                        <p class="small-paragraph">
                            <?php echo app('translator')->get('about-us/general-information.cciapm'); ?>
                        </p>
                    </div>
                </div>
                <div class="row item no-gutters">
                    <div class="col-5">
                        <p class="main">
                            <?php echo app('translator')->get('about-us/general-information.shareholders'); ?>
                        </p>
                    </div>
                    <div class="col-7">
                        <p class="small-paragraph">
                            <?php echo app('translator')->get('about-us/general-information.korea-development'); ?>
                        </p>
                        <p class="small-paragraph">
                            <?php echo app('translator')->get('about-us/general-information.national-bank'); ?>
                        </p>
                        <p class="small-paragraph">
                            <?php echo app('translator')->get('about-us/general-information.turon-bank'); ?>
                        </p>
                    </div>
                </div>
                <div class="row item no-gutters">
                    <div class="col-5">
                        <p class="main">
                            <?php echo app('translator')->get('about-us/general-information.credit-ratings'); ?>
                        </p>
                    </div>
                    <div class="col-7">
                        <p class="small-paragraph">
                            <?php echo app('translator')->get('about-us/general-information.standard-and'); ?>
                        </p>
                        <p class="small-paragraph">
                            <?php echo app('translator')->get('about-us/general-information.moody'); ?>
                        </p>
                        <p class="small-paragraph">
                            <?php echo app('translator')->get('about-us/general-information.fitch'); ?>
                        </p>
                    </div>
                </div>
                <div class="row item no-gutters">
                    <div class="col-5">
                        <p class="main">
                            <?php echo app('translator')->get('about-us/general-information.credit-rating'); ?>
                        </p>
                    </div>
                    <div class="col-7">
                        <p class="small-paragraph">
                            <?php echo app('translator')->get('about-us/general-information.standard-poor'); ?>
                        </p>
                        <br>
                        <p class="small-paragraph">
                            <?php echo app('translator')->get('about-us/general-information.long-term'); ?>
                        </p>
                        <p class="small-paragraph">
                            <?php echo app('translator')->get('about-us/general-information.short-term'); ?>
                        </p>
                        <p class="small-paragraph">
                            <?php echo app('translator')->get('about-us/general-information.outlook-stable'); ?>
                        </p>
                    </div>
                </div>
                <div class="row item no-gutters">
                    <div class="col-5">
                        <p class="main">
                            <?php echo app('translator')->get('about-us/general-information.local-rating'); ?>
                        </p>
                    </div>
                    <div class="col-7">
                        <p class="small-paragraph">
                            <?php echo app('translator')->get('about-us/general-information.credit-rating-2'); ?>
                        </p>
                        <p class="small-paragraph">
                            <?php echo app('translator')->get('about-us/general-information.outlook'); ?>
                        </p>
                    </div>
                </div>
                <div class="row item no-gutters">
                    <div class="col-5">
                        <p class="main">
                            <?php echo app('translator')->get('about-us/general-information.corporate-website'); ?>
                        </p>
                    </div>
                    <div class="col-7">
                        <a href="<?php echo app('translator')->get('about-us/general-information.http'); ?>">
                            <?php echo app('translator')->get('about-us/general-information.http'); ?>
                        </a>
                    </div>
                </div>
                <div class="row item no-gutters">
                    <div class="col-5">
                        <p class="main">
                            <?php echo app('translator')->get('about-us/general-information.e-mail'); ?>
                        </p>
                    </div>
                    <div class="col-7">
                        <a href="mailto:<?php echo app('translator')->get('about-us/general-information.info'); ?>">
                            <?php echo app('translator')->get('about-us/general-information.info'); ?>
                        </a>
                    </div>
                </div>
                <div class="row item no-gutters">
                    <div class="col-5">
                        <p class="main">
                            <?php echo app('translator')->get('about-us/general-information.telephone'); ?>
                        </p>
                        <p class="main">
                            <?php echo app('translator')->get('about-us/general-information.fax'); ?>
                        </p>
                    </div>
                    <div class="col-7">
                        <a href="tel:<?php echo app('translator')->get('about-us/general-information.+998'); ?>">
                            <?php echo app('translator')->get('about-us/general-information.+9987'); ?>
                        </a>
                        <a href="tel:<?php echo app('translator')->get('about-us/general-information.+99878'); ?>">
                            <?php echo app('translator')->get('about-us/general-information.+998781'); ?>
                        </a>
                    </div>
                </div>
                <div class="row item no-gutters">
                    <div class="col-5">
                        <p class="main">
                            <?php echo app('translator')->get('about-us/general-information.license'); ?>
                        </p>
                    </div>
                    <div class="col-7">
                        <p class="small-paragraph license">
                            <?php echo app('translator')->get('about-us/general-information.cbu-license'); ?>
                        </p>
                        <img src="<?php echo e(asset('img/about-us/general-information/license2017.jpg')); ?>">
                    </div>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.about-us-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/u0560543/kdb.itmaker.uz/resources/views/about-us/general-information.blade.php ENDPATH**/ ?>