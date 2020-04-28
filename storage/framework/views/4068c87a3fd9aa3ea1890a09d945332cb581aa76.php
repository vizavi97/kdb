<?php $__env->startSection('page-title', 'Account Opening'); ?> 

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">Account Opening</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Account Opening</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/accaunt-opening.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container accaunt-opening">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="first-stuff">
                    <h2 class="heading-2">
                    Account Opening Process
                    </h2>
                    <p class="paragraph paragraph-bold">
                        Bank opens and service bank accounts of residents of the Republic of Uzbekistan and non-residents in national and foreign currencies.
                    </p>
                    <p class="paragraph paragraph-bold">
                        To open a bank account, the Client must:
                    </p>
                    <ul class="right-icon my-4">
                        <li>
                            <p>Present an identity document</p>
                        </li>
                        <li>
                            <p>Conclude a bank account agreement with the Bank.</p>
                        </li>
                    </ul>
                    <p class="small-paragraph mb-4">
                        The client is given the opportunity to receive information about the availability of funds in the account and their movement. In addition, the Client may provide the Bank with a standing order to transfer funds from his account to the extent of the balance of funds in the account.
                    </p>
                    <p class="small-paragraph">
                        The Client can manage a bank account both personally and through his representative when providing him with a power of attorney drawn up in accordance with the current legislation of the Republic of Uzbekistan.<br/>
                        For operations conducted from a bank account, a commission is charged in accordance with the Bank's tariffs.
                    </p>
                    <h3 class="heading-3 mt-4">Cash operations</h3>
                    <ul class="right-icon mt-4">
                        <li>
                            <p>cash withdrawal from the current account when crediting to the account by bank transfer;</p>
                        </li>
                        <li>
                            <p>acceptance for collection of non-payment banknotes of foreign states;</p>
                        </li>
                        <li>
                            <p>exchange and acceptance of non-payment banknotes of foreign states on a commission;</p>
                        </li>
                        <li>
                            <p>Acceptance for the examination of banknotes that cast doubt on their authenticity.</p>
                        </li>
                    </ul>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.individuals-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Desktop\KDB Last\resources\views/individuals/account-opening.blade.php ENDPATH**/ ?>