<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('investors/substantial-facts.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('investors/substantial-facts.2'); ?></span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('investors/substantial-facts.3'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/investors/substantial-facts.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container substantial-facts mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <h2 class="heading-2 mb-4"><?php echo app('translator')->get('investors/substantial-facts.4'); ?></h2>
                <div class="row">
                    <?php $__currentLoopData = $years; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $year): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4">
                            <a href="<?php echo e(url('/' . app()->getLocale() . '/investors/substantial-facts/' . $year)); ?>" class="card-archive"><?php echo e($year); ?></a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.investors-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\farkh\OneDrive\Desktop\FARHOD\KDB\resources\views/investors/substantial-facts.blade.php ENDPATH**/ ?>