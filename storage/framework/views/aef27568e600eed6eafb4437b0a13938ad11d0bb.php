<!-- Nav one starts -->
<nav class="nav-one container-fluid">
    <div class="row no-gutters m-0 flex-justify-between">
        <div class="logo flex-center">
            <a href="<?php echo e(Request::is('/') ? 'javascript:void(0)' : route('home')); ?>">
                <img src="<?php echo e(asset('img/navbar/KDB-logo.svg')); ?>" alt="KDB Bank Logo">
            </a>
        </div>
        <div class="flex-align-center">
            <div class="icons">
                <img src="<?php echo e(asset('img/navbar/call-center-icon.svg')); ?>" alt="call center icon" width="17px" heigh="auto">
                <img src="<?php echo e(asset('img/navbar/volume-icon.svg')); ?>" alt="volume icon" width="auto" height="16px">
                <img src="<?php echo e(asset('img/navbar/eye-icon.svg')); ?>" alt="eye icon" width="20px" height="auto">
                <img src="<?php echo e(asset('img/navbar/message-icon.svg')); ?>" alt="massage icon" width="18px" height="auto">
                <div class="lang-menu">
                    <div>
                        <img src="<?php echo e(asset('img/navbar/uzb-flag.svg')); ?>" width="18px" height="auto">
                        <img src="<?php echo e(asset('img/navbar/caret-down.svg')); ?>" width="auto" height="5px">
                    </div>
                    <div class="pop-up-lang-menu">
                        <a href="#">
                            <img src="<?php echo e(asset('img/navbar/uzb-flag.svg')); ?>" width="18px" height="auto">
                        </a>
                        <a href="#">
                            <img src="<?php echo e(asset('img/navbar/uzb-flag.svg')); ?>" width="18px" height="auto">
                        </a>
                    </div>
                </div>
                <img src="<?php echo e(asset('img/navbar/search-icon.svg')); ?>" alt="search icon" width="18px" height="auto">
            </div>
            <a class="phone-number" href="tel:+998781208080"><span>(+99878)</span>120-80-80</a>
        </div>
    </div>
</nav>
<!-- Nav one ends -->

