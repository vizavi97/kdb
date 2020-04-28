<?php $__env->startSection('page-title', 'Contact Us'); ?>

<?php $__env->startSection('breadcrumb'); ?>

<span class="small-paragraph">Contact Us</span>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

<title>KDB | Contact Us</title>

<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/about-us/contact-us.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<section class="desctop container contact-us">
    <div class="row">

        <main class="col-xl-9 main-hero mb-5">
            <div class="client-services">
                <h2 class="heading-2">
                    Client Services
                </h2>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active mr-0" id="corporates-tab" data-toggle="tab" href="#corporates"
                            role="tab" aria-controls="corporates" aria-selected="true">
                            Corporates
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-0" id="individuals-tab" data-toggle="tab" href="#individuals" role="tab"
                            aria-controls="individuals" aria-selected="false">
                            Individuals
                        </a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="corporates" role="tabpanel"
                        aria-labelledby="corporates-tab">
                        <div class="row parent no-gutters">
                            <div class="col-lg-3">
                                <img src="<?php echo e(Voyager::image( $corporates->image )); ?>">
                            </div>
                            <div class="col-lg-3 p-4">
                                <h5 class="category-name">Full Name</h5>
                                <h6 class="heading-blue">
                                    <?php echo e($corporates->getTranslatedAttribute('worker_1_name', app()->getLocale(), 'fallbackLocale')); ?>

                                </h6>
                                <h6 class="heading-blue">
                                    <?php echo e($corporates->getTranslatedAttribute('worker_2_name', app()->getLocale(), 'fallbackLocale')); ?>

                                </h6>
                                <h6 class="heading-blue">
                                    <?php echo e($corporates->getTranslatedAttribute('worker_3_name', app()->getLocale(), 'fallbackLocale')); ?>

                                </h6>
                            </div>
                            <div class="col-lg-3 p-4">
                                <h5 class="category-name">Phone Number</h5>
                                <a href="tel:<?php echo e($corporates->getTranslatedAttribute('worker_1_phone', app()->getLocale(), 'fallbackLocale')); ?>"
                                    class="link">
                                    <?php echo e($corporates->getTranslatedAttribute('worker_1_phone', app()->getLocale(), 'fallbackLocale')); ?>

                                </a>
                                <a href="tel:<?php echo e($corporates->getTranslatedAttribute('worker_2_phone', app()->getLocale(), 'fallbackLocale')); ?>"
                                    class="link">
                                    <?php echo e($corporates->getTranslatedAttribute('worker_2_phone', app()->getLocale(), 'fallbackLocale')); ?>

                                </a>
                                <a href="tel:<?php echo e($corporates->getTranslatedAttribute('worker_3_phone', app()->getLocale(), 'fallbackLocale')); ?>"
                                    class="link">
                                    <?php echo e($corporates->getTranslatedAttribute('worker_3_phone', app()->getLocale(), 'fallbackLocale')); ?>

                                </a>
                            </div>
                            <div class="col-lg-3 p-4">
                                <h5 class="category-name">E-mail</h5>
                                <a href="mailto:<?php echo e($corporates->getTranslatedAttribute('worker_1_email', app()->getLocale(), 'fallbackLocale')); ?>"
                                    class="link">
                                    <?php echo e($corporates->getTranslatedAttribute('worker_1_email', app()->getLocale(), 'fallbackLocale')); ?>

                                </a>
                                <a href="mailto:<?php echo e($corporates->getTranslatedAttribute('worker_2_email', app()->getLocale(), 'fallbackLocale')); ?>"
                                    class="link">
                                    <?php echo e($corporates->getTranslatedAttribute('worker_2_email', app()->getLocale(), 'fallbackLocale')); ?>

                                </a>
                                <a href="mailto:<?php echo e($corporates->getTranslatedAttribute('worker_3_email', app()->getLocale(), 'fallbackLocale')); ?>"
                                    class="link">
                                    <?php echo e($corporates->getTranslatedAttribute('worker_3_email', app()->getLocale(), 'fallbackLocale')); ?>

                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="individuals" role="tabpanel" aria-labelledby="individuals-tab">
                        <div class="row parent no-gutters">
                            <div class="col-lg-3">
                                <img src="<?php echo e(Voyager::image( $individuals->image )); ?>">
                            </div>
                            <div class="col-lg-3 p-4">
                                <h5 class="category-name">Full Name</h5>
                                <h6 class="heading-blue">
                                    <?php echo e($individuals->getTranslatedAttribute('worker_1_name', app()->getLocale(), 'fallbackLocale')); ?>

                                </h6>
                                <h6 class="heading-blue">
                                    <?php echo e($individuals->getTranslatedAttribute('worker_2_name', app()->getLocale(), 'fallbackLocale')); ?>

                                </h6>
                                <h6 class="heading-blue">
                                    <?php echo e($individuals->getTranslatedAttribute('worker_3_name', app()->getLocale(), 'fallbackLocale')); ?>

                                </h6>
                            </div>
                            <div class="col-lg-3 p-4">
                                <h5 class="category-name">Phone Number</h5>
                                <a href="tel:<?php echo e($individuals->getTranslatedAttribute('worker_1_phone', app()->getLocale(), 'fallbackLocale')); ?>"
                                    class="link">
                                    <?php echo e($individuals->getTranslatedAttribute('worker_1_phone', app()->getLocale(), 'fallbackLocale')); ?>

                                </a>
                                <a href="tel:<?php echo e($individuals->getTranslatedAttribute('worker_2_phone', app()->getLocale(), 'fallbackLocale')); ?>"
                                    class="link">
                                    <?php echo e($individuals->getTranslatedAttribute('worker_2_phone', app()->getLocale(), 'fallbackLocale')); ?>

                                </a>
                                <a href="tel:<?php echo e($individuals->getTranslatedAttribute('worker_3_phone', app()->getLocale(), 'fallbackLocale')); ?>"
                                    class="link">
                                    <?php echo e($individuals->getTranslatedAttribute('worker_3_phone', app()->getLocale(), 'fallbackLocale')); ?>

                                </a>
                            </div>
                            <div class="col-lg-3 p-4">
                                <h5 class="category-name">E-mail</h5>
                                <a href="mailto:<?php echo e($individuals->getTranslatedAttribute('worker_1_email', app()->getLocale(), 'fallbackLocale')); ?>"
                                    class="link">
                                    <?php echo e($individuals->getTranslatedAttribute('worker_1_email', app()->getLocale(), 'fallbackLocale')); ?>

                                </a>
                                <a href="mailto:<?php echo e($individuals->getTranslatedAttribute('worker_2_email', app()->getLocale(), 'fallbackLocale')); ?>"
                                    class="link">
                                    <?php echo e($individuals->getTranslatedAttribute('worker_2_email', app()->getLocale(), 'fallbackLocale')); ?>

                                </a>
                                <a href="mailto:<?php echo e($individuals->getTranslatedAttribute('worker_3_email', app()->getLocale(), 'fallbackLocale')); ?>"
                                    class="link">
                                    <?php echo e($individuals->getTranslatedAttribute('worker_3_email', app()->getLocale(), 'fallbackLocale')); ?>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="client-services">
                <h2 class="heading-2">
                    Client Relationship Managers
                </h2>
                <div class="row parent no-gutters">
                    <div class="col-lg-3">
                        <img src="<?php echo e(Voyager::image( $crm->image )); ?>">
                    </div>
                    <div class="col-lg-3 p-4">
                        <h5 class="category-name">Full Name</h5>
                        <h6 class="heading-blue">
                            <?php echo e($crm->getTranslatedAttribute('worker_1_name', app()->getLocale(), 'fallbackLocale')); ?>

                        </h6>
                        <h6 class="heading-blue">
                            <?php echo e($crm->getTranslatedAttribute('worker_2_name', app()->getLocale(), 'fallbackLocale')); ?>

                        </h6>
                        <h6 class="heading-blue">
                            <?php echo e($crm->getTranslatedAttribute('worker_3_name', app()->getLocale(), 'fallbackLocale')); ?>

                        </h6>
                    </div>
                    <div class="col-lg-3 p-4">
                        <h5 class="category-name">Phone Number</h5>
                        <a href="tel:<?php echo e($crm->getTranslatedAttribute('worker_1_phone', app()->getLocale(), 'fallbackLocale')); ?>"
                            class="link">
                            <?php echo e($crm->getTranslatedAttribute('worker_1_phone', app()->getLocale(), 'fallbackLocale')); ?>

                        </a>
                        <a href="tel:<?php echo e($crm->getTranslatedAttribute('worker_2_phone', app()->getLocale(), 'fallbackLocale')); ?>"
                            class="link">
                            <?php echo e($crm->getTranslatedAttribute('worker_2_phone', app()->getLocale(), 'fallbackLocale')); ?>

                        </a>
                        <a href="tel:<?php echo e($crm->getTranslatedAttribute('worker_3_phone', app()->getLocale(), 'fallbackLocale')); ?>"
                            class="link">
                            <?php echo e($crm->getTranslatedAttribute('worker_3_phone', app()->getLocale(), 'fallbackLocale')); ?>

                        </a>
                    </div>
                    <div class="col-lg-3 p-4">
                        <h5 class="category-name">E-mail</h5>
                        <a href="mailto:<?php echo e($crm->getTranslatedAttribute('worker_1_email', app()->getLocale(), 'fallbackLocale')); ?>"
                            class="link">
                            <?php echo e($crm->getTranslatedAttribute('worker_1_email', app()->getLocale(), 'fallbackLocale')); ?>

                        </a>
                        <a href="mailto:<?php echo e($crm->getTranslatedAttribute('worker_2_email', app()->getLocale(), 'fallbackLocale')); ?>"
                            class="link">
                            <?php echo e($crm->getTranslatedAttribute('worker_2_email', app()->getLocale(), 'fallbackLocale')); ?>

                        </a>
                        <a href="mailto:<?php echo e($crm->getTranslatedAttribute('worker_3_email', app()->getLocale(), 'fallbackLocale')); ?>"
                            class="link">
                            <?php echo e($crm->getTranslatedAttribute('worker_3_email', app()->getLocale(), 'fallbackLocale')); ?>

                        </a>
                    </div>
                </div>
            </div>
            <div class="client-services">
                <h2 class="heading-2">
                    Human Resources
                </h2>
                <div class="row parent no-gutters">
                    <div class="col-lg-3">
                        <img src="<?php echo e(Voyager::image( $hr->image )); ?>">
                    </div>
                    <div class="col-lg-3 p-4">
                        <h5 class="category-name">Full Name</h5>
                        <h6 class="heading-blue">
                            <?php echo e($hr->getTranslatedAttribute('worker_1_name', app()->getLocale(), 'fallbackLocale')); ?>

                        </h6>
                        <h6 class="heading-blue">
                            <?php echo e($hr->getTranslatedAttribute('worker_2_name', app()->getLocale(), 'fallbackLocale')); ?>

                        </h6>
                        <h6 class="heading-blue">
                            <?php echo e($hr->getTranslatedAttribute('worker_3_name', app()->getLocale(), 'fallbackLocale')); ?>

                        </h6>
                    </div>
                    <div class="col-lg-3 p-4">
                        <h5 class="category-name">Phone Number</h5>
                        <a href="tel:<?php echo e($hr->getTranslatedAttribute('worker_1_phone', app()->getLocale(), 'fallbackLocale')); ?>"
                            class="link">
                            <?php echo e($hr->getTranslatedAttribute('worker_1_phone', app()->getLocale(), 'fallbackLocale')); ?>

                        </a>
                        <a href="tel:<?php echo e($hr->getTranslatedAttribute('worker_2_phone', app()->getLocale(), 'fallbackLocale')); ?>"
                            class="link">
                            <?php echo e($hr->getTranslatedAttribute('worker_2_phone', app()->getLocale(), 'fallbackLocale')); ?>

                        </a>
                        <a href="tel:<?php echo e($hr->getTranslatedAttribute('worker_3_phone', app()->getLocale(), 'fallbackLocale')); ?>"
                            class="link">
                            <?php echo e($hr->getTranslatedAttribute('worker_3_phone', app()->getLocale(), 'fallbackLocale')); ?>

                        </a>
                    </div>
                    <div class="col-lg-3 p-4">
                        <h5 class="category-name">E-mail</h5>
                        <a href="mailto:<?php echo e($hr->getTranslatedAttribute('worker_1_email', app()->getLocale(), 'fallbackLocale')); ?>"
                            class="link">
                            <?php echo e($hr->getTranslatedAttribute('worker_1_email', app()->getLocale(), 'fallbackLocale')); ?>

                        </a>
                        <a href="mailto:<?php echo e($hr->getTranslatedAttribute('worker_2_email', app()->getLocale(), 'fallbackLocale')); ?>"
                            class="link">
                            <?php echo e($hr->getTranslatedAttribute('worker_2_email', app()->getLocale(), 'fallbackLocale')); ?>

                        </a>
                        <a href="mailto:<?php echo e($hr->getTranslatedAttribute('worker_3_email', app()->getLocale(), 'fallbackLocale')); ?>"
                            class="link">
                            <?php echo e($hr->getTranslatedAttribute('worker_3_email', app()->getLocale(), 'fallbackLocale')); ?>

                        </a>
                    </div>
                </div>
            </div>
            <div class="client-services">
                <h2 class="heading-2">
                    General Information
                </h2>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <?php $i = 1; ?>
                    <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e($i == 1 ? 'active' : ''); ?> mr-0" id="<?php echo e(preg_replace("/[^A-Z]+/", "", $branch->address)); ?>-tab" data-toggle="tab" href="#<?php echo e(preg_replace("/[^A-Z]+/", "", $branch->address)); ?>"
                                role="tab" aria-controls="<?php echo e(preg_replace("/[^A-Z]+/", "", $branch->address)); ?>" aria-selected="<?php echo e($i == 1 ? 'true' : 'false'); ?>">
                                <?php echo e($branch->getTranslatedAttribute('name', app()->getLocale(), 'fallbackLocale')); ?>

                            </a>
                        </li>
                    <?php $i++; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <?php $i = 1; ?>
                    <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="tab-pane fade <?php echo e($i == 1 ? 'show active' : ''); ?>" id="<?php echo e(preg_replace("/[^A-Z]+/", "", $branch->address)); ?>" role="tabpanel"
                            aria-labelledby="<?php echo e(preg_replace("/[^A-Z]+/", "", $branch->address)); ?>-tab">
                            <div class="row parent no-gutters  general-information">
                                <div class="col-lg-4 col-md-6 mini-item first">
                                    <i class="fas fa-phone"></i>
                                    <div class="information">
                                        <h5>
                                            Phone number
                                        </h5>
                                        <a href="tel:+998711208000">
                                            <?php echo e($branch->phone); ?>

                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mini-item first">
                                    <i class="far fa-calendar-alt"></i>
                                    <div class="information">
                                        <h5>
                                            Working hours
                                        </h5>
                                        <p>
                                            <?php echo $branch->getTranslatedAttribute('working_hours', app()->getLocale(), 'fallbackLocale'); ?>

                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mini-item first">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <div class="information">
                                        <h5>
                                            Address
                                        </h5>
                                        <p>
                                            <?php echo e($branch->getTranslatedAttribute('address', app()->getLocale(), 'fallbackLocale')); ?>

                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mini-item second">
                                    <i class="fas fa-phone-volume"></i>
                                    <div class="information">
                                        <h5>
                                            Hotline
                                        </h5>
                                        <a href="tel:<?php echo e($branch->hotline); ?>">
                                            <?php echo e($branch->hotline); ?>

                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mini-item second">
                                    <i class="fas fa-fax"></i>
                                    <div class="information">
                                        <h5>
                                            Fax
                                        </h5>
                                        <a href="tel:<?php echo e($branch->fax); ?>">
                                            <?php echo e($branch->fax); ?>

                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mini-item second">
                                    <i class="fas fa-envelope"></i>
                                    <div class="information">
                                        <h5>
                                            Mail Us
                                        </h5>
                                        <a href="mailto:<?php echo e($branch->email); ?>">
                                            <?php echo e($branch->email); ?>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php $i++; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        <li>
                            <button class="tablinks" onclick="openTabs(event, 'item-2')">
                                <span>july</span> <span> 27, 2018</span>
                            </button>
                        </li>
                        <li>
                            <button class="tablinks" onclick="openTabs(event, 'item-3')"> <span>december</span>
                                <span>16, 2017</span>
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
                    <div id="item-2" class="tabcontent">
                        <img src="<?php echo e(asset('img/about-us/ratings/sertificat.jpg')); ?>" alt="KDB licenses">
                    </div>
                    <div id="item-3" class="tabcontent">
                        <img src="<?php echo e(asset('img/about-us/ratings/standart-poor 2.jpg')); ?>" alt="KDB licenses">
                    </div>
                    <div id="item-4" class="tabcontent">
                        <img src="<?php echo e(asset('img/about-us/ratings/fitch ratings.jpg')); ?>" alt="KDB licenses">
                    </div>
                    <div id="item-5" class="tabcontent">
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
                        <li>
                            <button class="tablinks" onclick="openTabs(event, 'item-7')">
                                <span>july</span> <span> 27, 2018</span>
                            </button>
                        </li>
                        <li>
                            <button class="tablinks" onclick="openTabs(event, 'item-8')"> <span>december</span>
                                <span>16, 2017</span>
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
                    <div id="item-7" class="tabcontent">
                        <img src="<?php echo e(asset('img/about-us/ratings/sertificat.jpg')); ?>" alt="KDB licenses">
                    </div>
                    <div id="item-8" class="tabcontent">
                        <img src="<?php echo e(asset('img/about-us/ratings/standart-poor 2.jpg')); ?>" alt="KDB licenses">
                    </div>
                    <div id="item-9" class="tabcontent">
                        <img src="<?php echo e(asset('img/about-us/ratings/fitch ratings.jpg')); ?>" alt="KDB licenses">
                    </div>
                    <div id="item-10" class="tabcontent">
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
                        <li>
                            <button class="tablinks" onclick="openTabs(event, 'item-12')">
                                <span>july</span> <span> 27, 2018</span>
                            </button>
                        </li>
                        <li>
                            <button class="tablinks" onclick="openTabs(event, 'item-13')"> <span>december</span>
                                <span>16, 2017</span>
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
                    <div id="item-12" class="tabcontent">
                        <img src="<?php echo e(asset('img/about-us/ratings/sertificat.jpg')); ?>" alt="KDB licenses">
                    </div>
                    <div id="item-13" class="tabcontent">
                        <img src="<?php echo e(asset('img/about-us/ratings/standart-poor 2.jpg')); ?>" alt="KDB licenses">
                    </div>
                    <div id="item-14" class="tabcontent">
                        <img src="<?php echo e(asset('img/about-us/ratings/fitch ratings.jpg')); ?>" alt="KDB licenses">
                    </div>
                    <div id="item-15" class="tabcontent">
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
                        <li>
                            <button class="tablinks" onclick="openTabs(event, 'item-17')">
                                <span>july</span> <span> 27, 2018</span>
                            </button>
                        </li>
                        <li>
                            <button class="tablinks" onclick="openTabs(event, 'item-18')"> <span>december</span>
                                <span>16, 2017</span>
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
                    <div id="item-17" class="tabcontent">
                        <img src="<?php echo e(asset('img/about-us/ratings/sertificat.jpg')); ?>" alt="KDB licenses">
                    </div>
                    <div id="item-18" class="tabcontent">
                        <img src="<?php echo e(asset('img/about-us/ratings/standart-poor 2.jpg')); ?>" alt="KDB licenses">
                    </div>
                    <div id="item-19" class="tabcontent">
                        <img src="<?php echo e(asset('img/about-us/ratings/fitch ratings.jpg')); ?>" alt="KDB licenses">
                    </div>
                    <div id="item-20" class="tabcontent">
                        <img src="<?php echo e(asset('img/about-us/ratings/standart-poor 2.jpg')); ?>" alt="KDB licenses">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User 5\Desktop\KDB Last\resources\views/about-us/contact-us.blade.php ENDPATH**/ ?>