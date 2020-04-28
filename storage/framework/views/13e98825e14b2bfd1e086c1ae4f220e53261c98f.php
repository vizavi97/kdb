

<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('corporates/credit/credit-legal-entities.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>

    <span class="small-paragraph"><?php echo app('translator')->get('corporates/credit/credit-legal-entities.2'); ?></span>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('corporates/credit/credit-legal-entities.3'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/credit/credit.css')); ?>">

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/credit/credit-legal-entities.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container credit-legal-entities credit my-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero">
                <h2 class="heading-2 mb-4"><?php echo app('translator')->get('corporates/credit/credit-legal-entities.4'); ?></h2>
                <p class="small-paragraph">
                    <?php echo app('translator')->get('corporates/credit/credit-legal-entities.5'); ?>
                </p>

                <ul class="right-icon mb-5">
                    <li>
                        <p><?php echo app('translator')->get('corporates/credit/credit-legal-entities.6'); ?></p>
                    </li>
                    <li>
                        <p><?php echo app('translator')->get('corporates/credit/credit-legal-entities.7'); ?></p>
                    </li>
                    <li>
                        <p><?php echo app('translator')->get('corporates/credit/credit-legal-entities.8'); ?></p>
                    </li>
                    <li>
                        <p><?php echo app('translator')->get('corporates/credit/credit-legal-entities.9'); ?></p>
                    </li>
                    <li>
                        <p><?php echo app('translator')->get('corporates/credit/credit-legal-entities.10'); ?></p>
                    </li>
                    <li>
                        <p><?php echo app('translator')->get('corporates/credit/credit-legal-entities.11'); ?></p>
                    </li>
                    <li>
                        <p><?php echo app('translator')->get('corporates/credit/credit-legal-entities.12'); ?></p>
                    </li>
                </ul>

                <h3 class="heading-3 mb-4"><?php echo app('translator')->get('corporates/credit/credit-legal-entities.13'); ?></h3>
                <p><strong><?php echo app('translator')->get('corporates/credit/credit-legal-entities.14'); ?></strong></p>
                <ul class="right-icon mt-4">
                    <li>
                        <p>
                            <?php echo app('translator')->get('corporates/credit/credit-legal-entities.15'); ?>
                        </p>
                    </li>
                    <li>
                        <p>
                            <?php echo app('translator')->get('corporates/credit/credit-legal-entities.16'); ?>
                        </p>
                    </li>
                </ul>
                <p><strong><?php echo app('translator')->get('corporates/credit/credit-legal-entities.17'); ?></strong></p>
                <ul class="right-icon mt-4">
                    <li>
                        <p>
                            <?php echo app('translator')->get('corporates/credit/credit-legal-entities.18'); ?>
                        </p>
                    </li>
                    <li>
                        <p>
                            <?php echo app('translator')->get('corporates/credit/credit-legal-entities.19'); ?>
                        </p>
                    </li>
                </ul>
                <p class="small-paragraph">
                    <?php echo app('translator')->get('corporates/credit/credit-legal-entities.20'); ?>
                </p>
                <p><strong><?php echo app('translator')->get('corporates/credit/credit-legal-entities.21'); ?></strong></p>
                <p><strong><?php echo app('translator')->get('corporates/credit/credit-legal-entities.22'); ?></strong></p>
                <p><strong><?php echo app('translator')->get('corporates/credit/credit-legal-entities.23'); ?></strong></p>
                <ul class="right-icon mt-4">
                    <li>
                        <p>
                            <?php echo app('translator')->get('corporates/credit/credit-legal-entities.24'); ?>
                        </p>
                    </li>
                </ul>
                <p><strong><?php echo app('translator')->get('corporates/credit/credit-legal-entities.25'); ?></strong></p>
                <ul class="right-icon mt-4">
                    <li>
                        <p>
                            <?php echo app('translator')->get('corporates/credit/credit-legal-entities.26'); ?>
                        </p>
                    </li>
                </ul>
                <p class="small-paragraph">
                    <?php echo app('translator')->get('corporates/credit/credit-legal-entities.27'); ?>
                </p>

                
                <div class="credit-calculator mt-5">
                    <h4><?php echo app('translator')->get('corporates/credit/credit-legal-entities.28'); ?></h4>
                    <form action="#" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row m-0">
                            <div class="col-lg-8 px-0 pr-lg-4">
                                <div class="slider">
                                    <div class="header">
                                        <h5><?php echo app('translator')->get('corporates/credit/credit-legal-entities.29'); ?></h5>
                                        <div class="holder">
                                            <input type="text" id="amount-output" value="10 000 000" maxlength="14">
                                            <?php echo app('translator')->get('corporates/credit/credit-legal-entities.30'); ?>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <input type="range" min="5000000" max="50000000000" value="10000000" step="100000" class="range" id="amount-range">
                                        <div class="ranged-area" id="amount-ranged-area"></div>
                                    </div>
                                    <div class="footer">
                                        <p>5 000 000</p>
                                        <p>50 000 000 000</p>
                                    </div>
                                </div>
                                <div class="slider mt-3">
                                    <div class="header">
                                        <h5><?php echo app('translator')->get('corporates/credit/credit-legal-entities.31'); ?></h5>
                                        <div class="holder">
                                            <input type="text" id="month-output" value="12" maxlength="2">
                                            <?php echo app('translator')->get('corporates/credit/credit-legal-entities.32'); ?>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <input type="range" min="6" max="60" value="12" step="1" class="range" id="month-range">
                                        <div class="ranged-area" id="month-ranged-area"></div>
                                    </div>
                                    <div class="footer">
                                        <p>6</p>
                                        <p>60</p>
                                    </div>
                                </div>
                                <div class="slider mt-3">
                                    <div class="header">
                                        <h5><?php echo app('translator')->get('corporates/credit/credit-legal-entities.33'); ?></h5>
                                        <div class="holder">
                                            <input type="text" id="interest-output" value="12" maxlength="2">
                                            <?php echo app('translator')->get('corporates/credit/credit-legal-entities.34'); ?>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <input type="range" min="4" max="40" value="12" step="1" class="range" id="interest-range">
                                        <div class="ranged-area" id="interest-ranged-area"></div>
                                    </div>
                                    <div class="footer">
                                        <p>4</p>
                                        <p>40</p>
                                    </div>
                                </div>
                                <div class="custom-alert mt-4 d-none d-lg-block">
                                    <p class="text">
                                        <?php echo app('translator')->get('corporates/credit/credit-legal-entities.35'); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 p-0 mt-4 mt-lg-0">
                                <div class="result">
                                    <div class="label"><?php echo app('translator')->get('corporates/credit/credit-legal-entities.36'); ?></div>
                                    <div class="output">
                                        <span id="monthly-payment"></span>
                                        <?php echo app('translator')->get('corporates/credit/credit-legal-entities.37'); ?>
                                    </div>
                                    <div class="label"><?php echo app('translator')->get('corporates/credit/credit-legal-entities.38'); ?></div>
                                    <div class="output">
                                        <span id="total-payment"></span>
                                        <?php echo app('translator')->get('corporates/credit/credit-legal-entities.39'); ?>
                                    </div>
                                    <div class="label"><?php echo app('translator')->get('corporates/credit/credit-legal-entities.40'); ?></div>
                                    <div class="output pb-0">
                                        <span id="total-interest"></span>
                                        <?php echo app('translator')->get('corporates/credit/credit-legal-entities.41'); ?>
                                    </div>
                                </div>
                                <div class="custom-alert mt-4 d-block d-lg-none">
                                    <p class="text">
                                        <?php echo app('translator')->get('corporates/credit/credit-legal-entities.42'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                

            </main>

            <?php echo $__env->make('layouts.sidebars.corporates-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    
    <script src="<?php echo e(asset('js/jquery.number.min.js')); ?>"></script>
    
    
    <script src="<?php echo e(asset('js/credit-calculator.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/u0560543/kdb.itmaker.uz/resources/views/corporates/credit/credit-legal-entities.blade.php ENDPATH**/ ?>