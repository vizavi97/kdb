<?php $__env->startSection('page-title', 'Audit Reports'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">Audit Reports</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Audit Reports</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/investors/audit-report.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container audit-reports mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero ">
              <?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row download">
                    <div class="col-12">
                          <a class="row" href="<?php echo e((json_decode($report->file))[0]->download_link); ?>" download>
                                <div class="col-10 information">
                                      <h6><?php echo e($report->name); ?></h6>
                                </div>
                                <div class="col-2">
                                      <i class="fas fa-download icon"></i>
                                      
                                </div>
                          </a>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </main>

            <?php echo $__env->make('layouts.sidebars.investors-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Desktop\KDBBU\resources\views/investors/audit-reports.blade.php ENDPATH**/ ?>