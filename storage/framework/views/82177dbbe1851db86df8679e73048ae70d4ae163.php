<?php $__env->startSection('page-title', 'Share Information'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">Share Information</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Share Information</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/investors/share-information.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container share-information mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <h2 class="heading-2 mb-4">Share Information</h2>
                <p class="small-paragraph mb-4">
                    KDB Bank Uzbekistan’s share capital is equal to <strong class="money-numbers">UZS 101,272,260,908.00</strong> and consists of common shares issued in registered form.
                </p>
                <h3 class="heading-3 mb-4">Tashkent Stock Exchange</h3>
                <div class="mb-5">
                    <div class="row item no-gutters">
                        <div class="col-5">
                            <p class="main">
                                Currency
                            </p>
                        </div>
                        <div class="col-7">
                            <p class="small-paragraph">
                                UZS
                            </p>
                        </div>
                    </div>
                    <div class="row item no-gutters">
                        <div class="col-5">
                            <p class="main">
                                Symbol
                            </p>
                        </div>
                        <div class="col-7">
                            <p class="small-paragraph">
                                KBUN
                            </p>
                        </div>
                    </div>
                    <div class="row item no-gutters">
                        <div class="col-5">
                            <p class="main">
                                ISIN
                            </p>
                        </div>
                        <div class="col-7">
                            <p class="small-paragraph">
                                UZ7012740005
                            </p>
                        </div>
                    </div>
                    <div class="row item no-gutters">
                        <div class="col-5">
                            <p class="main">
                                Depo Code
                            </p>
                        </div>
                        <div class="col-7">
                            <p class="small-paragraph">
                                9 0000 2700
                            </p>
                        </div>
                    </div>
                </div>
                <h3 class="heading-3 mb-4">Overview of Shares for 1997 - 2018</h3>
                <table>
                    <tr>
                        <th>Year</th>
                        <th class="text-center">Type of Deals</th>
                        <th class="text-center">Issued Shares</th>
                        <th>Nominal Price</th>
                        <th>Total Charter Capital</th>
                    </tr>
                    <tr>
                        <td>1997</td>
                        <td>Issuence of Shares</td>
                        <td>9,000</td>
                        <td>51,050</td>
                        <td>459,450,000.00</td>
                    </tr>
                    <tr>
                        <td>2007</td>
                        <td>Issuence of Shares</td>
                        <td>+80,146</td>
                        <td>51,050</td>
                        <td>4,091,453,300.00</td>
                    </tr>
                    <tr>
                        <th colspan="2">Total</th>
                        <th colspan="2">89,146</th>
                        <th>4,550,903,300.00</th>
                    </tr>
                </table>
            </main>

            <?php echo $__env->make('layouts.sidebars.investors-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User 5\Desktop\KDB Last\resources\views/investors/share-information.blade.php ENDPATH**/ ?>