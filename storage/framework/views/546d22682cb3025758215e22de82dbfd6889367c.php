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
            
            <main class="col-xl-9 main-hero">
                    <h2 class="heading-2 mb-4">Loan Application</h2>
                    <?php if(count($files) > 0): ?>
                    <div class="row download">
                        <div class="col-12">
                            <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="row" href="<?php echo e((json_decode($file->file))[0]->download_link); ?>" download="">
                                <div class="col-10 information">
                                    <h6><?php echo e($file->name); ?></h6>
                                </div>
                                <div class="col-2 icon">
                                    <i class="fas fa-download"></i>
                                </div>
                            </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <p class="small-paragraph">
                        You can use the most convenient way to send us the completed form
                    </p>
                    <div class="email mt-4">
                        <span class="small-paragraph email-card-title">For the questions please contact Credit Department via email</span>
                        <div class="row">
                            <div class="col-md-4">
                                <a class="email-card" href="mailto:umidjon.radjabov@kdb.uz">
                                    umidjon.radjabov@kdb.uz
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="email-card" href="mailto:damirad.amanova@kdb.uz">
                                    damira.amanova@kdb.uz
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a class="email-card" href="mailto:info@kdb.uz">
                                    info@kdb.uz
                                </a>
                            </div>
                        </div>
                    </div>
                    <p class="small-paragraph mt-4">
                        Our officers will contact you shortly after receiving your application.
                    </p>
                </main>

            <?php echo $__env->make('layouts.sidebars.corporates-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Desktop\KDBBU\resources\views/corporates/application-for-loan.blade.php ENDPATH**/ ?>