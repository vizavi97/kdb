<!-- Footer Starts -->
<footer class="footer">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 item-1">
                    <div class="footer-logo">
                        <a href="<?php echo e(route('home', app()->getLocale())); ?>">
                            <img src="<?php echo e(asset('img/navbar/KDB-logo.svg')); ?>" alt="KDB Bank Logo">
                        </a>
                    </div>
                    <p class="small-paragraph">
                        <?php echo app('translator')->get('layouts/footer.the-bank'); ?>
                    </p>
                    <p class="small-paragraph">
                        <?php echo app('translator')->get('layouts/footer.when-using'); ?>
                    </p>
                </div>
                <div class="col-lg-2 col-md-6 item-2">
                    <h4>
                        <?php echo app('translator')->get('layouts/footer.useful-links'); ?>
                    </h4>
                    <a href="https://president.uz" target="_blank">
                        www.president.uz
                    </a>
                    <a href="http://cbu.uz/uzc/" target="_blank">
                        www.cbu.uz
                    </a>
                    <a href="https://www.gov.uz/uz" target="_blank">
                        www.gov.uz
                    </a>
                    <a href="https://uba.uz/ru/" target="_blank">
                        www.uba.uz
                    </a>
                    <a href="https://ek.uz/uz" target="_blank">
                        www.ek.uz
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 item-3 pr-lg-4">
                    <h4><?php echo app('translator')->get('layouts/footer.mobile-app'); ?></h4>
                    <p class="paragraph">
                        <?php echo app('translator')->get('layouts/footer.multipay-mobile'); ?>
                    </p>
                    <div class="row m-0">
                        <div class="col-6 pl-0">
                            <a href="https://play.google.com/store/apps/details?id=uz.xsoft.multipay&hl=ru" target="_blank">
                                <img src="<?php echo e(asset('img/footer/google-play.svg')); ?>" width="100%" height="auto">
                            </a>
                        </div>
                        <div class="col-6 pr-0">
                            <a href="https://apps.apple.com/us/app/multipay-kdb/id1437373777" target="_blank">
                                <img src="<?php echo e(asset('img/footer/app-store.svg')); ?>" width="100%" height="auto">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 item-4">
                    <h4><?php echo app('translator')->get('layouts/footer.contact-us'); ?></h4>
                    <div class="row">
                        <div class="col-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M20.5 3l-.16.03L15 5.1 9 3 3.36 4.9c-.21.07-.36.25-.36.48V20.5c0 .28.22.5.5.5l.16-.03L9 18.9l6 2.1 5.64-1.9c.21-.07.36-.25.36-.48V3.5c0-.28-.22-.5-.5-.5zM10 5.47l4 1.4v11.66l-4-1.4V5.47zm-5 .99l3-1.01v11.7l-3 1.16V6.46zm14 11.08l-3 1.01V6.86l3-1.16v11.84z" fill="#fff"/>
                            </svg>
                        </div>
                        <div class="col-11 pl-3">
                            <address>
                                <?php echo app('translator')->get('layouts/footer.3-bukhara'); ?>
                            </address>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6zm-2 0l-8 5-8-5h16zm0 12H4V8l8 5 8-5v10z" fill="#fff"/>
                            </svg>
                        </div>
                        <div class="col-11 pl-3">
                            <a class="ml-0 mb-3" href="mailto:info@kdb.uz">info@kdb.uz</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M15 12h2c0-2.76-2.24-5-5-5v2c1.66 0 3 1.34 3 3zm4 0h2c0-4.97-4.03-9-9-9v2c3.87 0 7 3.13 7 7zm1 3.5c-1.25 0-2.45-.2-3.57-.57-.1-.03-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.44-5.15-3.75-6.59-6.59l2.2-2.21c.28-.26.36-.65.25-1C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.5c0-.55-.45-1-1-1zM5.03 5h1.5c.07.88.22 1.75.45 2.58l-1.2 1.21c-.4-1.21-.66-2.47-.75-3.79zM19 18.97c-1.32-.09-2.6-.35-3.8-.76l1.2-1.2c.85.24 1.72.39 2.6.45v1.51z" fill="#fff"/>
                            </svg>
                        </div>
                        <div class="col-11 pl-3">
                            <a class="ml-0 mb-3" href="tel:+998781208000">+998 78 120 80 00</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row extra py-4">
                <div class="col-lg-6">
                    <p class="small-paragraph mb-0">
                        <?php echo app('translator')->get('layouts/footer.copyrights-2019'); ?>
                    </p>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                    <a href="<?php echo e(route('press-center.copy-right', app()->getLocale())); ?>">
                        <?php echo app('translator')->get('layouts/footer.terms-of'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-image">
        <img src="<?php echo e(asset('img/footer/background.jpg')); ?>">
    </div>
</footer>
<!-- Footer Ends --><?php /**PATH D:\DESKTOP\KDB\resources\views/layouts/footer.blade.php ENDPATH**/ ?>