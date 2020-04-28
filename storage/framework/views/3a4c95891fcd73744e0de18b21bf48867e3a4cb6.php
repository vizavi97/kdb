<?php $__env->startSection('page-title', 'Youth Union'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">Youth Union</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Youth Union</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/press-center/youth-union.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container youth-union mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="first-parent">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="heading-2">
                            Leaders Council of The Youth Union
                            </h2>
                            <p>
                                Within the framework of execution of the governmental Decree “On measures on efficiency improvement of the state youth policy and support of activity of the Youth Union of Uzbekistan” and Resolution “On comprehensive measures on activity improvement of the Youth Union of Uzbekistan”, the Leaders Council under the Youth Union has commenced its activity in the ……...
                            </p>
                            <p>
                                Under its activity, the Leaders Council performs the promotion of opinions and proposals of young employees of the ........... on the successive and effective implementation of the state youth policy, the all-around support of youth and the fundamental reform of the system to protect its rights and legitimate interests.
                            </p>
                            <p>
                                Currently, the Bank employs more than 70 of young people. We have organized the “Young bakers’ Club with the purpose of improvement of their skills and knowledge. Moreover, this helps them to share their idea with each other.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <div class="box">
                                <img src="<?php echo e(asset('img/press-center/youth-union/1.png')); ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.press-center-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Desktop\KDBLIVE\resources\views/press-center/youth-union.blade.php ENDPATH**/ ?>