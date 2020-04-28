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
            
            <main class="col-xl-9 main-hero">
                <div class="first-stuff">
                    <h2 class="heading-2">
                    Account Opening Process
                    </h2>
                    <p class="paragraph paragraph-bold">
                        JSC “KDB Bank Uzbekistan” (further “Bank”) is pleased to offer local and foreign currencies bank account and maintenance services for Corporate Clients. During initial contact, a Client can get comprehensive information on account opening procedure and preparation of necessary documents.
                    </p>
                    <p class="paragraph paragraph-bold">
                        When being serviced by Bank, Clients continuously receive consultancy services rendered by the employees on varies aspects of bank operations, bank products and services for their business growth.
                    </p>
                    <div class="row">
                        <div class="col-lg-6 item">
                            <a href="#" class="mydiv">
                                <div class="image">
                                    <img src="<?php echo e(asset('img/corporates/accaunt-opening/1.png')); ?>">
                                </div>
                                <h6 class="heading-black">
                                Client Relationship Management
                                </h6>
                                <p class="small-paragraph">
                                    Each Client is assigned with dedicated Relationship Manager who support and guide from the moment of account opening and throughout the entire service period.
                                </p>
                            </a>
                        </div>
                        <div class="col-lg-6 item">
                            <a href="#" class="mydiv">
                                <div class="image">
                                    <img src="<?php echo e(asset('img/corporates/accaunt-opening/2.png')); ?>">
                                </div>
                                <h6 class="heading-black">
                                Internet Banking
                                </h6>
                                <p class="small-paragraph">
                                    For a greater Clients’ convenience and efficient remote bank account administration, the Bank offers multifunctional systems named as "Internet Banking".
                                </p>
                            </a>
                        </div>
                        <div class="col-lg-6 item">
                            <a href="#" class="mydiv">
                                <div class="image">
                                    <img src="<?php echo e(asset('img/corporates/accaunt-opening/3.png')); ?>">
                                </div>
                                <h6 class="heading-black">
                                Office.Net
                                </h6>
                                <p class="small-paragraph">
                                    For a greater Clients’ convenience and efficient remote bank account administration, the Bank offers multifunctional systems named as "Office.Net Uzbekistan".
                                </p>
                            </a>
                        </div>
                        <div class="col-lg-6 item">
                            <a href="#" class="mydiv">
                                <div class="image">
                                    <img src="<?php echo e(asset('img/corporates/accaunt-opening/4.png')); ?>">
                                </div>
                                <h6 class="heading-black">
                                SMS Informing
                                </h6>
                                <p class="small-paragraph">
                                    If you are a Corporate Client of the Bank “SMS Informing” service can be activated at your servicing branch. The service is paid in accordance with the Tariffs of the Bank.
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <?php if(count($files) > 0): ?>
                    <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row download">
                            <div class="col-12">
                                <a class="row" href="<?php echo e(Voyager::image( (json_decode($file->file))[0]->download_link )); ?>" download>
                                    <div class="col-10 information">
                                        <h6><?php echo e($file->name); ?></h6>
                                    </div>
                                    <div class="col-2 icon">
                                        <i class="fas fa-download"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </main>

            <?php echo $__env->make('layouts.sidebars.individuals-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Desktop\KDBLIVE\resources\views/individuals/account-opening.blade.php ENDPATH**/ ?>