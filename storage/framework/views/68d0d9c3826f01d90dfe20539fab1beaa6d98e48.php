
<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('individuals/deposits.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>

    <span class="small-paragraph"><?php echo app('translator')->get('individuals/deposits.2'); ?></span>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('individuals/deposits.3'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/individuals/deposits.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container deposits mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <h2 class="heading-2"><?php echo app('translator')->get('individuals/deposits.4'); ?></h2>
                <p class="small-paragraph"><?php echo app('translator')->get('individuals/deposits.5'); ?></p>
                <p class="small-paragraph">
                    <?php echo app('translator')->get('individuals/deposits.6'); ?>
                </p>

                <h3 class="heading-3"><?php echo app('translator')->get('individuals/deposits.7'); ?></h3>

                <ul class="right-icon mt-4">
                    <li>
                        <p><?php echo app('translator')->get('individuals/deposits.8'); ?></p>
                        <ul>
                            <li>
                                <p><?php echo app('translator')->get('individuals/deposits.9'); ?></p>
                            </li>
                            <li>
                                <p><?php echo app('translator')->get('individuals/deposits.10'); ?></p>
                            </li>
                            <li>
                                <p><?php echo app('translator')->get('individuals/deposits.11'); ?></p>
                            </li>
                            <li>
                                <p><?php echo app('translator')->get('individuals/deposits.12'); ?></p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <p><?php echo app('translator')->get('individuals/deposits.13'); ?></p>
                    </li>
                    <li>
                        <p><?php echo app('translator')->get('individuals/deposits.14'); ?></p>
                    </li>
                    <li>
                        <p><?php echo app('translator')->get('individuals/deposits.15'); ?></p>
                    </li>
                    <li>
                        <p><?php echo app('translator')->get('individuals/deposits.16'); ?></p>
                    </li>
                </ul>

                <p class="small-paragraph">
                    <?php echo app('translator')->get('individuals/deposits.17'); ?> 
                </p>

           
            </main>

            <?php echo $__env->make('layouts.sidebars.individuals-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/local/www/apache24/data/resources/views/individuals/deposits.blade.php ENDPATH**/ ?>