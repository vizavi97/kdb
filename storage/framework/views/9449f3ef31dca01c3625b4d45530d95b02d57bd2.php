<?php $__env->startSection('page-title', 'Sample Forms'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">Sample Forms</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Sample Forms</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/interactive-services/sample-forms.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container sample-forms mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero">
                <div class="first-parent">

                    
                    <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row box">
                        <div class="col-sm-8">
                            <h6><?php echo e($file->name); ?></h6>
                            <p class="helper-paragraph">
                                Date of registration: <?php echo e(date( 'M d, Y', strtotime($file->created_at) )); ?>.   Number: <?php echo e($file->number); ?>

                            </p>
                        </div>
                        <div class="col-sm-4 right-parent">
                            <div class="top">
                                <a href="<?php echo e($file->source_link); ?>"><?php echo e($file->source_name); ?></a>
                                <a href="<?php echo e((json_decode($file->file))[0]->download_link); ?>" download="">
                                    <i class="fas fa-download"></i>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    

                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.interactive-services-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Desktop\KDBBU\resources\views/interactive-services/sample-forms.blade.php ENDPATH**/ ?>