<!-- Nav two starts -->
<nav class="nav-two container-fluid px-0">
    <div class="nav-two-inner flex-justify-between">
        <div class="d-flex align-items-center">
            <div>
                <i class="fas fa-bars open-menu-button"></i>
                <!-- gamburber mega menu starts -->
                <div class="gamburger-mega-menu">
                    <div class="row m-0">
                        <div class="col-md-4">
                            <div class="gamburger-menu-logo">
                                <a href="<?php echo e(Request::is('/') ? 'javascript:void(0)' : route('home')); ?>">
                                    <img src="<?php echo e(asset('img/navbar/KDB-logo.svg')); ?>" alt="KDB bank logo">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mega-menu-buttons">
                        <a href="#" class="internet-banking flex-center">internet banking</a>
                    </div>
                    <ul class="row">
                        <div class="col-md-4">
                            <div class="row flex-column">
                                <div class="col-12 mb-md-5 mb-sm-2">
                                    <!-- about us menu -->
                                    <li class="mega-menu-inner">
                                        <a class="mega-menu-header" data-toggle="collapse" href="#about-us-collapse" role="button" aria-expanded="false" aria-controls="about-us-collapse">
                                            about us
                                            <i class="fas fa-caret-down"></i>
                                        </a>
                                        <div class="mega-menu-callapse collapse" id="about-us-collapse">
                                            <div class="drop-body card card-body">
                                                <a class="drop-item" href="<?php echo e(route('about-us.general-information')); ?>">general information</a>
                                                <a class="drop-item" href="<?php echo e(route('about-us.history')); ?>">history</a>
                                                <a class="drop-item" href="<?php echo e(route('about-us.mission')); ?>">mission</a>
                                                <a class="drop-item" href="<?php echo e(route('about-us.message-from-chairman')); ?>">message from chairman</a>
                                                <a class="drop-item" href="<?php echo e(route('about-us.management-board')); ?>">management board</a>
                                                <a class="drop-item" href="<?php echo e(route('about-us.organizational-structure')); ?>">organisation structure</a>
                                                <a class="drop-item" href="<?php echo e(route('about-us.committees')); ?>">commitees</a>
                                                <a class="drop-item" href="<?php echo e(route('about-us.branches')); ?>">branches</a>
                                                <a class="drop-item" href="<?php echo e(route('about-us.business-plan')); ?>">business plan</a>
                                                <a class="drop-item" href="<?php echo e(route('about-us.banks-charter')); ?>">bank's charter</a>
                                                <a class="drop-item" href="<?php echo e(route('about-us.licenses-and-certificates')); ?>">licenses and certificates</a>
                                                <a class="drop-item" href="<?php echo e(route('about-us.awards')); ?>">awards</a>
                                                <a class="drop-item" href="<?php echo e(route('about-us.ratings')); ?>">ratings</a>
                                                <a class="drop-item" href="<?php echo e(route('about-us.contact-us')); ?>">contact us</a>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                                <div class="col-12 mb-md-5 mb-sm-2">
                                    <!-- corporates menu -->
                                    <li class="mega-menu-inner">
                                        <a class="mega-menu-header" data-toggle="collapse" href="#corporates-collapse" role="button" aria-expanded="false" aria-controls="corporates-collapse">
                                            corporates
                                            <i class="fas fa-caret-down"></i>
                                        </a>
                                        <div class="mega-menu-callapse collapse" id="corporates-collapse">
                                            <div class="drop-body card card-body">
                                                <a class="drop-item" href="<?php echo e(route('corporates.account-opening')); ?>">account opening and administration</a>
                                                <a class="drop-item" href="<?php echo e(route('corporates.payments-and-cash-management')); ?>">payments and cash management</a>
                                                <a class="drop-item" href="<?php echo e(route('corporates.remote-banking')); ?>">digital banking</a>
                                                <a class="drop-item" href="<?php echo e(route('corporates.deposits')); ?>">deposits</a>
                                                <a class="drop-item" href="<?php echo e(route('corporates.application-for-loan')); ?>">application for loan</a>
                                                <a class="drop-item" href="<?php echo e(route('corporates.trade-finance')); ?>">trade finance</a>
                                                <a class="drop-item" href="<?php echo e(route('corporates.export-import')); ?>">export-import</a>
                                                <a class="drop-item" href="<?php echo e(route('corporates.treasury')); ?>">treasury</a>
                                                <a class="drop-item" href="<?php echo e(route('corporates.correspondent-banks')); ?>">correspondent bank</a>
                                                <a class="drop-item" href="<?php echo e(route('corporates.local-cards')); ?>">local cards</a>
                                                <a class="drop-item" href="<?php echo e(route('corporates.international-cards')); ?>">international cards</a>
                                                <a class="drop-item" href="<?php echo e(route('corporates.cciapm')); ?>">CCIAPM</a>
                                                <a class="drop-item" href="<?php echo e(route('corporates.bank-tariffs')); ?>">bank tariffs</a>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row flex-column">
                                <div class="col-12 mb-md-5 mb-sm-2">
                                    <!-- individuals menu -->
                                    <li class="mega-menu-inner">
                                        <a class="mega-menu-header" data-toggle="collapse" href="#individuals-collapse" role="button" aria-expanded="false" aria-controls="individuals-collapse">
                                            individuals
                                            <i class="fas fa-caret-down"></i>
                                        </a>
                                        <div class="mega-menu-callapse collapse" id="individuals-collapse">
                                            <div class="drop-body card card-body">
                                                <a class="drop-item" href="<?php echo e(route('individuals.account-opening')); ?>">account opening and administration</a>
                                                <a class="drop-item" href="<?php echo e(route('individuals.payments-and-transfers')); ?>">payments and transfers</a>
                                                <a class="drop-item" href="<?php echo e(route('individuals.deposits')); ?>">deposits</a>
                                                <a class="drop-item" href="<?php echo e(route('individuals.local-cards')); ?>">local cards</a>
                                                <a class="drop-item" href="<?php echo e(route('individuals.international-cards')); ?>">international cards</a>
                                                <a class="drop-item" href="<?php echo e(route('individuals.exchange-office')); ?>">exchange office</a>
                                                <a class="drop-item" href="<?php echo e(route('individuals.conversion-operations')); ?>">conversion operations</a>
                                                <a class="drop-item" href="<?php echo e(route('individuals.bank-tariffs')); ?>">bank tariffs</a>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                                <div class="col-12 mb-md-5 mb-sm-2">
                                    <!-- investors menu -->
                                    <li class="mega-menu-inner">
                                        <a class="mega-menu-header" data-toggle="collapse" href="#investors-collapse" role="button" aria-expanded="false" aria-controls="investors-collapse">
                                            investors
                                            <i class="fas fa-caret-down"></i>
                                        </a>
                                        <div class="mega-menu-callapse collapse" id="investors-collapse">
                                            <div class="drop-body card card-body">
                                                <a class="drop-item" href="<?php echo e(route('investors.share-information')); ?>">share information</a>
                                                <a class="drop-item" href="<?php echo e(route('investors.voting-results')); ?>">voting results</a>
                                                <a class="drop-item" href="<?php echo e(route('investors.information-on-gsm')); ?>">information on GSM</a>
                                                <a class="drop-item" href="<?php echo e(route('investors.substantial-facts')); ?>">substantial facts</a>
                                                <a class="drop-item" href="<?php echo e(route('investors.affiliate-personas')); ?>">affiliate personas & parties</a>
                                                <a class="drop-item" href="<?php echo e(route('investors.audit-reports')); ?>">audit reports</a>
                                                <a class="drop-item" href="<?php echo e(route('investors.financial-statements')); ?>">financial statements</a>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row flex-column">
                                <div class="col-12 mb-md-5 mb-sm-2">
                                    <!-- interactive service menu -->
                                    <li class="mega-menu-inner">
                                        <a class="mega-menu-header" data-toggle="collapse" href="#interactive-service-collapse" role="button" aria-expanded="false" aria-controls="interactive-service-collapse">
                                            interactive services
                                            <i class="fas fa-caret-down"></i>
                                        </a>
                                        <div class="mega-menu-callapse collapse" id="interactive-service-collapse">
                                            <div class="drop-body card card-body">
                                                <a class="drop-item" href="<?php echo e(route('interactive-services.sample-forms')); ?>">sample forms</a>
                                                <a class="drop-item" href="<?php echo e(route('interactive-services.surveys')); ?>">surveys</a>
                                                <a class="drop-item" href="<?php echo e(route('interactive-services.bank-regulations')); ?>">banking regulations</a>
                                                <a class="drop-item" href="<?php echo e(route('interactive-services.subscription-for-banks-materials')); ?>">subscription for bank's materials</a>
                                                <a class="drop-item" href="<?php echo e(route('interactive-services.national-symbols')); ?>">national symbols</a>
                                                <a class="drop-item" href="<?php echo e(route('interactive-services.usefull-links')); ?>">useful links</a>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                                <div class="col-12 mb-md-5 mb-sm-2">
                                    <!-- press center menu -->
                                    <li class="mega-menu-inner">
                                        <a class="mega-menu-header" data-toggle="collapse" href="#press-center-collapse" role="button" aria-expanded="false" aria-controls="press-center-collapse">
                                            press center
                                            <i class="fas fa-caret-down"></i>
                                        </a>
                                        <div class="mega-menu-callapse collapse" id="press-center-collapse">
                                            <div class="drop-body card card-body">
                                                <a class="drop-item" href="<?php echo e(route('press-center.news')); ?>">news</a>
                                                <a class="drop-item" href="<?php echo e(route('press-center.dividends')); ?>">dividends</a>
                                                <a class="drop-item" href="<?php echo e(route('press-center.procurement')); ?>">procurement</a>
                                                <a class="drop-item" href="<?php echo e(route('press-center.youth-union')); ?>">youth union</a>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </ul>
                    <div class="close-menu-button">&times;</div>
                </div>
                <!-- gamburber mega menu starts -->
            </div>
            
            <!-- mega menu desctop starts -->
            <ul class="navbar-menu-desctop d-xl-flex d-none">
                <!-- corporates menu -->
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Str::contains(Route::currentRouteName(), 'corporates') ? 'active' : ''); ?>" href="#">corporates</a>
                    <div class="drop-menu">
                        <div class="drop-item-box">
                            <a class="drop-item" href="<?php echo e(route('corporates.account-opening')); ?>">account opening and administration</a>
                            <a class="drop-item" href="<?php echo e(route('corporates.payments-and-cash-management')); ?>">payments and cash management</a>
                            <a class="drop-item" href="<?php echo e(route('corporates.remote-banking')); ?>">digital banking</a>
                            <a class="drop-item" href="<?php echo e(route('corporates.deposits')); ?>">deposits</a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item" href="<?php echo e(route('corporates.application-for-loan')); ?>">application for loan</a>
                            <a class="drop-item" href="<?php echo e(route('corporates.trade-finance')); ?>">trade finance</a>
                            <a class="drop-item" href="<?php echo e(route('corporates.export-import')); ?>">export-import</a>
                            <a class="drop-item" href="<?php echo e(route('corporates.treasury')); ?>">treasury</a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item" href="<?php echo e(route('corporates.correspondent-banks')); ?>">correspondent bank</a>
                            <a class="drop-item" href="<?php echo e(route('corporates.local-cards')); ?>">local cards</a>
                            <a class="drop-item" href="<?php echo e(route('corporates.international-cards')); ?>">international cards</a>
                            <a class="drop-item" href="<?php echo e(route('corporates.cciapm')); ?>">CCIAPM</a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item" href="<?php echo e(route('corporates.bank-tariffs')); ?>">bank tariffs</a>
                        </div>
                    </div>
                </li>
                <!-- individuals menu -->
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Str::contains(Route::currentRouteName(), 'individuals') ? 'active' : ''); ?>" href="#">individuals</a>
                    <div class="drop-menu">
                        <div class="drop-item-box">
                            <a class="drop-item" href="<?php echo e(route('individuals.account-opening')); ?>">account opening & adminstration</a>
                            <a class="drop-item" href="<?php echo e(route('individuals.payments-and-transfers')); ?>">payments and transfers</a>
                            <a class="drop-item" href="<?php echo e(route('individuals.deposits')); ?>">deposits</a>
                            <a class="drop-item" href="<?php echo e(route('individuals.local-cards')); ?>">local cards</a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item" href="<?php echo e(route('individuals.international-cards')); ?>">international cards</a>
                            <a class="drop-item" href="<?php echo e(route('individuals.exchange-office')); ?>">exchange office</a>
                            <a class="drop-item" href="<?php echo e(route('individuals.conversion-operations')); ?>">conversion operations</a>
                            <a class="drop-item" href="<?php echo e(route('individuals.bank-tariffs')); ?>">bank tariffs</a>
                        </div>
                    </div>
                </li>
                <!-- investors menu -->
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Str::contains(Route::currentRouteName(), 'investors') ? 'active' : ''); ?>" href="#">investors</a>
                    <div class="drop-menu">
                        <div class="drop-item-box">
                            <a class="drop-item" href="<?php echo e(route('investors.share-information')); ?>">share information</a>
                            <a class="drop-item" href="<?php echo e(route('investors.voting-results')); ?>">voting results</a>
                            <a class="drop-item" href="<?php echo e(route('investors.information-on-gsm')); ?>">information on GSM</a>
                            <a class="drop-item" href="<?php echo e(route('investors.substantial-facts')); ?>">substantial facts</a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item" href="<?php echo e(route('investors.affiliate-personas')); ?>">affiliate personas & parties</a>
                            <a class="drop-item" href="<?php echo e(route('investors.audit-reports')); ?>">audit reports</a>
                            <a class="drop-item" href="<?php echo e(route('investors.financial-statements')); ?>">financial statements</a>
                        </div>
                    </div>
                </li>
                <!-- interactive services menu -->
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Str::contains(Route::currentRouteName(), 'interactive-services') ? 'active' : ''); ?>" href="#">interactive services</a>
                    <div class="drop-menu">
                        <div class="drop-item-box">
                            <a class="drop-item" href="<?php echo e(route('interactive-services.sample-forms')); ?>">sample forms</a>
                            <a class="drop-item" href="<?php echo e(route('interactive-services.surveys')); ?>">surveys</a>
                            <a class="drop-item" href="<?php echo e(route('interactive-services.bank-regulations')); ?>">banking regulations</a>
                            <a class="drop-item" href="<?php echo e(route('interactive-services.subscription-for-banks-materials')); ?>">subscription for bank's materials</a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item" href="<?php echo e(route('interactive-services.national-symbols')); ?>">national symbols</a>
                            <a class="drop-item" href="<?php echo e(route('interactive-services.usefull-links')); ?>">useful links</a>
                        </div>
                    </div>
                </li>
                <!-- press center menu -->
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Str::contains(Route::currentRouteName(), 'press-center') ? 'active' : ''); ?>" href="#">press center</a>
                    <div class="drop-menu">
                        <div class="drop-item-box">
                            <a class="drop-item" href="<?php echo e(route('press-center.news')); ?>">news</a>
                            <a class="drop-item" href="<?php echo e(route('press-center.dividends')); ?>">dividends</a>
                            <a class="drop-item" href="<?php echo e(route('press-center.procurement')); ?>">procurement</a>
                            <a class="drop-item" href="<?php echo e(route('press-center.youth-union')); ?>">youth union</a>
                        </div>
                    </div>
                </li>
                <!-- about us menu -->
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Str::contains(Route::currentRouteName(), 'about-us') ? 'active' : ''); ?>" href="javascript:void(0)">about us</a>
                    <div class="drop-menu">
                        <div class="drop-item-box ">
                            <a class="drop-item" href="<?php echo e(route('about-us.general-information')); ?>">general information</a>
                            <a class="drop-item" href="<?php echo e(route('about-us.history')); ?>">history</a>
                            <a class="drop-item" href="<?php echo e(route('about-us.mission')); ?>">mission</a>
                            <a class="drop-item" href="<?php echo e(route('about-us.message-from-chairman')); ?>">message from chairman</a>
                        </div>
                        <div class="drop-item-box ">
                            <a class="drop-item" href="<?php echo e(route('about-us.management-board')); ?>">management board</a>
                            <a class="drop-item" href="<?php echo e(route('about-us.organizational-structure')); ?>">organisation structure</a>
                            <a class="drop-item" href="<?php echo e(route('about-us.committees')); ?>">commites</a>
                            <a class="drop-item" href="<?php echo e(route('about-us.branches')); ?>">branches</a>
                        </div>
                        <div class="drop-item-box ">
                            <a class="drop-item" href="<?php echo e(route('about-us.business-plan')); ?>">business plan</a>
                            <a class="drop-item" href="<?php echo e(route('about-us.banks-charter')); ?>">bank's charter</a>
                            <a class="drop-item" href="<?php echo e(route('about-us.licenses-and-certificates')); ?>">licenses and certificates</a>
                            <a class="drop-item" href="<?php echo e(route('about-us.awards')); ?>">awards</a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item" href="<?php echo e(route('about-us.ratings')); ?>">ratings</a>
                            <a class="drop-item" href="<?php echo e(route('about-us.contact-us')); ?>">contact us</a>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- mega menu desctop ends -->
        </div>
        <div class="logo flex-center">
            <img src="<?php echo e(asset('img/navbar/KDB-logo-mini.svg')); ?>" alt="KDB bank logo">
        </div>
        <div class="flex-justify-between align-items-center">
            <div class="lang-menu">
                <div>
                    <img src="<?php echo e(asset('img/navbar/uzb-flag.svg')); ?>" width="18px" height="auto">
                    <img src="<?php echo e(asset('img/navbar/caret-down-black.svg')); ?>" width="auto" height="5px">
                </div>
                <div class="pop-up-lang-menu">
                    <a href="#">
                        <img src="<?php echo e(asset('img/navbar/uzb-flag.svg')); ?>" width="18px" height="auto">
                    </a>
                    <a href="#">
                        <img src="<?php echo e(asset('img/navbar/uzb-flag.svg')); ?>" width="18px" height="auto">
                    </a>
                </div>
            </div>
            <div class="flex-align-center">
                <div class="navbar-course">
                    <span>USD/UZS</span>
                    <span>9395.63</span>
                    <span>9350/9420</span>
                </div>
                <a href="#" class="internet-banking">internet banking</a>
            </div>
        </div>
    </div>
</nav>
<!-- Nav two ends --><?php /**PATH C:\Users\Teacher\Desktop\KDBBU\resources\views/layouts/nav.blade.php ENDPATH**/ ?>