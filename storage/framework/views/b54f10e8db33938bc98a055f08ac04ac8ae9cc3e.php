

<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('about-us/licenses-and-certificates.licenses-certificates'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('about-us/licenses-and-certificates.licenses-certificates-2'); ?></span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('about-us/licenses-and-certificates.kdb-licenses'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/about-us/licenses-and-certificates.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container licenses-and-certificates">
        <div class="row">
            
            <main class="col-md-9 main-hero mb-5">
                <div class="main-hero-inner">
                    <div class="row no-gutters">
                        <?php $__currentLoopData = $licenses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $license): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6 mb-4 flex-center item modal-open" modal-id="<?php echo e($license->id); ?>">
                            <div class="item-inner flex-center">
                                <img src="<?php echo e(Voyager::image( $license->presenter_image )); ?>" alt="KDB licenses">
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <?php $__currentLoopData = $licenses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $license): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="global-modal-window flex-center" id="<?php echo e($license->id); ?>">
                    <div class="global-modal-content">
                        <div class="modal-close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
                            </svg>
                        </div>
                        <div class="modal-content-inner">
                            <img src="<?php echo e(Voyager::image( $license->license_image )); ?>" alt="KDB licenses">
                            <div class="row px-4">
                                <div class="col-md-6">
                                    <h5 class="small-paragraph"><?php echo app('translator')->get('about-us/licenses-and-certificates.license-number'); ?></h5>
                                    <p class="small-paragraph"><?php echo e($license->license_number); ?></p>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="small-paragraph"><?php echo app('translator')->get('about-us/licenses-and-certificates.issued-date'); ?></h5>
                                    <p class="small-paragraph mb-0"><?php echo e($license->issued_date); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </main>

            <?php echo $__env->make('layouts.sidebars.about-us-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <!-- Modal js -->
    <script src="<?php echo e(asset('js/modal.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/u0560543/kdb.itmaker.uz/resources/views/about-us/licenses-and-certificates.blade.php ENDPATH**/ ?>