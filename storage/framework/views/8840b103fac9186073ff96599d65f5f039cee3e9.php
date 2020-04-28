<?php $__env->startSection('page-title', 'CCIAPM'); ?>

<?php $__env->startSection('breadcrumb'); ?>

    <span class="small-paragraph">CCIAPM</span>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | CCIAPM</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/cciapm.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container cciapm">
        <div class="row">
            
            <main class="col-xl-9 main-hero mb-5">
                <div class="row">
                    <div class="col-6">
                        <div class="first-parent">
                            <h2 class="heading-2" style="text-transform: initial;">
                            Center for Coordination of Investment Activities <br> and Project Management
                            </h2>
                            <p class="small-paragraph">
                                KDB Bank Uzbekistan has established a Center for Coordination of Investment Activities and Project Management (hereafter “The Center”) &nbsp; to provide the support in attracting foreign investments to Uzbekistan economy.
                            </p>
                        </div>
                        <div class="second-parent">
                            <h3 class="heading-3" style="text-transform: initial;">
                            The Center provides the following services
                            </h3>
                            <ul class="right-icon">
                                <li>
                                    <p class="small-paragraph">
                                        Rendering general guidance and referring to publicly available information on banking, investments, regulatory and permit procedures, location options and various business solutions
                                    </p>
                                </li>
                                <li>
                                    <p class="small-paragraph">
                                        Arranging meetings with relevant partners and providing support in connecting foreign investors with potential business partners, regional economic development organizations and government institutions to facilitate the business establishment
                                    </p>
                                </li>
                                <li>
                                    <p class="small-paragraph">
                                        Renting office premises at no cost for temporary period to investors (office equipped with computers, necessary office utilities and access to internet)
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <img src="<?php echo e(asset('img/corporates/cciapm/1.png')); ?>" width="100%">
                    </div>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.corporates-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Uzgenius Academy\Desktop\WEBSITES\KDB\resources\views/corporates/cciapm.blade.php ENDPATH**/ ?>