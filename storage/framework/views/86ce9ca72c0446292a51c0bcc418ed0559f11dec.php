

<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('corporates/payments-and-cash-management.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('corporates/payments-and-cash-management.2'); ?></span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('corporates/payments-and-cash-management.3'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/payments-and-cash-management.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container payments-and-cash-management">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div>
                    <h3 class="heading-3"><?php echo app('translator')->get('corporates/payments-and-cash-management.4'); ?></h3>
                    <ul class="right-icon pt-3">
                        <li>
                            <p><?php echo app('translator')->get('corporates/payments-and-cash-management.5'); ?></p>
                        </li>
                        <li>
                            <p><?php echo app('translator')->get('corporates/payments-and-cash-management.6'); ?></p>
                        </li>
                        <li>
                            <p>
                                <?php echo app('translator')->get('corporates/payments-and-cash-management.7'); ?>
                            </p>
                        </li>
                        <li>
                            <p>
                                <?php echo app('translator')->get('corporates/payments-and-cash-management.8'); ?>
                            </p>
                        </li>
                        <li>
                            <p>
                                <?php echo app('translator')->get('corporates/payments-and-cash-management.9'); ?>
                            </p>
                        </li>
                        <li>
                            <p>
                                <?php echo app('translator')->get('corporates/payments-and-cash-management.10'); ?>
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="mt-5">
                    <img class="w-100 mb-4 align-left" src="<?php echo e(asset('img/corporates/payments-and-cash-management/transfers-in-exotic-currencies.jpg')); ?>" alt="Letters of credit with post-financing option">
                    <h3 class="heading-3"><?php echo app('translator')->get('corporates/payments-and-cash-management.11'); ?></h3>
                    <p><?php echo app('translator')->get('corporates/payments-and-cash-management.12'); ?></p>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.corporates-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/local/www/apache24/data/resources/views/corporates/payments-and-cash-management.blade.php ENDPATH**/ ?>