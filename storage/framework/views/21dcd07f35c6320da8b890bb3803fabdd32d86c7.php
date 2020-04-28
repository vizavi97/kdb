<?php $__env->startSection('page-title', 'Meet Management Board'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">Meet Management Board</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Meet Management Board</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/about-us/managment-board.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container managment-board">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <h2 class="heading-2" style="text-transform: initial;">Meet the Members</h2>
                <p class="paragraph top">
                    The Members of Managment Board defines the general principles for the Bank's operations. Their key responsibilities include assessing strategic bussines opportunities and risks. The Board constitute of nine members.
                </p>
                <div class="row">
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 item">
                        <div class="card">
                            <img src="<?php echo e(Voyager::image( $user->image )); ?>" alt="<?php echo e($user->getTranslatedAttribute('name', $locale, 'fallbackLocale')); ?>" class="image">
                            <div class="card-body">
                                <h3 class="heading-3"><?php echo e($user->getTranslatedAttribute('name', $locale, 'fallbackLocale')); ?></h3>
                                <p class="paragraph bold"><?php echo e($user->getTranslatedAttribute('desc', $locale, 'fallbackLocale')); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.about-us-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Desktop\KDBLIVE\resources\views/about-us/management-board.blade.php ENDPATH**/ ?>