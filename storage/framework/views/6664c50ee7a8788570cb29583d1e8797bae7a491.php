<?php $__env->startSection('meta'); ?>

    <title><?php echo app('translator')->get('homepage.title'); ?></title>

    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/home.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!-- Header starts -->
    <header class="container-fluid px-0">
        <div class="owl-carousel owl-theme owl-item-1">

            <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="header-slider">
                    <img src="<?php echo e(Voyager::image( $slide->image )); ?>" alt="<?php echo e($slide->title); ?>">
                    <div class="slider-caption">
                        <div class="position-relative w-100 h-100">
                            <div class="slider-caption-inner">
                                <h1 class="heading-1"><?php echo e($slide->title); ?></h1>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php if($slide->cta_text && $slide->cta_link): ?>
                                        <a href="<?php echo e($slide->cta_link); ?>" class="readmore-button">
                                            <?php echo e($slide->cta_text); ?>

                                        </a>
                                        <?php endif; ?>
                                    </div>
                                    <?php if(count($slides) > 1): ?>
                                    <div class="col-md-6 d-flex justify-content-end">

                                        
                                        <svg class="mainPrevBtn" xmlns="http://www.w3.org/2000/svg" width="7.41" height="12" viewBox="0 0 7.41 12"><path d="M15.41,7.41,14,6,8,12l6,6,1.41-1.41L10.83,12Z" transform="translate(-8 -6)" fill="#fff"/></svg>
                                        

                                        
                                        <svg class="mainNextBtn" xmlns="http://www.w3.org/2000/svg" width="7.41" height="12" viewBox="0 0 7.41 12"><path d="M10,6,8.59,7.41,13.17,12,8.59,16.59,10,18l6-6Z" transform="translate(-8.59 -6)" fill="#fff"/></svg>
                                        

                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </header>
    <!-- Header ends -->

    <!-- Benifits starts -->
    <section class="container-fluid px-0 bg-white benifits pt-48 pb-48">
        <div class="container">
            <h2 class="heading-2"><?php echo app('translator')->get('homepage.why-choosing'); ?></h2>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 benifits-item">
                    <div class="benifits-image">
                        <img src="../img/home/benifits/business-growth.webp" class="main-image">
                    </div>
                    <div class="content">
                        <div>
                            <img src="../img/home/benifits/bussines growth-icon.svg">
                        </div>
                        <div>
                            <h4 class="heading-3 m-0 pl-4"><?php echo app('translator')->get('homepage.business-growth'); ?></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 benifits-item">
                    <div class="benifits-image">
                        <img src="../img/home/benifits/sustainability.webp" class="main-image">
                    </div>
                    <div class="content">
                        <div>
                            <img src="../img/home/benifits/sustainable-icon.svg">
                        </div>
                        <div>
                            <h4 class="heading-3 m-0 pl-4"><?php echo app('translator')->get('homepage.sustainability'); ?></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 benifits-item">
                    <div class="benifits-image">
                        <img src="../img/home/benifits/performance.webp" class="main-image">
                    </div>
                    <div class="content">
                        <div>
                            <img src="../img/home/benifits/performance-icon.svg" alt="">
                        </div>
                        <div>
                            <h4 class="heading-3 m-0 pl-4"><?php echo app('translator')->get('homepage.performance'); ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Benifits ends -->

    <!-- News Starts -->
    <section class="container-fluid news">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active news-nav-link" id="newsitem-tab" data-toggle="tab" href="#newsitem" role="tab" aria-controls="newsitem" aria-selected="true">
                                News
                                <div class="counter"><?php echo e(count($news)); ?></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="announcmentitem-tab" data-toggle="tab" href="#announcmentitem" role="tab" aria-controls="announcmentitem" aria-selected="false">
                                Announcements
                                <div class="counter"><?php echo e(count($announcements)); ?></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="eventsitem-tab" data-toggle="tab" href="#eventsitem" role="tab" aria-controls="eventsitem" aria-selected="false">
                                Events
                                <div class="counter"><?php echo e(count($events)); ?></div>
                            </a>
                        </li>
                    </ul>
                    <div  class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="newsitem" role="tabpanel" aria-labelledby="newsitem-tab">
                            <div class="owl-carousel owl-item-3">
                                <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="news-item" href="<?php echo e(route('press-center.news', app()->getLocale()) . '/' . $new->slug); ?>">
                                        <div class="news-img">
                                            <img src="<?php echo e(Voyager::image( $new->image )); ?>" alt="<?php echo e($new->getTranslatedAttribute('title', $locale, 'fallbackLocale')); ?>">
                                        </div>
                                        <div class="news-data">
                                            <span><?php echo e(date( 'd', strtotime($new->created_at) )); ?></span>
                                            <br />
                                            <span><?php echo e(date( 'M', strtotime($new->created_at) )); ?></span>
                                        </div>
                                        <div class="news-caption">
                                            <h6><?php echo e($new->getTranslatedAttribute('title', $locale, 'fallbackLocale')); ?></h6>
                                            <p class="small-paragraph"><?php echo e($new->getTranslatedAttribute('excerpt', $locale, 'fallbackLocale')); ?></p>
                                            <span>Read more</span>
                                        </div>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="announcmentitem" role="tabpanel" aria-labelledby="announcmentitem-tab">
                            <div class="owl-carousel owl-item-3">
                                <?php $__currentLoopData = $announcements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $announcement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="news-item" href="<?php echo e(route('press-center.news', app()->getLocale()) . '/' . $announcement->slug); ?>">
                                        <div class="news-img">
                                            <img src="<?php echo e(Voyager::image( $announcement->image )); ?>" alt="<?php echo e($announcement->getTranslatedAttribute('title', $locale, 'fallbackLocale')); ?>">
                                        </div>
                                        <div class="news-data">
                                            <span><?php echo e(date( 'd', strtotime($announcement->created_at) )); ?></span>
                                            <br />
                                            <span><?php echo e(date( 'M', strtotime($announcement->created_at) )); ?></span>
                                        </div>
                                        <div class="news-caption">
                                            <h6><?php echo e($announcement->getTranslatedAttribute('title', $locale, 'fallbackLocale')); ?></h6>
                                            <p class="small-paragraph"><?php echo e($announcement->getTranslatedAttribute('excerpt', $locale, 'fallbackLocale')); ?></p>
                                            <span>Read more</span>
                                        </div>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="eventsitem" role="tabpanel" aria-labelledby="eventsitem-tab">
                            <div class="owl-carousel owl-item-3">
                                <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="news-item" href="<?php echo e(route('press-center.news', app()->getLocale()) . '/' . $event->slug); ?>">
                                        <div class="news-img">
                                            <img src="<?php echo e(Voyager::image( $event->image )); ?>" alt="<?php echo e($event->getTranslatedAttribute('title', $locale, 'fallbackLocale')); ?>">
                                        </div>
                                        <div class="news-data">
                                            <span><?php echo e(date( 'd', strtotime($event->created_at) )); ?></span>
                                            <br />
                                            <span><?php echo e(date( 'M', strtotime($event->created_at) )); ?></span>
                                        </div>
                                        <div class="news-caption">
                                            <h6><?php echo e($event->getTranslatedAttribute('title', $locale, 'fallbackLocale')); ?></h6>
                                            <p class="small-paragraph"><?php echo e($event->getTranslatedAttribute('excerpt', $locale, 'fallbackLocale')); ?></p>
                                            <span>Read more</span>
                                        </div>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News Ends -->

    <!-- Best Services Starts -->
    <section class="best-services">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="heading-2"><?php echo app('translator')->get('homepage.our-best'); ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="item">
                        <header class="flex-align-center">
                            <img src="../img/home/services/crm.svg">
                            <h3 class="heading-3"><?php echo app('translator')->get('homepage.crm'); ?></h3>
                        </header>
                        <p class="small-paragraph">
                            Customer Relationship Management Department, helps to manage our clients and better understand their requirements in order to provide the best solutions, quickly as possible.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="item">
                        <header class="flex-align-center">
                            <img src="../img/home/services/trade-finance.svg">
                            <h3 class="heading-3">Loans</h3>
                        </header>
                        <p class="small-paragraph">
                            A new approach to business financing with loans from KDB Bank Uzbekistan. Credit Department helps our clients to choose the best option that fits your business.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="item">
                        <header class="flex-align-center">
                            <img src="../img/home/services/loans.svg">
                            <h3 class="heading-3">
                            Trade Finance
                            </h3>
                        </header>
                        <p class="small-paragraph">
                            Opportunities for your business. Our Trade Finance team makes your import and export transactions easy for you.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="item">
                        <header class="flex-align-center">
                            <img src="../img/home/services/international-cards.svg">
                            <h3 class="heading-3">
                            International Cards
                            </h3>
                        </header>
                        <p class="small-paragraph">
                            Professional solution for your company and business. Use our business and individual cards to make your life easy.  
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="item">
                        <header class="flex-align-center">
                            <img src="../img/home/services/treasury.svg">
                            <h3 class="heading-3">
                            Treasury
                            </h3>
                        </header>
                        <p class="small-paragraph">
                            A new concept in provision of the treasury services. Our bank can help you to use the right tools to improve your business.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="item">
                        <header class="flex-align-center">
                            <img src="../img/home/services/cash-and-payment.svg">
                            <h3 class="heading-3">
                            Cash & Payment
                            </h3>
                        </header>
                        <p class="small-paragraph">
                            No stress in your cash and payments. Our bank provides you the new solutions and opportunities for your business.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Best Services Ends -->

    <!-- Multipay starts -->
    <section class="container-fluid px-0 multipay">
        <div class="container">
            <div class="row p-0">
                <div class="col-xl-6 left">
                    <div class="multipay-caption">
                        <h2 class="heading-2">KDB Mobile - MultiPay</h2>
                        <p class="small-paragraph">
                            Customers enjoy a better experience when they choose MultiPay by KDB Bank Uzbekistan, such as: Fast and easy payments wherever they make their payments.
                        </p>
                        <div class="app">
                            <a href="#">
                                <img src="<?php echo e(asset('img/home/multipay/play-market.svg')); ?>" alt="multipay play market">
                            </a>
                            <a href="#">
                                <img src="<?php echo e(asset('img/home/multipay/app-store.svg')); ?>" alt="multipay app store">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 multipay-image">
                    <a class="fancybox" data-fancybox href="<?php echo e(asset('video/urban.mp4')); ?>">
                        <img src="<?php echo e(asset('img/home/multipay/multipay-mobile.webp')); ?>" alt="multipay app">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Multipay ends -->

    <!-- Cards Starts -->
    <section class="container-fluid visa">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active news-nav-link" id="visaitem-tab" data-toggle="tab" href="#visaitem" role="tab" aria-controls="visaitem" aria-selected="true">
                                Visa
                                <div class="counter"><?php echo e(count($visas)); ?></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="mastercarditem-tab" data-toggle="tab" href="#mastercarditem" role="tab" aria-controls="mastercarditem" aria-selected="false">
                                MasterCard
                                <div class="counter"><?php echo e(count($masters)); ?></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="uzcarditem-tab" data-toggle="tab" href="#uzcarditem" role="tab" aria-controls="uzcarditem" aria-selected="false">
                                UzCard
                                <div class="counter"><?php echo e(count($uzcards)); ?></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="humoitem-tab" data-toggle="tab" href="#humoitem" role="tab" aria-controls="humoitem" aria-selected="false">
                                Humo
                                <div class="counter"><?php echo e(count($humos)); ?></div>
                            </a>
                        </li>
                    </ul>
                    <div  class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="visaitem" role="tabpanel" aria-labelledby="visaitem-tab">
                            <div class="owl-carousel owl-item-3">
                                <?php $__currentLoopData = $visas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="item" href="<?php echo e(url( '/' . app()->getLocale() . '/' . strtolower($visa->ownership) . '/' . strtolower($visa->validity_area) . '-cards/' . $visa->slug )); ?>">
                                        <div class="visa-item">
                                            <img src="<?php echo e(Voyager::image( $visa->image )); ?>" alt="<?php echo e($visa->getTranslatedAttribute('name', $locale, 'fallbackLocale')); ?>">
                                            <div class="visa-caption">
                                                <h6><?php echo e($visa->getTranslatedAttribute('name', $locale, 'fallbackLocale')); ?></h6>
                                                <p class="small-paragraph"><?php echo e($visa->getTranslatedAttribute('excerpt', $locale, 'fallbackLocale')); ?></p>
                                                <span>Read More</span>
                                            </div>
                                        </div>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="mastercarditem" role="tabpanel" aria-labelledby="mastercarditem-tab">
                            <div class="owl-carousel owl-item-3">
                                <?php $__currentLoopData = $masters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $master): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="item" href="<?php echo e(url( '/' . app()->getLocale() . '/' . strtolower($master->ownership) . '/' . strtolower($master->validity_area) . '-cards/' . $master->slug )); ?>">
                                        <div class="visa-item">
                                            <img src="<?php echo e(Voyager::image( $master->image )); ?>" alt="<?php echo e($master->getTranslatedAttribute('name', $locale, 'fallbackLocale')); ?>">
                                            <div class="visa-caption">
                                                <h6><?php echo e($master->getTranslatedAttribute('name', $locale, 'fallbackLocale')); ?></h6>
                                                <p class="small-paragraph"><?php echo e($master->getTranslatedAttribute('excerpt', $locale, 'fallbackLocale')); ?></p>
                                                <span>Read More</span>
                                            </div>
                                        </div>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="uzcarditem" role="tabpanel" aria-labelledby="uzcarditem-tab">
                            <div class="owl-carousel owl-item-3">
                                <?php $__currentLoopData = $uzcards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uzcard): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="item" href="<?php echo e(url( '/' . app()->getLocale() . '/' . strtolower($uzcard->ownership) . '/' . strtolower($uzcard->validity_area) . '-cards/' . $uzcard->slug )); ?>">
                                        <div class="visa-item">
                                            <img src="<?php echo e(Voyager::image( $uzcard->image )); ?>" alt="<?php echo e($uzcard->getTranslatedAttribute('name', $locale, 'fallbackLocale')); ?>">
                                            <div class="visa-caption">
                                                <h6><?php echo e($uzcard->getTranslatedAttribute('name', $locale, 'fallbackLocale')); ?></h6>
                                                <p class="small-paragraph"><?php echo e($uzcard->getTranslatedAttribute('excerpt', $locale, 'fallbackLocale')); ?></p>
                                                <span>Read More</span>
                                            </div>
                                        </div>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="humoitem" role="tabpanel" aria-labelledby="humoitem-tab">
                            <div class="owl-carousel owl-theme owl-item-3">
                                <?php $__currentLoopData = $humos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $humo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="item" href="<?php echo e(url( '/' . app()->getLocale() . '/' . strtolower($humo->ownership) . '/' . strtolower($humo->validity_area) . '-cards/' . $humo->slug )); ?>">
                                        <div class="visa-item">
                                            <img src="<?php echo e(Voyager::image( $humo->image )); ?>" alt="<?php echo e($humo->getTranslatedAttribute('name', $locale, 'fallbackLocale')); ?>">
                                            <div class="visa-caption">
                                                <h6><?php echo e($humo->getTranslatedAttribute('name', $locale, 'fallbackLocale')); ?></h6>
                                                <p class="small-paragraph"><?php echo e($humo->getTranslatedAttribute('excerpt', $locale, 'fallbackLocale')); ?></p>
                                                <span>Read More</span>
                                            </div>
                                        </div>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cards Ends -->

    <!-- Counter starts -->
    <section class="container-fluid px-0 counters pt-48 pb-48">
        <div class="container">
            <h2 class="heading-2">Provides Services for 22 Years with Trust</h2>
            <p class="paragraph">
                KDB Bank Uzbekistan provides wide range of banking services. The Bank offers corporate and personal banking, loans, leasing, and e-banking services. KDB Bank Uzbekistan operates in Tashkent, Uzbekistan.
            </p>
            <div class="row pt-48">
                <div class="col-md-3 col-sm-6 counter-item">
                    <span class="counter-value" data-count="18">0</span>
                    <span>Global Subsiders</span>
                </div>
                <div class="col-md-3 col-sm-6 counter-item">
                    <span class="counter-value" data-count="3">0</span>
                    <span>Local Branches</span>
                </div>
                <div class="col-md-3 col-sm-6 counter-item">
                    <div class="extra-helper-item">
                        <span class="counter-value" data-count="25">0</span><span class="extra-plus">+</span>
                    </div>
                    <span>Awards Received</span>
                </div>
                <div class="col-md-3 col-sm-6 counter-item">
                    <div class="extra-helper-item">
                        <span class="counter-value" data-count="100">0</span><span class="extra-plus">+</span>
                    </div>
                    <span>Successfully Implemented Projects</span>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter ens -->

    <!-- Consultation starts -->
    <section class="container-fluid px-0 consultation">
        <div class="row p-0 m-0">
            <div class="consultation-left flex-align-center col-xl-6">
                <div class="blur"></div>
                <div class="consultation-caption">
                    <h2 class="heading-2">Get A Free Consultation</h2>
                    <p class="small-paragraph">
                        Fill out the form to request a consultation with one of the representatives of our customer service team. In this consultation, we will:
                        <ul>
                            <li>Review your application based on your needs</li>
                             <li>Talk about the possible solutions based on the legislation acts</li>
                              <li>Discuss the options for our future cooperation</li>
                        </ul>
                    </p>
                </div>
            </div>
            <div class="consultation-right col-xl-6">
                <form action="#" method="#">
                    <h4 class="heading-3">I would like to discuss</h4>
                    <select name="topic">
                        <option value="business-growth">Account Opening</option>
                        <option value="business-growth">Bussines Growth</option>
                        <option value="business-growth">Cash Withdrawing</option>
                    </select>
                    <div class="row">
                        <div class="col-sm-6 pr-sm-2">
                            <input type="text" name="name" placeholder="Full Name *">
                        </div>
                        <div class="col-sm-6 pl-sm-2">
                            <input type="email" name="email" placeholder="Email *">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 pr-sm-2">
                            <input type="text" name="company" placeholder="Company *">
                        </div>
                        <div class="col-sm-6 pl-sm-2">
                            <input type="text" name="phone" placeholder="Phone *">
                        </div>
                    </div>
                    <div>
                        <textarea name="message" placeholder="Message *"></textarea>
                    </div>
                    <button type="submit">SEND</button>
                </form>
            </div>
        </div>
    </section>
    <!-- Consultation starts -->

    <!-- Branches Starts -->
    <section class="branches">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h3>
                    Branches in Map
                    </h3>
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d47946.61753156985!2d69.27816698984377!3d41.316181369094146!3m2!1i1024!2i768!4f13.1!2m1!1skdb%20bank!5e0!3m2!1sen!2s!4v1572522161480!5m2!1sen!2s" frameborder="0" style="border:0;"></iframe>
                </div>
                <div class="col-md-5">
                    <h3>
                    Branches in Location
                    </h3>
                    <div class="item">
                        <p class="small-text">
                            <strong>Head Office of "KDB Bank Uzbekistan" JSC</strong>
                        </p>
                        <a href="tel:+998711208000" class="small-text mb-1">
                            <strong>Phone:</strong>
                            (+998 71) 120-80-00
                        </a>
                        <p class="small-text  mb-1">
                            <strong>Working Hours: </strong>
                            Monday - Friday 9:00AM-6:00PM
                        </p>
                        <p class="small-text  mb-1">
                            <strong>Address:</strong>
                            3, Bukhara Street, 100047, Tashkent, Uzbekistan
                        </p>
                    </div>
                    <div class="item mtb-15">
                        <p class="small-text">
                            <strong>Yunusobdo Branch of "KDB Bank Uzbekistan" JSC</strong>
                        </p>
                        <a href="tel:+998711208000" class="small-text mb-1">
                            <strong>Phone:</strong>
                            (+998 71) 120-61-41
                        </a>
                        <p class="small-text  mb-1">
                            <strong>Working Hours: </strong>
                            Monday - Friday 9:00AM-6:00PM
                        </p>
                        <p class="small-text  mb-1">
                            <strong>Address:</strong>
                            77, Minor Street, 100084, Tashkent, Uzbekistan
                        </p>
                    </div>
                    <div class="item">
                        <p class="small-text">
                            <strong>Yakkasaroy Branch of "KDB Bank Uzbekistan" JSC</strong>
                        </p>
                        <a href="tel:+998711208000" class="small-text mb-1">
                            <strong>Phone:</strong>
                            (+998 71) 140-06-30
                        </a>
                        <p class="small-text  mb-1">
                            <strong>Working Hours: </strong>
                            Monday - Friday 9:00AM-6:00PM
                        </p>
                        <p class="small-text  mb-1">
                            <strong>Address:</strong>
                            12, Usmon Nosir Str., 100070, Tashkent, Uzbekistan
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Branches Ends -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Fancybox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    
    <script src="<?php echo e(asset('js/home.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User 5\Desktop\KDB\resources\views/homepage.blade.php ENDPATH**/ ?>