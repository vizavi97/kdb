<?php $__env->startSection('page-title', 'Exchange Office'); ?>

<?php $__env->startSection('breadcrumb'); ?>

    <span class="small-paragraph">Exchange Office</span>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Exchange Office</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/individuals/exchange-office/exchange-office.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container exchange-office mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <p class="small-paragraph mb-4">
                    Exchange Offices are open for Clients every day from 9:00AM to 5:00PM, except weekends and public holidays.
                </p>
                <div>
                    <?php $__currentLoopData = $offices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $office): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div>
                            <div class="card-custom mt-4">
                                <div class="row m-0">
                                    <div class="col-md-3 p-0">
                                        <img src="<?php echo e(Voyager::image( $office->image )); ?>">
                                    </div>
                                    <div class="col-md-9 p-4 d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="d-flex align-items-start justify-content-between">
                                                <h3 class="heading-3 mb-4"><?php echo e($office->getTranslatedAttribute('title', app()->getLocale(), 'fallbackLocale')); ?></h3>
                                                <button class="card-custom-toggler" data-target-id="<?php echo e($office->id); ?>">
                                                    view on map
                                                </button>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <p class="small-paragraph fs-14">
                                                        <strong>Address</strong>
                                                    </p>
                                                </div>
                                                <div class="col-md-9">
                                                    <p class="small-paragraph fs-14">
                                                        <?php echo e($office->getTranslatedAttribute('address', app()->getLocale(), 'fallbackLocale')); ?>

                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <p class="small-paragraph fs-14">
                                                        <strong>Phone</strong>
                                                    </p>
                                                </div>
                                                <div class="col-md-9">
                                                    <p class="small-paragraph fs-14">
                                                        <?php echo e($office->phone); ?>

                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <p class="small-paragraph fs-14">
                                                        <strong>Fax</strong>
                                                    </p>
                                                </div>
                                                <div class="col-md-9">
                                                    <p class="small-paragraph fs-14">
                                                        <?php echo e($office->fax); ?>

                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <p class="small-paragraph fs-14">
                                                        <strong>Working Days</strong>
                                                    </p>
                                                </div>
                                                <div class="col-md-9">
                                                    <p class="small-paragraph fs-14">
                                                        <?php echo e($office->getTranslatedAttribute('working_days', app()->getLocale(), 'fallbackLocale')); ?>

                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <p class="small-paragraph fs-14 mb-lg-0">
                                                        <strong>Working Hours</strong>
                                                    </p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="small-paragraph fs-14 mb-lg-0">
                                                        <?php echo e($office->working_hours); ?>

                                                    </p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="small-paragraph fs-14 mb-lg-0">
                                                        <strong>Lunch Time</strong>
                                                    </p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="small-paragraph fs-14 mb-lg-0">
                                                        <?php echo e($office->lunch_time); ?>

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="opener-info mt-3" id="<?php echo e($office->id); ?>">
                                <iframe src="<?php echo e($office->map); ?>" width="100%" height="282" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.individuals-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User 5\Desktop\KDB Last\resources\views/individuals/exchange-office/exchange-office.blade.php ENDPATH**/ ?>