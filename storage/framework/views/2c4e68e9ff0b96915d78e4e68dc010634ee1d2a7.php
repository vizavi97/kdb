

<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('corporates/local-terminals.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>

    <span class="small-paragraph"><?php echo app('translator')->get('corporates/local-terminals.2'); ?></span>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('corporates/local-terminals.3'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/individuals/remote-banking/internet-banking.css')); ?>">

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/local-terminals.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container local-terminals internet-banking">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <img src="<?php echo e(asset('img/corporates/local-terminals/1.jpg')); ?>" width="100%">
                <h2 class="heading-2 mt-4"><?php echo app('translator')->get('corporates/local-terminals.4'); ?></h2>
                <p class="small-paragraph mt-4">
                    <?php echo app('translator')->get('corporates/local-terminals.5'); ?>
                </p>
                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="simple-card text-center">
                            <div class="w-100">
                                <img src="<?php echo e(asset('img/corporates/local-terminals/visa.svg')); ?>" height="40px">
                                <h3 class="heading-3 mt-4"><?php echo app('translator')->get('corporates/local-terminals.6'); ?></h3>
                                <p class="small-paragraph mt-2">
                                    <?php echo app('translator')->get('corporates/local-terminals.7'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="simple-card text-center">
                            <div class="w-100">
                                <img src="<?php echo e(asset('img/corporates/local-terminals/mastercard.svg')); ?>" height="40px">
                                <h3 class="heading-3 mt-4"><?php echo app('translator')->get('corporates/local-terminals.8'); ?></h3>
                                <p class="small-paragraph mt-2">
                                    <?php echo app('translator')->get('corporates/local-terminals.9'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="simple-card text-center">
                            <div class="w-100">
                                <img src="<?php echo e(asset('img/corporates/local-terminals/humocard.svg')); ?>" height="40px">
                                <h3 class="heading-3 mt-4"><?php echo app('translator')->get('corporates/local-terminals.10'); ?></h3>
                                <p class="small-paragraph mt-2">
                                    <?php echo app('translator')->get('corporates/local-terminals.11'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="simple-card text-center">
                            <div class="w-100">
                                <img src="<?php echo e(asset('img/corporates/local-terminals/uzcard.svg')); ?>" height="40px">
                                <h3 class="heading-3 mt-4"><?php echo app('translator')->get('corporates/local-terminals.12'); ?></h3>
                                <p class="small-paragraph mt-2">
                                    <?php echo app('translator')->get('corporates/local-terminals.13'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.corporates-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/u0560543/kdb.itmaker.uz/resources/views/corporates/local-terminals.blade.php ENDPATH**/ ?>