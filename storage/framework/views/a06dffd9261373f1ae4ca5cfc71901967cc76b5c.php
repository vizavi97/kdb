<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('individuals/remote-banking/sms-informing.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>

    <span class="small-paragraph"><?php echo app('translator')->get('individuals/remote-banking/sms-informing.2'); ?></span>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('individuals/remote-banking/sms-informing.3'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/individuals/remote-banking/sms-informing.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container sms-informing mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <h2 class="heading-2"><?php echo app('translator')->get('individuals/remote-banking/sms-informing.4'); ?></h2>
                <p class="small-paragraph">
                    <?php echo app('translator')->get('individuals/remote-banking/sms-informing.5'); ?>
                </p>
                <h3 class="heading-3 my-4"><?php echo app('translator')->get('individuals/remote-banking/sms-informing.6'); ?></h3>
                <ul class="right-icon">
                    <li>
                        <p><?php echo app('translator')->get('individuals/remote-banking/sms-informing.7'); ?></p>
                    </li>
                    <li>
                        <p><?php echo app('translator')->get('individuals/remote-banking/sms-informing.8'); ?></p>
                    </li>
                    <li>
                        <p><?php echo app('translator')->get('individuals/remote-banking/sms-informing.9'); ?></p>
                    </li>
                    <li>
                        <p><?php echo app('translator')->get('individuals/remote-banking/sms-informing.10'); ?></p>
                    </li>
                </ul>
                <p class="small-paragraph mb-4">
                    <?php echo app('translator')->get('individuals/remote-banking/sms-informing.11'); ?>
                </p>
                <button class="mb-4 modal-open" modal-id="modal1"><?php echo app('translator')->get('individuals/remote-banking/sms-informing.12'); ?></button>
                <p class="small-paragraph"><?php echo app('translator')->get('individuals/remote-banking/sms-informing.13'); ?></p>
                <a class="button" href="<?php echo e(asset('img/individuals/remote-banking/sms-informing/instruction.docx')); ?>" download><?php echo app('translator')->get('individuals/remote-banking/sms-informing.14'); ?></a>
                <div class="global-modal-window flex-center" id="modal1">
                    <div class="global-modal-content">
                        <div class="modal-close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
                            </svg>
                        </div>
                        <div class="modal-content-inner">
                            <div class="p-4">
                                <h3 class="heading-2 mb-4"><?php echo app('translator')->get('individuals/remote-banking/sms-informing.15'); ?></h3>
                                <div class="row item no-gutters">
                                    <div class="col-md-5">
                                        <p class="main">
                                            <?php echo app('translator')->get('individuals/remote-banking/sms-informing.16'); ?>
                                        </p>
                                    </div>
                                    <div class="col-md-7">
                                        <p class="small-paragraph">
                                            <?php echo app('translator')->get('individuals/remote-banking/sms-informing.17'); ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="row item no-gutters">
                                    <div class="col-md-5">
                                        <p class="main">
                                            <?php echo app('translator')->get('individuals/remote-banking/sms-informing.18'); ?>
                                        </p>
                                    </div>
                                    <div class="col-md-7">
                                        <p class="small-paragraph">
                                            <?php echo app('translator')->get('individuals/remote-banking/sms-informing.19'); ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="custom-alert warning mt-4">
                                    <p class="text">
                                        <?php echo app('translator')->get('individuals/remote-banking/sms-informing.20'); ?>
                                    </p>
                                </div>
                                <p class="small-paragraph mt-4"><strong><?php echo app('translator')->get('individuals/remote-banking/sms-informing.21'); ?></strong></p>
                                <p class="small-paragraph"><?php echo app('translator')->get('individuals/remote-banking/sms-informing.22'); ?></p>
                                <p class="small-paragraph"><?php echo app('translator')->get('individuals/remote-banking/sms-informing.23'); ?></p>
                                <div class="custom-alert warning mt-4">
                                    <p class="text">
                                        <?php echo app('translator')->get('individuals/remote-banking/sms-informing.24'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.individuals-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/modal.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DESKTOP\KDB\resources\views/individuals/remote-banking/sms-informing.blade.php ENDPATH**/ ?>