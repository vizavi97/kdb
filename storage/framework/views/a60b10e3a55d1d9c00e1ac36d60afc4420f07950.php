

<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('corporates/deposits.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('corporates/deposits.2'); ?></span>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('corporates/deposits.3'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/deposits.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container deposits">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <h2 class="heading-2"><?php echo app('translator')->get('corporates/deposits.4'); ?></h2>
                <p class="small-paragraph"><?php echo app('translator')->get('corporates/deposits.5'); ?></p>
                <p class="small-paragraph">
                    <?php echo app('translator')->get('corporates/deposits.6'); ?>
                </p>
                <h3 class="heading-3"><?php echo app('translator')->get('corporates/deposits.7'); ?></h3>
                <ul class="right-icon mt-4">
                    <li>
                        <p><?php echo app('translator')->get('corporates/deposits.8'); ?></p>
                    </li>
                    <li>
                        <p><?php echo app('translator')->get('corporates/deposits.9'); ?></p>
                    </li>
                    <li>
                        <p><?php echo app('translator')->get('corporates/deposits.10'); ?></p>
                    </li>
			<li>
			<p><?php echo app('translator')->get('corporates/deposits.11'); ?></p>
			</li>
                </ul>
            </main>

            <?php echo $__env->make('layouts.sidebars.corporates-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/u0560543/kdb.itmaker.uz/resources/views/corporates/deposits.blade.php ENDPATH**/ ?>