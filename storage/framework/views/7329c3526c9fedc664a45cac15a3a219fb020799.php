

<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('corporates/correspondent-banks.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('corporates/correspondent-banks.2'); ?></span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('corporates/correspondent-banks.3'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/correspondent-banks.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container correspondent-banks">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="first-parent">
                    <div class="row box">
                        <div class="col-lg-1 col-md-3 col-12 text-md-center text-left mb-md-0 mb-3">
                            <img src="<?php echo e(asset('img/corporates/correspondent-banks/banks.svg')); ?>" height="40px">
                        </div>
                        <div class="col-lg-11 col-md-9 col-12">
                            <p class="paragraph">
                                <?php echo app('translator')->get('corporates/correspondent-banks.4'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <h2 class="heading-2">
                    <?php echo app('translator')->get('corporates/correspondent-banks.5'); ?>
                </h2>
                <?php if(count($banks) > 0): ?>
                <div class="second-parent">
                    <div class="row">
                        <?php $__currentLoopData = $banks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-6 item-parent">
                            <div class="item">
                                <img src="<?php echo e(Voyager::image( $bank->logo )); ?>">
                                <h3 class="heading-3"><?php echo e($bank->name); ?></h3>
                                <table>
                                    <tr>
                                        <td>
                                            <?php echo app('translator')->get('corporates/correspondent-banks.6'); ?>
                                        </td>
                                        <td>
                                            <?php echo e($bank->country); ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo app('translator')->get('corporates/correspondent-banks.7'); ?>
                                        </td>
                                        <td>
                                            <?php echo e($bank->currency); ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo app('translator')->get('corporates/correspondent-banks.8'); ?>
                                        </td>
                                        <td>
                                            <?php echo e($bank->bic); ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo app('translator')->get('corporates/correspondent-banks.9'); ?>
                                        </td>
                                        <td>
                                            <?php echo e($bank->account_number); ?>

                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php endif; ?>
                <div class="third-parent">
                    <p class="paragraph">
                        <?php echo app('translator')->get('corporates/correspondent-banks.10'); ?>
                    </p>
                </div>
            </main>
            <?php echo $__env->make('layouts.sidebars.corporates-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/local/www/apache24/data/resources/views/corporates/correspondent-banks.blade.php ENDPATH**/ ?>