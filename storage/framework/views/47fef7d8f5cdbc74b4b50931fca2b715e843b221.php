
<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('individuals/exchange-office/exchange-office.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>

    <span class="small-paragraph"><?php echo app('translator')->get('individuals/exchange-office/exchange-office.2'); ?></span>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('individuals/exchange-office/exchange-office.3'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/individuals/exchange-office/exchange-office.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container exchange-office mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <p class="small-paragraph mb-4">
                    <?php echo app('translator')->get('individuals/exchange-office/exchange-office.4'); ?>
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
                                                    <?php echo app('translator')->get('individuals/exchange-office/exchange-office.5'); ?>
                                                </button>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <p class="small-paragraph fs-14">
                                                        <strong><?php echo app('translator')->get('individuals/exchange-office/exchange-office.6'); ?></strong>
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
                                                        <strong><?php echo app('translator')->get('individuals/exchange-office/exchange-office.7'); ?></strong>
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
                                                        <strong><?php echo app('translator')->get('individuals/exchange-office/exchange-office.8'); ?></strong>
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
                                                        <strong><?php echo app('translator')->get('individuals/exchange-office/exchange-office.9'); ?></strong>
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
                                                        <strong><?php echo app('translator')->get('individuals/exchange-office/exchange-office.10'); ?></strong>
                                                    </p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="small-paragraph fs-14 mb-lg-0">
                                                        <?php echo e($office->working_hours); ?>

                                                    </p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="small-paragraph fs-14 mb-lg-0">
                                                        <strong><?php echo app('translator')->get('individuals/exchange-office/exchange-office.11'); ?></strong>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/local/www/apache24/data/resources/views/individuals/exchange-office/exchange-office.blade.php ENDPATH**/ ?>