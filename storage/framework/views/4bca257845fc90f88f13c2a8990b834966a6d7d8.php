<?php $__env->startSection('page-title', 'Treasury'); ?>

<?php $__env->startSection('breadcrumb'); ?>

    <span class="small-paragraph">Treasury</span>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Treasury</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/treasury.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container treasury">
        <div class="row">
        
            <main class="col-xl-9 main-hero mb-5">
                <div class="first-parent">
                    <h2 class="heading-2">
                        Treasury Services
                    </h2>
                    <p class="parahraph">
                        As a major foreign bank in Uzbekistan ‘’KDB Bank Uzbekistan’’ provides a wide range of treasury operations based on international financial standards:
                    </p>
                </div>
                <div class="second-parent">
                    <div class="row box">
                        <div class="col-lg-1 col-md-3 col-12 text-md-center text-left mb-md-0 mb-3">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="col-lg-11 col-md-9 col-12">
                            <h3 class="heading-3">
                            Interbank Money Market
                            </h3>
                            <p class="paragraph">
                                KDB Bank Uzbekistan operates in domestic and foreign money markets by placing / attracting interbank deposits in major free convertible currencies and local currency of the Republic of Uzbekistan within specified limits.
                            </p>
                        </div>
                    </div>
                    <div class="row box">
                        <div class="col-lg-1 col-md-3 col-12 text-md-center text-left mb-md-0 mb-3">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="col-lg-11 col-md-9 col-12">
                            <h3 class="heading-3">
                            Forex
                            </h3>
                            <p class="paragraph mb-4">
                                KDB Bank Uzbekistan offers FX operations services via the interbank foreign exchange market. These services are offered to both  banks and corporate clients. Modern technologies enable clients rapid execution of foreign exchange operations in major hard currencies (USD, EUR), as well as in the British pound, Japanese yen and Russian rubles. In addition, there is possibility of conversion into other exotic currencies.
                            </p>
                            <p class="paragraph">
                                *Foreign exchange operations are carried out under conditions TOD, TOM, SPOT based on the needs of the client and the transaction amount. As an additional service, the Bank may  provide  information on the current tendency and conjecture of the market,  foreign exchange cross rates along with movement analysis in a real time basis to clients upon request.
                            </p>
                        </div>
                    </div>
                    <div class="row box">
                        <div class="col-lg-1 col-md-3 col-12 text-md-center text-left mb-md-0 mb-3">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="col-lg-11 col-md-9 col-12">
                            <h3 class="heading-3">
                            Derivative Instruments
                            </h3>
                            <p class="paragraph">
                                KDB Bank Uzbekistan also offers services with derivatives instruments such as foreign exchange swaps – foreign exchange operations with the obligatory reverse transaction with the value date forward. Swap transactions are conducted in major foreign currency pairs USD/UZS and EUR/UZS. If necessary, the experts of the Treasury Department of the Bank may offer advice on such operations.
                            </p>
                        </div>
                    </div>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.corporates-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Uzgenius Academy\Desktop\WEBSITES\KDB\resources\views/corporates/treasury.blade.php ENDPATH**/ ?>