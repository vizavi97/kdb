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
                                <a class="row" href="<?php echo e(Voyager::image( (json_decode($file['file_' . app()->getLocale()]))[0]->download_link )); ?>" download>
                                    <div class="col-10 information">
                                        <h6><?php echo e($file->getTranslatedAttribute('title', app()->getLocale(), 'fallbackLocale')); ?></h6>
                                    </div>
                                    <div class="col-2 icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM19 18H6c-2.21 0-4-1.79-4-4 0-2.05 1.53-3.76 3.56-3.97l1.07-.11.5-.95C8.08 7.14 9.94 6 12 6c2.62 0 4.88 1.86 5.39 4.43l.3 1.5 1.53.11c1.56.1 2.78 1.41 2.78 2.96 0 1.65-1.35 3-3 3zm-5.55-8h-2.9v3H8l4 4 4-4h-2.55z" fill="#FFB600"/>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

            </main>

            <?php echo $__env->make('layouts.sidebars.corporates-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User 5\Desktop\KDB Last\resources\views/corporates/account-opening.blade.php ENDPATH**/ ?>