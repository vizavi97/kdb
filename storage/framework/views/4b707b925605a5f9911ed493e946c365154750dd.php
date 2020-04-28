<?php $__env->startSection('page-title', 'Acquiring Services'); ?>

<?php $__env->startSection('breadcrumb'); ?>

    <span class="small-paragraph">Acquiring Services</span>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Acquiring Services</title>

    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/individuals/remote-banking/internet-banking.css')); ?>">

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/local-terminals.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container local-terminals internet-banking">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <img src="<?php echo e(asset('img/corporates/local-terminals/1.png')); ?>" width="100%">
                <h2 class="heading-2 mt-4">Quick & Easy Acquiring</h2>
                <p class="small-paragraph mt-4">
                    It’s more important than ever to have advanced merchant solutions that offer secure transactions for you and your customers along with tools that help you run your business better. Whether your business is new on the scene or a fixture in the marketplace, we can help. Our intuitive point-of-sale hardware along with a simplified pricing plan, enable you to affordably accept international and local cards of the following major brands, VISA, MasterCard, HUMO and UzCard.
                </p>
                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="simple-card text-center">
                            <div class="w-100">
                                <img src="<?php echo e(asset('img/corporates/local-terminals/visa.svg')); ?>" height="40px">
                                <h3 class="heading-3 mt-4">Visa Acquiring</h3>
                                <p class="small-paragraph mt-2">
                                    Sell More, Get Paid.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="simple-card text-center">
                            <div class="w-100">
                                <img src="<?php echo e(asset('img/corporates/local-terminals/mastercard.svg')); ?>" height="40px">
                                <h3 class="heading-3 mt-4">MasterCard Acquiring</h3>
                                <p class="small-paragraph mt-2">
                                    Grow Business, Increase Sales.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="simple-card text-center">
                            <div class="w-100">
                                <img src="<?php echo e(asset('img/corporates/local-terminals/humocard.svg')); ?>" height="40px">
                                <h3 class="heading-3 mt-4">HUMO Acquiring</h3>
                                <p class="small-paragraph mt-2">
                                    Innovation & Growth.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="simple-card text-center">
                            <div class="w-100">
                                <img src="<?php echo e(asset('img/corporates/local-terminals/uzcard.svg')); ?>" height="40px">
                                <h3 class="heading-3 mt-4">UzCard Acquiring</h3>
                                <p class="small-paragraph mt-2">
                                    Easy Sell, Easy Accept.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.corporates-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User 5\Desktop\KDB Last\resources\views/corporates/local-terminals.blade.php ENDPATH**/ ?>