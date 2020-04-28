<?php $__env->startSection('page-title'); ?>
    News
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">News</span>
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
            
            <main class="col-xl-9 main-hero">
                <div class="first-parent">
                    <div class="row">
                        <div class="col-12">
                            <img src="<?php echo e(Voyager::image( $post['image'] )); ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 information">
                            <h2 class="heading-2"><?php echo e($post->getTranslatedAttribute('title', $locale, 'fallbackLocale')); ?></h2>
                            <p class="main-paragraph"><?php echo $post->getTranslatedAttribute('body', $locale, 'fallbackLocale'); ?></p>
                        </div>
                    </div>
                </div>
                <button>
                <a href="<?php echo e(route('press-center.news', app()->getLocale())); ?>" class="back-list">
                    <i class="fas fa-chevron-left"></i>
                    Back to list
                </a>
                </button>
            </main>

            <?php echo $__env->make('layouts.sidebars.press-center-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User 5\Desktop\KDB\resources\views/press-center/single-news.blade.php ENDPATH**/ ?>