<?php $__env->startSection('page-title', 'Voting Results'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">Voting Results</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Voting Results</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/investors/voting-results.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container voting-results mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero ">
                <h2 class="heading-2 mb-4">Voting results Title</h2>
                <div class="row download">
                  <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-12">
                          <a class="row" href="<?php echo e((json_decode($file->file))[0]->download_link); ?>" download>
                                <div class="col-10 information">
                                      <h6><?php echo e($file->name); ?></h6>
                                </div>
                                <div class="col-2 icon">
                                      <i class="fas fa-download"></i>
                                </div>
                          </a>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.investors-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Desktop\KDBBU\resources\views/investors/voting-results.blade.php ENDPATH**/ ?>