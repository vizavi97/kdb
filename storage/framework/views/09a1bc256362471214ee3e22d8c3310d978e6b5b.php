

<?php $__env->startSection('page-title'); ?>
    <?php echo app('translator')->get('corporates/credit/credit.1'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('corporates/credit/credit.2'); ?></span>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('corporates/credit/credit.3'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/credit/credit.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container credit my-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero">
                
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-12 mb-4">
                        <a href="<?php echo e(route('corporates.credit.credit-legal-entities', app()->getLocale())); ?>" class="card-link">
                            <?php echo app('translator')->get('corporates/credit/credit.4'); ?>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 mb-4 mb-lg-0">
                        <a href="<?php echo e(route('corporates.credit.application-for-loan', app()->getLocale())); ?>" class="card-link">
                            <?php echo app('translator')->get('corporates/credit/credit.5'); ?>
                        </a>
                    </div>
                </div>
                

                
                <div class="credit-calculator mt-5">
                    <h4><?php echo app('translator')->get('corporates/credit/credit.6'); ?></h4>
                    <form action="#" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row m-0">
                            <div class="col-lg-8 px-0 pr-lg-4">
                                <div class="slider">
                                    <div class="header">
                                        <h5><?php echo app('translator')->get('corporates/credit/credit.7'); ?></h5>
                                        <div class="holder">
                                            <input type="text" id="amount-output" value="10 000 000" maxlength="14">
                                            <?php echo app('translator')->get('corporates/credit/credit.8'); ?>
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
                                        <h5><?php echo app('translator')->get('corporates/credit/credit.9'); ?></h5>
                                        <div class="holder">
                                            <input type="text" id="month-output" value="12" maxlength="2">
                                            <?php echo app('translator')->get('corporates/credit/credit.10'); ?>
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
                                        <h5><?php echo app('translator')->get('corporates/credit/credit.11'); ?></h5>
                                        <div class="holder">
                                            <input type="text" id="interest-output" value="12" maxlength="2">
                                            <?php echo app('translator')->get('corporates/credit/credit.12'); ?>
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
                                        <?php echo app('translator')->get('corporates/credit/credit.13'); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 p-0 mt-4 mt-lg-0">
                                <div class="result">
                                    <div class="label"><?php echo app('translator')->get('corporates/credit/credit.14'); ?></div>
                                    <div class="output">
                                        <span id="monthly-payment"></span>
                                        <?php echo app('translator')->get('corporates/credit/credit.15'); ?>
                                    </div>
                                    <div class="label"><?php echo app('translator')->get('corporates/credit/credit.16'); ?></div>
                                    <div class="output">
                                        <span id="total-payment"></span>
                                        <?php echo app('translator')->get('corporates/credit/credit.17'); ?>
                                    </div>
                                    <div class="label"><?php echo app('translator')->get('corporates/credit/credit.18'); ?></div>
                                    <div class="output pb-0">
                                        <span id="total-interest"></span>
                                        <?php echo app('translator')->get('corporates/credit/credit.19'); ?>
                                    </div>
                                </div>
                                <div class="custom-alert mt-4 d-block d-lg-none">
                                    <p class="text">
                                        <?php echo app('translator')->get('corporates/credit/credit.20'); ?>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/local/www/apache24/data/resources/views/corporates/credit/credit.blade.php ENDPATH**/ ?>