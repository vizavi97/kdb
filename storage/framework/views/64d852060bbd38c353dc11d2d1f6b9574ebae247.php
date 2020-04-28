

<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('about-us/ratings.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('about-us/ratings.2'); ?></span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('about-us/ratings.3'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/about-us/ratings.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container ratings">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="main-hero-inner">
                    <div class="row no-gutters">
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div class="col-md-6 mb-4 flex-center item">
                                <div class="item-inner flex-center modal-open" modal-id="<?php echo e($item['presenter_name']); ?>">
                                    <img src="<?php echo e(Voyager::image( $item['presenter_img'] )); ?>" alt="KDB certificates">
                                </div>
                            </div>

                            <div class="global-modal-window flex-center" id="<?php echo e($item['presenter_name']); ?>">
                                <div class="global-modal-content">
                                    <div class="modal-close">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
                                        </svg>
                                    </div>
                                    <div class="modal-content-inner">
                                        <ul>
                                            <?php $a = 1; ?>
                                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_inner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if( $item['presenter_name'] == $item_inner['presenter_name'] ): ?>
                                                    <li>
                                                        <button class="tablinks <?php echo e($a == 1 ? 'show active' : ''); ?>" onclick="openTabs(event, <?php echo e($item_inner['id']); ?>)">
                                                            <span><?php echo e(date( 'd.m.Y', strtotime($item_inner['issued_date']))); ?></span>
                                                        </button>
                                                    </li>
                                                <?php endif; ?>
                                                <?php $a++;  ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                        <?php $b = 1; ?>
                                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_inner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if( $item['presenter_name'] == $item_inner['presenter_name'] ): ?>
                                                <div id="<?php echo e($item_inner['id']); ?>" class="tabcontent <?php echo e($b == 1 ? 'show active' : ''); ?>">
                                                    <img src="<?php echo e(Voyager::image( $item_inner['rating_img'] )); ?>" alt="KDB licenses">
                                                </div>
                                            <?php $b++;  ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>    
            </main>

            <?php echo $__env->make('layouts.sidebars.about-us-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <!-- Modal js -->
    <script src="<?php echo e(asset('js/modal.js')); ?>"></script>

    <!-- Tab js -->
    <script src="<?php echo e(asset('js/tab.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/u0560543/kdb.itmaker.uz/resources/views/about-us/ratings.blade.php ENDPATH**/ ?>