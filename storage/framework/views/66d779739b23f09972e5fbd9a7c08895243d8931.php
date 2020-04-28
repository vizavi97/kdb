<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('about-us/organizational-structure.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('about-us/organizational-structure.2'); ?></span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('about-us/organizational-structure.3'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/about-us/organizational-structure.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Organizational Structure starts -->
    <section class="desctop container organizational-structure">
        <div class="row">
            <main class="col-xl-9 main-hero mb-5">
                <img width="100%" src="<?php echo e(Voyager::image( $structure['image_' . app()->getLocale()] )); ?>" alt="organizational structure">
            </main>

            <?php echo $__env->make('layouts.sidebars.about-us-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    <!-- Organizational Structure ends -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DESKTOP\KDB\resources\views/about-us/organizational-structure.blade.php ENDPATH**/ ?>