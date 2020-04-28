<?php $__env->startSection('page-title', 'Currency Conversion'); ?>

<?php $__env->startSection('breadcrumb'); ?>

    <span class="small-paragraph">Currency Conversion</span>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Currency Conversion</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/individuals/exchange-office/currency-conversion.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container currency-conversion my-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero">
                <div class="row conversion-card">
                    <div class="col-lg-4">
                        <label for="amount">Amount</label>
                        <input type="text" id="amount" placeholder="100">
                    </div>
                    <div class="col-lg-2">
                        <label for="to">From</label>
                        <select id="from">
                            <option value="USD">USD</option>
                            <option value="UZS">UZS</option>
                            <option value="RUB">RUB</option>
                        </select>
                    </div>
                    <div class="col-lg-2">
                        <label for="to">To</label>
                        <select id="to">
                            <option value="USD">UZS</option>
                            <option value="UZS">USD</option>
                            <option value="RUB">RUB</option>
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <label>Result</label>
                        <input type="text" id="result" placeholder="9540">
                    </div>
                    <div class="col-12">
                        <p class="mt-4">
                            KDB Bank Uzbekistan is a principal member of the VISA international payment system since 1998 and offers Visa card issuing and acquiring services. Currently, the Bank offers to corporate clients a Visa Business cards for usage at overseas business trips.
                        </p>
                    </div>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.individuals-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User 5\Desktop\kdb\resources\views/individuals/exchange-office/currency-conversion.blade.php ENDPATH**/ ?>