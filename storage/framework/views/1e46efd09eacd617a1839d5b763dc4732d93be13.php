<?php $__env->startSection('page-title', 'Payments & Transfers'); ?>

<?php $__env->startSection('breadcrumb'); ?>

    <span class="small-paragraph">Payments & Transfers</span>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Payments & Transfers</title>

    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/individuals/payments-and-transfers.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container payments-and-transfers">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <!-- Begin Transfer Service -->
                <div class="row transfer-service pb-48">
                    <div class="col-md-6 transfer_service__item pr-md-3">
                        <h2 class="heading-2">Fund transfer service in foreign currency</h2>
                        <p class="small-paragraph">The Bank offers service on the transfer of funds abroad in foreign currency, both in main functional currencies (currencies that are more often subject of transactions) and in exotic currencies (currencies that are rarely used for transactions) without opening an account in foreign currency.</p>
                    </div>
                    <div class="col-md-6 service_video p-0">
                        <a data-fancybox  href="<?php echo e(asset('video/transfer-' . app()->getLocale() . '.mp4')); ?>" class="fancybox">
                            <img class="img-cover" src="<?php echo e(asset('img/individuals/payments-and-transfers/player-background.jpg')); ?>" alt="Video player">
                            <i class="far fa-play-circle"></i>
                        </a>
                    </div>
                </div>
                <!-- End Transfer Service -->
                
                
                <!-- Begin Process Description -->
                <section class="process_descr">
                    <div class="row pb-48">
                        <div class="col-12">
                            <h3 class="heading-3 mb-4">Process Description</h3>
                        </div>
                        <div class="col-lg-6 descr_box">
                            <div class="process_item box-shadow">
                                <h4 class="heading-4"><span>1.</span> Account Opening</h4>
                                <p class="small-paragraph">Account in Uzbek Soum is opened according to the internal procedures of the bank when the client applies to the bank in person.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 descr_box">
                            <div class="process_item box-shadow">
                                <h4 class="heading-4"><span>2.</span> Account Replenishment</h4>
                                <p class="small-paragraph">Client replenishes the account with the bank by depositing funds. At the same time, the replenishment amount should cover the equivalent amount of foreign currency, taking into account the fluctuation of exchange rates and the bank’s commission for transfers in foreign currency.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 descr_box">
                            <div class="process_item box-shadow">
                                <h4 class="heading-4"><span>3.</span> Fund Transfer</h4>
                                <p class="small-paragraph">Client submits a payment order for the fund transfer in foreign currency in accordance with the form established by the bank.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 descr_box">
                            <div class="process_item box-shadow">
                                <h4 class="heading-4"><span>4.</span> Finalization of the Transaction</h4>
                                <p class="small-paragraph">Client can receive the remaining balance of the deposited amount in Uzbek Soum after completion of the fund transfer.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Process Description -->
                <!-- Begin Currency -->
                <section class="currency pb-48">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="heading-3">Transfer Currencies</h3>
                            <p class="small-paragraph mb-24">Fund transfers can be made in the following 25 currencies, including <span class="exotic-currencies">exotic currencies</span>.</p>
                        </div>

                        
                        <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-4 col-sm-6">
                                <div class="currency_item box-shadow">
                                    <strong><?php echo e($currency->abbr); ?></strong><span><?php echo e($currency->name); ?></span>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        

                        <div class="col-12 contact_info">
                            <p class="small-paragraph mb-24">
                                When sending funds in above listed currencies client can receive the remaining balance of the deposited amount in Uzbek Soum on the next day after completion of the fund transfer.
                            </p>
                            <strong class="mb-24">For more information, please contact Client Service Team</strong>
                        </div>

                        <!-- Contact Info -->
                        <?php $__currentLoopData = $emails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                            <div class="col-lg-4 col-sm-6">
                                <div class="contact box-shadow">
                                    <img src="<?php echo e(asset('img/global/user-tie-solid.svg')); ?>" alt="user">
                                    <span>
                                        <a href="mailto:<?php echo e($email->email); ?>" class="phone-number"><?php echo e($email->email); ?></a>
                                    </span>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!--End Contact Info -->
                        
                    </div>
                </section>
                <!-- End Currency -->
            </main>

            <?php echo $__env->make('layouts.sidebars.individuals-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <!-- Fancybox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DESKTOP\KDB\resources\views/individuals/payments-and-transfers.blade.php ENDPATH**/ ?>