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
            <main class="col-xl-9 main-hero">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="business-plan-box helper-class">
                            <img class="img-cover" src="<?php echo e(asset('img/about-us/business-plan/business-plan.svg')); ?>" alt="KDB business plan">
                            <div class="p-4">
                                <h2 class="heading-3 mb-3">Business plan 2019</h2>
                                <a target="_blank" href="<?php echo e(asset('img/about-us/business-plan/Business_Plan_Summary_2018_Eng.pdf')); ?>" class="flex-justify-center">
                                    <i class="fas fa-download"></i>
                                   <span class="small-paragraph">download</span>
                               </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="business-plan-box helper-class">
                            <img class="img-cover" src="<?php echo e(asset('img/about-us/business-plan/business-plan.svg')); ?>" alt="KDB business plan">
                            <div class="p-4">
                                <h2 class="heading-3 mb-3">Business plan 2018</h2>
                                <a target="_blank" href="<?php echo e(asset('img/about-us/business-plan/Business_Plan_Summary_2018_Eng.pdf')); ?>" class="flex-justify-center">
                                    <i class="fas fa-download"></i>
                                   <span class="small-paragraph">download</span>
                               </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="business-plan-box helper-class">
                            <img class="img-cover" src="<?php echo e(asset('img/about-us/business-plan/business-plan.svg')); ?>" alt="KDB business plan">
                            <div class="p-4">
                                <h2 class="heading-3 mb-3">Business plan 2017</h2>
                                <a target="_blank" href="<?php echo e(asset('img/about-us/business-plan/Business_Plan_Summary_2018_Eng.pdf')); ?>" class="flex-justify-center">
                                    <i class="fas fa-download"></i>
                                   <span class="small-paragraph">download</span>
                               </a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.about-us-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Desktop\KDBBU\resources\views/about-us/business-plan.blade.php ENDPATH**/ ?>