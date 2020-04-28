

<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('investors/audit-reports.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('investors/audit-reports.2'); ?></span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('investors/audit-reports.3'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/investors/audit-report.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container audit-reports mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
              <?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if( count( json_decode($report["file_" . app()->getLocale()])) ): ?>
                <div class="row download">
                    <div class="col-12">
                          <a class="row" href="<?php echo e(Voyager::image( (json_decode($report["file_" . app()->getLocale()]))[0]->download_link )); ?>" download>
                                <div class="col-10 information">
                                      <h6><?php echo e($report->getTranslatedAttribute('name', app()->getLocale(), 'fallbackLocale')); ?></h6>
                                </div>
                                <div class="col-2 d-flex justify-content-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM19 18H6c-2.21 0-4-1.79-4-4 0-2.05 1.53-3.76 3.56-3.97l1.07-.11.5-.95C8.08 7.14 9.94 6 12 6c2.62 0 4.88 1.86 5.39 4.43l.3 1.5 1.53.11c1.56.1 2.78 1.41 2.78 2.96 0 1.65-1.35 3-3 3zm-5.55-8h-2.9v3H8l4 4 4-4h-2.55z" fill="#FFB600"/>
                                    </svg>
                                </div>
                          </a>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </main>

            <?php echo $__env->make('layouts.sidebars.investors-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/local/www/apache24/data/resources/views/investors/audit-reports.blade.php ENDPATH**/ ?>