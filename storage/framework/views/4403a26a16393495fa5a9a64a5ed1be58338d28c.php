

<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('corporates/crm.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('corporates/crm.2'); ?></span>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('corporates/crm.3'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/crm.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container crm mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="credit">
                    <img class="w-100 mb-4 align-right" src="<?php echo e(asset('img/corporates/crm/crm.jpg')); ?>" alt="Letters of credit with post-financing option">
                    <h2 class="heading-2"><?php echo app('translator')->get('corporates/crm.4'); ?></h2>
                    <p class="small-paragraph">
                        <?php echo app('translator')->get('corporates/crm.5'); ?>
                    </p> 
                    <p class="small-paragraph">
                        <?php echo app('translator')->get('corporates/crm.6'); ?> 
                    </p>
                    <p class="small-paragraph">
                        <?php echo app('translator')->get('corporates/crm.7'); ?>  
                    </p>
                    <ul class="right-icon mt-4">
                        <li>
                            <p>
                                <?php echo app('translator')->get('corporates/crm.8'); ?>
                            </p>
                        </li>
                        <li>
                            <p>
                                <?php echo app('translator')->get('corporates/crm.9'); ?>
                            </p>
                        </li>
                    </ul>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.corporates-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/local/www/apache24/data/resources/views/corporates/crm.blade.php ENDPATH**/ ?>