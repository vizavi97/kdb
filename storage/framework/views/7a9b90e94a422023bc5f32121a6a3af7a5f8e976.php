<?php $__env->startSection('page-title', 'Deposits'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">Deposits</span>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('meta'); ?>

    <title>KDB | Deposits</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/deposits.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container deposits">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <h2 class="heading-2">Information on Deposits</h2>
                <p class="small-paragraph">Bank attracts free funds of Corporate Clients to set on term deposit accounts in national and foreign currencies. Repayment of funds and interest are executed according to agreed schedule.</p>
                <p class="small-paragraph">
                    Your deposit is guaranteed according to Presidential Decree №УП-3968 "On additional measures for liberalisation and guarantee of deposits in commercial banks" dated February 20, 2008 year and №УП-4057 "On additional measures to guarantee the protection of citizens’ deposits in commercial banks of the Republic of Uzbekistan” dated November 28, 2008 year.
                </p>
                <h3 class="heading-3">Type of deposit: Term Deposit</h3>
                <ul class="right-icon mt-4">
                    <li>
                        <p>Account opening: Free of charge</p>
                    </li>
                    <li>
                        <p>Payment of interest: Monthly / Maturity date</p>
                    </li>
                    <li>
                        <p>Type of currency: UZS / USD / EURO</p>
                    </li>
                </ul>
                <p class="small-paragraph">
                    Duration of term deposit: 3 / 6 / 9 / 12 months
                </p>
            </main>

            <?php echo $__env->make('layouts.sidebars.corporates-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Desktop\KDB Last\resources\views/corporates/deposits.blade.php ENDPATH**/ ?>