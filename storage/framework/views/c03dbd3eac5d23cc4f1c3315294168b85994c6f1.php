<?php $__env->startSection('page-title', 'Single International Card'); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Single International Card</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/corporates/single-local-card.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!-- Breadcrumb starts -->
    <section class="breadcrumb-custom container-fluid single-local-card">
        <div class="desctop container">
            <h1 class="heading-1">Single Local Card</h1>
            <div>
                <a class="small-paragraph" href="#">Home</a> /
                <span class="small-paragraph" href="#">Single Local Card</span>
            </div>
            <article class="card-cards mt-5">
                <div class="row m-0">
                    <div class="col-lg-4 p-0">
                        <img src="<?php echo e(asset('img/corporates/single-local-card/card-1.png')); ?>" class="img">
                    </div>
                    <div class="col-lg-8 p-0 pl-lg-5 mt-4 mt-lg-0">
                        <div class="row">
                            <div class="col-md-4">
                                <p class="small-paragraph">Payment system:</p>
                                <p class="small-paragraph fs-14 d-flex align-items-center mb-0">
                                    <img src="<?php echo e(asset('img/corporates/single-local-card/uzcard-icon.svg')); ?>">
                                    <strong class="pl-2">UzCard</strong>
                                </p>
                            </div>
                            <div class="col-md-4 mt-4 mt-md-0">
                                <p class="small-paragraph">Currency:</p>
                                <p class="small-paragraph fs-14 d-flex align-items-center mb-0">
                                    <img src="<?php echo e(asset('img/corporates/single-local-card/uzs-icon.svg')); ?>">
                                    <strong class="pl-2">Uzbekistan Soum</strong>
                                </p>
                            </div>
                            <div class="col-md-4 mt-4 mt-md-0">
                                <p class="small-paragraph">Type of card:</p>
                                <p class="small-paragraph fs-14 d-flex align-items-center mb-0">
                                    <img src="<?php echo e(asset('img/corporates/single-local-card/card-icon.svg')); ?>">
                                    <strong class="pl-2">Deposit card</strong>
                                </p>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-4">
                                <p class="small-paragraph">The validity of the card:</p>
                                <p class="small-paragraph fs-14 d-flex align-items-center mb-0">
                                    <strong class="pl-2">5 years</strong>
                                </p>
                            </div>
                            <div class="col-md-4 mt-4 mt-md-0">
                                <p class="small-paragraph">Transaction processing:</p>
                                <p class="small-paragraph fs-14 d-flex align-items-center mb-0">
                                    <strong class="pl-2">0%</strong>
                                </p>
                            </div>
                            <div class="col-md-4 mt-4 mt-md-0">
                                <p class="small-paragraph">Card account maintenance:</p>
                                <p class="small-paragraph fs-14 d-flex align-items-center mb-0">
                                    <strong class="pl-2">Free</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <!-- Breadcrumb ends -->

    
    <section class="desctop container single-local-card mt-5">
        <div class="row">
            
            <main class="col-xl-9 main-hero">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">UzCard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Humo</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active pt-4" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h2 class="heading-3">At vero eos et accusam et justo</h2>
                        <p class="small-paragraph">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, 
                        </p>
                    </div>
                    <div class="tab-pane fade pt-4" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h2 class="heading-3">At vero eos et accusam et justo</h2>
                        <p class="small-paragraph">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, 
                        </p>
                    </div>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.corporates-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Desktop\KDBBU\resources\views/corporates/single-international-card.blade.php ENDPATH**/ ?>