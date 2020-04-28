<?php $__env->startSection('page-title', 'Dividends'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">Dividends</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Dividends</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/press-center/dividends.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container dividends mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero">
                <h2 class="heading-2 mb-4">Dividend Payments History</h2>
                <p class="small-paragraph">
                    The dividends for the previous financial year are paid on each registered ordinary share after the General Meeting of Shareholders.
                </p>
                <table>
                    <tr>
                        <th>Dividend Payment Year</th>
                        <th>For FY</th>
                        <th>USD (equivalent)</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>1999</td>
                        <td>1998</td>
                        <td>712,000.00</td>
                        <td>Re-capitalization</td>
                    </tr>
                </table>
            </main>

            <?php echo $__env->make('layouts.sidebars.press-center-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Desktop\KDBBU\resources\views/press-center/dividends.blade.php ENDPATH**/ ?>