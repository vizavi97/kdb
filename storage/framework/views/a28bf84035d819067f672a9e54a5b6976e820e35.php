<?php $__env->startSection('page-title', 'Produrement'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">Produrement</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Produrement</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/press-center/procurement.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container procurement mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="first-parent">
                    <h2 class="heading-2">
                    General Information
                    </h2>
                    <p>
                        Selection of goods/services supplier is conducted based on the results of comparative analysis with the most optimal conditions for the Bank.
                    </p>
                    <p>
                        During conduction of comparative analysis of potential suppliers, the following key indicators are considered:
                    </p>
                    <ul class="right-icon">
                        <li>
                            <p>
                                Compliance with all laid down requirements;
                            </p>
                        </li>
                        <li>
                            <p>
                                Price;
                            </p>
                        </li>
                        <li>
                            <p>
                                Quality;
                            </p>
                        </li>
                        <li>
                            <p>
                                Deadlines for execution / delivery;
                            </p>
                        </li>
                        <li>
                            <p>
                                Warranty service;
                            </p>
                        </li>
                        <li>
                            <p>
                                Other positive characteristics.
                            </p>
                        </li>
                    </ul>
                    <p>
                        Comparative characteristics are made based on the information provided at the request of the Bank from suppliers / manufacturers of products (services), as well as their brochures or other reliable sources of information.
                    </p>
                    <p>
                        If the activity related to the delivery of goods or performance of works (services) is subject to licensing in accordance with the legislation of the Republic of Uzbekistan, then the only applicants possessing appropriate license shall be permitted.
                    </p>
                    <p>
                        Notifications about conduction of purchases are not the public offer of the Bank. The Bank does not have any obligations to the suppliers participating in the open inquiry for proposals.
                    </p>
                    <p>
                        For more information about procurement of goods/works/ services, please contact the Procurement Department.
                    </p>
                </div>
                <div class="second-parent">

                    
                    <?php if(count($emails) > 0): ?>
                        <div class="email">
                            <span class="small-paragraph email-card-title">Contact the Procurement Team</span>
                            <div class="row">
                                <?php $__currentLoopData = $emails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-4 mb-4">
                                        <a class="email-card" href="mailto:<?php echo e($email->email); ?>">
                                            <?php echo e($email->email); ?>

                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.press-center-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DESKTOP\KDB\resources\views/press-center/procurement.blade.php ENDPATH**/ ?>