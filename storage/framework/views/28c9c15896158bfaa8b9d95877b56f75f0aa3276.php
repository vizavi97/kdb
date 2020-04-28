<?php $__env->startSection('page-title', 'CRM'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">CRM</span>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('meta'); ?>

    <title>KDB | CRM</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/crm.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <h2 class="heading-2">Information on Deposits</h2>
                <p class="small-paragraph">Details of deposit and conditions for attracting deposits in national and foreign currencies for individuals</p>
                <p class="small-paragraph">
                    Your deposit is guaranteed according to Presidential Decree №УП-3968 "On additional measures for liberalisation and guarantee of deposits in commercial banks" dated February 20, 2008 year and №УП-4057 "On additional measures to guarantee the protection of citizens’ deposits in commercial banks of the Republic of Uzbekistan” dated November 28, 2008 year.
                </p>
                <h3 class="heading-3">Type of deposit: demand deposit on the following terms:</h3>
                <ul class="right-icon mt-4">
                    <li>
                        <p>Currency:</p>
                        <ul>
                            <li>
                                <p>Uzbek soum</p>
                            </li>
                            <li>
                                <p>US Dollar</p>
                            </li>
                            <li>
                                <p>Euro</p>
                            </li>
                            <li>
                                <p>British Pound Sterling</p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <p>Duration: Unlimited;</p>
                    </li>
                    <li>
                        <p>Deposit amount: Unlimited;</p>
                    </li>
                    <li>
                        <p>Replenishment of deposit: The customer has the right to replenish;</p>
                    </li>
                    <li>
                        <p>Interests on deposits: Zero</p>
                    </li>
                </ul>
                <p class="small-paragraph">
                    Client receives instant notifications on local mobile phone about transactions executed on demand deposit account and information on the account balance upon client’s request as well as various short information communication messages from the Bank.
                </p>
            </main>

            <?php echo $__env->make('layouts.sidebars.corporates-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User 5\Desktop\kdb\resources\views/corporates/crm.blade.php ENDPATH**/ ?>