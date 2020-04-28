

<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('press-center/procurement.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('press-center/procurement.2'); ?></span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('press-center/procurement.3'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/press-center/procurement.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container procurement mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="first-parent">
                    <h2 class="heading-2">
                        <?php echo app('translator')->get('press-center/procurement.4'); ?>
                    </h2>
                    <p>
                        <?php echo app('translator')->get('press-center/procurement.5'); ?>
                    </p>
                    <p>
                        <?php echo app('translator')->get('press-center/procurement.6'); ?>
                    </p>
                    <ul class="right-icon">
                        <li>
                            <p>
                                <?php echo app('translator')->get('press-center/procurement.7'); ?>
                            </p>
                        </li>
                        <li>
                            <p>
                                <?php echo app('translator')->get('press-center/procurement.8'); ?>
                            </p>
                        </li>
                        <li>
                            <p>
                                <?php echo app('translator')->get('press-center/procurement.9'); ?>
                            </p>
                        </li>
                        <li>
                            <p>
                                <?php echo app('translator')->get('press-center/procurement.10'); ?>
                            </p>
                        </li>
                        <li>
                            <p>
                                <?php echo app('translator')->get('press-center/procurement.11'); ?>
                            </p>
                        </li>
                        <li>
                            <p>
                                <?php echo app('translator')->get('press-center/procurement.12'); ?>
                            </p>
                        </li>
                    </ul>
                    <p>
                        <?php echo app('translator')->get('press-center/procurement.13'); ?>
                    </p>
                    <p>
                        <?php echo app('translator')->get('press-center/procurement.14'); ?>
                    </p>
                    <p>
                        <?php echo app('translator')->get('press-center/procurement.15'); ?>
                    </p>
                    <p>
                        <?php echo app('translator')->get('press-center/procurement.16'); ?>
                    </p>
                </div>
                <div class="second-parent">

                    
                    <?php if(count($emails) > 0): ?>
                        <div class="email">
                            <span class="small-paragraph email-card-title"><?php echo app('translator')->get('press-center/procurement.17'); ?></span>
                            <div class="row">
                                <?php $__currentLoopData = $emails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-4 mb-4">
                                        <a class="email-card" href="mailto:<?php echo e($email->email); ?>">
                                            <?php echo e($email->email); ?>

                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.press-center-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/u0560543/kdb.itmaker.uz/resources/views/press-center/procurement.blade.php ENDPATH**/ ?>