

<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('press-center/gallery-category.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('press-center/gallery-category.2'); ?></span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('press-center/gallery-category.3'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/press-center/gallery-category.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container gallery-category mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero">
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">
                            <a href="<?php echo e(url( app()->getLocale() . '/press-center/gallery', ['data' => 'photos'])); ?>">
                                <h3 class="heading-blue"><?php echo app('translator')->get('press-center/gallery-category.4'); ?></h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <a href="<?php echo e(url( app()->getLocale() . '/press-center/gallery', ['data' => 'videos'])); ?>">
                                <h3 class="heading-blue"><?php echo app('translator')->get('press-center/gallery-category.5'); ?></h3>
                            </a>
                        </div>
                    </div>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.press-center-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/local/www/apache24/data/resources/views/press-center/gallery-category.blade.php ENDPATH**/ ?>