

<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('investors/substantial-facts-months.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('investors/substantial-facts-months.2'); ?></span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('investors/substantial-facts-months.3'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/investors/substantial-facts.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container substantial-facts mt-5">
        <div class="row">
            <main class="col-xl-9 main-hero mb-5">
                <h2 class="heading-2 mb-4"><?php echo app('translator')->get('investors/substantial-facts-months.4'); ?></h2>
                <a href="<?php echo e(route('investors.substantial-facts', app()->getLocale())); ?>" class="back-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12l4.58-4.59z" fill="#FFB600"/>
                    </svg>
                    <?php echo e($year); ?>

                </a>
                <div class="row">
                    <?php $__currentLoopData = $months; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $month): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4">
                            <a href="<?php echo e(url('/' . app()->getLocale() . '/investors/substantial-facts/' . $year . '/' . json_decode($month)[1])); ?>" class="card-archive">
                                <?php echo e(json_decode($month)[0]); ?>

                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.investors-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/u0560543/kdb.itmaker.uz/resources/views/investors/substantial-facts-months.blade.php ENDPATH**/ ?>