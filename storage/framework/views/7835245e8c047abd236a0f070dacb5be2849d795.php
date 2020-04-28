

<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('about-us/history.history'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('about-us/history.history-2'); ?></span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('about-us/history.kdb-history'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/about-us/history.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- history starts -->
    <section class="desctop container history">
        <div class="row">
            <main class="col-xl-9 main-hero mb-5">
                <div class="history-content">
                    <div class="history-video align-right">
                        <a data-fancybox  href="<?php echo e(asset('video/history-' . app()->getLocale() . '.mp4')); ?>" class="fancybox">
                            <img class="img-cover" src="<?php echo e(asset('img/about-us/history/video-player.jpg')); ?>" alt="video player">
                        </a>
                    </div>
                    <p class="small-paragraph">
                        <?php echo app('translator')->get('about-us/history.jsc-kdb'); ?>
                    </p>
                    <p class="small-paragraph">
                        <?php echo app('translator')->get('about-us/history.kdb-enhances'); ?>
                    </p>
                    <p class="small-paragraph">
                        <?php echo app('translator')->get('about-us/history.korea-development'); ?> 
                    </p>
                    <p class="small-paragraph mb-md-0">
                        <?php echo app('translator')->get('about-us/history.jsc-kdb-2'); ?> 
                    </p>
                </div>

                <div class="history-evolution-box">
                    <div class="row no-gutters history-evolution">
                        <div class="history-evolution-inner">
                            <p class="heading-3">
                                <?php echo app('translator')->get('about-us/history.jsc-kdb-3'); ?> 
                            </p>
                            <div class="history-evolution-date"><span class="heading-3"><?php echo app('translator')->get('about-us/history.2018'); ?></span></div>
                        </div>
                        <div class="clear clear-top"></div>
                    </div>
                     <div class="row no-gutters history-evolution">
                        <div class="history-evolution-inner">
                            <p class="heading-3">
                                <?php echo app('translator')->get('about-us/history.jsc-kdb-4'); ?>
                            </p>
                            <div class="history-evolution-date"><span class="heading-3"><?php echo app('translator')->get('about-us/history.2016'); ?></span></div>
                        </div>
                    </div>
                    <div class="row no-gutters history-evolution">
                        <div class="history-evolution-inner">
                            <p class="heading-3">
                                <?php echo app('translator')->get('about-us/history.kdb-bank'); ?>
                            </p>
                            <div class="history-evolution-date"><span class="heading-3"><?php echo app('translator')->get('about-us/history.2014'); ?></span></div>
                        </div>
                    </div>
                    <div class="row no-gutters history-evolution">
                        <div class="history-evolution-inner">
                            <p class="heading-3">
                                <?php echo app('translator')->get('about-us/history.two-subsidiaries'); ?>  
                            </p>
                            <div class="history-evolution-date"><span class="heading-3"><?php echo app('translator')->get('about-us/history.2013'); ?></span></div>
                        </div>
                    </div>
                     <div class="row no-gutters history-evolution">
                        <div class="history-evolution-inner">
                            <p class="heading-3">
                                <?php echo app('translator')->get('about-us/history.rsb-nb'); ?>
                            </p>
                            <div class="history-evolution-date"><span class="heading-3"><?php echo app('translator')->get('about-us/history.2011'); ?></span></div>
                        </div>
                    </div>
                     <div class="row no-gutters history-evolution">
                        <div class="history-evolution-inner">
                            <p class="heading-3">
                                <?php echo app('translator')->get('about-us/history.kdb-decided'); ?>
                            </p>
                            <div class="history-evolution-date"><span class="heading-3"><?php echo app('translator')->get('about-us/history.2010'); ?></span></div>
                        </div>
                    </div>
                    <div class="row no-gutters history-evolution">
                        <div class="history-evolution-inner">
                            <p class="heading-3">
                                <?php echo app('translator')->get('about-us/history.renamed-to'); ?>
                            </p>
                            <div class="history-evolution-date"><span class="heading-3"><?php echo app('translator')->get('about-us/history.2006'); ?></span></div>
                        </div>
                    </div>
                    <div class="row no-gutters history-evolution botton">
                        <div class="history-evolution-inner">
                            <p class="heading-3">
                                <?php echo app('translator')->get('about-us/history.joint-uzbek'); ?>
                            </p>
                            <div class="history-evolution-date"><span class="heading-3"><?php echo app('translator')->get('about-us/history.1997'); ?></span></div>
                        </div>
                        <div class="clear clear-bottom"></div>
                    </div>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.about-us-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    <!-- history ends -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <!-- Fancybox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/local/www/apache24/data/resources/views/about-us/history.blade.php ENDPATH**/ ?>