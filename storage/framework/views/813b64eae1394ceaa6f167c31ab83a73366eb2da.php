<?php $__env->startSection('page-title'); ?>

    <?php echo app('translator')->get('about-us/committees.committees'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph"><?php echo app('translator')->get('about-us/committees.committees-2'); ?></span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('about-us/committees.kdb-committees'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/about-us/committees.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container committees">
        <div class="row">
            <main class="col-xl-9 main-hero mb-5">
                <div class="shadow">
                    <button class="collapse-button" type="button" data-toggle="collapse" data-target="#firs-item" aria-expanded="false" aria-controls="firs-item">
                    <span><?php echo app('translator')->get('about-us/committees.general-meeting'); ?></span>
                    <div>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    </button>
                    <div class="collapse" id="firs-item">
                        <div class="card card-body">
                            <p class="small-paragraph">
                                <?php echo app('translator')->get('about-us/committees.the-general'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="shadow">
                    <button class="collapse-button" type="button" data-toggle="collapse" data-target="#second-item" aria-expanded="false" aria-controls="second-item">
                    <span><?php echo app('translator')->get('about-us/committees.counting-commission'); ?></span>
                    <div>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    </button>
                    <div class="collapse" id="second-item">
                        <div class="card card-body">
                            <p class="small-paragraph">
                                <?php echo app('translator')->get('about-us/committees.the-role'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="shadow">
                    <button class="collapse-button" type="button" data-toggle="collapse" data-target="#third-item" aria-expanded="false" aria-controls="third-item">
                    <span><?php echo app('translator')->get('about-us/committees.supervisory-board'); ?></span>
                    <div>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    </button>
                    <div class="collapse" id="third-item">
                        <div class="card card-body">
                            <p class="small-paragraph">
                                <?php echo app('translator')->get('about-us/committees.the-supervisory'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="shadow">
                    <button class="collapse-button" type="button" data-toggle="collapse" data-target="#fourth-item" aria-expanded="false" aria-controls="fourth-item">
                    <span><?php echo app('translator')->get('about-us/committees.revision-commission'); ?></span>
                    <div>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    </button>
                    <div class="collapse" id="fourth-item">
                        <div class="card card-body">
                            <p class="small-paragraph">
                                <?php echo app('translator')->get('about-us/committees.the-revision'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="shadow">
                    <button class="collapse-button" type="button" data-toggle="collapse" data-target="#fifth-item" aria-expanded="false" aria-controls="fifth-item">
                    <span><?php echo app('translator')->get('about-us/committees.management-board'); ?></span>
                    <div>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    </button>
                    <div class="collapse" id="fifth-item">
                        <div class="card card-body">
                            <p class="small-paragraph">
                                <?php echo app('translator')->get('about-us/committees.the-direction'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="shadow">
                    <button class="collapse-button" type="button" data-toggle="collapse" data-target="#sixth-item" aria-expanded="false" aria-controls="sixth-item">
                    <span><?php echo app('translator')->get('about-us/committees.alco-committee'); ?></span>
                    <div>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    </button>
                    <div class="collapse" id="sixth-item">
                        <div class="card card-body">
                            <p class="small-paragraph">
                                <?php echo app('translator')->get('about-us/committees.asset-liability'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="shadow">
                    <button class="collapse-button" type="button" data-toggle="collapse" data-target="#seventh-item" aria-expanded="false" aria-controls="seventh-item">
                    <span><?php echo app('translator')->get('about-us/committees.risk-management'); ?></span>
                    <div>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    </button>
                    <div class="collapse" id="seventh-item">
                        <div class="card card-body">
                            <p class="small-paragraph">
                                <?php echo app('translator')->get('about-us/committees.risk-management-2'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="shadow">
                    <button class="collapse-button" type="button" data-toggle="collapse" data-target="#eightth-item" aria-expanded="false" aria-controls="eightth-item">
                    <span><?php echo app('translator')->get('about-us/committees.credit-committee'); ?></span>
                    <div>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    </button>
                    <div class="collapse" id="eightth-item">
                        <div class="card card-body">
                            <p class="small-paragraph">
                                <?php echo app('translator')->get('about-us/committees.credit-committee-2'); ?> 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="shadow">
                    <button class="collapse-button" type="button" data-toggle="collapse" data-target="#nineth-item" aria-expanded="false" aria-controls="nineth-item">
                    <span><?php echo app('translator')->get('about-us/committees.liquidity-management'); ?> </span>
                    <div>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    </button>
                    <div class="collapse" id="nineth-item">
                        <div class="card card-body">
                            <p class="small-paragraph">
                                <?php echo app('translator')->get('about-us/committees.the-liquidity'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="shadow">
                    <button class="collapse-button" type="button" data-toggle="collapse" data-target="#ten-item" aria-expanded="false" aria-controls="ten-item">
                    <span><?php echo app('translator')->get('about-us/committees.human-resources'); ?></span>
                    <div>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    </button>
                    <div class="collapse" id="ten-item">
                        <div class="card card-body">
                            <p class="small-paragraph">
                                <?php echo app('translator')->get('about-us/committees.the-human'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="shadow">
                    <button class="collapse-button" type="button" data-toggle="collapse" data-target="#elevn-item" aria-expanded="false" aria-controls="elevn-item">
                    <span><?php echo app('translator')->get('about-us/committees.procurement-committee'); ?></span>
                    <div>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    </button>
                    <div class="collapse" id="elevn-item">
                        <div class="card card-body">
                            <p class="small-paragraph">
                                <?php echo app('translator')->get('about-us/committees.the-main'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="shadow">
                    <button class="collapse-button" type="button" data-toggle="collapse" data-target="#twelwe-item" aria-expanded="false" aria-controls="twelwe-item">
                    <span><?php echo app('translator')->get('about-us/committees.audit-committee'); ?></span>
                    <div>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    </button>
                    <div class="collapse" id="twelwe-item">
                        <div class="card card-body">
                            <p class="small-paragraph">
                                <?php echo app('translator')->get('about-us/committees.audit-committee-2'); ?>
                            </p>
                            <p class="small-paragraph">
                                <?php echo app('translator')->get('about-us/committees.the-main-2'); ?>
                            </p>
                            <ul class="right-icon">
                                <li>
                                    <p><?php echo app('translator')->get('about-us/committees.studying-reports'); ?></p>
                                </li>
                                <li>
                                    <p><?php echo app('translator')->get('about-us/committees.studying-quarterly'); ?></p>
                                </li>
                                <li>
                                    <p><?php echo app('translator')->get('about-us/committees.rendering-assistance'); ?></p>
                                </li>
                                <li>
                                    <p><?php echo app('translator')->get('about-us/committees.rendering-assistance-2'); ?></p>
                                </li>
                                <li>
                                    <p><?php echo app('translator')->get('about-us/committees.coordination-of'); ?></p>
                                </li>
                                <li>
                                    <p><?php echo app('translator')->get('about-us/committees.consideration-of-2'); ?></p>
                                </li>
                                <li>
                                    <p><?php echo app('translator')->get('about-us/committees.control-over'); ?></p>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.about-us-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DESKTOP\KDB\resources\views/about-us/committees.blade.php ENDPATH**/ ?>