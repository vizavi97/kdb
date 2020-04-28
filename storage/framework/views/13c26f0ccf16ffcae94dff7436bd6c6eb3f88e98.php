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
                                <h1 class="heading-1"><?php echo e($slide->getTranslatedAttribute('title', $locale, 'fallbackLocale')); ?></h1>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php if($slide->cta_text && $slide->cta_link): ?>
                                        <a href="<?php echo e(url( app()->getLocale() . '/' . $slide->cta_link )); ?>" class="readmore-button">
                                            <?php echo e($slide->getTranslatedAttribute('cta_text', $locale, 'fallbackLocale')); ?>

                                        </a>
                                        <?php endif; ?>
                                    </div>
                                    <?php if(count($slides) > 1): ?>
                                    <div class="col-md-6 d-none d-md-flex  justify-content-end">

                                        
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
                        <img src="../img/home/benifits/business-growth.jpg" class="main-image">
                    </div>
                    <div class="content">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><path d="M24684.828,21333h-37.656a1.172,1.172,0,0,1,0-2.344h1.25v-13.047a1.174,1.174,0,0,1,1.172-1.172h4.688a1.174,1.174,0,0,1,1.172,1.172v13.047h2.344v-8.359a1.174,1.174,0,0,1,1.172-1.172h4.688a1.174,1.174,0,0,1,1.172,1.172v8.359h2.344v-17.734a1.174,1.174,0,0,1,1.172-1.172h4.688a1.174,1.174,0,0,1,1.172,1.172v17.734h2.344v-24.766a1.174,1.174,0,0,1,1.172-1.172h4.688a1.174,1.174,0,0,1,1.172,1.172v24.766h1.25a1.172,1.172,0,0,1,0,2.344Zm-23.516-16.562a3.52,3.52,0,0,1-3.516-3.516,2.322,2.322,0,0,1,.029-.32l0-.031c0-.023.006-.049.01-.074l-3.469-1.734a3.509,3.509,0,1,1,1.082-2.527,2.322,2.322,0,0,1-.029.32l0,.021-.012.084,3.469,1.734a3.458,3.458,0,0,1,3.939-.637l4.705-4.705a3.483,3.483,0,0,1-.352-1.506,3.51,3.51,0,0,1,5.461-2.924l4.09-3.066a3.43,3.43,0,0,1-.176-1.041,3.523,3.523,0,1,1,1.568,2.924l-4.088,3.066a3.42,3.42,0,0,1,.176,1.041,3.494,3.494,0,0,1-5.021,3.164l-4.705,4.705a3.494,3.494,0,0,1-3.164,5.021Z" transform="translate(-24646 -21292.998)"/></svg>
                        </div>
                        <div>
                            <h4 class="heading-3 m-0 pl-4"><?php echo app('translator')->get('homepage.business-growth'); ?></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 benifits-item">
                    <div class="benifits-image">
                        <img src="../img/home/benifits/sustainability.jpg" class="main-image">
                    </div>
                    <div class="content">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="40.158" height="40" viewBox="0 0 40.158 40"><path d="M24759.221,21380h-4.678a1.179,1.179,0,0,1-1.176-1.178v-2.734a16.288,16.288,0,0,1-5.309-2.213l-1.916,1.928a1.176,1.176,0,0,1-1.67,0l-3.307-3.328a1.176,1.176,0,0,1,0-1.658l1.924-1.936a16.738,16.738,0,0,1-1.34-2.58,16.526,16.526,0,0,1-.865-2.773l-2.709,0a1.18,1.18,0,0,1-1.178-1.178v-4.705a1.18,1.18,0,0,1,1.178-1.178h2.709a16.495,16.495,0,0,1,2.205-5.352l-1.924-1.936a1.176,1.176,0,0,1,0-1.658l3.307-3.328a1.181,1.181,0,0,1,1.67,0l1.916,1.926a16.354,16.354,0,0,1,2.559-1.342,16.113,16.113,0,0,1,2.75-.869v-2.734a1.174,1.174,0,0,1,1.176-1.176h4.678a1.174,1.174,0,0,1,1.176,1.176v2.734a16.188,16.188,0,0,1,2.752.869,16.529,16.529,0,0,1,2.559,1.342l1.916-1.926a1.179,1.179,0,0,1,1.668,0l1.674,1.686a12.887,12.887,0,0,0-10.092,4.838,9.933,9.933,0,0,0-3.986-.838,10.06,10.06,0,0,0-10.049,10.049,9.842,9.842,0,0,0,3.117,7.281,10.356,10.356,0,0,0,7,2.766,9.8,9.8,0,0,0,6.58-2.527c.385,0,.762,0,1.115.006h.053c.322,0,.627.006.93.006a13.752,13.752,0,0,0,6.406-1.213,16.533,16.533,0,0,1-1.359,2.633l1.922,1.936a1.176,1.176,0,0,1,0,1.658l-3.307,3.328a1.174,1.174,0,0,1-1.668,0l-1.916-1.928a16.372,16.372,0,0,1-2.559,1.344,16.188,16.188,0,0,1-2.752.869v2.734A1.179,1.179,0,0,1,24759.221,21380Zm1.162-12.551h-1.162a8.221,8.221,0,0,1-8.191-8.234v-2.354a1.174,1.174,0,0,1,1.176-1.176h2.338a8.221,8.221,0,0,1,8.191,8.234v2.352a1.167,1.167,0,0,0-.342-.828l-4.676-4.705a1.176,1.176,0,0,0-1.664-.006,1.176,1.176,0,0,0-.006,1.664l4.336,4.361v.691Zm6.213-2.352h-1.508v-.324l0-.129a13.3,13.3,0,0,0-.145-2.465l6.219-6.256a1.18,1.18,0,0,0-.006-1.666,1.164,1.164,0,0,0-.828-.342,1.176,1.176,0,0,0-.836.348l-5.318,5.352a10.655,10.655,0,0,0-3.262-4.129,10.552,10.552,0,0,1,10.027-7.252h5.037a1.179,1.179,0,0,1,1.178,1.176v5.127A10.572,10.572,0,0,1,24766.6,21365.1Z" transform="translate(-24736.998 -21340.002)"/></svg>
                        </div>
                        <div>
                            <h4 class="heading-3 m-0 pl-4"><?php echo app('translator')->get('homepage.sustainability'); ?></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 benifits-item">
                    <div class="benifits-image">
                        <img src="../img/home/benifits/performance.jpg" class="main-image">
                    </div>
                    <div class="content">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="52.371" height="40" viewBox="0 0 52.371 40"><path d="M24828.186,21261a6.134,6.134,0,1,1,4.34-1.8A6.1,6.1,0,0,1,24828.186,21261Zm9.15-7.092h0a9.218,9.218,0,0,0-2.641-5.555,9.076,9.076,0,0,0-5.57-2.648l18.719-17.078h6.527v6.523l-17.035,18.758Zm17.035-5.234h-8.137l7.32-8.059a26.325,26.325,0,0,1,.816,6.523v1.535Zm-46.234,0H24802v-1.535a26.536,26.536,0,0,1,.434-4.777,26.127,26.127,0,0,1,1.271-4.551,25.8,25.8,0,0,1,2.074-4.238,26.481,26.481,0,0,1,2.838-3.832l5.818,5.818a13.779,13.779,0,0,0-6.3,11.58v1.535Zm24.471-10.3h0a13.943,13.943,0,0,0-2.887-2.641V21221a25.925,25.925,0,0,1,15.279,6.066l-12.393,11.307Zm-5.955-4.217h0a13.8,13.8,0,0,0-9.314-.033l-6.551-6.553a25.959,25.959,0,0,1,15.865-6.57v13.156Z" transform="translate(-24802 -21220.998)"/></svg>
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
                                <?php echo app('translator')->get('homepage.news'); ?>
                                <div class="counter"><?php echo e(count($news)); ?></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="announcmentitem-tab" data-toggle="tab" href="#announcmentitem" role="tab" aria-controls="announcmentitem" aria-selected="false">
                                <?php echo app('translator')->get('homepage.announcements'); ?>
                                <div class="counter"><?php echo e(count($announcements)); ?></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="eventsitem-tab" data-toggle="tab" href="#eventsitem" role="tab" aria-controls="eventsitem" aria-selected="false">
                                <?php echo app('translator')->get('homepage.events'); ?>
                                <div class="counter"><?php echo e(count($events)); ?></div>
                            </a>
                        </li>
                    </ul>
                    <div  class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="newsitem" role="tabpanel" aria-labelledby="newsitem-tab">
                            <div class="owl-carousel <?php echo e((count($news) > 2) ? 'owl-item-3' : 'owl-item-4'); ?>">
                                <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="news-item" href="<?php echo e(route('press-center.news', app()->getLocale()) . '/' . $new->slug); ?>">
                                        <div class="news-img">
                                            <img src="<?php echo e(Voyager::image( $new->image )); ?>" alt="<?php echo e($new->getTranslatedAttribute('title', $locale, 'fallbackLocale')); ?>">
                                        </div>
                                        <div class="news-data">
                                            <span><?php echo e(date( 'd.m.Y', strtotime($new->created_at) )); ?></span>
                                        </div>
                                        <div class="news-caption">
                                            <h6><?php echo e($new->getTranslatedAttribute('title', $locale, 'fallbackLocale')); ?></h6>
                                            <p class="small-paragraph"><?php echo e($new->getTranslatedAttribute('excerpt', $locale, 'fallbackLocale')); ?></p>
                                            <span><?php echo app('translator')->get('homepage.read-more'); ?></span>
                                        </div>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="announcmentitem" role="tabpanel" aria-labelledby="announcmentitem-tab">
                            <div class="owl-carousel <?php echo e((count($announcements) > 2) ? 'owl-item-3' : 'owl-item-4'); ?>">
                                <?php $__currentLoopData = $announcements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $announcement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="news-item" href="<?php echo e(route('press-center.news', app()->getLocale()) . '/' . $announcement->slug); ?>">
                                        <div class="news-img">
                                            <img src="<?php echo e(Voyager::image( $announcement->image )); ?>" alt="<?php echo e($announcement->getTranslatedAttribute('title', $locale, 'fallbackLocale')); ?>">
                                        </div>
                                        <div class="news-data">
                                            <span><?php echo e(date( 'd.m.Y', strtotime($new->created_at) )); ?></span>
                                        </div>
                                        <div class="news-caption">
                                            <h6><?php echo e($announcement->getTranslatedAttribute('title', $locale, 'fallbackLocale')); ?></h6>
                                            <p class="small-paragraph"><?php echo e($announcement->getTranslatedAttribute('excerpt', $locale, 'fallbackLocale')); ?></p>
                                            <span><?php echo app('translator')->get('homepage.read-more'); ?></span>
                                        </div>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="eventsitem" role="tabpanel" aria-labelledby="eventsitem-tab">
                            <div class="owl-carousel <?php echo e((count($events) > 2) ? 'owl-item-3' : 'owl-item-4'); ?>">
                                <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="news-item" href="<?php echo e(route('press-center.news', app()->getLocale()) . '/' . $event->slug); ?>">
                                        <div class="news-img">
                                            <img src="<?php echo e(Voyager::image( $event->image )); ?>" alt="<?php echo e($event->getTranslatedAttribute('title', $locale, 'fallbackLocale')); ?>">
                                        </div>
                                        <div class="news-data">
                                            <span><?php echo e(date( 'd.m.Y', strtotime($new->created_at) )); ?></span>
                                        </div>
                                        <div class="news-caption">
                                            <h6><?php echo e($event->getTranslatedAttribute('title', $locale, 'fallbackLocale')); ?></h6>
                                            <p class="small-paragraph"><?php echo e($event->getTranslatedAttribute('excerpt', $locale, 'fallbackLocale')); ?></p>
                                            <span><?php echo app('translator')->get('homepage.read-more'); ?></span>
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
                    <a href="<?php echo e(url(app()->getLocale() . '/corporates/crm')); ?>" class="service-link">
                        <div class="item">
                            <header class="flex-align-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="44.637" height="32" viewBox="0 0 44.637 32"><path d="M8.786,32H3.51A3.514,3.514,0,0,1,0,28.49V3.51A3.514,3.514,0,0,1,3.51,0H8.786V32Zm32.342,0H11.4V7.844H44.637V28.49A3.514,3.514,0,0,1,41.128,32ZM25.049,19.262h.7l1.456,2.828a.554.554,0,0,0,.532.308,1.1,1.1,0,0,0,.707-.276.775.775,0,0,0,.335-.585.324.324,0,0,0-.053-.191L27.43,19a2.072,2.072,0,0,0,1.286-2.158,2.149,2.149,0,0,0-.654-1.706,2.932,2.932,0,0,0-1.961-.569H23.9a.5.5,0,0,0-.51.5v6.762a.414.414,0,0,0,.245.377,1.353,1.353,0,0,0,1.169,0,.414.414,0,0,0,.245-.377V19.262Zm-5.167-4.7a2.747,2.747,0,0,0-1.845.606,2.383,2.383,0,0,0-.707,1.9v2.817a2.384,2.384,0,0,0,.707,1.9,2.746,2.746,0,0,0,1.845.606,3,3,0,0,0,1.919-.6,1.973,1.973,0,0,0,.75-1.627.8.8,0,0,0-.191-.622,1,1,0,0,0-.649-.165,1.154,1.154,0,0,0-.593.125.461.461,0,0,0-.226.375,3.438,3.438,0,0,1-.048.351,1.788,1.788,0,0,1-.112.324.57.57,0,0,1-.282.292,1.132,1.132,0,0,1-.494.1.937.937,0,0,1-.726-.266,1.155,1.155,0,0,1-.242-.8V17.072a1.165,1.165,0,0,1,.239-.8.921.921,0,0,1,.718-.266.938.938,0,0,1,.694.239,1.038,1.038,0,0,1,.253.718.447.447,0,0,0,.223.375,1.2,1.2,0,0,0,.606.125.981.981,0,0,0,.638-.165.8.8,0,0,0,.191-.622,1.843,1.843,0,0,0-.75-1.552A3.12,3.12,0,0,0,19.882,14.563Zm14.48,3.274h0v3.986a.414.414,0,0,0,.245.377,1.353,1.353,0,0,0,1.169,0,.414.414,0,0,0,.244-.377V15.392a.779.779,0,0,0-.239-.627.888.888,0,0,0-.59-.2,1.493,1.493,0,0,0-.728.144,1.855,1.855,0,0,0-.558.686l-1.1,1.914-1.095-1.914a1.861,1.861,0,0,0-.558-.686,1.493,1.493,0,0,0-.728-.144.888.888,0,0,0-.59.2.779.779,0,0,0-.239.627v6.432a.414.414,0,0,0,.245.377,1.353,1.353,0,0,0,1.17,0,.414.414,0,0,0,.244-.377V17.731l1.01,1.85a.546.546,0,0,0,.521.308.6.6,0,0,0,.553-.308l1.02-1.743Zm-8.26.149H25.049V16.009H26.1a.992.992,0,1,1,0,1.977ZM44.637,5.227H11.4V0H41.128a3.514,3.514,0,0,1,3.51,3.51V5.227Z" fill="#ffc409"/></svg>
                                <h3 class="heading-3"><?php echo app('translator')->get('homepage.crm'); ?></h3>
                            </header>
                            <p class="small-paragraph">
                                <?php echo app('translator')->get('homepage.customer-relationship'); ?>
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <a href="<?php echo e(url(app()->getLocale() . '/corporates/credit/application-for-loan')); ?>" class="service-link">
                        <div class="item">
                            <header class="flex-align-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30.215" height="40" viewBox="0 0 30.215 40"><path d="M24410.855,21776h-25.715a2.144,2.144,0,0,1-2.143-2.143V21761a13.774,13.774,0,0,1,.279-2.734,13.492,13.492,0,0,1,2.043-4.85,13.67,13.67,0,0,1,3.666-3.664,13.542,13.542,0,0,1,4.85-2.045,13.629,13.629,0,0,1,2.734-.277h2.857a13.585,13.585,0,0,1,13.293,10.836,13.774,13.774,0,0,1,.279,2.734v12.857a2.144,2.144,0,0,1-2.145,2.143Zm-12.855-23.57a10,10,0,1,0,10,10A10.011,10.011,0,0,0,24398,21752.43Zm0,18.57a8.542,8.542,0,0,1-4.793-1.463,8.7,8.7,0,0,1-1.27-1.047,8.567,8.567,0,0,1-1.047-10.854,8.6,8.6,0,0,1,2.316-2.316,8.575,8.575,0,0,1,12.689,10.445,8.46,8.46,0,0,1-.791,1.455A8.554,8.554,0,0,1,24398,21771Zm2.855-7.857a2.144,2.144,0,1,0,2.143,2.143A2.145,2.145,0,0,0,24400.855,21763.143Zm.924-5.5-8.572,8.57,1.012,1.01,8.57-8.57-1.01-1.01Zm-6.639-.209a2.143,2.143,0,1,0,2.145,2.143A2.146,2.146,0,0,0,24395.141,21757.43Zm5.715,8.57a.714.714,0,1,1,.715-.715A.716.716,0,0,1,24400.855,21766Zm-5.715-5.715a.714.714,0,1,1,.715-.713A.714.714,0,0,1,24395.141,21760.285Zm10.943-13.428a3.156,3.156,0,0,1-1.678-.535.639.639,0,0,1-.693-1.037,2.214,2.214,0,0,0-.279-1.064,3.226,3.226,0,0,1,1.061-.18c.082,0,.162,0,.24.01a1.877,1.877,0,0,0,.209.014,1.642,1.642,0,0,0,1.641-1.572,3.047,3.047,0,0,1,.336-1.119,3.051,3.051,0,0,1,2.672-1.619c.082,0,.166,0,.25.01a1.63,1.63,0,0,0,.193.012,1.686,1.686,0,0,0,1.07-.383l.922,1.094a2.931,2.931,0,0,1-1.922.719q-.132,0-.264-.012a1.5,1.5,0,0,0-.229-.016,1.62,1.62,0,0,0-1.621,1.564,3.018,3.018,0,0,1-1.072,2.029,2.757,2.757,0,0,1-1.143.607,1.381,1.381,0,0,0,.357.047,1.326,1.326,0,0,0,.264-.025,1.67,1.67,0,0,0,1.1-.736,3.122,3.122,0,0,1,.5-.549,3.028,3.028,0,0,1,3.684-.193,1.653,1.653,0,0,0,1,.34,1.782,1.782,0,0,0,.287-.025l.242,1.406a2.972,2.972,0,0,1-.543.051,2.974,2.974,0,0,1-1.7-.535,1.647,1.647,0,0,0-1-.34,1.579,1.579,0,0,0-.285.025,1.637,1.637,0,0,0-1.1.734,2.976,2.976,0,0,1-1.943,1.223A3.253,3.253,0,0,1,24406.084,21746.857Zm-4.514-.857h-7.143a.714.714,0,1,1,0-1.428h7.143a.714.714,0,1,1,0,1.428Zm-.441-2.857h-6.26l-2.941-5.883a3.793,3.793,0,0,0,1.16-.7,1.93,1.93,0,0,1,.615-.414,1.883,1.883,0,0,1,2.066.414,3.3,3.3,0,0,0,4.465,0,1.839,1.839,0,0,1,1.324-.559h.031a1.831,1.831,0,0,1,1.32.559,3.826,3.826,0,0,0,1.16.7Z" transform="translate(-24382.998 -21736)" fill="#ffc409"/></svg>
                                <h3 class="heading-3"><?php echo app('translator')->get('homepage.loan'); ?></h3>
                            </header>
                            <p class="small-paragraph">
                                <?php echo app('translator')->get('homepage.a-new'); ?>
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <a href="<?php echo e(url(app()->getLocale() . '/corporates/trade-finance')); ?>" class="service-link">
                        <div class="item">
                            <header class="flex-align-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32.268" height="40" viewBox="0 0 32.268 40"><path d="M24601.619,21622h-22.975a4.642,4.642,0,0,1-4.619-5.145l2.738-25.316a1.228,1.228,0,0,1,1.219-1.1h4.525v5.578a1.226,1.226,0,1,0,2.451,0v-5.578h10.344v5.578a1.227,1.227,0,0,0,2.453,0v-5.576l-2.453,0v-.818a5.172,5.172,0,0,0-10.344,0v.818h-2.451v-.818a7.624,7.624,0,1,1,15.248,0v.818h4.523a1.226,1.226,0,0,1,1.221,1.1l2.738,25.316a4.645,4.645,0,0,1-4.619,5.145Zm-13.307-12.293a1.227,1.227,0,0,0,0,2.453h.58v.473a1.227,1.227,0,0,0,2.453,0v-.748a3.221,3.221,0,0,0,1.8-2.928,3.123,3.123,0,0,0-3.031-3.2.774.774,0,0,1,0-1.5h1.807a1.227,1.227,0,0,0,0-2.453h-.58v-.475a1.227,1.227,0,0,0-2.453,0v.748a3.221,3.221,0,0,0-1.807,2.928,3.126,3.126,0,0,0,3.033,3.2.774.774,0,0,1,0,1.5Z" transform="translate(-24573.998 -21582)" fill="#ffc409"/></svg>
                                <h3 class="heading-3">
                                    <?php echo app('translator')->get('homepage.trade-finance'); ?>
                                </h3>
                            </header>
                            <p class="small-paragraph">
                                <?php echo app('translator')->get('homepage.opportunities-for'); ?>
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                    <a href="<?php echo e(url(app()->getLocale() . '/corporates/international-cards')); ?>" class="service-link">
                        <div class="item">
                            <header class="flex-align-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="53.186" height="40" viewBox="0 0 53.186 40"><path d="M48.319,40H20.7a4.8,4.8,0,0,1-1.889-.384,4.92,4.92,0,0,1-2.594-2.594,4.8,4.8,0,0,1-.384-1.889V17.64a4.8,4.8,0,0,1,.384-1.889,4.92,4.92,0,0,1,2.594-2.594,4.8,4.8,0,0,1,1.889-.384H48.319a4.824,4.824,0,0,1,1.9.386,4.9,4.9,0,0,1,2.592,2.6,4.774,4.774,0,0,1,.376,1.885V35.133a4.8,4.8,0,0,1-.384,1.889,4.92,4.92,0,0,1-2.594,2.594A4.8,4.8,0,0,1,48.319,40ZM18.877,22.89V35.2a1.767,1.767,0,0,0,1.765,1.765H48.8A1.767,1.767,0,0,0,50.566,35.2V22.89Zm1.765-7.07a1.767,1.767,0,0,0-1.765,1.765v.669H50.566v-.669A1.767,1.767,0,0,0,48.8,15.82Zm-8,21.851h0a4.9,4.9,0,0,1-2.545-.715,4.836,4.836,0,0,1-1.829-2L.507,19.273a4.872,4.872,0,0,1,2.2-6.533L27.46.507a4.875,4.875,0,0,1,6.533,2.2L37.478,9.77H20.346a7.482,7.482,0,0,0-7.464,7.475v16.5a7.364,7.364,0,0,0,1.03,3.76A4.816,4.816,0,0,1,12.641,37.671Zm16-2.6a3.1,3.1,0,0,1-1.335-.3,3.154,3.154,0,0,1-1.055-.808,3.142,3.142,0,0,1-3.618.859,3.157,3.157,0,0,1,1.228-6.065,3.1,3.1,0,0,1,1.335.3,3.155,3.155,0,0,1,1.055.808A3.142,3.142,0,0,1,29.872,29a3.157,3.157,0,0,1-1.228,6.065Z" fill="#ffc409"/></svg>
                                <h3 class="heading-3">
                                    <?php echo app('translator')->get('homepage.international-card'); ?>
                                </h3>
                            </header>
                            <p class="small-paragraph">
                                <?php echo app('translator')->get('homepage.professional-solution'); ?>  
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                    <a href="<?php echo e(url(app()->getLocale() . '/corporates/treasury')); ?>" class="service-link">
                        <div class="item">
                            <header class="flex-align-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="41.162" height="40" viewBox="0 0 41.162 40"><path d="M24399.441,21897.512h-37.721v-.689h37.721v.689Zm0-1.723h-37.721v-.689l2.545,0h35.176v.688Zm-3.273-1.723h-6.717v-.756l.5-1.053h5.719l.494,1.053v.756Zm-7.75,0h-15.846v-.877a.567.567,0,0,0-.051-.242l-.719-1.434a.515.515,0,0,0-.461-.289h-.922v-16.311a2.74,2.74,0,0,0,1.828.725,2.682,2.682,0,0,0,1.92-.822,2.741,2.741,0,0,0,.758-1.971,2.922,2.922,0,0,0-.646-1.686h12.584a2.854,2.854,0,0,0-.621,1.932,2.714,2.714,0,0,0,2.5,2.533l.027,0a.054.054,0,0,1,.018,0h0c.043,0,.088.006.129.006a2.736,2.736,0,0,0,1.648-.561v16.15h-.934a.516.516,0,0,0-.463.289l-.711,1.453a.461.461,0,0,0-.045.223v.877Zm-7.836-16.234a6.114,6.114,0,1,0,6.113,6.115A6.133,6.133,0,0,0,24380.582,21877.832Zm-9.043,16.234h-6.717v-.756l.482-1.053h5.719l.516,1.053v.756Zm22.477-2.842h-2.412V21873.4h2.412v17.826Zm-24.629,0h-2.412V21873.4h2.412v17.826Zm11.2-2.2a5.038,5.038,0,0,1-1.979-.4,5.08,5.08,0,0,1-3.1-4.68,5.085,5.085,0,1,1,5.082,5.08Zm-1.51-2.207a1.475,1.475,0,0,1,.842.262,2.559,2.559,0,0,0,2.561.168l.3-.15a.517.517,0,0,0-.232-.979.5.5,0,0,0-.23.055l-.3.146a1.508,1.508,0,0,1-.67.158,1.493,1.493,0,0,1-.848-.262,2.75,2.75,0,0,0-.42-.234,2.4,2.4,0,0,0,.486-1.352c.006-.109.008-.2.01-.383h.5a.517.517,0,0,0,0-1.033h-.529c-.023-.281-.059-.568-.1-.832l-.01-.029a.808.808,0,0,1,.363-.824.817.817,0,0,1,.43-.121.821.821,0,0,1,.824.822v.26a.517.517,0,1,0,1.033,0v-.26a1.861,1.861,0,0,0-1.855-1.857h-.01a1.83,1.83,0,0,0-1.8,2.135l.008.035c.035.217.064.4.084.672h-.629a.517.517,0,0,0,0,1.033h.666v.047c0,.1,0,.207-.008.291a1.361,1.361,0,0,1-.311.807,1.344,1.344,0,0,1-.73.459h0a.519.519,0,0,0,.113,1.025.558.558,0,0,0,.113-.012.146.146,0,0,1,.031-.008l.006,0,.006,0,.02-.006h0a.007.007,0,0,0,.006,0A1.534,1.534,0,0,1,24379.072,21886.82Zm9.844-12.225c-.037,0-.072,0-.107,0a1.67,1.67,0,0,1-1.535-1.541,1.687,1.687,0,0,1,.441-1.256,1.674,1.674,0,0,1,1.2-.551h7.936a1.695,1.695,0,0,1,1.227,2.861,1.623,1.623,0,0,1-1.162.488h-.02a1.671,1.671,0,0,1-1.645-1.674.552.552,0,0,0-.518-.557h-3.656a.552.552,0,0,0-.518.555,1.672,1.672,0,0,1-.133.668,1.73,1.73,0,0,1-.385.561A1.637,1.637,0,0,1,24388.916,21874.6Zm7.891-2.584a.948.948,0,1,0,.945.949A.949.949,0,0,0,24396.807,21872.012Zm-7.8,0a.948.948,0,1,0,.947.949A.948.948,0,0,0,24389.006,21872.012Zm-24.74,2.584c-.037,0-.072,0-.107,0a1.674,1.674,0,0,1-1.537-1.541,1.7,1.7,0,0,1,.443-1.256,1.65,1.65,0,0,1,.543-.4,1.672,1.672,0,0,1,.658-.152h7.943a1.685,1.685,0,0,1,1.217,2.85,1.628,1.628,0,0,1-1.172.5h-.008a1.667,1.667,0,0,1-1.645-1.672.55.55,0,0,0-.518-.553h-3.656a.55.55,0,0,0-.518.553,1.682,1.682,0,0,1-.52,1.229A1.625,1.625,0,0,1,24364.266,21874.6Zm7.8-2.584a.948.948,0,1,0,.947.949A.95.95,0,0,0,24372.063,21872.012Zm-7.8,0a.948.948,0,1,0,.945.949A.95.95,0,0,0,24364.266,21872.012Zm32.541,1.033a.086.086,0,0,1-.088-.086.087.087,0,0,1,.174,0A.085.085,0,0,1,24396.807,21873.045Zm-7.8,0a.085.085,0,0,1-.086-.086.087.087,0,1,1,.086.086Zm-16.943,0a.085.085,0,0,1-.086-.086.087.087,0,0,1,.086-.086.085.085,0,0,1,.086.086A.084.084,0,0,1,24372.063,21873.045Zm-7.8,0a.086.086,0,0,1-.088-.086.087.087,0,0,1,.174,0A.085.085,0,0,1,24364.266,21873.045Zm36.9-2.918H24360v-2.955l20.582-9.66,20.58,9.66v2.955Zm-26.6-6.115a.517.517,0,1,0,0,1.033h1.324a4.717,4.717,0,0,0,9.377,0h1.334a.517.517,0,0,0,0-1.033h-1.334a4.717,4.717,0,0,0-9.377,0Zm6.014,4.244a3.685,3.685,0,0,1-3.686-3.686,3.7,3.7,0,0,1,.291-1.432,3.68,3.68,0,0,1,3.395-2.25h0a3.684,3.684,0,0,1,0,7.367Zm0-4.516a.947.947,0,1,0,.945.947h0A.951.951,0,0,0,24380.58,21863.74Zm0,1.033a.085.085,0,0,1-.086-.086.084.084,0,0,1,.086-.086.085.085,0,0,1,.086.086A.087.087,0,0,1,24380.58,21864.773Z" transform="translate(-24360 -21857.512)" fill="#ffc409"/></svg>
                                <h3 class="heading-3">
                                    <?php echo app('translator')->get('homepage.treasury'); ?>
                                </h3>
                            </header>
                            <p class="small-paragraph">
                                <?php echo app('translator')->get('homepage.a-new-concept'); ?>
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                    <a href="<?php echo e(url(app()->getLocale() . '/corporates/payments-and-cash-management')); ?>" class="service-link">
                        <div class="item">
                            <header class="flex-align-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="38.561" height="40" viewBox="0 0 38.561 40"><path d="M31.632,40H3.515A3.519,3.519,0,0,1,0,36.485V22.27a3.519,3.519,0,0,1,3.515-3.515H31.632a3.519,3.519,0,0,1,3.515,3.515V36.485A3.519,3.519,0,0,1,31.632,40ZM32.8,34.309a4.679,4.679,0,0,0-3.348,3.348h2.177A1.173,1.173,0,0,0,32.8,36.485V34.309Zm-30.461,0v2.177a1.173,1.173,0,0,0,1.172,1.172H5.692A4.678,4.678,0,0,0,2.343,34.309Zm15.23-10.867a5.936,5.936,0,1,0,5.858,5.936A5.9,5.9,0,0,0,17.574,23.442ZM29.456,21.1A4.678,4.678,0,0,0,32.8,24.447V22.27A1.173,1.173,0,0,0,31.632,21.1H29.456Zm-25.941,0A1.173,1.173,0,0,0,2.343,22.27v2.177A4.678,4.678,0,0,0,5.692,21.1ZM17.574,32.971a3.367,3.367,0,0,1-1.367-.289,3.546,3.546,0,0,1-1.117-.781,3.653,3.653,0,0,1-.754-1.144,3.575,3.575,0,0,1,0-2.758,3.653,3.653,0,0,1,.754-1.144,3.546,3.546,0,0,1,1.117-.781,3.378,3.378,0,0,1,2.734,0,3.545,3.545,0,0,1,1.117.781A3.653,3.653,0,0,1,20.812,28a3.576,3.576,0,0,1,0,2.758,3.653,3.653,0,0,1-.754,1.144,3.546,3.546,0,0,1-1.117.781A3.366,3.366,0,0,1,17.574,32.971Zm19.1-13.636a5.847,5.847,0,0,0-1.613-1.794l.479-.224a1.171,1.171,0,0,0,.568-1.556l-.92-1.973a4.66,4.66,0,0,0-1.629,2.975,5.752,5.752,0,0,0-1.924-.351H25.142a5.844,5.844,0,1,0-11.619,0H4.6a4.626,4.626,0,0,0,.494-3l-1.973.92a1.17,1.17,0,0,0-.568,1.556l.275.59a5.772,5.772,0,0,0-2.239.742l-.159-.341a3.507,3.507,0,0,1,1.7-4.67l3.182-1.484h0l0,0h0l19.1-8.91h0L27.617.328A3.475,3.475,0,0,1,29.1,0a3.534,3.534,0,0,1,1.87.535,3.489,3.489,0,0,1,1.322,1.493l4.456,9.555v0l1.485,3.183a3.534,3.534,0,0,1,.324,1.258A3.446,3.446,0,0,1,38.4,17.3a3.374,3.374,0,0,1-.627,1.148,3.628,3.628,0,0,1-1.1.886ZM29.1,2.343a1.149,1.149,0,0,0-.491.109l-1.972.92a4.664,4.664,0,0,0,3.607,1.7,4.689,4.689,0,0,0,.843-.077l-.919-1.972A1.185,1.185,0,0,0,29.1,2.343Zm-6.312,14.07h-6.9a3.648,3.648,0,0,1-.044-.9,3.345,3.345,0,0,1,.193-.889,3.505,3.505,0,0,1,3.3-2.311,3.532,3.532,0,0,1,1.87.535,3.479,3.479,0,0,1,1.589,3.564Z" fill="#ffc409"/></svg>
                                <h3 class="heading-3">
                                    <?php echo app('translator')->get('homepage.cash-payment'); ?>
                                </h3>
                            </header>
                            <p class="small-paragraph">
                                <?php echo app('translator')->get('homepage.no-stress'); ?>
                            </p>
                        </div>
                    </a>
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
                    <div>
                        <h2 class="heading-2"><?php echo app('translator')->get('homepage.kdb-mobile'); ?></h2>
                        <p class="small-paragraph">
                            <?php echo app('translator')->get('homepage.customers-enjoy'); ?>
                        </p>
                        <div class="app">
                            <a href="https://play.google.com/store/apps/details?id=uz.xsoft.multipay&hl=ru" target="_blank">
                                <img src="<?php echo e(asset('img/footer/google-play.svg')); ?>" class="app-link">
                            </a>
                            <a href="https://apps.apple.com/us/app/multipay-kdb/id1437373777" target="_blank">
                                <img src="<?php echo e(asset('img/footer/app-store.svg')); ?>" class="app-link">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 multipay-image">
                    <a class="fancybox" data-fancybox href="<?php echo e(asset('video/multipay-' . app()->getLocale() . '.mp4')); ?>">
                        <img src="<?php echo e(asset('img/home/multipay/multipay-mobile.gif')); ?>" alt="multipay app">
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
                                <?php echo app('translator')->get('homepage.visa'); ?>
                                <div class="counter"><?php echo e(count($visas)); ?></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="mastercarditem-tab" data-toggle="tab" href="#mastercarditem" role="tab" aria-controls="mastercarditem" aria-selected="false">
                                <?php echo app('translator')->get('homepage.mastercard'); ?>
                                <div class="counter"><?php echo e(count($masters)); ?></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="uzcarditem-tab" data-toggle="tab" href="#uzcarditem" role="tab" aria-controls="uzcarditem" aria-selected="false">
                                <?php echo app('translator')->get('homepage.uzcard'); ?>
                                <div class="counter"><?php echo e(count($uzcards)); ?></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="humoitem-tab" data-toggle="tab" href="#humoitem" role="tab" aria-controls="humoitem" aria-selected="false">
                                <?php echo app('translator')->get('homepage.humo'); ?>
                                <div class="counter"><?php echo e(count($humos)); ?></div>
                            </a>
                        </li>
                    </ul>
                    <div  class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="visaitem" role="tabpanel" aria-labelledby="visaitem-tab">
                            <div class="owl-carousel <?php echo e((count($visas) > 2) ? 'owl-item-3' : 'owl-item-4'); ?>">
                                <?php $__currentLoopData = $visas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="item" href="<?php echo e(url( '/' . app()->getLocale() . '/' . strtolower($visa->ownership) . '/' . strtolower($visa->validity_area) . '-cards/' . $visa->slug )); ?>">
                                        <div class="visa-item">
                                            <img src="<?php echo e(Voyager::image( $visa->image )); ?>" alt="<?php echo e($visa->getTranslatedAttribute('name', $locale, 'fallbackLocale')); ?>">
                                            <div class="visa-caption">
                                                <h6><?php echo e($visa->getTranslatedAttribute('name', $locale, 'fallbackLocale')); ?></h6>
                                                <p class="small-paragraph"><?php echo e($visa->getTranslatedAttribute('excerpt', $locale, 'fallbackLocale')); ?></p>
                                                <span><?php echo app('translator')->get('homepage.read-more-cards'); ?></span>
                                            </div>
                                        </div>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="mastercarditem" role="tabpanel" aria-labelledby="mastercarditem-tab">
                            <div class="owl-carousel <?php echo e((count($masters) > 2) ? 'owl-item-3' : 'owl-item-4'); ?>">
                                <?php $__currentLoopData = $masters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $master): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="item" href="<?php echo e(url( '/' . app()->getLocale() . '/' . strtolower($master->ownership) . '/' . strtolower($master->validity_area) . '-cards/' . $master->slug )); ?>">
                                        <div class="visa-item">
                                            <img src="<?php echo e(Voyager::image( $master->image )); ?>" alt="<?php echo e($master->getTranslatedAttribute('name', $locale, 'fallbackLocale')); ?>">
                                            <div class="visa-caption">
                                                <h6><?php echo e($master->getTranslatedAttribute('name', $locale, 'fallbackLocale')); ?></h6>
                                                <p class="small-paragraph"><?php echo e($master->getTranslatedAttribute('excerpt', $locale, 'fallbackLocale')); ?></p>
                                                <span><?php echo app('translator')->get('homepage.read-more-cards'); ?></span>
                                            </div>
                                        </div>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="uzcarditem" role="tabpanel" aria-labelledby="uzcarditem-tab">
                            <div class="owl-carousel <?php echo e((count($uzcards) > 2) ? 'owl-item-3' : 'owl-item-4'); ?>">
                                <?php $__currentLoopData = $uzcards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uzcard): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="item" href="<?php echo e(url( '/' . app()->getLocale() . '/' . strtolower($uzcard->ownership) . '/' . strtolower($uzcard->validity_area) . '-cards/' . $uzcard->slug )); ?>">
                                        <div class="visa-item">
                                            <img src="<?php echo e(Voyager::image( $uzcard->image )); ?>" alt="<?php echo e($uzcard->getTranslatedAttribute('name', $locale, 'fallbackLocale')); ?>">
                                            <div class="visa-caption">
                                                <h6><?php echo e($uzcard->getTranslatedAttribute('name', $locale, 'fallbackLocale')); ?></h6>
                                                <p class="small-paragraph"><?php echo e($uzcard->getTranslatedAttribute('excerpt', $locale, 'fallbackLocale')); ?></p>
                                                <span><?php echo app('translator')->get('homepage.read-more-cards'); ?></span>
                                            </div>
                                        </div>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="humoitem" role="tabpanel" aria-labelledby="humoitem-tab">
                            <div class="owl-carousel owl-theme <?php echo e((count($humos) > 2) ? 'owl-item-3' : 'owl-item-4'); ?>">
                                <?php $__currentLoopData = $humos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $humo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="item" href="<?php echo e(url( '/' . app()->getLocale() . '/' . strtolower($humo->ownership) . '/' . strtolower($humo->validity_area) . '-cards/' . $humo->slug )); ?>">
                                        <div class="visa-item">
                                            <img src="<?php echo e(Voyager::image( $humo->image )); ?>" alt="<?php echo e($humo->getTranslatedAttribute('name', $locale, 'fallbackLocale')); ?>">
                                            <div class="visa-caption">
                                                <h6><?php echo e($humo->getTranslatedAttribute('name', $locale, 'fallbackLocale')); ?></h6>
                                                <p class="small-paragraph"><?php echo e($humo->getTranslatedAttribute('excerpt', $locale, 'fallbackLocale')); ?></p>
                                                <span><?php echo app('translator')->get('homepage.read-more-cards'); ?></span>
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
            <h2 class="heading-2"><?php echo app('translator')->get('homepage.provides-financial'); ?></h2>
            <p class="paragraph">
                <?php echo app('translator')->get('homepage.kdb-bank-uzbekistan'); ?>
            </p>
            <div class="row pt-48">
                <div class="col-md-3 col-sm-6 counter-item mb-5 mb-md-5 mb-lg-0">
                    <span class="counter-value" data-count="18">0</span>
                    <span><?php echo app('translator')->get('homepage.global-subsiders'); ?></span>
                </div>
                <div class="col-md-3 col-sm-6 counter-item mb-5 mb-md-5 mb-lg-0">
                    <span class="counter-value" data-count="3">0</span>
                    <span><?php echo app('translator')->get('homepage.local-branches'); ?></span>
                </div>
                <div class="col-md-3 col-sm-6 counter-item mb-5 mb-md-0">
                    <div class="extra-helper-item">
                        <span class="counter-value" data-count="25">0</span><span class="extra-plus">+</span>
                    </div>
                    <span><?php echo app('translator')->get('homepage.awards-received'); ?></span>
                </div>
                <div class="col-md-3 col-sm-6 counter-item">
                    <div class="extra-helper-item">
                        <span class="counter-value" data-count="100">0</span><span class="extra-plus">+</span>
                    </div>
                    <span><?php echo app('translator')->get('homepage.successfully-implemented'); ?></span>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter ens -->

    <!-- Consultation starts -->
    <section class="container-fluid px-0 consultation">
        <div class="row mx-0">
            <div class="consultation-left flex-align-center col-lg-6">
                <div class="blur"></div>
                <div class="consultation-caption">
                    <h2 class="heading-2"><?php echo app('translator')->get('homepage.get-a-free'); ?></h2>
                    <p class="small-paragraph">
                        <?php echo app('translator')->get('homepage.fill-out'); ?>
                        <ul>
                            <li><?php echo app('translator')->get('homepage.review-your'); ?></li>
                            <li><?php echo app('translator')->get('homepage.talk-about'); ?></li>
                            <li><?php echo app('translator')->get('homepage.discuss-the'); ?></li>
                        </ul>
                    </p>
                </div>
            </div>
            <div class="consultation-right col-lg-6 py-5 py-lg-0">
                <form action="<?php echo e(route('home.post-consultation', app()->getLocale())); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="row mx-0">
                        <div class="col-12">
                            <h4 class="heading-3"><?php echo app('translator')->get('homepage.i-would'); ?></h4>
                            <select name="topic" required>
                                <option value="Account Opening"><?php echo app('translator')->get('homepage.account-opening'); ?></option>
                                <option value="Business Growth"><?php echo app('translator')->get('homepage.business-growth-2'); ?></option>
                                <option value="Cash Withdrawing"><?php echo app('translator')->get('homepage.cash-withdrawing'); ?></option>
                                <option value="Trade Finance"><?php echo app('translator')->get('homepage.trade-finance-2'); ?></option>
                                <option value="Loan"><?php echo app('translator')->get('homepage.loan-2'); ?></option>
                                <option value="Other"><?php echo app('translator')->get('homepage.other'); ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="row mx-0">
                        <div class="col-sm-6 pr-sm-2">
                            <input type="text" name="full_name" placeholder="<?php echo app('translator')->get('homepage.full-name'); ?>" required>
                        </div>
                        <div class="col-sm-6 pl-sm-2">
                            <input type="email" name="email" placeholder="<?php echo app('translator')->get('homepage.email'); ?>" required>
                        </div>
                    </div>
                    <div class="row mx-0">
                        <div class="col-sm-6 pr-sm-2">
                            <input type="text" name="company" placeholder="<?php echo app('translator')->get('homepage.company'); ?>" required>
                        </div>
                        <div class="col-sm-6 pl-sm-2">
                            <input type="text" name="phone" placeholder="<?php echo app('translator')->get('homepage.phone'); ?>" required>
                        </div>
                    </div>
                    <div class="row mx-0">
                        <div class="col-12">
                            <textarea name="message" placeholder="<?php echo app('translator')->get('homepage.message'); ?>" required></textarea>
                            <button type="submit"><?php echo app('translator')->get('homepage.send'); ?></button>
                        </div>
                    </div>
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
                    <h3><?php echo app('translator')->get('homepage.branches-in'); ?></h3>
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d47946.61753156985!2d69.27816698984377!3d41.316181369094146!3m2!1i1024!2i768!4f13.1!2m1!1skdb%20bank!5e0!3m2!1sen!2s!4v1572522161480!5m2!1sen!2s" frameborder="0" style="border:0;"></iframe>
                </div>
                <div class="col-md-5 pt-5 pt-md-0">
                    <h3>
                        <?php echo app('translator')->get('homepage.branches-in-location'); ?>
                    </h3>
                    <div class="item">
                        <p class="small-text">
                            <strong><?php echo app('translator')->get('homepage.head-office'); ?></strong>
                        </p>
                        <a href="<?php echo app('translator')->get('homepage.tel:+998'); ?>" class="small-text mb-1">
                            <strong><?php echo app('translator')->get('homepage.phone-2'); ?></strong>
                            <?php echo app('translator')->get('homepage.+998'); ?>
                        </a>
                        <p class="small-text mb-1">
                            <strong><?php echo app('translator')->get('homepage.working-hours'); ?> </strong>
                            <?php echo app('translator')->get('homepage.monday-friday'); ?>
                        </p>
                        <p class="small-text mb-1">
                            <strong><?php echo app('translator')->get('homepage.address'); ?></strong>
                            <?php echo app('translator')->get('homepage.3-bukhara'); ?>
                        </p>
                    </div>
                    <div class="item mtb-15">
                        <p class="small-text">
                            <strong><?php echo app('translator')->get('homepage.yunusabad-branch'); ?></strong>
                        </p>
                        <a href="<?php echo app('translator')->get('homepage.tel:+9987'); ?>" class="small-text mb-1">
                            <strong><?php echo app('translator')->get('homepage.phone-3'); ?></strong>
                            <?php echo app('translator')->get('homepage.+9987'); ?>
                        </a>
                        <p class="small-text mb-1">
                            <strong><?php echo app('translator')->get('homepage.working-hours-2'); ?> </strong>
                            <?php echo app('translator')->get('homepage.monday-friday-2'); ?>
                        </p>
                        <p class="small-text  mb-1">
                            <strong><?php echo app('translator')->get('homepage.address-2'); ?></strong>
                            <?php echo app('translator')->get('homepage.77-minor'); ?>
                        </p>
                    </div>
                    <div class="item">
                        <p class="small-text">
                            <strong><?php echo app('translator')->get('homepage.yakkasaroy-branch'); ?></strong>
                        </p>
                        <a href="<?php echo app('translator')->get('homepage.tel:+99878'); ?>" class="small-text mb-1">
                            <strong><?php echo app('translator')->get('homepage.phone-4'); ?></strong>
                            <?php echo app('translator')->get('homepage.+99878'); ?>
                        </a>
                        <p class="small-text mb-1">
                            <strong><?php echo app('translator')->get('homepage.working-hours-3'); ?> </strong>
                            <?php echo app('translator')->get('homepage.monday-friday-3'); ?>
                        </p>
                        <p class="small-text mb-1">
                            <strong><?php echo app('translator')->get('homepage.address-3'); ?></strong>
                            <?php echo app('translator')->get('homepage.12-usmon'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Branches Ends -->


    <?php if(Session::has('success')): ?>
        <div class="success-message">
            <div class="global-modal-window" style="display: block;">
                <div class="global-modal-content">
                    <div class="modal-close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
                        </svg>
                    </div>
                    <div class="modal-content-inner">
                        <p class="small-paragraph mb-0">
                            <?php echo app('translator')->get('homepage.sorov-muvaffaqiyatli'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Fancybox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    
    <script src="<?php echo e(asset('js/home.js')); ?>"></script>

    
    <script src="<?php echo e(asset('js/modal.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\farkh\OneDrive\Desktop\FARHOD\KDB\resources\views/homepage.blade.php ENDPATH**/ ?>