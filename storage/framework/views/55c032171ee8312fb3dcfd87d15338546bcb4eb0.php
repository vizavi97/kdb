<?php $__env->startSection('page-title', 'International Cards'); ?>

<?php $__env->startSection('breadcrumb'); ?>

    <span class="small-paragraph">International Cards</span>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | International Cards</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/local-cards.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container local-cards">
        <div class="row">
            
            <main class="col-xl-9 main-hero">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Visa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Master Card</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <?php if(count($visas) > 0): ?>
                            <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <?php if(count($visas) > 0): ?>
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <?php $__currentLoopData = $visas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href="<?php echo e(url('corporates/' . $visa->slug)); ?>" class="card-link">
                                                <article class="card-cards mt-4">
                                                    <div class="row m-0">
                                                        <div class="col-lg-4 p-0">
                                                            <img src="<?php echo e(Voyager::image( $visa->image )); ?>" class="img">
                                                        </div>
                                                        <div class="col-lg-8 p-0 pl-lg-4 mt-4 mt-lg-0">
                                                            <div class="d-flex justify-content-between">
                                                                <h3 class="heading-3 mb-0"><?php echo e($visa->name); ?></h3>
                                                                <p class="mb-0 fs-14 d-none d-md-flex align-items-center">
                                                                    Learn all the advantages of the card
                                                                    <i class="fas fa-angle-right pl-1"></i>
                                                                </p>
                                                            </div>
                                                            <div class="row mt-4">
                                                                <div class="col-md-4">
                                                                    <p class="small-paragraph">Payment system:</p>
                                                                    <p class="small-paragraph fs-14 d-flex align-items-center mb-0">
                                                                        <img src="<?php echo e(asset('img/corporates/local-cards/uzcard-icon.svg')); ?>">
                                                                        <strong class="pl-2"><?php echo e($visa->payment_system); ?></strong>
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-4 mt-4 mt-md-0">
                                                                    <p class="small-paragraph">Currency:</p>
                                                                    <p class="small-paragraph fs-14 d-flex align-items-center mb-0">
                                                                        <img src="<?php echo e(asset('img/corporates/local-cards/cash.svg')); ?>">
                                                                        <strong class="pl-2"><?php echo e($visa->currency); ?></strong>
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-4 mt-4 mt-md-0">
                                                                    <p class="small-paragraph">Type of card:</p>
                                                                    <p class="small-paragraph fs-14 d-flex align-items-center mb-0">
                                                                        <img src="<?php echo e(asset('img/corporates/local-cards/card-icon.svg')); ?>">
                                                                        <strong class="pl-2"><?php echo e($visa->type); ?></strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <?php if($visa->note): ?>
                                                                <div class="custom-alert mt-4">
                                                                    <p class="text"><?php echo e($visa->note); ?></p>
                                                                </div>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </article>
                                            </a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        <?php if(count($visas) > 0): ?>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <?php if(count($visas) > 0): ?>
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <?php $__currentLoopData = $visas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href="<?php echo e(url('corporates/' . $visa->slug)); ?>" class="card-link">
                                                <article class="card-cards mt-4">
                                                    <div class="row m-0">
                                                        <div class="col-lg-4 p-0">
                                                            <img src="<?php echo e(Voyager::image( $visa->image )); ?>" class="img">
                                                        </div>
                                                        <div class="col-lg-8 p-0 pl-lg-4 mt-4 mt-lg-0">
                                                            <div class="d-flex justify-content-between">
                                                                <h3 class="heading-3 mb-0"><?php echo e($visa->name); ?></h3>
                                                                <p class="mb-0 fs-14 d-none d-md-flex align-items-center">
                                                                    Learn all the advantages of the card
                                                                    <i class="fas fa-angle-right pl-1"></i>
                                                                </p>
                                                            </div>
                                                            <div class="row mt-4">
                                                                <div class="col-md-4">
                                                                    <p class="small-paragraph">Payment system:</p>
                                                                    <p class="small-paragraph fs-14 d-flex align-items-center mb-0">
                                                                        <img src="<?php echo e(asset('img/corporates/local-cards/uzcard-icon.svg')); ?>">
                                                                        <strong class="pl-2"><?php echo e($visa->payment_system); ?></strong>
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-4 mt-4 mt-md-0">
                                                                    <p class="small-paragraph">Currency:</p>
                                                                    <p class="small-paragraph fs-14 d-flex align-items-center mb-0">
                                                                        <img src="<?php echo e(asset('img/corporates/local-cards/cash.svg')); ?>">
                                                                        <strong class="pl-2"><?php echo e($visa->currency); ?></strong>
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-4 mt-4 mt-md-0">
                                                                    <p class="small-paragraph">Type of card:</p>
                                                                    <p class="small-paragraph fs-14 d-flex align-items-center mb-0">
                                                                        <img src="<?php echo e(asset('img/corporates/local-cards/card-icon.svg')); ?>">
                                                                        <strong class="pl-2"><?php echo e($visa->type); ?></strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <?php if($visa->note): ?>
                                                                <div class="custom-alert mt-4">
                                                                    <p class="text"><?php echo e($visa->note); ?></p>
                                                                </div>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </article>
                                            </a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </main>

            <?php echo $__env->make('layouts.sidebars.corporates-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Desktop\KDBBU\resources\views/corporates/international-cards.blade.php ENDPATH**/ ?>