

<?php $__env->startSection('page-title'); ?>

    <?php echo app('translator')->get('about-us/careers.job-pportunities'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('about-us/careers.job-opportunities-2'); ?></span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('about-us/careers.kdb-job'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/about-us/careers.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container job-vacancies">
        <div class="row">
            
            <main class="col-md-9 main-hero mb-5">

                <div class="row">
                    <div class="col-lg-7">
                        <img src="<?php echo e(asset('img/about-us/careers/1.jpg')); ?>" class="img-1">
                        <p class="paragraph space-1">
                            <?php echo app('translator')->get('about-us/careers.professionalism'); ?>
                        </p>
                        <div class="item modal-open" modal-id="modal1">
                            <?php echo app('translator')->get('about-us/careers.why-kdb'); ?>
                        </div>
                        <div class="item modal-open" modal-id="modal2">
                            <?php echo app('translator')->get('about-us/careers.eligibility'); ?>
                        </div>
                        <div class="item modal-open" modal-id="modal3">
                            <?php echo app('translator')->get('about-us/careers.requirements'); ?>
                        </div>
                        <div class="item modal-open" modal-id="modal4">
                            <?php echo app('translator')->get('about-us/careers.available'); ?>
                        </div>
                        <div class="item modal-open" modal-id="modal5">
                            <?php echo app('translator')->get('about-us/careers.frequently-asked'); ?>
                        </div>
                    </div>
                    <div class="col-lg-5 space-2">
                        <img src="<?php echo e(asset('img/about-us/careers/2.jpg')); ?>" class="woman">
                    </div>
                </div>

            </main>

            <?php echo $__env->make('layouts.sidebars.about-us-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            
            <div class="global-modal-window flex-center" id="modal1">
                <div class="global-modal-content">
                    <div class="modal-close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
                        </svg>
                    </div>
                    <div class="modal-content-inner">
                        <!-- Why KDB Starts -->
                        <div class="why-kdb w-100">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="heading-2 text-center">
                                        <?php echo app('translator')->get('about-us/careers.why-kdb-2'); ?>
                                    </h2>
                                    <ul class="right-icon">
                                        <li>
                                            <p>
                                                <?php echo app('translator')->get('about-us/careers.we-offer'); ?>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <?php echo app('translator')->get('about-us/careers.we-offer-2'); ?>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <?php echo app('translator')->get('about-us/careers.working-with'); ?>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <?php echo app('translator')->get('about-us/careers.development-is'); ?>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <?php echo app('translator')->get('about-us/careers.an-internal'); ?>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Why KDB Ends -->
                    </div>
                </div>
            </div>
            

            
            <div class="global-modal-window flex-center" id="modal2">
                <div class="global-modal-content">
                    <div class="modal-close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
                        </svg>
                    </div>
                    <div class="modal-content-inner">
                        <!-- Why KDB Starts -->
                        <div class="why-kdb w-100">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="heading-2 text-center"><?php echo app('translator')->get('about-us/careers.eligibility-2'); ?></h2>
                                    <ul class="right-icon">
                                        <li>
                                            <p>
                                                <?php echo app('translator')->get('about-us/careers.university-degree'); ?>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <?php echo app('translator')->get('about-us/careers.have-at'); ?>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <?php echo app('translator')->get('about-us/careers.high-communication'); ?>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <?php echo app('translator')->get('about-us/careers.good-time'); ?>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <?php echo app('translator')->get('about-us/careers.experience-in'); ?>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <?php echo app('translator')->get('about-us/careers.fluency-in'); ?>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Why KDB Ends -->
                    </div>
                </div>
            </div>
            

            
            <div class="global-modal-window flex-center" id="modal3">
                <div class="global-modal-content">
                    <div class="modal-close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
                        </svg>
                    </div>
                    <div class="modal-content-inner">
                        <!-- Why KDB Starts -->
                        <div class="requirments why-kdb">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="heading-2 text-center">
                                        <?php echo app('translator')->get('about-us/careers.requirements'); ?>
                                    </h2>
                                    <p class="bold-paragraph">
                                        <?php echo app('translator')->get('about-us/careers.kdb-bank'); ?>
                                    </p>
                                    <ul class="right-icon">
                                        <li>
                                            <p>
                                                <?php echo app('translator')->get('about-us/careers.university-degree'); ?>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <?php echo app('translator')->get('about-us/careers.basic-knowledge'); ?>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <?php echo app('translator')->get('about-us/careers.professionally-fluent'); ?>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <?php echo app('translator')->get('about-us/careers.ability-to'); ?>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <?php echo app('translator')->get('about-us/careers.good-client'); ?>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <?php echo app('translator')->get('about-us/careers.good-client-2'); ?>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <?php echo app('translator')->get('about-us/careers.prior-experience'); ?>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <?php echo app('translator')->get('about-us/careers.excellent-skills'); ?>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <?php echo app('translator')->get('about-us/careers.adapt-easily'); ?>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <?php echo app('translator')->get('about-us/careers.attention-to'); ?>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <?php echo app('translator')->get('about-us/careers.a-strong'); ?>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <?php echo app('translator')->get('about-us/careers.strong-communication'); ?>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Why KDB Ends -->
                    </div>
                </div>
            </div>
            

            
            <div class="global-modal-window flex-center" id="modal4">
                <div class="global-modal-content">
                    <div class="modal-close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
                        </svg>
                    </div>
                    <div class="modal-content-inner">
                        <!-- Avilabel Vacancies Starts -->
                        <div class="availabel-vacancies">
                            <div class="row mb-4 mb-lg-0">
                                <div class="col-12">
                                    <h2 class="heading-2 text-center">
                                        <?php echo app('translator')->get('about-us/careers.available-vacancies'); ?>
                                    </h2>
                                </div>
                            </div>

                            <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="row box">
                                    <div class="col-lg-2 col-md-3">
                                        <img src="<?php echo e(asset('img/about-us/careers/3.jpg')); ?>" class="d-none d-lg-block">
                                    </div>
                                    <div class="col-lg-10 col-md-9">
                                        <h6 class="heading-6"><?php echo e($job->getTranslatedAttribute('department', app()->getLocale(), 'fallbackLocale')); ?></h6>
                                        <h6 class="heading-blue"><?php echo e($job->getTranslatedAttribute('position', app()->getLocale(), 'fallbackLocale')); ?></h6>
                                        <p class="main-paragraph"><?php echo $job->getTranslatedAttribute('desc', app()->getLocale(), 'fallbackLocale'); ?></p>
                                        <a href="mailto:<?php echo e($job->email); ?>" class="apply-btn"><?php echo app('translator')->get('about-us/careers.apply-via'); ?></a>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                        <!-- Avilabel Vacancies Ends -->
                    </div>
                </div>
            </div>
            

            
            <div class="global-modal-window flex-center" id="modal5">
                <div class="global-modal-content">
                    <div class="modal-close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
                        </svg>
                    </div>
                    <div class="modal-content-inner">
                        <!-- Asked Questions starts -->
                        <section class="committees asked-questions w-100">
                            <div class="row">
                                <main class="col-12 main-hero">
                                    <h2 class="heading-2 text-center">
                                        <?php echo app('translator')->get('about-us/careers.frequently-asked'); ?>
                                    </h2>
                                    <div class="shadow">
                                        <button class="collapse-button" type="button" data-toggle="collapse" data-target="#firs-item" aria-expanded="false" aria-controls="firs-item">
                                        <span><?php echo app('translator')->get('about-us/careers.working-conditions'); ?></span>
                                        <div>
                                            <i class="fas fa-chevron-down"></i>
                                        </div>
                                        </button>
                                        <div class="collapse" id="firs-item">
                                            <div class="card card-body">
                                                <p class="small-paragraph">
                                                    <?php echo app('translator')->get('about-us/careers.kdb-bank-2'); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shadow">
                                        <button class="collapse-button" type="button" data-toggle="collapse" data-target="#second-item" aria-expanded="false" aria-controls="second-item">
                                        <span><?php echo app('translator')->get('about-us/careers.what-are'); ?></span>
                                        <div>
                                            <i class="fas fa-chevron-down"></i>
                                        </div>
                                        </button>
                                        <div class="collapse" id="second-item">
                                            <div class="card card-body">
                                                <p class="small-paragraph">
                                                    <?php echo app('translator')->get('about-us/careers.kdb-bank-3'); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shadow">
                                        <button class="collapse-button" type="button" data-toggle="collapse" data-target="#thiord-item" aria-expanded="false" aria-controls="thiord-item">
                                        <span><?php echo app('translator')->get('about-us/careers.about-learning'); ?></span>
                                        <div>
                                            <i class="fas fa-chevron-down"></i>
                                        </div>
                                        </button>
                                        <div class="collapse" id="thiord-item">
                                            <div class="card card-body">
                                                <p class="small-paragraph">
                                                    <?php echo app('translator')->get('about-us/careers.kdb-bank-4'); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shadow">
                                        <button class="collapse-button" type="button" data-toggle="collapse" data-target="#fourth-item" aria-expanded="false" aria-controls="fourth-item">
                                        <span><?php echo app('translator')->get('about-us/careers.what-steps'); ?></span>
                                        <div>
                                            <i class="fas fa-chevron-down"></i>
                                        </div>
                                        </button>
                                        <div class="collapse" id="fourth-item">
                                            <div class="card card-body">
                                                <p class="small-paragraph">
                                                    <?php echo app('translator')->get('about-us/careers.kdb-bank-5'); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </main>
                            </div>
                        </section>
                        <!-- Asked Questions ends -->
                    </div>
                </div>
            </div>
            

        </div>
    </section>
    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <!-- Modal js -->
    <script src="<?php echo e(asset('js/modal.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/local/www/apache24/data/resources/views/about-us/careers.blade.php ENDPATH**/ ?>