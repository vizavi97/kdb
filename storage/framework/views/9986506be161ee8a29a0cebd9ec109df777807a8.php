<?php $__env->startSection('page-title', 'Exchange Rates'); ?>

<?php $__env->startSection('breadcrumb'); ?>

    <span class="small-paragraph">Exchange Rates</span>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Exchange Rates</title>

    
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
                        <input type="text" id="amount" value="100">
                    </div>
                    <div class="col-lg-4 d-flex justify-content-between align-items-center mt-4 mt-lg-0">
                        <div class="from">
                            <label for="from">From</label>
                            <div id="from-cont">
                                <select id="from">
                                    <?php $__currentLoopData = $rates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($rate->ccy); ?>">
                                            <?php echo e($rate->ccy); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="icon">
                            <br/>
                            <div id="switcher">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.004" height="16" viewBox="0 0 20.004 16"><path d="M-6499,15855l4-4v3h15v2h-15v3Zm16-7h-15v-2h15v-3l4,4-4,4Z" transform="translate(6499.002 -15843.001)"/></svg>
                            </div>
                        </div>
                        <div class="to">
                            <label for="to">To</label>
                            <div id="to-cont">
                                <input type="text" id="to" value="UZS" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <label>Result</label>
                        <div id="result"></div>
                    </div>
                    <div class="col-12">
                        <p class="mt-4">
                            KDB Bank Uzbekistan is a principal member of the VISA international payment system since 1998 and offers Visa card issuing and acquiring services. Currently, the Bank offers to corporate clients a Visa Business cards for usage at overseas business trips.
                        </p>
                    </div>
                    <div class="col-12 mt-5">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <h3>Exchange Rates</h3>
                            <ul class="nav nav-tabs rate-switcher mt-4 mt-lg-0" id="myTab" role="tablist">
                                <li>
                                    <a class="item active" id="kdb-tab" data-toggle="tab" href="#kdb" role="tab" aria-controls="kdb" aria-selected="true">KDB</a>
                                </li>
                                <li>
                                    <a class="item" id="cbu-tab" data-toggle="tab" href="#cbu" role="tab" aria-controls="cbu" aria-selected="false">CBU</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content mt-4" id="myTabContent">
                            <div class="tab-pane fade show active" id="kdb" role="tabpanel" aria-labelledby="kdb-tab">
                                <table class="d-none d-lg-block">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <?php $__currentLoopData = $rates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <th>
                                                    <?php echo e($rate->ccy); ?>

                                                </th>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>
                                                <img src="<?php echo e(asset('img/individuals/exchange-office/currency-conversion/UZS.svg')); ?>" class="pr-2">
                                                UZS
                                            </th>
                                            <?php $__currentLoopData = $rates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <td>
                                                    <?php echo e($rate->buy . ' / ' . $rate->sell); ?>

                                                </td>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="d-lg-none">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>
                                                <img src="<?php echo e(asset('img/individuals/exchange-office/currency-conversion/UZS.svg')); ?>" class="pr-2">
                                                UZS
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $rates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <th>
                                                    <?php echo e($rate->ccy); ?>

                                                </th>
                                                <td>
                                                    <?php echo e($rate->buy . ' / ' . $rate->sell); ?>

                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="cbu" role="tabpanel" aria-labelledby="cbu-tab">
                                <table class="d-none d-lg-block">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <?php $__currentLoopData = getCbuRates(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <th>
                                                    <?php echo e($rate['Ccy']); ?>

                                                </th>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>
                                                <img src="<?php echo e(asset('img/individuals/exchange-office/currency-conversion/UZS.svg')); ?>" class="pr-2">
                                                UZS
                                            </th>
                                            <?php $__currentLoopData = getCbuRates(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <td>
                                                    <?php echo e($rate['Rate']); ?>

                                                </td>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="d-lg-none">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>
                                                <img src="<?php echo e(asset('img/individuals/exchange-office/currency-conversion/UZS.svg')); ?>" class="pr-2">
                                                UZS
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = getCbuRates(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <th>
                                                    <?php echo e($rate['Ccy']); ?>

                                                </th>
                                                <td>
                                                    <?php echo e($rate['Rate']); ?>

                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.interactive-services-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <script>
        let rates = "<?php echo e($ratesArr); ?>";

        rates = JSON.parse( rates.split('&quot;').join('"') );

    </script>

    
    <script src="<?php echo e(asset('js/jquery.number.min.js')); ?>"></script>
    
    
    <script src="<?php echo e(asset('js/currency-converter.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Desktop\KDB Last\resources\views/interactive-services/exchange-rates.blade.php ENDPATH**/ ?>