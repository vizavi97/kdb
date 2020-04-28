<?php $__env->startSection('page-title', 'Ratings'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">Ratings</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | Ratings</title>

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/about-us/ratings.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section class="desctop container ratings">
        <div class="row">
            
            <main class="col-xl-9 main-hero">
                <div class="main-hero-inner">
                    <div class="row no-gutters">
                        <div class="col-md-6 mb-4 flex-center item">
                            <div class="item-inner flex-center modal-open" modal-id="modal1">
                                <img src="<?php echo e(asset('img/about-us/ratings/1.png')); ?>" alt="KDB certificates">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 flex-center item">
                            <div class="item-inner flex-center modal-open" modal-id="modal2">
                                <img width="100%" src="<?php echo e(asset('img/about-us/ratings/2.png')); ?>" alt="KDB licenses">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 flex-center item">
                            <div class="item-inner flex-center modal-open" modal-id="modal3">
                                <img src="<?php echo e(asset('img/about-us/ratings/3.png')); ?>" alt="KDB certificates">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 flex-center item">
                            <div class="item-inner flex-center modal-open" modal-id="modal4">
                                <img src="<?php echo e(asset('img/about-us/ratings/4.png')); ?>" alt="KDB licenses">
                            </div>
                        </div>
                    </div>
                </div>    
            </main>

            <?php echo $__env->make('layouts.sidebars.about-us-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="global-modal-window flex-center" id="modal1">
                <div class="global-modal-content">
                    <i class="fas fa-times modal-close"></i>
                    <div class="modal-content-inner">
                        <ul>
                            <li>
                                <button class="tablinks active" onclick="openTabs(event, 'item-1')">
                                    <span>december</span> <span>28, 2018</span>
                                </button>
                            </li>
                            <li >
                                <button class="tablinks" onclick="openTabs(event, 'item-2')"> 
                                    <span>july</span> <span> 27, 2018</span>
                                </button>
                            </li>
                            <li>
                                <button class="tablinks" onclick="openTabs(event, 'item-3')"> <span>december</span> <span>16, 2017</span>
                                </button>
                            </li>
                            <li>
                                <button class="tablinks" onclick="openTabs(event, 'item-4')">
                                    <span>march</span> <span> 25, 2016</span>
                                </button>
                            </li>
                            <li>
                                <button class="tablinks" onclick="openTabs(event, 'item-5')">
                                    <span>january</span> <span>15, 2015</span>
                                </button>
                            </li>
                        </ul>
                        <div id="item-1" class="tabcontent active">
                            <img src="<?php echo e(asset('img/about-us/ratings/standart-poor 1.png')); ?>" alt="KDB licenses">
                        </div>
                        <div  id="item-2" class="tabcontent">
                            <img src="<?php echo e(asset('img/about-us/ratings/sertificat.jpg')); ?>" alt="KDB licenses">
                        </div>
                        <div  id="item-3" class="tabcontent">
                            <img src="<?php echo e(asset('img/about-us/ratings/standart-poor 2.jpg')); ?>" alt="KDB licenses">
                        </div>
                        <div  id="item-4" class="tabcontent">
                            <img src="<?php echo e(asset('img/about-us/ratings/fitch ratings.jpg')); ?>" alt="KDB licenses">
                        </div>
                        <div  id="item-5" class="tabcontent">
                            <img src="<?php echo e(asset('img/about-us/ratings/standart-poor 2.jpg')); ?>" alt="KDB licenses">
                        </div>
                    </div>
                </div>
            </div>

            <div class="global-modal-window flex-center" id="modal2">
                <div class="global-modal-content">
                    <i class="fas fa-times modal-close"></i>
                    <div class="modal-content-inner">
                        <ul>
                            <li>
                                <button class="tablinks active" onclick="openTabs(event, 'item-6')">
                                    <span>december</span> <span>28, 2018</span>
                                </button>
                            </li>
                            <li >
                                <button class="tablinks" onclick="openTabs(event, 'item-7')"> 
                                    <span>july</span> <span> 27, 2018</span>
                                </button>
                            </li>
                            <li>
                                <button class="tablinks" onclick="openTabs(event, 'item-8')"> <span>december</span> <span>16, 2017</span>
                                </button>
                            </li>
                            <li>
                                <button class="tablinks" onclick="openTabs(event, 'item-9')">
                                    <span>march</span> <span> 25, 2016</span>
                                </button>
                            </li>
                            <li>
                                <button class="tablinks" onclick="openTabs(event, 'item-10')">
                                    <span>january</span> <span>15, 2015</span>
                                </button>
                            </li>
                        </ul>
                        <div id="item-6" class="tabcontent active">
                            <img src="<?php echo e(asset('img/about-us/ratings/standart-poor 2.jpg')); ?>" alt="KDB licenses">
                        </div>
                        <div  id="item-7" class="tabcontent">
                            <img src="<?php echo e(asset('img/about-us/ratings/sertificat.jpg')); ?>" alt="KDB licenses">
                        </div>
                        <div  id="item-8" class="tabcontent">
                            <img src="<?php echo e(asset('img/about-us/ratings/standart-poor 2.jpg')); ?>" alt="KDB licenses">
                        </div>
                        <div  id="item-9" class="tabcontent">
                            <img src="<?php echo e(asset('img/about-us/ratings/fitch ratings.jpg')); ?>" alt="KDB licenses">
                        </div>
                        <div  id="item-10" class="tabcontent">
                            <img src="<?php echo e(asset('img/about-us/ratings/standart-poor 2.jpg')); ?>" alt="KDB licenses">
                        </div>
                    </div>
                </div>
            </div>

            <div class="global-modal-window flex-center" id="modal3">
                <div class="global-modal-content">
                    <i class="fas fa-times modal-close"></i>
                    <div class="modal-content-inner">
                        <ul>
                            <li>
                                <button class="tablinks active" onclick="openTabs(event, 'item-11')">
                                    <span>december</span> <span>28, 2018</span>
                                </button>
                            </li>
                            <li >
                                <button class="tablinks" onclick="openTabs(event, 'item-12')"> 
                                    <span>july</span> <span> 27, 2018</span>
                                </button>
                            </li>
                            <li>
                                <button class="tablinks" onclick="openTabs(event, 'item-13')"> <span>december</span> <span>16, 2017</span>
                                </button>
                            </li>
                            <li>
                                <button class="tablinks" onclick="openTabs(event, 'item-14')">
                                    <span>march</span> <span> 25, 2016</span>
                                </button>
                            </li>
                            <li>
                                <button class="tablinks" onclick="openTabs(event, 'item-15')">
                                    <span>january</span> <span>15, 2015</span>
                                </button>
                            </li>
                        </ul>
                        <div id="item-11" class="tabcontent active">
                            <img src="<?php echo e(asset('img/about-us/ratings/standart-poor 1.jpg')); ?>" alt="KDB licenses">
                        </div>
                        <div  id="item-12" class="tabcontent">
                            <img src="<?php echo e(asset('img/about-us/ratings/sertificat.jpg')); ?>" alt="KDB licenses">
                        </div>
                        <div  id="item-13" class="tabcontent">
                            <img src="<?php echo e(asset('img/about-us/ratings/standart-poor 2.jpg')); ?>" alt="KDB licenses">
                        </div>
                        <div  id="item-14" class="tabcontent">
                            <img src="<?php echo e(asset('img/about-us/ratings/fitch ratings.jpg')); ?>" alt="KDB licenses">
                        </div>
                        <div  id="item-15" class="tabcontent">
                            <img src="<?php echo e(asset('img/about-us/ratings/standart-poor 2.jpg')); ?>" alt="KDB licenses">
                        </div>
                    </div>
                </div>
            </div>

            <div class="global-modal-window flex-center" id="modal4">
                <div class="global-modal-content">
                    <i class="fas fa-times modal-close"></i>
                    <div class="modal-content-inner">
                        <ul>
                            <li>
                                <button class="tablinks active" onclick="openTabs(event, 'item-16')">
                                    <span>december</span> <span>28, 2018</span>
                                </button>
                            </li>
                            <li >
                                <button class="tablinks" onclick="openTabs(event, 'item-17')"> 
                                    <span>july</span> <span> 27, 2018</span>
                                </button>
                            </li>
                            <li>
                                <button class="tablinks" onclick="openTabs(event, 'item-18')"> <span>december</span> <span>16, 2017</span>
                                </button>
                            </li>
                            <li>
                                <button class="tablinks" onclick="openTabs(event, 'item-19')">
                                    <span>march</span> <span> 25, 2016</span>
                                </button>
                            </li>
                            <li>
                                <button class="tablinks" onclick="openTabs(event, 'item-20')">
                                    <span>january</span> <span>15, 2015</span>
                                </button>
                            </li>
                        </ul>
                        <div id="item-16" class="tabcontent active">
                            <img src="<?php echo e(asset('img/about-us/ratings/standart-poor 2.jpg')); ?>" alt="KDB licenses">
                        </div>
                        <div  id="item-17" class="tabcontent">
                            <img src="<?php echo e(asset('img/about-us/ratings/sertificat.jpg')); ?>" alt="KDB licenses">
                        </div>
                        <div  id="item-18" class="tabcontent">
                            <img src="<?php echo e(asset('img/about-us/ratings/standart-poor 2.jpg')); ?>" alt="KDB licenses">
                        </div>
                        <div  id="item-19" class="tabcontent">
                            <img src="<?php echo e(asset('img/about-us/ratings/fitch ratings.jpg')); ?>" alt="KDB licenses">
                        </div>
                        <div  id="item-20" class="tabcontent">
                            <img src="<?php echo e(asset('img/about-us/ratings/standart-poor 2.jpg')); ?>" alt="KDB licenses">
                        </div>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Desktop\KDBBU\resources\views/about-us/ratings.blade.php ENDPATH**/ ?>