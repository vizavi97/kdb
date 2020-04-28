

<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('press-center/youth-union.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('press-center/youth-union.2'); ?></span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('press-center/youth-union.3'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/press-center/youth-union.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container youth-union mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="first-parent">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="heading-2">
                                <?php echo app('translator')->get('press-center/youth-union.4'); ?>
                            </h2>
                            <p>
                                <?php echo app('translator')->get('press-center/youth-union.5'); ?>
                            </p>
                            <p>
                                <?php echo app('translator')->get('press-center/youth-union.6'); ?>
                            </p>
                            <p>
                                <?php echo app('translator')->get('press-center/youth-union.7'); ?>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <div class="box">
                                <img src="<?php echo e(asset('img/press-center/youth-union/1.jpg')); ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.press-center-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/u0560543/kdb.itmaker.uz/resources/views/press-center/youth-union.blade.php ENDPATH**/ ?>