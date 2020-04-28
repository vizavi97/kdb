<?php $__env->startSection('meta'); ?>

    <title>KDB | Bosh sahifa</title>

    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/home.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!-- Header starts -->
    <?php if(count($slides) > 0): ?>
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
                                            <i class="flex-center fas fa-angle-left mainPrevBtn"></i>
                                            <i class="flex-center fas fa-angle-right mainNextBtn"></i>
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
    <?php endif; ?>
    <!-- Header ends -->

    <!-- Benifits starts -->
    <section class="container-fluid px-0 bg-white benifits pt-48 pb-48">
        <div class="container">
            <h2 class="heading-2">Why Choosing KDB!</h2>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 benifits-item">
                    <div class="benifits-image">
                        <img src="../img/home/benifits/bussines growth.svg" alt="" class="main-image">
                    </div>
                    <div class="content">
                        <div>
                            <img src="../img/home/benifits/bussines growth-icon.svg" alt="">
                        </div>
                        <div>
                            <h4 class="heading-3 m-0 pl-4">business growth</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 benifits-item">
                    <div class="benifits-image">
                        <img src="../img/home/benifits/sustainability.svg" alt="" class="main-image">
                    </div>
                    <div class="content">
                        <div>
                            <img src="../img/home/benifits/sustainable-icon.svg" alt="">
                        </div>
                        <div>
                            <h4 class="heading-3 m-0 pl-4">sustainability</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 benifits-item">
                    <div class="benifits-image">
                        <img src="../img/home/benifits/performance.svg" alt="" class="main-image">
                    </div>
                    <div class="content">
                        <div>
                            <img src="../img/home/benifits/performance-icon.svg" alt="">
                        </div>
                        <div>
                            <h4 class="heading-3 m-0 pl-4">performance</h4>
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
                                <div class="counter">24</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="announcmentitem-tab" data-toggle="tab" href="#announcmentitem" role="tab" aria-controls="announcmentitem" aria-selected="false">
                                Announcements
                                <div class="counter">13</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="eventsitem-tab" data-toggle="tab" href="#eventsitem" role="tab" aria-controls="eventsitem" aria-selected="false">
                                Events
                                <div class="counter">7</div>
                            </a>
                        </li>
                    </ul>
                    <div  class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="newsitem" role="tabpanel" aria-labelledby="newsitem-tab">
                            <div class="owl-carousel owl-item-3">
                                <div class="item">
                                    <div class="news-item">
                                        <img src="../img/home/news/news-image-1.svg" alt="">
                                        <div class="post-data">
                                            <span>28</span>
                                            <br />
                                            <span>jan</span>
                                        </div>
                                        <div class="news-caption">
                                            <a href="#">
                                                <h6>
                                                Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit.
                                                </h6>
                                            </a>
                                            <p>
                                                Morbi at porttitor tellus. Nulla ornare orci vitae molestie placerat. Duis massa urna, hendrerit a egestas vel, luctus at ante. Duis iaculis quam id risus sagittis feugiat. Nam sit amet tincidunt ex.
                                            </p>
                                            <a href="#" class="readmore-link">
                                                Read more
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="news-item">
                                        <img src="../img/home/news/news-image-2.svg" alt="">
                                        <div class="post-data">
                                            <span>28</span>
                                            <br />
                                            <span>jan</span>
                                        </div>
                                        <div class="news-caption">
                                            <a href="#">
                                                <h6>
                                                Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit.
                                                </h6>
                                            </a>
                                            <p>
                                                Morbi at porttitor tellus. Nulla ornare orci vitae molestie placerat. Duis massa urna, hendrerit a egestas vel, luctus at ante. Duis iaculis quam id risus sagittis feugiat. Nam sit amet tincidunt ex.
                                            </p>
                                            <a href="#" class="readmore-link">
                                                Read more
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="news-item">
                                        <img src="../img/home/news/news-image-3.svg" alt="">
                                        <div class="post-data">
                                            <span>28</span>
                                            <br />
                                            <span>jan</span>
                                        </div>
                                        <div class="news-caption">
                                            <a href="#">
                                                <h6>
                                                Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit.
                                                </h6>
                                            </a>
                                            <p>
                                                Morbi at porttitor tellus. Nulla ornare orci vitae molestie placerat. Duis massa urna, hendrerit a egestas vel, luctus at ante. Duis iaculis quam id risus sagittis feugiat. Nam sit amet tincidunt ex.
                                            </p>
                                            <a href="#" class="readmore-link">
                                                Read more
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="announcmentitem" role="tabpanel" aria-labelledby="announcmentitem-tab">
                            <div class="owl-carousel owl-item-3">
                                <div class="item">
                                    <div class="news-item">
                                        <img src="../img/home/news/news-image-2.svg" alt="">
                                        <div class="post-data">
                                            <span>28</span>
                                            <br />
                                            <span>jan</span>
                                        </div>
                                        <div class="news-caption">
                                            <a href="#">
                                                <h6>
                                                Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit.
                                                </h6>
                                            </a>
                                            <p>
                                                Morbi at porttitor tellus. Nulla ornare orci vitae molestie placerat. Duis massa urna, hendrerit a egestas vel, luctus at ante. Duis iaculis quam id risus sagittis feugiat. Nam sit amet tincidunt ex.
                                            </p>
                                            <a href="#" class="readmore-link">
                                                Read more
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="eventsitem" role="tabpanel" aria-labelledby="eventsitem-tab">
                            <div class="owl-carousel owl-item-3">
                                <div class="item">
                                    <div class="news-item">
                                        <img src="../img/home/news/news-image-3.svg" alt="">
                                        <div class="post-data">
                                            <span>28</span>
                                            <br />
                                            <span>jan</span>
                                        </div>
                                        <div class="news-caption">
                                            <a href="#">
                                                <h6>
                                                Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit.
                                                </h6>
                                            </a>
                                            <p>
                                                Morbi at porttitor tellus. Nulla ornare orci vitae molestie placerat. Duis massa urna, hendrerit a egestas vel, luctus at ante. Duis iaculis quam id risus sagittis feugiat. Nam sit amet tincidunt ex.
                                            </p>
                                            <a href="#" class="readmore-link">
                                                Read more
                                            </a>
                                        </div>
                                    </div>
                                </div>
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
                    <h2 class="heading-2">Our Best Services</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="item">
                        <header class="flex-align-center">
                            <img src="../img/home/services/crm.svg">
                            <h3 class="heading-3">
                            CRM
                            </h3>
                        </header>
                        <p class="small-paragraph">
                            Morbi at porttitor tellus. Nulla ornare orci vitae molestie placerat. Duis massa urna, hendrerit a egestas vel, luctus at ante. Duis iaculis quam id risus
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="item">
                        <header class="flex-align-center">
                            <img src="../img/home/services/trade-finance.svg">
                            <h3 class="heading-3">
                            loans
                            </h3>
                        </header>
                        <p class="small-paragraph">
                            Morbi at porttitor tellus. Nulla ornare orci vitae molestie placerat. Duis massa urna, hendrerit a egestas vel, luctus at ante. Duis iaculis quam id risus
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="item">
                        <header class="flex-align-center">
                            <img src="../img/home/services/loans.svg">
                            <h3 class="heading-3">
                            Trade Finance
                            </h3>
                        </header>
                        <p class="small-paragraph">
                            Morbi at porttitor tellus. Nulla ornare orci vitae molestie placerat. Duis massa urna, hendrerit a egestas vel, luctus at ante. Duis iaculis quam id risus
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="item">
                        <header class="flex-align-center">
                            <img src="../img/home/services/international-cards.svg">
                            <h3 class="heading-3">
                            International Cards
                            </h3>
                        </header>
                        <p class="small-paragraph">
                            Morbi at porttitor tellus. Nulla ornare orci vitae molestie placerat. Duis massa urna, hendrerit a egestas vel, luctus at ante. Duis iaculis quam id risus
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="item">
                        <header class="flex-align-center">
                            <img src="../img/home/services/treasury.svg">
                            <h3 class="heading-3">
                            treasury
                            </h3>
                        </header>
                        <p class="small-paragraph">
                            Morbi at porttitor tellus. Nulla ornare orci vitae molestie placerat. Duis massa urna, hendrerit a egestas vel, luctus at ante. Duis iaculis quam id risus
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="item">
                        <header class="flex-align-center">
                            <img src="../img/home/services/cash-and-payment.svg">
                            <h3 class="heading-3">
                            Cash & Payment
                            </h3>
                        </header>
                        <p class="small-paragraph">
                            Morbi at porttitor tellus. Nulla ornare orci vitae molestie placerat. Duis massa urna, hendrerit a egestas vel, luctus at ante. Duis iaculis quam id risus
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
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porta semper
                            libero, dignissim dictum ante volutpat eu. Quisque fringilla diam eget
                            aliquam efficitur.
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
                        <img src="<?php echo e(asset('img/home/multipay/multipay-mobile.png')); ?>" alt="multipay app">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Multipay ends -->

    <!-- Visa Starts -->
    <section class="container-fluid visa">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active news-nav-link" id="visaitem-tab" data-toggle="tab" href="#visaitem" role="tab" aria-controls="visaitem" aria-selected="true">
                                Visa
                                <div class="counter">24</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="mastercarditem-tab" data-toggle="tab" href="#mastercarditem" role="tab" aria-controls="mastercarditem" aria-selected="false">
                                MasterCard
                                <div class="counter">13</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="uzcarditem-tab" data-toggle="tab" href="#uzcarditem" role="tab" aria-controls="uzcarditem" aria-selected="false">
                                Uzcard
                                <div class="counter">7</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="humoitem-tab" data-toggle="tab" href="#humoitem" role="tab" aria-controls="humoitem" aria-selected="false">
                                Humo
                                <div class="counter">7</div>
                            </a>
                        </li>
                    </ul>
                    <div  class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="visaitem" role="tabpanel" aria-labelledby="visaitem-tab">
                            <div class="owl-carousel owl-theme owl-item-3">
                                <div class="item">
                                    <div class="visa-item">
                                        <img src="<?php echo e(asset('img/home/cards/visa classic.svg')); ?>" alt="KDB visa classic">
                                        <div class="visa-caption">
                                            <a href="#">
                                                <h6>
                                                Visa classic
                                                </h6>
                                            </a>
                                            <p>
                                                Morbi at porttitor tellus. Nulla ornare orci vitae molestie placerat. Duis massa urna, hendrerit a
                                            </p>
                                            <a href="#" class="readmore-link">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="visa-item">
                                        <img src="<?php echo e(asset('img/home/cards/visa business.svg')); ?>" alt="KDB visa business">
                                        <div class="visa-caption">
                                            <a href="#">
                                                <h6>
                                                visa business
                                                </h6>
                                            </a>
                                            <p>
                                                Morbi at porttitor tellus. Nulla ornare orci vitae molestie placerat. Duis massa urna, hendrerit a
                                            </p>
                                            <a href="#" class="readmore-link">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="visa-item">
                                        <img src="<?php echo e(asset('img/home/cards/visa classic exchange.svg')); ?>" alt=" KDB visa classic exchange">
                                        <div class="visa-caption">
                                            <a href="#">
                                                <h6>
                                                visa classic exchange
                                                </h6>
                                            </a>
                                            <p>
                                                Morbi at porttitor tellus. Nulla ornare orci vitae molestie placerat. Duis massa urna, hendrerit a
                                            </p>
                                            <a href="#" class="readmore-link">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="mastercarditem" role="tabpanel" aria-labelledby="mastercarditem-tab">
                            <div class="owl-carousel owl-theme owl-item-3">
                                <div class="item">
                                    <div class="visa-item">
                                        <img src="<?php echo e(asset('img/home/cards/visa classic.svg')); ?>" alt="KDB visa classic">
                                        <div class="visa-caption">
                                            <a href="#">
                                                <h6>
                                                Visa classic
                                                </h6>
                                            </a>
                                            <p>
                                                Morbi at porttitor tellus. Nulla ornare orci vitae molestie placerat. Duis massa urna, hendrerit a
                                            </p>
                                            <a href="#" class="readmore-link">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="visa-item">
                                        <img src="<?php echo e(asset('img/home/cards/visa business.svg')); ?>" alt="KDB visa business">
                                        <div class="visa-caption">
                                            <a href="#">
                                                <h6>
                                                visa business
                                                </h6>
                                            </a>
                                            <p>
                                                Morbi at porttitor tellus. Nulla ornare orci vitae molestie placerat. Duis massa urna, hendrerit a
                                            </p>
                                            <a href="#" class="readmore-link">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="visa-item">
                                        <img src="<?php echo e(asset('img/home/cards/visa classic exchange.svg')); ?>" alt=" KDB visa classic exchange">
                                        <div class="visa-caption">
                                            <a href="#">
                                                <h6>
                                                visa classic exchange
                                                </h6>
                                            </a>
                                            <p>
                                                Morbi at porttitor tellus. Nulla ornare orci vitae molestie placerat. Duis massa urna, hendrerit a
                                            </p>
                                            <a href="#" class="readmore-link">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="uzcarditem" role="tabpanel" aria-labelledby="uzcarditem-tab">
                            <div class="owl-carousel owl-theme owl-item-3">
                                <div class="item">
                                    <div class="visa-item">
                                        <img src="<?php echo e(asset('img/home/cards/visa classic.svg')); ?>" alt="KDB visa classic">
                                        <div class="visa-caption">
                                            <a href="#">
                                                <h6>
                                                Visa classic
                                                </h6>
                                            </a>
                                            <p>
                                                Morbi at porttitor tellus. Nulla ornare orci vitae molestie placerat. Duis massa urna, hendrerit a
                                            </p>
                                            <a href="#" class="readmore-link">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="visa-item">
                                        <img src="<?php echo e(asset('img/home/cards/visa business.svg')); ?>" alt="KDB visa business">
                                        <div class="visa-caption">
                                            <a href="#">
                                                <h6>
                                                visa business
                                                </h6>
                                            </a>
                                            <p>
                                                Morbi at porttitor tellus. Nulla ornare orci vitae molestie placerat. Duis massa urna, hendrerit a
                                            </p>
                                            <a href="#" class="readmore-link">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="visa-item">
                                        <img src="<?php echo e(asset('img/home/cards/visa classic exchange.svg')); ?>" alt=" KDB visa classic exchange">
                                        <div class="visa-caption">
                                            <a href="#">
                                                <h6>
                                                visa classic exchange
                                                </h6>
                                            </a>
                                            <p>
                                                Morbi at porttitor tellus. Nulla ornare orci vitae molestie placerat. Duis massa urna, hendrerit a
                                            </p>
                                            <a href="#" class="readmore-link">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="humoitem" role="tabpanel" aria-labelledby="humoitem-tab">
                            <div class="owl-carousel owl-theme owl-item-3">
                                <div class="item">
                                    <div class="visa-item">
                                        <img src="<?php echo e(asset('img/home/cards/visa classic exchange.svg')); ?>" alt="KDB visa classic">
                                        <div class="visa-caption">
                                            <a href="#">
                                                <h6>
                                                Visa classic
                                                </h6>
                                            </a>
                                            <p>
                                                Morbi at porttitor tellus. Nulla ornare orci vitae molestie placerat. Duis massa urna, hendrerit a
                                            </p>
                                            <a href="#" class="readmore-link">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="visa-item">
                                        <img src="<?php echo e(asset('img/home/cards/visa business.svg')); ?>" alt="KDB visa business">
                                        <div class="visa-caption">
                                            <a href="#">
                                                <h6>
                                                visa business
                                                </h6>
                                            </a>
                                            <p>
                                                Morbi at porttitor tellus. Nulla ornare orci vitae molestie placerat. Duis massa urna, hendrerit a
                                            </p>
                                            <a href="#" class="readmore-link">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="visa-item">
                                        <img src="<?php echo e(asset('img/home/cards/visa classic exchange.svg')); ?>" alt=" KDB visa classic exchange">
                                        <div class="visa-caption">
                                            <a href="#">
                                                <h6>
                                                visa classic exchange
                                                </h6>
                                            </a>
                                            <p>
                                                Morbi at porttitor tellus. Nulla ornare orci vitae molestie placerat. Duis massa urna, hendrerit a
                                            </p>
                                            <a href="#" class="readmore-link">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Visa Ends -->

    <!-- Counter starts -->
    <section class="container-fluid px-0 counters pt-48 pb-48">
        <div class="container">
            <h2 class="heading-2">Provides Services for 22 Years with Trust</h2>
            <p class="paragraph">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris id rutrum mauris, nec efficitur neque. Nulla arcu massa, lobortis sit amet dolor quis, condimentum venenatis dolor.
            </p>
            <div class="row pt-48">
                <div class="col-md-3 col-sm-6 counter-item">
                    <span class="counter-value" data-count="18">0</span>
                    <span>global subsiders</span>
                </div>
                <div class="col-md-3 col-sm-6 counter-item">
                    <span class="counter-value" data-count="3">0</span>
                    <span>local branches</span>
                </div>
                <div class="col-md-3 col-sm-6 counter-item">
                    <div class="extra-helper-item">
                        <span class="counter-value" data-count="25">0</span><span class="extra-plus">+</span>
                    </div>
                    <span>awards received</span>
                </div>
                <div class="col-md-3 col-sm-6 counter-item">
                    <div class="extra-helper-item">
                        <span class="counter-value" data-count="100">0</span><span class="extra-plus">+</span>
                    </div>
                    <span>Successfully implemented projects</span>
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
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris id rutrum mauris, nec
                        efficitur neque. Nulla arcu massa, lobortis sit amet dolor quis, condimentum venenatis dolor.
                        In lacinia pulvinar enim, vel auctor odio molestie ac. Duis elementum, nisl et dignissim
                        finibus, elit ipsum venenatis dui, sit amet lobortis dui odio ac ligula.
                    </p>
                </div>
            </div>
            <div class="consultation-right col-xl-6">
                <form action="#" method="#">
                    <h4 class="heading-3">I would like to discuss</h4>
                    <select name="topic">
                        <option value="business-growth">bussines growth</option>
                        <option value="business-growth">bussines growth</option>
                        <option value="business-growth">bussines growth</option>
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
                    <button type="submit">send</button>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Desktop\KDBBU\resources\views/homepage.blade.php ENDPATH**/ ?>