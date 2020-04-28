<?php $__env->startSection('page-title', 'History'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">History</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <title>KDB | History</title>

    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/about-us/history.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- history starts -->
    <section class="desctop container history">
        <div class="row">
            <main class="col-xl-9 main-hero">
                <div class="history-content">
                    <div class="history-video align-right">
                        <a data-fancybox  href="<?php echo e(asset('video/urban.mp4')); ?>" class="fancybox">
                            <img class="img-cover" src="<?php echo e(asset('img/about-us/history/video-player.png')); ?>" alt="video player">
                            <i class="far fa-play-circle"></i>
                        </a>
                    </div>
                    <p class="small-paragraph">
                        JSC "KDB Bank Uzbekistan" is the largest international bank in Uzbekistan. The 
                        principal shareholder is the leading prime-rated bank – “KDB Bank”, Korea (The 
                        Korean Development Bank) with the share of 86.32% and the highest credit ratings 
                        from the leading international rating agencies (Standard and Poor’s - AA/ Moody's - 
                        Aa2/ Fitch - AA-).
                    </p>
                    <p class="small-paragraph">
                        KDB enhances the spectrum of services in corporate and investment banking in 
                        order to provide the development of business and maintain balanced regional 
                        economic growth. KDB Network operates in 21 countries around the globe: 9 
                        Branches, 5 Subsidiaries and 8 Representative Offices.
                    </p>
                    <p class="small-paragraph">
                        Korea Development Bank was established in 1954 for the purpose of supplying and 
                        managing major industrial capital to help developing Korean manufacturing 
                        industries and the national economy.  As a leading bank wholly owned by the 
                        Government, KDB plays a pivotal role in promoting the growth of Korean financial 
                        service industry. 
                    </p>
                    <p class="small-paragraph mb-md-0">
                        JSC "KDB Bank Uzbekistan" (hereafter “the Bank”) is a subsidiary of KDB operating in Uzbekistan offering banking services to clients. The major part of clients are constituted 
                        by foreign subsidiaries and joint venture companies operating in manufacturing, trading and servicing; diplomatic missions of foreign countries and representative offices of 
                        international companies.
                    </p>
                </div>

                <div class="history-evolution-box">
                    <div class="row no-gutters history-evolution">
                        <div class="history-evolution-inner">
                            <p class="heading-3">
                                JSC "KDB Bank Uzbekistan" received ISO Certificate of management system compliance with requirements of ISO 9001:2015 in the field of banking services based on results of independent audit conducted by the TÜV International Certification Center.
                            </p>
                            <div class="history-evolution-date"><span class="heading-3">2018</span></div>
                        </div>
                        <div class="clear clear-top"></div>
                    </div>
                     <div class="row no-gutters history-evolution">
                        <div class="history-evolution-inner">
                            <p class="heading-3">
                                JSC “KDB Bank Uzbekistan” became the winner in the nomination "The Best Bank to support foreign investors" in Uzbekistan
                            </p>
                            <div class="history-evolution-date"><span class="heading-3">2016</span></div>
                        </div>
                    </div>
                    <div class="row no-gutters history-evolution">
                        <div class="history-evolution-inner">
                            <p class="heading-3">
                                KDB Bank Uzbekistan was selected as a winner of “The most innovative bank” award among commercial banks of Uzbekistan
                            </p>
                            <div class="history-evolution-date"><span class="heading-3">2014</span></div>
                        </div>
                    </div>
                    <div class="row no-gutters history-evolution">
                        <div class="history-evolution-inner">
                            <p class="heading-3">
                                Two subsidiaries of KDB Group, “RBS NB Uzbekistan” and “UzKDB Bank”, merged into a new bank, “KDB Bank Uzbekistan” CJSC  
                            </p>
                            <div class="history-evolution-date"><span class="heading-3">2013</span></div>
                        </div>
                    </div>
                     <div class="row no-gutters history-evolution">
                        <div class="history-evolution-inner">
                            <p class="heading-3">
                                “RBS NB Uzbekistan” became the second subsidiary of KDB Bank
                            </p>
                            <div class="history-evolution-date"><span class="heading-3">2011</span></div>
                        </div>
                    </div>
                     <div class="row no-gutters history-evolution">
                        <div class="history-evolution-inner">
                            <p class="heading-3">
                                KDB decided to acquire the majority stake of RBS Group in “RBS NB Uzbekistan” 
                            </p>
                            <div class="history-evolution-date"><span class="heading-3">2010</span></div>
                        </div>
                    </div>
                    <div class="row no-gutters history-evolution">
                        <div class="history-evolution-inner">
                            <p class="heading-3">
                                Renamed to “UzKDB Bank” Closed Joint-Stock Company subsequent to the acquisition of KDB Bank, Korea
                            </p>
                            <div class="history-evolution-date"><span class="heading-3">2006</span></div>
                        </div>
                    </div>
                    <div class="row no-gutters history-evolution botton">
                        <div class="history-evolution-inner">
                            <p class="heading-3">
                                Joint Uzbek-Korean Bank “UzDaewoo Bank” established as part of the international 
                                expansion of Daewoo Securities
                            </p>
                            <div class="history-evolution-date"><span class="heading-3">1997</span></div>
                        </div>
                        <div class="clear clear-bottom"></div>
                    </div>
                </div>
            </main>

            <?php echo $__env->make('layouts.sidebars.about-us-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </section>
    <!-- history ends -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <!-- Fancybox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Desktop\KDBBU\resources\views/about-us/history.blade.php ENDPATH**/ ?>