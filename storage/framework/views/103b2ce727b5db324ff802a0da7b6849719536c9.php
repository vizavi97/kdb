<?php $__env->startSection('page-title', 'Organizational Structure'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">Organizational Structure</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Organizational Structure</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/about-us/organizational-structure.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Organizational Structure starts -->
    <section class="desctop container organizational-structure">
        <div class="row">
            <main class="col-xl-9 main-hero mb-5">
                <img width="100%" src="<?php echo e(Voyager::image( $structure->image )); ?>" alt="organizational structure">
            </main>

            <?php echo $__env->make('layouts.sidebars.about-us-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    <!-- Organizational Structure ends -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Desktop\KDBLIVE\resources\views/about-us/organizational-structure.blade.php ENDPATH**/ ?>