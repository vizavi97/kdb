

<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('about-us/management-board.meet-management'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('about-us/management-board.meet-management-2'); ?></span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('about-us/management-board.kdb-meet'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/about-us/managment-board.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container managment-board">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <h2 class="heading-2" style="text-transform: initial;"><?php echo app('translator')->get('about-us/management-board.meet-the'); ?></h2>
                <p class="paragraph top">
                    <?php echo app('translator')->get('about-us/management-board.the-members'); ?>
                </p>
                <div class="row">
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 item">
                        <div class="card">
                            <img src="<?php echo e(Voyager::image( $user->image )); ?>" alt="<?php echo e($user->getTranslatedAttribute('name', $locale, 'fallbackLocale')); ?>" class="image">
                            <div class="card-body">
                                <h3 class="heading-3"><?php echo e($user->getTranslatedAttribute('name', $locale, 'fallbackLocale')); ?></h3>
                                <p class="paragraph bold"><?php echo e($user->getTranslatedAttribute('desc', $locale, 'fallbackLocale')); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.about-us-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/local/www/apache24/data/resources/views/about-us/management-board.blade.php ENDPATH**/ ?>