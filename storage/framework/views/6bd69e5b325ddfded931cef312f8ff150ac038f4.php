<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('press-center/copy-right.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('press-center/copy-right.2'); ?></span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('press-center/copy-right.3'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/press-center/copy-right.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container dividends mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="rich-text">
                    <?php echo $copy->getTranslatedAttribute('copy', app()->getLocale(), 'fallbackLocale'); ?>

                </div>        
            </main>

            <?php echo $__env->make('layouts.sidebars.press-center-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DESKTOP\KDB\resources\views/press-center/copy-right.blade.php ENDPATH**/ ?>