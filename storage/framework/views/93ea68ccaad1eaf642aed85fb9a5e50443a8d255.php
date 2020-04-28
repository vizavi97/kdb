<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('about-us/mission.mission'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('about-us/mission.mission-2'); ?></span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>
    <title><?php echo app('translator')->get('about-us/mission.kdb-mission'); ?></title>
    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/about-us/mission.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<section class="desctop container mission">
    <div class="row">
        
        <main class="col-xl-9 main-hero mb-5">
            <div class="row first-box">
                <div class="col-lg-6">
                    <h3 class="heading-3">
                        <?php echo app('translator')->get('about-us/mission.mission-3'); ?>
                    </h3>
                    <p class="small-paragraph">
                        <?php echo app('translator')->get('about-us/mission.our-mission'); ?>
                    </p>
                    <p class="small-paragraph">
                        <?php echo app('translator')->get('about-us/mission.we-share'); ?>
                    </p>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo e(asset('img/about-us/mission/mission-1.jpg')); ?>" class="img-1 img-cover">
                </div>
            </div>
            <div class="row second-box">
                <div class="col-lg-6 parent">
                    <div class="item">
                        <div class="icon pr-3">
                            <img src="<?php echo e(asset('img/about-us/mission/trust.svg')); ?>">
                        </div>
                        <div class="information">
                            <h6 class="hero">Trust</h6>
                            <p class="small-paragraph helper">
                                <?php echo app('translator')->get('about-us/mission.build-trust'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 parent">
                    <div class="item">
                        <div class="icon pr-3">
                            <img src="<?php echo e(asset('img/about-us/mission/passion.svg')); ?>">
                        </div>
                        <div class="information">
                            <h6 class="hero"><?php echo app('translator')->get('about-us/mission.passion'); ?></h6>
                            <p class="small-paragraph helper">
                                <?php echo app('translator')->get('about-us/mission.stay-passionate'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 parent">
                    <div class="item">
                        <div class="icon pr-3">
                            <img src="<?php echo e(asset('img/about-us/mission/focus.svg')); ?>">
                        </div>
                        <div class="information">
                            <h6 class="hero"><?php echo app('translator')->get('about-us/mission.client-focus'); ?></h6>
                            <p class="small-paragraph helper">
                                <?php echo app('translator')->get('about-us/mission.understand-diverse'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 parent">
                    <div class="item">
                        <div class="icon pr-3">
                            <img src="<?php echo e(asset('img/about-us/mission/performance.svg')); ?>">
                        </div>
                        <div class="information">
                            <h6 class="hero"><?php echo app('translator')->get('about-us/mission.sustainable-performance'); ?></h6>
                            <p class="small-paragraph helper">
                                <?php echo app('translator')->get('about-us/mission.1'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row third-box">
                <div class="col-lg-6 order-lg-1 order-2 mt-lg-0 mt-5">
                    <h3 class="heading-3"><?php echo app('translator')->get('about-us/mission.2'); ?></h3>
                    <p class="small-paragraph">
                        <?php echo app('translator')->get('about-us/mission.3'); ?>
                    </p>
                    <ul class="right-icon">
                        <li>
                            <p>
                                <?php echo app('translator')->get('about-us/mission.4'); ?>
                            </p>
                        </li>
                        <li>
                            <p>
                                <?php echo app('translator')->get('about-us/mission.5'); ?>
                            </p>
                        </li>
                        <li>
                            <p>
                                <?php echo app('translator')->get('about-us/mission.6'); ?>
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 order-lg-2 order-1">
                    <img src="<?php echo e(asset('img/about-us/mission/mission-2.jpg')); ?>" class="img-1" width="100%">
                </div>
            </div>
            <div class="row third-box"></div>
        </main>

        <?php echo $__env->make('layouts.sidebars.about-us-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DESKTOP\KDB\resources\views/about-us/mission.blade.php ENDPATH**/ ?>