<?php $__env->startSection('page-title', 'Mission'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <span class="small-paragraph">Mission</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>
    <title>KDB | Mission</title>
    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/about-us/mission.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<section class="desctop container mission">
    <div class="row">
        
        <main class="col-xl-9 main-hero">
            <div class="row first-box">
                <div class="col-lg-6">
                    <h3 class="heading-3">
                    Mission
                    </h3>
                    <p class="small-paragraph">
                        Our mission is to be a reliable partner for local and international companies by offering entire spectrum of banking services with high standards, through implementing modern international practices and continuous technological innovation.
                    </p>
                    <p class="small-paragraph">
                        We share with our stakeholders four core values: trust, passion, client focus and sustainable performance to successfully realize our vision in mid to long-term period.
                    </p>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo e(asset('img/about-us/mission/mission-1.png')); ?>" class="img-1 img-cover">
                </div>
            </div>
            <div class="row second-box">
                <div class="col-lg-6 parent">
                    <div class="item">
                        <div class="icon">
                            <i class="fas fa-praying-hands"></i>
                        </div>
                        <div class="information">
                            <h6 class="hero">
                            Trust
                            </h6>
                            <p class="small-paragraph helper">
                                Build trust and earn the respect of clients and colleagues by achieving above and beyond our social responsibilities as a financial institution.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 parent">
                    <div class="item">
                        <div class="icon">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <div class="information">
                            <h6 class="hero">
                            Passion
                            </h6>
                            <p class="small-paragraph helper">
                                Stay passionate and positive as we lead the development of the financial industry and facilitate the growth of the economy.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 parent">
                    <div class="item">
                        <div class="icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="information">
                            <h6 class="hero">
                            Client Focus
                            </h6>
                            <p class="small-paragraph helper">
                                Understand diverse client needs to promote the success of our customers.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 parent">
                    <div class="item">
                        <div class="icon">
                            <i class="fas fa-chess-knight"></i>
                        </div>
                        <div class="information">
                            <h6 class="hero">
                            Sustainable Performance
                            </h6>
                            <p class="small-paragraph helper">
                                Drive values for long-term success based on international experience in financial markets.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row third-box">
                <div class="col-lg-6 order-lg-1 order-2 mt-lg-0 mt-5">
                    <h3 class="heading-3">
                    Strategy
                    </h3>
                    <p class="small-paragraph">
                        Our strategies are based on our mission - to be a reliable partner for businesses with the highest integrity and client focus. We recognize our duty to our stakeholders and believe that being economically successful and having competitive advantages of our business, we can ensure trustworthiness to our employees as well as our clients. KDB Bank Uzbekistan is committed to achieving its goals and mission based on following strategies:
                    </p>
                    <ul class="right-icon">
                        <li>
                            <p>
                                To be a leading banking services provider for large corporations, companies with foreign investments, joint ventures, representative offices and diplomatic missions in Uzbekistan and Central Asian countries by nurturing a culture of mutually beneficial long-term relationships with all stakeholders.
                            </p>
                        </li>
                        <li>
                            <p>
                                To follow a pro-active and client oriented approach in servicing clients at international standards via rapidly growing IT capability.
                            </p>
                        </li>
                        <li>
                            <p>
                                To implement modern international practices of corporate governance and effective risk management guided by the recommendations of the Basel Committee, regulatory requirements of the Central Bank Uzbekistan and relevant instructions of Head Office, Seoul, South Korea.
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 order-lg-2 order-1">
                    <img src="<?php echo e(asset('img/about-us/mission/mission-2.png')); ?>"class="img-1" width="100%">
                </div>
            </div>
            <div class="row third-box"></div>
        </main>

        <?php echo $__env->make('layouts.sidebars.about-us-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Desktop\KDBBU\resources\views/about-us/mission.blade.php ENDPATH**/ ?>