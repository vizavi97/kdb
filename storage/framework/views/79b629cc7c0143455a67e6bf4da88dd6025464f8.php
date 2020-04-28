

<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('press-center/gallery.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('press-center/gallery.2'); ?></span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('press-center/gallery.3'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/press-center/gallery.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container gallery mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="first-parent">
                    <h2 class="heading-2">
                        <?php if($data == "photos"): ?>
                            <?php echo app('translator')->get('press-center/gallery.3_1'); ?>
                        <?php else: ?>
                            <?php echo app('translator')->get('press-center/gallery.3_2'); ?>
                        <?php endif; ?>
                        <?php echo app('translator')->get('press-center/gallery.4'); ?>
                    </h2>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($data == "photos"): ?>
                            <?php if($category->photos != "[]"): ?>
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="heading-3"><?php echo e($category->getTranslatedAttribute('name', $locale, 'fallbackLocale')); ?></h3>
                                    </div>
                                </div>
                                <div class="owl-carousel owl-photo owl-theme">
                                    <?php $__currentLoopData = $category->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(!empty( $photo['file_' . $locale] )): ?>
                                            <a data-fancybox  href="<?php echo e(Voyager::image( $photo['file_' . $locale] )); ?>" class="fancybox">
                                                <img class="img-cover" src="<?php echo e(Voyager::image( $photo['file_' . $locale] )); ?>" alt="video player">
                                            </a>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php endif; ?>
                        <?php else: ?> 
                            <?php if($category->videos != "[]"): ?>
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="heading-3"><?php echo e($category->getTranslatedAttribute('name', $locale, 'fallbackLocale')); ?></h3>
                                    </div>
                                </div>
                                <div class="owl-carousel owl-photo owl-theme">
                                    <?php $__currentLoopData = $category->videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(!empty((json_decode($video['file_' . $locale]))[0])): ?>
                                            <div class="item">
                                                <a data-fancybox  href="<?php echo e(Voyager::image( (json_decode($video['file_' . $locale]))[0]->download_link )); ?>" class="fancybox">
                                                    <img class="img-cover" src="<?php echo e(Voyager::image( $video['file_' . $locale . '_thumb'] )); ?>" alt="video player">
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.press-center-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Fancybox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    
    <script src="<?php echo e(asset('/js/gallery.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/local/www/apache24/data/resources/views/press-center/gallery.blade.php ENDPATH**/ ?>