
<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('individuals/payments-and-transfers.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>

    <span class="small-paragraph"><?php echo app('translator')->get('individuals/payments-and-transfers.2'); ?></span>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('individuals/payments-and-transfers.3'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/individuals/payments-and-transfers.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container payments-and-transfers">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <!-- Begin Transfer Service -->
                <div class="row transfer-service pb-48">
                    <div class="col-md-6 transfer_service__item pr-md-3">
                        <h2 class="heading-2"><?php echo app('translator')->get('individuals/payments-and-transfers.4'); ?></h2>
                        <p class="small-paragraph"><?php echo app('translator')->get('individuals/payments-and-transfers.5'); ?></p>
                    </div>
                    <div class="col-md-6 service_video p-0">
                        <a data-fancybox  href="<?php echo e(asset('video/transfer-' . app()->getLocale() . '.mp4')); ?>" class="fancybox">
                            <img class="img-cover" src="<?php echo e(asset('img/individuals/payments-and-transfers/player-background.jpg')); ?>" alt="Video player">
                            <i class="far fa-play-circle"></i>
                        </a>
                    </div>
                </div>
                <!-- End Transfer Service -->
                
                
                <!-- Begin Process Description -->
                <section class="process_descr">
                    <div class="row pb-48">
                        <div class="col-12">
                            <h3 class="heading-3 mb-4"><?php echo app('translator')->get('individuals/payments-and-transfers.6'); ?></h3>
                        </div>
                        <div class="col-lg-6 descr_box">
                            <div class="process_item box-shadow">
                                <h4 class="heading-4"><span>1.</span> <?php echo app('translator')->get('individuals/payments-and-transfers.7'); ?></h4>
                                <p class="small-paragraph"><?php echo app('translator')->get('individuals/payments-and-transfers.8'); ?></p>
                            </div>
                        </div>
                        <div class="col-lg-6 descr_box">
                            <div class="process_item box-shadow">
                                <h4 class="heading-4"><span>2.</span> <?php echo app('translator')->get('individuals/payments-and-transfers.9'); ?></h4>
                                <p class="small-paragraph"><?php echo app('translator')->get('individuals/payments-and-transfers.10'); ?></p>
                            </div>
                        </div>
                        <div class="col-lg-6 descr_box">
                            <div class="process_item box-shadow">
                                <h4 class="heading-4"><span>3.</span> <?php echo app('translator')->get('individuals/payments-and-transfers.11'); ?></h4>
                                <p class="small-paragraph"><?php echo app('translator')->get('individuals/payments-and-transfers.12'); ?></p>
                            </div>
                        </div>
                        <div class="col-lg-6 descr_box">
                            <div class="process_item box-shadow">
                                <h4 class="heading-4"><span>4.</span> <?php echo app('translator')->get('individuals/payments-and-transfers.13'); ?></h4>
                                <p class="small-paragraph"><?php echo app('translator')->get('individuals/payments-and-transfers.14'); ?></p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Process Description -->
                <!-- Begin Currency -->
                <section class="currency pb-48">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="heading-3"><?php echo app('translator')->get('individuals/payments-and-transfers.15'); ?></h3>
                            <p class="small-paragraph mb-24"><?php echo app('translator')->get('individuals/payments-and-transfers.16'); ?></p>
                        </div>

                        
                        <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-4 col-sm-6">
                                <div class="currency_item box-shadow">
                                    <strong><?php echo e($currency->abbr); ?></strong>
                                    <span><?php echo e($currency->getTranslatedAttribute('name', app()->getLocale(), 'fallbackLocale')); ?></span>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        

                        <div class="col-12 contact_info">
                            <p class="small-paragraph mb-24">
                                <?php echo app('translator')->get('individuals/payments-and-transfers.17'); ?>
                            </p>
                            <strong class="mb-24"><?php echo app('translator')->get('individuals/payments-and-transfers.18'); ?></strong>
                        </div>

                        <!-- Contact Info -->
                        <?php $__currentLoopData = $emails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                            <div class="col-lg-4 col-sm-6">
                                <div class="contact box-shadow">
                                    <img src="<?php echo e(asset('img/global/user-tie-solid.svg')); ?>" alt="user">
                                    <span>
                                        <a href="mailto:<?php echo e($email->email); ?>" class="phone-number"><?php echo e($email->email); ?></a>
                                    </span>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!--End Contact Info -->
                        
                    </div>
                </section>
                <!-- End Currency -->
            </main>

            <?php echo $__env->make('layouts.sidebars.individuals-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <!-- Fancybox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/local/www/apache24/data/resources/views/individuals/payments-and-transfers.blade.php ENDPATH**/ ?>