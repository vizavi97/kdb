

<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('press-center/single-news.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('press-center/single-news.2'); ?></span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | <?php echo e($post->getTranslatedAttribute('title', $locale, 'fallbackLocale')); ?></title>

    <meta name="keywords" content="<?php echo e($post->getTranslatedAttribute('keywords', $locale, 'fallbackLocale')); ?>">
    <meta name="description" content="<?php echo e($post->getTranslatedAttribute('excerpt', $locale, 'fallbackLocale')); ?>">

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/press-center/single-news.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container single-news mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="first-parent">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="h-100 d-flex align-items-center">
                                <div>
                                    <h2 class="heading-2"><?php echo e($post->getTranslatedAttribute('title', $locale, 'fallbackLocale')); ?></h2>
                                    <div class="post-date">
                                        <?php if(empty($post->date)): ?>
                                            <?php echo e(date('d.m.Y', strtotime(  $post->created_at ))); ?>

                                        <?php elseif($locale == "en"): ?>
                                            <?php echo e(date('d.m.Y g:i a', strtotime(  $post->date ))); ?>

                                        <?php else: ?>
                                            <?php echo e(date('d.m.Y G:i', strtotime(  $post->date ))); ?>

                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="<?php echo e(Voyager::image( $post['image'] )); ?>" class="main-image">
                        </div>
                    </div>
                    <div class="row my-5">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10">
                            <div class="rich-text">
                                <?php echo $post->getTranslatedAttribute('body', $locale, 'fallbackLocale'); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <button>
                    <a href="<?php echo e(route('press-center.news', app()->getLocale())); ?>" class="back-list">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12l4.58-4.59z" fill="#fff"/>
                        </svg>
                        <?php echo app('translator')->get('press-center/single-news.3'); ?>
                    </a>
                </button>
            </main>

            <?php echo $__env->make('layouts.sidebars.press-center-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/local/www/apache24/data/resources/views/press-center/single-news.blade.php ENDPATH**/ ?>