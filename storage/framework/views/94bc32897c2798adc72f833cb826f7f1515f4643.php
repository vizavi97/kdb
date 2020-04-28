<?php $__env->startSection('page-title', 'Financial Statements'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">Financial Statements</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Financial Statements</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/investors/financial-statements.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container financial-statements mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero">
                <div class="main-hero-inner">
                    <div class="clear-fix">
                        <img class="w-100 align-right" src="<?php echo e(asset('img/investors/financial-statements/financial-statements.png')); ?>" alt="Letters of credit with post-financing option">
                        <h2 class="heading-2">Main Financial Figures</h2>
                        <h3 class="paragraph">Financial Indicators</h3>
                        <p class="small-paragraph">
                            Financial indicators are created with the use of numerical values taken from financial statements to gain meaningful information about a company. The numbers found on a company’s financial statements – balance sheet, income statement, and cash flow statement are used to perform quantitative analysis and assess a company’s liquidity, leverage, growth, margins, profitability, rates of return, valuation, and more.
                        </p>
                    </div>

                    
                    <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row download">
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
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     

                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.investors-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Desktop\KDBBU\resources\views/investors/financial-statements.blade.php ENDPATH**/ ?>