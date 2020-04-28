<?php $__env->startSection('page-title', 'Correspondent Banks'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">Correspondent Banks</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Correspondent Banks</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/correspondent-banks.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container correspondent-banks">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="first-parent">
                    <div class="row box">
                        <div class="col-lg-1 col-md-3 col-12 text-md-center text-left mb-md-0 mb-3">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="col-lg-11 col-md-9 col-12">
                            <p class="paragraph">
                                Global correspondent network allows KDB Bank Uzbekistan quickly and efficiently execute payment orders in different currencies. KDB Bank Uzbekistan has established strong and reliable relationships with leading global banks in the U.S., Europe, Asia, and Russia. In this direction KDB Bank Uzbekistan can offer its clients affordable price, quality and efficiency of service.
                            </p>
                        </div>
                    </div>
                </div>
                <h2 class="heading-2">
                    Our main correspondent banks
                </h2>
                <?php if(count($banks) > 0): ?>
                <div class="second-parent">
                    <div class="row">
                        <?php $__currentLoopData = $banks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-6 item-parent">
                            <div class="item">
                                <img src="<?php echo e(Voyager::image( $bank->logo )); ?>">
                                <h3 class="heading-3"><?php echo e($bank->name); ?></h3>
                                <table>
                                    <tr>
                                        <td>
                                            Country:
                                        </td>
                                        <td>
                                            <?php echo e($bank->country); ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Currency:
                                        </td>
                                        <td>
                                            <?php echo e($bank->currency); ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Swift/BIC:
                                        </td>
                                        <td>
                                            <?php echo e($bank->bic); ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Account Number:
                                        </td>
                                        <td>
                                            <?php echo e($bank->account_number); ?>

                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php endif; ?>
                <div class="third-parent">
                    <p class="paragraph">
                        The Bank takes measures to increase the number of correspondent banks in order to expand the range of services for both bank’ clients and our partners. Development of cooperation with banks is aimed at expanding the range of counterparties and ensuring the effective and smooth functioning of the settlements on behalf of our clients.
                    </p>
                </div>
            </main>
            <?php echo $__env->make('layouts.sidebars.corporates-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Uzgenius Academy\Desktop\WEBSITES\KDB\resources\views/corporates/correspondent-banks.blade.php ENDPATH**/ ?>