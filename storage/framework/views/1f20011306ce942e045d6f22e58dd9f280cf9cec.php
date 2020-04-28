

<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('corporates/trade-finance.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>

    <span class="small-paragraph"><?php echo app('translator')->get('corporates/trade-finance.2'); ?></span>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('corporates/trade-finance.3'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/trade-finance.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container trade-finance">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <h2 class="heading-2"><?php echo app('translator')->get('corporates/trade-finance.4'); ?></h2>
                <p class="small-paragraph">
                    <?php echo app('translator')->get('corporates/trade-finance.5'); ?>
                </p>
                <p class="small-paragraph">
                    <?php echo app('translator')->get('corporates/trade-finance.6'); ?>
                </p>

                <h3 class="heading-3"><?php echo app('translator')->get('corporates/trade-finance.7'); ?></h3>
                <div class="row mt-4 pb-48">
                    <div class="col-lg-4">
                        <figure class="m-0">
                            <img class="w-100" src="<?php echo e(asset('img/corporates/trade-finance/export-import.svg')); ?>" alt="Export and import Letters of credit">
                            <figcaption>
                                <img src="<?php echo e(asset('img/corporates/trade-finance/icon-1.svg')); ?>" alt="">
                                <span><?php echo app('translator')->get('corporates/trade-finance.8'); ?></span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4">
                        <figure class="m-0">
                            <img class="w-100" src="<?php echo e(asset('img/corporates/trade-finance/bank-guarantees.svg')); ?>" alt="Bank guarantees">
                            <figcaption>
                                <img src="<?php echo e(asset('img/corporates/trade-finance/icon-2.svg')); ?>" alt="">
                                <span><?php echo app('translator')->get('corporates/trade-finance.9'); ?></span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4">
                        <figure class="m-0">
                            <img class="w-100" src="<?php echo e(asset('img/corporates/trade-finance/calculations.svg')); ?>" alt="Documentary Collection form of calculations.">
                            <figcaption>
                                <img src="<?php echo e(asset('img/corporates/trade-finance/icon-3.svg')); ?>" alt="">
                                <span><?php echo app('translator')->get('corporates/trade-finance.10'); ?></span>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                
                <?php if(count($emails) > 0): ?>
                    <div class="email pb-48">
                        <span class="small-paragraph email-card-title"><?php echo app('translator')->get('corporates/trade-finance.11'); ?></span>
                        <div class="row">
                            <?php $__currentLoopData = $emails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-4">
                                    <a class="email-card" href="mailto:<?php echo e($email->email); ?>">
                                        <?php echo e($email->email); ?>

                                    </a>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php endif; ?>
                

                <div class="credit">
                    <img class="w-100 mb-4 align-right" src="<?php echo e(asset('img/corporates/trade-finance/credit.jpg')); ?>" alt="Letters of credit with post-financing option">
                    <h3 class="heading-3"><?php echo app('translator')->get('corporates/trade-finance.12'); ?></h3>
                    <p class="small-paragraph">
                        <?php echo app('translator')->get('corporates/trade-finance.13'); ?>
                    </p>
                    <p class="small-paragraph bold"><?php echo app('translator')->get('corporates/trade-finance.14'); ?></p>
                    <ul class="right-icon">
                        <li>
                            <p><?php echo app('translator')->get('corporates/trade-finance.15'); ?></p>
                        </li>
                        <li>
                            <p><?php echo app('translator')->get('corporates/trade-finance.16'); ?></p>
                        </li>
                        <li>
                            <p><?php echo app('translator')->get('corporates/trade-finance.17'); ?></p>
                        </li>
                        <li>
                            <p><?php echo app('translator')->get('corporates/trade-finance.18'); ?></p>
                        </li>
                        <li>
                            <p><?php echo app('translator')->get('corporates/trade-finance.19'); ?></p>
                        </li>
                        <li>
                            <p><?php echo app('translator')->get('corporates/trade-finance.20'); ?></p>
                        </li>
                        <li>
                            <p><?php echo app('translator')->get('corporates/trade-finance.21'); ?></p>
                        </li>
                    </ul>
                    <div class="custom-alert">
                        <p class="text">
                            <?php echo app('translator')->get('corporates/trade-finance.22'); ?>
                        </p>
                    </div>
                </div>
                <div class="letters-credit">
                    <img class="w-100 mb-4 align-right" src="<?php echo e(asset('img/corporates/trade-finance/import-letters-of-credit.jpg')); ?>" alt="import Letters of credit">
                    <h3 class="heading-3"><?php echo app('translator')->get('corporates/trade-finance.23'); ?></h3>
                    <ul class="right-icon mt-4">
                        <li>
                            <p>
                                <?php echo app('translator')->get('corporates/trade-finance.24'); ?>
                            </p>
                        </li>
                        <li>
                            <p>
                                <?php echo app('translator')->get('corporates/trade-finance.25'); ?>
                            </p>
                        </li>
                        <li>
                            <p>
                                <?php echo app('translator')->get('corporates/trade-finance.26'); ?>
                            </p>
                        </li>
                    </ul>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.corporates-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/u0560543/kdb.itmaker.uz/resources/views/corporates/trade-finance.blade.php ENDPATH**/ ?>