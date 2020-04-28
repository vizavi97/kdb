<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('about-us/message-from-chairman.message-from'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('about-us/message-from-chairman.message-from-2'); ?></span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('about-us/message-from-chairman.kdb-message'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/about-us/message-from-chairman.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container message-from-chairman">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <?php if( !is_null($message) ): ?>
                    <div class="row no-gutters">
                        <div class="col-md-4 first-parent">
                            <div class="card item">
                                <img src="<?php echo e(Voyager::image( $message['image'] )); ?>" class="card-img-top">
                                <div class="card-body">
                                    <h4 class="heading-4"><?php echo e($message->getTranslatedAttribute('name', $locale, 'fallbackLocale')); ?></h4>
                                    <p class="small-paragraph blue"><?php echo e($message->getTranslatedAttribute('desc', $locale, 'fallbackLocale')); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 second-parent">
                            <div class="rich-text">
                                <?php echo $message->getTranslatedAttribute('message', $locale, 'fallbackLocale'); ?>

                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </main>

            <?php echo $__env->make('layouts.sidebars.about-us-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DESKTOP\KDB\resources\views/about-us/message-from-chairman.blade.php ENDPATH**/ ?>