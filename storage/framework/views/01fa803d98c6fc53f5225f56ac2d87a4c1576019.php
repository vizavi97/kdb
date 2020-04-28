

<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('interactive-services/bank-regulations.1'); ?> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('interactive-services/bank-regulations.2'); ?></span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('interactive-services/bank-regulations.3'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/interactive-services/bank-regulations.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container bank-regulations mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="first-parent">

                    
                    <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(count( json_decode($file['file_' . app()->getLocale()])) > 0 ): ?>
                        <div class="row box">
                            <div class="col-sm-8">
                                <h6><?php echo e($file->getTranslatedAttribute('name', app()->getLocale(), 'fallbackLocale')); ?></h6>
                                <p class="helper-paragraph">
                                    <?php echo app('translator')->get('interactive-services/bank-regulations.4'); ?> <?php echo e(date( 'm.d.Y', strtotime($file->created_at) )); ?>.   <?php echo app('translator')->get('interactive-services/bank-regulations.5'); ?> <?php echo e($file->number); ?>

                                </p>
                            </div>
                            <div class="col-sm-4 right-parent">
                                <div class="top">
                                    <a href="<?php echo e($file->source_link); ?>"><?php echo e($file->source_name); ?></a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    

                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.interactive-services-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/local/www/apache24/data/resources/views/interactive-services/bank-regulations.blade.php ENDPATH**/ ?>