<?php $__env->startSection('page-title', 'Business Plan'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">Business Plan</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Business Plan</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/about-us/business-plan.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container business-plan">
        <div class="row">
            <main class="col-xl-9 main-hero mb-5">
                <div class="row">
                    <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="business-plan-box">
                            <div class="bg position-relative">
                                <img class="img-cover" src="<?php echo e(Voyager::image( $plan->image )); ?>" alt="KDB banks charter">
                                <span><?php echo e(date( 'd.m.Y', strtotime($plan->created_at) )); ?></span>
                            </div>
                            <div class="p-4">
                                <h2 class="heading-3 mb-3"><?php echo e($plan->name . ' ' . date( 'd.m.Y', strtotime($plan->created_at) )); ?></h2>
                                <a href="<?php echo e(Voyager::image( (json_decode($plan->file))[0]->download_link )); ?>" class="flex-justify-center" download>
                                    <i class="fas fa-download"></i>
                                   <span class="small-paragraph">download</span>
                               </a>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Desktop\KDBLIVE\resources\views/about-us/business-plan.blade.php ENDPATH**/ ?>