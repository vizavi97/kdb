<?php $__env->startSection('page-title', 'Information on GSM'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">Information on GSM</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Information on GSM</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/investors/information-on-gsm.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container information-on-gsm mt-5">
        <div class="row">
            
            <main class="col-xl-9">
                <!-- Gsm Information Item(5) Start -->
                <div class="row">
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-12">
                        <div class="information-gsm-item">
                            <div class="row">
                                <div class="col-lg-2 gsm-month">
                                    <span class="date"><?php echo e(date( 'd', strtotime($post->created_at) )); ?></span>
                                    <span class="fs-12 month"><?php echo e(date( 'M', strtotime($post->created_at) )); ?></span>
                                    <p class="fs-12"><?php echo e(date( 'Y', strtotime($post->created_at) )); ?></p>
                                </div>
                                <div class="col-lg-6 gsm-holding">
                                    <h3 class="heading-3"><?php echo e($post->title); ?></h3>
                                    <p class="small-paragraph fs-12"><?php echo e($post->body); ?></p>
                                </div>
                                <div class="col-lg-4 gsm_location">
                                    <div class="gsm-location-item">
                                        <span class="fa fa-map-marker-alt fs-12"></span>
                                        <p class="small-paragraph fs-12"><?php echo e($post->address); ?></p>
                                    </div>
                                    <div class="gsm-location-item">
                                        <span class="far fa-clock fs-12"></span>
                                        <p class="small-paragraph fs-12"><?php echo e(date( 'h:i a', strtotime($post->created_at) )); ?></p>
                                    </div>
                                    <div class="gsm-location-item">
                                        <span class="fa fa-calendar-alt fs-12"></span>
                                        <p class="small-paragraph fs-12 mb-0"><?php echo e(date( 'M d, Y', strtotime($post->created_at) )); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <!-- Gsm Infomation Item(5) End -->

                <!-- Gsm Pagination Start -->
                
                <!-- Gsm Pagination End -->
            </main>

            <?php echo $__env->make('layouts.sidebars.investors-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Desktop\KDBBU\resources\views/investors/information-on-gsm.blade.php ENDPATH**/ ?>