

<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('press-center/dividends.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('press-center/dividends.2'); ?></span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('press-center/dividends.3'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/press-center/dividends.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container dividends mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <h2 class="heading-2 mb-4"><?php echo app('translator')->get('press-center/dividends.4'); ?></h2>
                <p class="small-paragraph">
                    <?php echo app('translator')->get('press-center/dividends.5'); ?>
                </p>
                <table>
                    <tr>
                        <th><?php echo app('translator')->get('press-center/dividends.6'); ?></th>
                        <th><?php echo app('translator')->get('press-center/dividends.7'); ?></th>
                        <th><?php echo app('translator')->get('press-center/dividends.8'); ?></th>
                        <th><?php echo app('translator')->get('press-center/dividends.9'); ?></th>
                    </tr>
                    <?php $__currentLoopData = $dividends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dividend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($dividend->getTranslatedAttribute('payment_year', app()->getLocale(), 'fallbackLocale')); ?></td>
                            <td><?php echo e($dividend->getTranslatedAttribute('fy', app()->getLocale(), 'fallbackLocale')); ?></td>
                            <td><?php echo e($dividend->getTranslatedAttribute('currency', app()->getLocale(), 'fallbackLocale')); ?></td>
                            <td><?php echo e($dividend->getTranslatedAttribute('purpose', app()->getLocale(), 'fallbackLocale')); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </main>

            <?php echo $__env->make('layouts.sidebars.press-center-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/u0560543/kdb.itmaker.uz/resources/views/press-center/dividends.blade.php ENDPATH**/ ?>