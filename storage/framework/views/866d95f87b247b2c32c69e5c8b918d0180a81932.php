<?php $__env->startSection('page-title'); ?>
    <?php echo e($page_name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>

    <span class="small-paragraph">
        <?php echo e($page_name); ?>

    </span>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>
        KDB | <?php echo e($page_name); ?>

    </title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/local-cards.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container local-cards">
        <div class="row">
            
            <main class="col-xl-9 main-hero ,b-5">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <?php $i = 1; ?>
                    <?php $__currentLoopData = $payment_systems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment_system): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e(($i == 1) ? 'active' : ''); ?>" 
                                id="<?php echo e($payment_system); ?>-tab"
                                data-toggle="tab"
                                href="#<?php echo e($payment_system); ?>"
                                role="tab"
                                aria-controls="<?php echo e($payment_system); ?>"
                                aria-selected="true">
                                    <?php echo e(strtoupper(str_replace('-', ' ', $payment_system))); ?>

                            </a>
                        </li>
                        <?php $i++; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <?php $a = 1; ?>
                    <?php $__currentLoopData = $payment_systems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment_system): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="tab-pane fade <?php echo e(($a == 1) ? 'show active' : ''); ?>" id="<?php echo e($payment_system); ?>" role="tabpanel" aria-labelledby="<?php echo e($payment_system); ?>-tab">
                            <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($card->payment_system == strtoupper(str_replace('-', ' ', $payment_system))): ?>
                                <a href="<?php echo e(route(Route::currentRouteName(), app()->getLocale()) . '/' . $card->slug); ?>" class="card-link">
                                    <article class="card-cards mt-4">
                                        <div class="row m-0">
                                            <div class="col-lg-4 p-0">
                                                <img src="<?php echo e(Voyager::image( $card->image )); ?>" class="img" alt="<?php echo e($card->name); ?>">
                                            </div>
                                            <div class="col-lg-8 p-0 pl-lg-4 mt-4 mt-lg-0">
                                                <div class="d-flex justify-content-between">
                                                    <h3 class="heading-3 mb-0"><?php echo e($card->name); ?></h3>
                                                    <p class="mb-0 fs-14 d-none d-md-flex align-items-center">
                                                        Learn all the advantages of the card
                                                        <i class="fas fa-angle-right pl-1"></i>
                                                    </p>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-md-4">
                                                        <p class="small-paragraph">Payment system:</p>
                                                        <p class="small-paragraph fs-14 d-flex align-items-center mb-0">
                                                            <img src="<?php echo e(asset('img/corporates/local-cards/payment-system.svg')); ?>">
                                                            <strong class="pl-2"><?php echo e($card->payment_system); ?></strong>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4 mt-4 mt-md-0">
                                                        <p class="small-paragraph">Currency:</p>
                                                        <p class="small-paragraph fs-14 d-flex align-items-center mb-0">
                                                            <img src="<?php echo e(asset('img/corporates/local-cards/cash.svg')); ?>">
                                                            <strong class="pl-2"><?php echo e($card->currency); ?></strong>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4 mt-4 mt-md-0">
                                                        <p class="small-paragraph">Type of card:</p>
                                                        <p class="small-paragraph fs-14 d-flex align-items-center mb-0">
                                                            <img src="<?php echo e(asset('img/corporates/local-cards/card-icon.svg')); ?>">
                                                            <strong class="pl-2"><?php echo e($card->type); ?></strong>
                                                        </p>
                                                    </div>
                                                </div>
                                                <?php if($card->note): ?>
                                                    <div class="custom-alert mt-4">
                                                        <p class="text"><?php echo e($card->note); ?></p>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </article>
                                </a>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php $a++; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.corporates-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Desktop\KDBLIVE\resources\views/cards.blade.php ENDPATH**/ ?>