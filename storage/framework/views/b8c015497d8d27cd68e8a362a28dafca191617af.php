

<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('investors/affiliate-personas.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('investors/affiliate-personas.2'); ?></span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('investors/affiliate-personas.3'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/investors/affiliate-personas.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container affiliate-personas mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <h2 class="heading-2 mb-4"><?php echo app('translator')->get('investors/affiliate-personas.4'); ?></h2>
                <table>
                    <tr>
                        <th>№</th>
                        <th><?php echo app('translator')->get('investors/affiliate-personas.5'); ?></th>
                        <th><?php echo app('translator')->get('investors/affiliate-personas.6'); ?></th>
                        <th><?php echo app('translator')->get('investors/affiliate-personas.7'); ?></th>
                    </tr>
                    <?php $i = 1; ?>
                    <?php $__currentLoopData = $parties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $party): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($i); ?></td>
                            <td><?php echo e($party->getTranslatedAttribute('name', app()->getLocale(), 'fallbackLocale')); ?></td>
                            <td><?php echo e($party->getTranslatedAttribute('address', app()->getLocale(), 'fallbackLocale')); ?></td>
                            <td><?php echo e($party->getTranslatedAttribute('grounds', app()->getLocale(), 'fallbackLocale')); ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </main>

            <?php echo $__env->make('layouts.sidebars.investors-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/u0560543/kdb.itmaker.uz/resources/views/investors/affiliate-personas.blade.php ENDPATH**/ ?>