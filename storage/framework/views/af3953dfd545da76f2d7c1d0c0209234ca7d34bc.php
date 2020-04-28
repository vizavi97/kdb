<?php $__env->startSection('page-title', 'Payments & Cash Management'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">Payments & Cash Management</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Payments & Cash Management</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/payments-and-cash-management.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container payments-and-cash-management">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div>
                    <h3 class="heading-3">KDB Bank Uzbekistan offers the following types of operations</h3>
                    <ul class="right-icon pt-3">
                        <li>
                            <p>Unibanks is a fully integrated multi-currency banking system based on specialized components that support a wide range of banking business functions. A fully integrated banking system that manages all business functions with one system presents several important advantages, such as,</p>
                        </li>
                        <li>
                            <p>Customer-oriented system</p>
                        </li>
                        <li>
                            <p>
                                Multiple service by one program
                            </p>
                        </li>
                        <li>
                            <p>
                                International standard solution
                            </p>
                        </li>
                        <li>
                            <p>
                                Operations in real time
                            </p>
                        </li>
                        <li>
                            <p>
                                SWIFT - The Society for Worldwide Interbank Financial Telecommunications provides a network that enables financial institutions around the world to send and receive information about financial transactions in a safe, standardized and reliable environment.
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="mt-5">
                    <img class="w-100 mb-4 align-left" src="<?php echo e(asset('img/corporates/payments-and-cash-management/transfers-in-exotic-currencies.png')); ?>" alt="Letters of credit with post-financing option">
                    <h3 class="heading-3">Transfers in Exotic Currencies</h3>
                    <p>The KDB Bank Uzbekistan offers service on the transfer of funds abroad in foreign currency, both in main functional currencies (currencies that are more often subject of transactions) and in exotic currencies (currencies that are rarely used for transactions) in simple way!</p>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.corporates-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User 5\Desktop\KDB Last\resources\views/corporates/payments-and-cash-management.blade.php ENDPATH**/ ?>