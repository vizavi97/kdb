<?php $__env->startSection('page-title', 'Awards'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">Awards</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Awards</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/about-us/awards.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container awards">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5 ">
                <?php $__currentLoopData = $awards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $award): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                    <div class="card-custom">
                        <div class="row m-0">
                            <div class="col-md-3 p-0">
                                <img class="card-img" src="<?php echo e(Voyager::image( $award->card_img )); ?>">
                            </div>
                            <div class="col-md-9 p-4 d-flex flex-column justify-content-between">
                                <div>
                                    <h3 class="heading-3"><?php echo e($award->title); ?></h3>
                                    <p class="small-paragraph"><?php echo e($award->excerpt); ?></p>
                                </div>
                                <button class="card-custom-toggler" data-target-id="<?php echo e($award->id); ?>">
                                    read more
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="opener-info" id="<?php echo e($award->id); ?>">
                        <div class="row">
                            <div class="col-md-6 p-4 order-2 order-md-1"><?php echo $award->body; ?></div>
                            <div class="col-md-6 order-1 order-md-2">
                                <img class="info-img" src="<?php echo e(Voyager::image( $award->body_img )); ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </main>

            <?php echo $__env->make('layouts.sidebars.about-us-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Uzgenius Academy\Desktop\WEBSITES\KDB\resources\views/about-us/awards.blade.php ENDPATH**/ ?>