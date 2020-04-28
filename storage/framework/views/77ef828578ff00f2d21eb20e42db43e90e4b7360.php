

<?php $__env->startSection('page-title'); ?>

    <?php echo app('translator')->get('about-us/business-plan.business-plan'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('about-us/business-plan.business-plan-2'); ?></span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('about-us/business-plan.kdb-business'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/about-us/business-plan.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container business-plan">
        <div class="row">
            <main class="col-xl-9 main-hero mb-5">
                <div class="row">
                    <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(json_decode($plan['file_' . app()->getLocale()])): ?>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="business-plan-box">
                                    <div class="bg position-relative">
                                        <img class="img-cover" src="<?php echo e(Voyager::image( $plan['image_' . app()->getlocale()] )); ?>" alt="KDB banks charter">
                                    </div>
                                    <div class="p-4">
                                        <h2 class="heading-3 mb-3"><?php echo e($plan->getTranslatedAttribute('name', app()->getLocale(), 'fallbackLocale')); ?></h2>
                                        <a href="<?php echo e(Voyager::image( (json_decode($plan['file_' . app()->getLocale()]))[0]->download_link )); ?>" class="flex-justify-center" download>
                                            <i class="fas fa-download"></i>
                                            <span class="small-paragraph"><?php echo app('translator')->get('about-us/business-plan.download'); ?></span>
                                        </a>      
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.about-us-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/u0560543/kdb.itmaker.uz/resources/views/about-us/business-plan.blade.php ENDPATH**/ ?>