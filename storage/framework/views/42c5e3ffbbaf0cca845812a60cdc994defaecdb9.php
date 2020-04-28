

<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('corporates/cciapm.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>

    <span class="small-paragraph"><?php echo app('translator')->get('corporates/cciapm.2'); ?></span>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('corporates/cciapm.3'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/cciapm.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container cciapm">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="row">
                    <div class="col-6">
                        <div class="first-parent">
                            <h2 class="heading-2" style="text-transform: initial;">
                                <?php echo app('translator')->get('corporates/cciapm.4'); ?>
                            </h2>
                            <p class="small-paragraph">
                                <?php echo app('translator')->get('corporates/cciapm.5'); ?>
                            </p>
                        </div>
                        <div class="second-parent">
                            <h3 class="heading-3" style="text-transform: initial;">
                                <?php echo app('translator')->get('corporates/cciapm.6'); ?>
                            </h3>
                            <ul class="right-icon">
                                <li>
                                    <p class="small-paragraph">
                                        <?php echo app('translator')->get('corporates/cciapm.7'); ?>
                                    </p>
                                </li>
                                <li>
                                    <p class="small-paragraph">
                                        <?php echo app('translator')->get('corporates/cciapm.8'); ?>
                                    </p>
                                </li>
                                <li>
                                    <p class="small-paragraph">
                                        <?php echo app('translator')->get('corporates/cciapm.9'); ?>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <img src="<?php echo e(asset('img/corporates/cciapm/1.jpg')); ?>" width="100%">
                    </div>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.corporates-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/u0560543/kdb.itmaker.uz/resources/views/corporates/cciapm.blade.php ENDPATH**/ ?>