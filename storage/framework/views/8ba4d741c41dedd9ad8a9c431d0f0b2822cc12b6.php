

<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('interactive-services/usefull-links.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('interactive-services/usefull-links.2'); ?></span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('interactive-services/usefull-links.3'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/interactive-services/usefull-links.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container usefull-links mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="first-parent">
                    <div class="row">

                        
                        <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-6 item-parent">
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <img src="<?php echo e(Voyager::image( $link->image )); ?>">
                                    </div>
                                    <div class="col-sm-8 information">
                                        <h5><?php echo e($link->getTranslatedAttribute('title', app()->getLocale(), 'fallbackLocale')); ?></h5>
                                        <a href="<?php echo e($link->source_link); ?>" class="link" target="_blank"><?php echo e($link->source_name); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        

                    </div>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.interactive-services-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/local/www/apache24/data/resources/views/interactive-services/usefull-links.blade.php ENDPATH**/ ?>