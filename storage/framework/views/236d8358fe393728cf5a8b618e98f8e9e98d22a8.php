<?php $__env->startSection('page-title', 'Ratings'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">Ratings</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Ratings</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/about-us/ratings.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container ratings">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="main-hero-inner">
                    <div class="row no-gutters">
                        <?php $__currentLoopData = $presenters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $presenter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="col-md-6 mb-4 flex-center item">
                            <div class="item-inner flex-center modal-open" modal-id="<?php echo e((json_decode($presenter))[0]); ?>">
                                <img src="<?php echo e(Voyager::image( (json_decode($presenter))[1] )); ?>" alt="KDB certificates">
                            </div>
                        </div>

                        <div class="global-modal-window flex-center" id="<?php echo e((json_decode($presenter))[0]); ?>">
                            <div class="global-modal-content">
                                <div class="modal-close">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
                                    </svg>
                                </div>
                                <div class="modal-content-inner">
                                    <ul>
                                        <?php $a = 1; ?>
                                        <?php $__currentLoopData = $ratings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rating): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <button class="tablinks <?php echo e($a == 1 ? 'active' : ''); ?>" onclick="openTabs(event, <?php echo e($rating->id); ?>)">
                                                    <span><?php echo e(date( 'M d, Y', strtotime($rating->issued_date) )); ?></span>
                                                </button>
                                            </li>
                                        <?php $a++;  ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <?php $b = 1; ?>
                                    <?php $__currentLoopData = $ratings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rating): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div id="<?php echo e($rating->id); ?>" class="tabcontent <?php echo e($b == 1 ? 'active' : ''); ?>">
                                            <img src="<?php echo e(Voyager::image( $rating->rating_img )); ?>" alt="KDB licenses">
                                        </div>
                                    <?php $b++;  ?>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Desktop\KDB Last\resources\views/about-us/ratings.blade.php ENDPATH**/ ?>