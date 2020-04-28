<?php $__env->startSection('page-title', 'SMS Informing'); ?>

<?php $__env->startSection('breadcrumb'); ?>

    <span class="small-paragraph">SMS Informing</span>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | SMS Informing</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/individuals/remote-banking/sms-informing.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container sms-informing mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero">
                <h2 class="heading-2">SMS Informing – automated account information service.</h2>
                <p class="small-paragraph">
                    Client receives instant notifications on local mobile phone about transactions executed on demand deposit account and information on the account balance upon client’s request as well as various short information communication messages from the Bank. 
                </p>
                <h3 class="heading-3 my-4">Key Benefits</h3>
                <ul class="right-icon">
                    <li>
                        <p>Real time tracking of account movements straight from mobile phone</p>
                    </li>
                    <li>
                        <p>Simple, yet Safe service</p>
                    </li>
                    <li>
                        <p>Convenient and Time saving</p>
                    </li>
                    <li>
                        <p>Several accounts bound to the same mobile phone number </p>
                    </li>
                </ul>
                <p class="small-paragraph mb-4">
                    If you are an account holder in JSC KDB Bank Uzbekistan, you can apply at your servicing branch of the Bank with the document identifying your personality.
                </p>
                <button class="mb-4">Details</button>
                <p class="small-paragraph">VISA card balance SMS informing system instruction </p>
                <button class="modal-open" modal-id="modal1">Details</button>

                <div class="global-modal-window flex-center" id="modal1">
                    <div class="global-modal-content">
                        <i class="fas fa-times modal-close"></i>
                        <div class="modal-content-inner">
                            <div class="p-4">
                                <h3 class="heading-2 mb-4">SMS Informing </h3>

                                <div class="row item no-gutters">
                                    <div class="col-md-5 mt-4">
                                        <p class="main">
                                             Debit And Credit Transactions On Account
                                        </p>
                                    </div>
                                    <div class="col-md-7 mt-4">
                                        <p class="small-paragraph">
                                            Account #, dd/mm/yy, CR/DT, currency code & amount, afterbalance currency code & amount
                                        </p>
                                    </div>
                                </div>

                                 <div class="row item no-gutters">
                                    <div class="col-md-5 mt-4">
                                        <p class="main">
                                            Account Balance
                                        </p>
                                    </div>
                                    <div class="col-md-7 mt-4">
                                        <p class="small-paragraph">
                                            Your balance 0000.0000 USD/UZS
                                        </p>
                                    </div>
                                </div>

                                <div class="custom-alert warning mt-4">
                                    <p class="text">
                                        In order to receive account balance information, it is necessary to send SMS - request to number 4900
                                    </p>
                                </div>

                                <p class="small-paragraph mt-4"><strong>Text Message</strong></p>
                                <p class="small-paragraph">BALXXXXXXXXX</p>
                                <p class="small-paragraph">Where X - first 9 digits of the 20 digit account number </p>

                                <div class="custom-alert warning mt-4">
                                    <p class="text">
                                        The service is available for subscribers of GSM - operators of mobile communication.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.individuals-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Desktop\KDBBU\resources\views/individuals/sms-informing.blade.php ENDPATH**/ ?>