

<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('interactive-services/subscriptionfor-banks-materials.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('interactive-services/subscriptionfor-banks-materials.2'); ?></span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('interactive-services/subscriptionfor-banks-materials.3'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/interactive-services/subscription-for-banks-materials.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container subscription-for-banks-materials mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="parent-1">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="item">
                                <h2 class="heading-2">
                                    <?php echo app('translator')->get('interactive-services/subscriptionfor-banks-materials.4'); ?>
                                </h2>
                                <p class="helper">
                                    <?php echo app('translator')->get('interactive-services/subscriptionfor-banks-materials.5'); ?>
                                </p>
                                <form action="<?php echo e(route('interactive-services.post-subscription', app()->getLocale())); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <label for="name"><?php echo app('translator')->get('interactive-services/subscriptionfor-banks-materials.6'); ?></label>
                                    <input type="text" name="full_name" id="name" class="email mb-4" placeholder="<?php echo app('translator')->get('interactive-services/subscriptionfor-banks-materials.7'); ?>" required>

                                    <label for="company-name"><?php echo app('translator')->get('interactive-services/subscriptionfor-banks-materials.8'); ?></label>
                                    <input type="text" name="company" id="company-name" class="email mb-4" placeholder="<?php echo app('translator')->get('interactive-services/subscriptionfor-banks-materials.9'); ?>">

                                    <label for="email"><?php echo app('translator')->get('interactive-services/subscriptionfor-banks-materials.10'); ?></label>
                                    <input type="text" name="email" id="email" class="email" placeholder="<?php echo app('translator')->get('interactive-services/subscriptionfor-banks-materials.11'); ?>" required>

                                    <button type="submit"><?php echo app('translator')->get('interactive-services/subscriptionfor-banks-materials.12'); ?></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.interactive-services-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    


    <?php if(Session::has('success')): ?>
        <div class="success-message">
            <div class="global-modal-window" style="display: flex;">
                <div class="global-modal-content">
                    <div class="modal-close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
                        </svg>
                    </div>
                    <div class="modal-content-inner">
                        <p class="small-paragraph mb-0">
                            <?php echo app('translator')->get('interactive-services/subscriptionfor-banks-materials.13'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?> 

    
    <script src="<?php echo e(asset('js/modal.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/u0560543/kdb.itmaker.uz/resources/views/interactive-services/subscription-for-banks-materials.blade.php ENDPATH**/ ?>