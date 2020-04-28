<?php $__env->startSection('page-title', 'Copy Right'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">Copy Right</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Copy Right</title>

    
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/uzgenius/domains/uzgenius.uz/public_html/kdb/resources/views/press-center/copy-right.blade.php ENDPATH**/ ?>