

<?php $__env->startSection('page-title'); ?> 
    <?php echo app('translator')->get('individuals/account-opening.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('individuals/account-opening.2'); ?></span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('individuals/account-opening.3'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/accaunt-opening.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container accaunt-opening">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="first-stuff">
                    <h2 class="heading-2">
                        <?php echo app('translator')->get('individuals/account-opening.4'); ?>
                    </h2>
                    <p class="paragraph paragraph-bold">
                        <?php echo app('translator')->get('individuals/account-opening.5'); ?>
                    </p>
                    <p class="paragraph paragraph-bold">
                        <?php echo app('translator')->get('individuals/account-opening.6'); ?>
                    </p>
                    <ul class="right-icon my-4">
                        <li>
                            <p><?php echo app('translator')->get('individuals/account-opening.7'); ?></p>
                        </li>
                        <li>
                            <p><?php echo app('translator')->get('individuals/account-opening.8'); ?></p>
                        </li>
                    </ul>
                    <p class="small-paragraph mb-4">
                        <?php echo app('translator')->get('individuals/account-opening.9'); ?>
                    </p>
                    <p class="small-paragraph">
                        <?php echo app('translator')->get('individuals/account-opening.10'); ?>
                    </p>
                    <h3 class="heading-3 mt-4"><?php echo app('translator')->get('individuals/account-opening.11'); ?></h3>
                    <ul class="right-icon mt-4">
                        <li>
                            <p><?php echo app('translator')->get('individuals/account-opening.12'); ?></p>
                        </li>
                        <li>
                            <p><?php echo app('translator')->get('individuals/account-opening.13'); ?></p>
                        </li>
                        <li>
                            <p><?php echo app('translator')->get('individuals/account-opening.14'); ?></p>
                        </li>
                        <li>
                            <p><?php echo app('translator')->get('individuals/account-opening.15'); ?></p>
                        </li>
                    </ul>
                </div>

            </main>

            <?php echo $__env->make('layouts.sidebars.individuals-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/u0560543/kdb.itmaker.uz/resources/views/individuals/account-opening.blade.php ENDPATH**/ ?>