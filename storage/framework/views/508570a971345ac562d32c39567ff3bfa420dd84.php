<?php $__env->startSection('page-title', 'Gallery'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">Gallery</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Gallery</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/press-center/gallery-category.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container gallery-category mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero">
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">
                            <a href="<?php echo e(url( app()->getLocale() . '/press-center/gallery', ['data' => 'photos'])); ?>">
                                <h3 class="heading-blue">Photos</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <a href="<?php echo e(url( app()->getLocale() . '/press-center/gallery', ['data' => 'videos'])); ?>">
                                <h3 class="heading-blue">Videos</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.press-center-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User 5\Desktop\KDB Last\resources\views/press-center/gallery-category.blade.php ENDPATH**/ ?>