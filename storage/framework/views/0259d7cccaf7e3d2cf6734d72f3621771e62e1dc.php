<?php $__env->startSection('page-title'); ?>
    <?php echo e($card->getTranslatedAttribute('name', $locale, 'fallbackLocale')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | <?php echo e($card->getTranslatedAttribute('name', $locale, 'fallbackLocale')); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/single-local-card.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!-- Breadcrumb starts -->
    <section class="breadcrumb-custom container-fluid single-local-card">
        <div class="desctop container">
            <h1 class="heading-1"><?php echo e($card->getTranslatedAttribute('name', $locale, 'fallbackLocale')); ?></h1>
            <div>
                <a class="small-paragraph" href="<?php echo e(route('home', app()->getLocale())); ?>">Home</a> /
                
                <span class="small-paragraph" href="#"><?php echo e($card->getTranslatedAttribute('name', $locale, 'fallbackLocale')); ?></span>
            </div>
            <article class="card-cards mt-5">
                <div class="row m-0">
                    <div class="col-lg-4 p-0">
                        <img src="<?php echo e(Voyager::image( $card['image'] )); ?>" class="img" alt="<?php echo e($card->getTranslatedAttribute('name', $locale, 'fallbackLocale')); ?>">
                    </div>
                    <div class="col-lg-8 p-0 pl-lg-5 mt-4 mt-lg-0">
                        <div class="row">
                            <div class="col-md-4">
                                <p class="small-paragraph">Payment system:</p>
                                <p class="small-paragraph fs-14 d-flex align-items-center mb-0">
                                    <img src="<?php echo e(asset('img/corporates/local-cards/payment-system.svg')); ?>">
                                    <strong class="pl-2"><?php echo e($card->getTranslatedAttribute('payment_system', $locale, 'fallbackLocale')); ?></strong>
                                </p>
                            </div>
                            <div class="col-md-4 mt-4 mt-md-0">
                                <p class="small-paragraph">Currency:</p>
                                <p class="small-paragraph fs-14 d-flex align-items-center mb-0">
                                    <img src="<?php echo e(asset('img/corporates/local-cards/cash.svg')); ?>">
                                    <strong class="pl-2"><?php echo e($card->getTranslatedAttribute('currency', $locale, 'fallbackLocale')); ?></strong>
                                </p>
                            </div>
                            <div class="col-md-4 mt-4 mt-md-0">
                                <p class="small-paragraph">Type of card:</p>
                                <p class="small-paragraph fs-14 d-flex align-items-center mb-0">
                                    <img src="<?php echo e(asset('img/corporates/local-cards/card-icon.svg')); ?>">
                                    <strong class="pl-2"><?php echo e($card->getTranslatedAttribute('type', $locale, 'fallbackLocale')); ?></strong>
                                </p>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-4">
                                <p class="small-paragraph">The validity of the card:</p>
                                <p class="small-paragraph fs-14 d-flex align-items-center mb-0">
                                    <strong class="pl-2"><?php echo e($card['validity_period']); ?></strong>
                                </p>
                            </div>
                            <div class="col-md-4 mt-4 mt-md-0">
                                <p class="small-paragraph">Transaction processing:</p>
                                <p class="small-paragraph fs-14 d-flex align-items-center mb-0">
                                    <strong class="pl-2"><?php echo e($card->getTranslatedAttribute('transaction', $locale, 'fallbackLocale')); ?></strong>
                                </p>
                            </div>
                            <div class="col-md-4 mt-4 mt-md-0">
                                <p class="small-paragraph">Card account maintenance:</p>
                                <p class="small-paragraph fs-14 d-flex align-items-center mb-0">
                                    <strong class="pl-2"><?php echo e($card->getTranslatedAttribute('maintenance', $locale, 'fallbackLocale')); ?></strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <!-- Breadcrumb ends -->

    
    <section class="desctop container single-local-card mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero">
                <div class="body"><?php echo $card->getTranslatedAttribute('body', $locale, 'fallbackLocale'); ?></div>
            </main>

            <?php echo $__env->make('layouts.sidebars.corporates-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User 5\Desktop\KDB\resources\views/single-card.blade.php ENDPATH**/ ?>