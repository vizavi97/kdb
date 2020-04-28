<?php $__env->startSection('page-title', 'Application for Loan'); ?>

<?php $__env->startSection('breadcrumb'); ?>

    <span class="small-paragraph">Application for Loan</span>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Application for Loan</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/application-for-loan.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container application-for-loan">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">

                    <h2 class="heading-2 mb-4">Loan Application</h2>

                    <?php if(count($files) > 0): ?>
                        <div class="row download">
                            <div class="col-12">
                                <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a class="row" href="<?php echo e(Voyager::image( (json_decode($file['file_' . app()->getLocale()]))[0]->download_link )); ?>" download="">
                                    <div class="col-10 information">
                                        <h6><?php echo e($file->getTranslatedAttribute('title', app()->getLocale(), 'fallbackLocale')); ?></h6>
                                    </div>
                                    <div class="col-2 icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM19 18H6c-2.21 0-4-1.79-4-4 0-2.05 1.53-3.76 3.56-3.97l1.07-.11.5-.95C8.08 7.14 9.94 6 12 6c2.62 0 4.88 1.86 5.39 4.43l.3 1.5 1.53.11c1.56.1 2.78 1.41 2.78 2.96 0 1.65-1.35 3-3 3zm-5.55-8h-2.9v3H8l4 4 4-4h-2.55z" fill="#FFB600"/>
                                        </svg>
                                    </div>
                                </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <p class="small-paragraph">
                        You can use the most convenient way to send us the completed form
                    </p>

                    
                    <?php if(count($users) > 0): ?>
                        <div class="email">
                            <span class="small-paragraph email-card-title">For the questions please contact Credit Department via email</span>
                            <div class="row">
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-4">
                                        <a class="email-card" href="mailto:<?php echo e($user->email); ?>">
                                            <?php echo e($user->email); ?>

                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    
                    <p class="small-paragraph mt-4">
                        Our officers will contact you shortly after receiving your application.
                    </p>
                </main>

            <?php echo $__env->make('layouts.sidebars.corporates-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User 5\Desktop\KDB Last\resources\views/corporates/application-for-loan.blade.php ENDPATH**/ ?>