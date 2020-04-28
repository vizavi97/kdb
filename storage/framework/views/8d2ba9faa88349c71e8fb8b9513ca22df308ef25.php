

<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('corporates/export-import.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>

    <span class="small-paragraph"><?php echo app('translator')->get('corporates/export-import.2'); ?></span>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('corporates/export-import.3'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/export-import.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container export-import">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <h2 class="heading-2"><?php echo app('translator')->get('corporates/export-import.4'); ?></h2>
                <p class="small-paragraph"><?php echo app('translator')->get('corporates/export-import.5'); ?></p>
                <h3 class="heading-3 mb-3"><?php echo app('translator')->get('corporates/export-import.6'); ?></h3>
                <div class="item">
                    <p class="small-paragraph">
                        <?php echo app('translator')->get('corporates/export-import.7'); ?>
                    </p>
                </div>
                <div class="item">
                    <p class="small-paragraph">
                        <?php echo app('translator')->get('corporates/export-import.8'); ?>
                    </p>
                </div>
                <div class="item">
                    <p class="small-paragraph">
                        <?php echo app('translator')->get('corporates/export-import.9'); ?>
                    </p>
                </div>
                <div class="item">
                    <p class="small-paragraph">
                        <?php echo app('translator')->get('corporates/export-import.10'); ?>
                    </p>
                </div>
                <div class="item">
                    <p class="small-paragraph">
                        <?php echo app('translator')->get('corporates/export-import.11'); ?>
                    </p>
                </div>
                <div class="item">
                    <p class="small-paragraph">
                        <?php echo app('translator')->get('corporates/export-import.12'); ?>
                    </p>
                </div>
                <div class="item">
                    <p class="small-paragraph">
                        <?php echo app('translator')->get('corporates/export-import.13'); ?>
                    </p>
                </div>
                <div class="item">
                    <p class="small-paragraph">
                        <?php echo app('translator')->get('corporates/export-import.14'); ?>
                    </p>
                </div>
                <div class="item">
                    <p class="small-paragraph">
                        <?php echo app('translator')->get('corporates/export-import.15'); ?>
                    </p>
                </div>
                <h3 class="heading-3 mb-3 mt-4"><?php echo app('translator')->get('corporates/export-import.16'); ?></h3>
                <div class="item">
                    <p class="small-paragraph">
                        <?php echo app('translator')->get('corporates/export-import.17'); ?>
                    </p>
                </div>
                <p class="small-paragraph mt-4">
                    <?php echo app('translator')->get('corporates/export-import.18'); ?>
                </p>

                <button class="modal-open" modal-id="modal1"><?php echo app('translator')->get('corporates/export-import.19'); ?></button>

                <div class="global-modal-window flex-center" id="modal1">
                    <div class="global-modal-content">
                        <div class="modal-close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
                            </svg>
                        </div>
                        <div class="modal-content-inner">
                            <div class="p-4">
                                <h3 class="heading-2 mb-4"><?php echo app('translator')->get('corporates/export-import.20'); ?></h3>

                                <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="row item no-gutters">
                                    <div class="col-md-3">
                                        <p class="small-paragraph"><?php echo e($contact->user_name); ?></p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="small-paragraph"><?php echo e($contact->getTranslatedAttribute('duty', app()->getLocale(), 'fallbackLocale')); ?></p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="small-paragraph"><?php echo e($contact->phone); ?></p>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="mailto:<?php echo e($contact->email); ?>" class="small-paragraph modal-mail"><?php echo e($contact->email); ?></a>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.corporates-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/modal.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/u0560543/kdb.itmaker.uz/resources/views/corporates/export-import.blade.php ENDPATH**/ ?>