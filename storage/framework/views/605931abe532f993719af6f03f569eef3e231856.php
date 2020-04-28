
<nav class="nav-one container-fluid">
    <div class="row no-gutters m-0 flex-justify-between">
        <div class="logo flex-center">
            <a href="<?php echo e(route('home', app()->getLocale())); ?>">
                <img src="<?php echo e(asset('img/navbar/KDB-logo.svg')); ?>" alt="KDB Bank Logo">
            </a>
        </div>
        <div class="flex-align-center">
            <div class="icons">
                <a href="<?php echo e(route('interactive-services.virtual-reception', app()->getLocale())); ?>" class="pr-4">
                    <img src="<?php echo e(asset('img/navbar/call-center-icon.svg')); ?>" alt="call center icon" width="17px" heigh="auto">
                </a>
                <img src="<?php echo e(asset('img/navbar/volume-icon.svg')); ?>" alt="volume icon" width="auto" height="16px">
                <img src="<?php echo e(asset('img/navbar/eye-icon.svg')); ?>" alt="eye icon" width="20px" height="auto">
                <img src="<?php echo e(asset('img/navbar/message-icon.svg')); ?>" alt="massage icon" width="18px" height="auto">
                <div class="lang-menu">
                    <div>
                        <img src="<?php echo e(asset('img/navbar/' . app()->getLocale() . '.svg')); ?>" width="auto" height="10px">
                        <img src="<?php echo e(asset('img/navbar/caret-down.svg')); ?>" width="auto" height="5px">
                    </div>

                    
                    <div class="pop-up-lang-menu">
                        <a href="<?php echo e(url('/uz' . substr(Request::path(), 2))); ?>">
                            <img src="<?php echo e(asset('img/navbar/uz.svg')); ?>" width="auto" height="10px">
                        </a>
                        <a href="<?php echo e(url('/ru' . substr(Request::path(), 2))); ?>">
                            <img src="<?php echo e(asset('img/navbar/ru.svg')); ?>" width="auto" height="10px">
                        </a>
                        <a href="<?php echo e(url('/en' . substr(Request::path(), 2))); ?>">
                            <img src="<?php echo e(asset('img/navbar/en.svg')); ?>" width="auto" height="10px">
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

                
                <span class="open-menu-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="12" viewBox="0 0 18 12"><path d="M3,18H21V16H3Zm0-5H21V11H3ZM3,6V8H21V6Z" transform="translate(-3 -6)"/></svg>
                </span>
                

                <!-- gamburber mega menu starts -->
                <div class="gamburger-mega-menu">
                    <div class="row m-0">
                        <div class="col-md-4">
                            <div class="gamburger-menu-logo">
                                <a href="<?php echo e(route('home', app()->getLocale())); ?>">
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
                                    <!-- corporates menu -->
                                    <li class="mega-menu-inner">
                                        <a class="mega-menu-header" data-toggle="collapse" href="#corporates-collapse" role="button" aria-expanded="false" aria-controls="corporates-collapse">
                                            corporates
                                            <i class="fas fa-caret-down"></i>
                                        </a>
                                        <div class="mega-menu-callapse collapse" id="corporates-collapse">
                                            <div class="drop-body card card-body">
                                                <a class="drop-item" href="<?php echo e(route('corporates.crm', app()->getLocale())); ?>">CRM</a>
                                                <a class="drop-item" href="<?php echo e(route('corporates.account-opening', app()->getLocale())); ?>">account opening & administration</a>
                                                <a class="drop-item" href="<?php echo e(route('corporates.payments-and-cash-management', app()->getLocale())); ?>">payments & cash management</a>
                                                <a class="drop-item" href="<?php echo e(route('corporates.remote-banking', app()->getLocale())); ?>">digital banking</a>
                                                <a class="drop-item" href="<?php echo e(route('corporates.credit', app()->getLocale())); ?>">credit</a>
                                                <a class="drop-item" href="<?php echo e(route('corporates.deposits', app()->getLocale())); ?>">deposits</a>
                                                <a class="drop-item" href="<?php echo e(route('corporates.application-for-loan', app()->getLocale())); ?>">application for loan</a>
                                                <a class="drop-item" href="<?php echo e(route('corporates.trade-finance', app()->getLocale())); ?>">trade finance</a>
                                                <a class="drop-item" href="<?php echo e(route('corporates.export-import', app()->getLocale())); ?>">export & import</a>
                                                <a class="drop-item" href="<?php echo e(route('corporates.treasury', app()->getLocale())); ?>">treasury</a>
                                                <a class="drop-item" href="<?php echo e(route('corporates.correspondent-banks', app()->getLocale())); ?>">correspondent banks</a>
                                                <a class="drop-item" href="<?php echo e(route('corporates.local-cards', app()->getLocale())); ?>">local cards</a>
                                                <a class="drop-item" href="<?php echo e(route('corporates.international-cards', app()->getLocale())); ?>">international cards</a>
                                                <a class="drop-item" href="<?php echo e(route('corporates.cciapm', app()->getLocale())); ?>">CCIAPM</a>
                                                <a class="drop-item" href="<?php echo e(route('corporates.bank-tariffs', app()->getLocale())); ?>">bank tariffs</a>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                                <div class="col-12 mb-md-5 mb-sm-2">
                                    <!-- individuals menu -->
                                    <li class="mega-menu-inner">
                                        <a class="mega-menu-header" data-toggle="collapse" href="#individuals-collapse" role="button" aria-expanded="false" aria-controls="individuals-collapse">
                                            individuals
                                            <i class="fas fa-caret-down"></i>
                                        </a>
                                        <div class="mega-menu-callapse collapse" id="individuals-collapse">
                                            <div class="drop-body card card-body">
                                                <a class="drop-item" href="<?php echo e(route('individuals.account-opening', app()->getLocale())); ?>">account opening & administration</a>
                                                <a class="drop-item" href="<?php echo e(route('individuals.payments-and-transfers', app()->getLocale())); ?>">payments & transfers</a>
                                                <a class="drop-item" href="<?php echo e(route('individuals.deposits', app()->getLocale())); ?>">deposits</a>
                                                <a class="drop-item" href="<?php echo e(route('individuals.local-cards', app()->getLocale())); ?>">local cards</a>
                                                <a class="drop-item" href="<?php echo e(route('individuals.international-cards', app()->getLocale())); ?>">international cards</a>
                                                <a class="drop-item" href="<?php echo e(route('individuals.exchange-office', app()->getLocale())); ?>">exchange office</a>
                                                <a class="drop-item" href="<?php echo e(route('individuals.exchange-office.currency-conversion', app()->getLocale())); ?>">currency conversion</a>
                                                <a class="drop-item" href="<?php echo e(route('individuals.conversion-operations', app()->getLocale())); ?>">conversion operations</a>
                                                <a class="drop-item" href="<?php echo e(route('individuals.bank-tariffs', app()->getLocale())); ?>">bank tariffs</a>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row flex-column">
                                <div class="col-12 mb-md-5 mb-sm-2">
                                    <!-- investors menu -->
                                    <li class="mega-menu-inner">
                                        <a class="mega-menu-header" data-toggle="collapse" href="#investors-collapse" role="button" aria-expanded="false" aria-controls="investors-collapse">
                                            investors
                                            <i class="fas fa-caret-down"></i>
                                        </a>
                                        <div class="mega-menu-callapse collapse" id="investors-collapse">
                                            <div class="drop-body card card-body">
                                                <a class="drop-item" href="<?php echo e(route('investors.share-information', app()->getLocale())); ?>">share information</a>
                                                <a class="drop-item" href="<?php echo e(route('investors.voting-results', app()->getLocale())); ?>">voting results</a>
                                                <a class="drop-item" href="<?php echo e(route('investors.information-on-gsm', app()->getLocale())); ?>">information on GSM</a>
                                                <a class="drop-item" href="<?php echo e(route('investors.substantial-facts', app()->getLocale())); ?>">substantial facts</a>
                                                <a class="drop-item" href="<?php echo e(route('investors.affiliate-personas', app()->getLocale())); ?>">affiliate personas & parties</a>
                                                <a class="drop-item" href="<?php echo e(route('investors.audit-reports', app()->getLocale())); ?>">audit reports</a>
                                                <a class="drop-item" href="<?php echo e(route('investors.financial-statements', app()->getLocale())); ?>">financial statements</a>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                                <div class="col-12 mb-md-5 mb-sm-2">
                                    <!-- interactive service menu -->
                                    <li class="mega-menu-inner">
                                        <a class="mega-menu-header" data-toggle="collapse" href="#interactive-service-collapse" role="button" aria-expanded="false" aria-controls="interactive-service-collapse">
                                            interactive services
                                            <i class="fas fa-caret-down"></i>
                                        </a>
                                        <div class="mega-menu-callapse collapse" id="interactive-service-collapse">
                                            <div class="drop-body card card-body">
                                                <a class="drop-item" href="<?php echo e(route('interactive-services.virtual-reception', app()->getLocale())); ?>">virtual reception</a>
                                                <a class="drop-item" href="<?php echo e(route('interactive-services.sample-forms', app()->getLocale())); ?>">sample forms</a>
                                                <a class="drop-item" href="<?php echo e(route('interactive-services.surveys', app()->getLocale())); ?>">surveys</a>
                                                <a class="drop-item" href="<?php echo e(route('interactive-services.bank-regulations', app()->getLocale())); ?>">banking regulations</a>
                                                <a class="drop-item" href="<?php echo e(route('interactive-services.subscription-for-banks-materials', app()->getLocale())); ?>">subscription for bank's materials</a>
                                                <a class="drop-item" href="<?php echo e(route('interactive-services.national-symbols', app()->getLocale())); ?>">national symbols</a>
                                                <a class="drop-item" href="<?php echo e(route('interactive-services.usefull-links', app()->getLocale())); ?>">useful links</a>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row flex-column">
                                <div class="col-12 mb-md-5 mb-sm-2">
                                    <!-- press center menu -->
                                    <li class="mega-menu-inner">
                                        <a class="mega-menu-header" data-toggle="collapse" href="#press-center-collapse" role="button" aria-expanded="false" aria-controls="press-center-collapse">
                                            press center
                                            <i class="fas fa-caret-down"></i>
                                        </a>
                                        <div class="mega-menu-callapse collapse" id="press-center-collapse">
                                            <div class="drop-body card card-body">
                                                <a class="drop-item" href="<?php echo e(route('press-center.news', app()->getLocale())); ?>">news</a>
                                                <a class="drop-item" href="<?php echo e(route('press-center.gallery-category', app()->getLocale())); ?>">gallery</a>
                                                <a class="drop-item" href="<?php echo e(route('press-center.dividends', app()->getLocale())); ?>">dividends</a>
                                                <a class="drop-item" href="<?php echo e(route('press-center.procurement', app()->getLocale())); ?>">procurement</a>
                                                <a class="drop-item" href="<?php echo e(route('press-center.youth-union', app()->getLocale())); ?>">youth union</a>
                                                <a class="drop-item" href="<?php echo e(route('press-center.copy-right', app()->getLocale())); ?>">copy right</a>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                                <div class="col-12 mb-md-5 mb-sm-2">
                                    <!-- about us menu -->
                                    <li class="mega-menu-inner">
                                        <a class="mega-menu-header" data-toggle="collapse" href="#about-us-collapse" role="button" aria-expanded="false" aria-controls="about-us-collapse">
                                            about us
                                            <i class="fas fa-caret-down"></i>
                                        </a>
                                        <div class="mega-menu-callapse collapse" id="about-us-collapse">
                                            <div class="drop-body card card-body">
                                                <a class="drop-item" href="<?php echo e(route('about-us.general-information', app()->getLocale())); ?>">general information</a>
                                                <a class="drop-item" href="<?php echo e(route('about-us.history', app()->getLocale())); ?>">history</a>
                                                <a class="drop-item" href="<?php echo e(route('about-us.mission', app()->getLocale())); ?>">mission</a>
                                                <a class="drop-item" href="<?php echo e(route('about-us.message-from-chairman', app()->getLocale())); ?>">message from chairman</a>
                                                <a class="drop-item" href="<?php echo e(route('about-us.management-board', app()->getLocale())); ?>">management board</a>
                                                <a class="drop-item" href="<?php echo e(route('about-us.organizational-structure', app()->getLocale())); ?>">organisation structure</a>
                                                <a class="drop-item" href="<?php echo e(route('about-us.committees', app()->getLocale())); ?>">committees</a>
                                                <a class="drop-item" href="<?php echo e(route('about-us.branches', app()->getLocale())); ?>">branches</a>
                                                <a class="drop-item" href="<?php echo e(route('about-us.business-plan', app()->getLocale())); ?>">business plan</a>
                                                <a class="drop-item" href="<?php echo e(route('about-us.banks-charter', app()->getLocale())); ?>">bank's charter</a>
                                                <a class="drop-item" href="<?php echo e(route('about-us.licenses-and-certificates', app()->getLocale())); ?>">licenses & certificates</a>
                                                <a class="drop-item" href="<?php echo e(route('about-us.awards', app()->getLocale())); ?>">awards</a>
                                                <a class="drop-item" href="<?php echo e(route('about-us.ratings', app()->getLocale())); ?>">ratings</a>
                                                <a class="drop-item" href="<?php echo e(route('about-us.careers', app()->getLocale())); ?>">job opportunities</a>
                                                <a class="drop-item" href="<?php echo e(route('about-us.contact-us', app()->getLocale())); ?>">contact us</a>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </ul>
                    <div class="close-menu-button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"><path d="M19,6.41,17.59,5,12,10.59,6.41,5,5,6.41,10.59,12,5,17.59,6.41,19,12,13.41,17.59,19,19,17.59,13.41,12Z" transform="translate(-5 -5)" fill="#fff"/></svg>
                    </div>
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
                            <a class="drop-item" href="<?php echo e(route('corporates.crm', app()->getLocale())); ?>">CRM</a>
                            <a class="drop-item" href="<?php echo e(route('corporates.account-opening', app()->getLocale())); ?>">account opening & administration</a>
                            <a class="drop-item" href="<?php echo e(route('corporates.payments-and-cash-management', app()->getLocale())); ?>">payments & cash management</a>
                            <a class="drop-item" href="<?php echo e(route('corporates.remote-banking', app()->getLocale())); ?>">digital banking</a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item" href="<?php echo e(route('corporates.credit', app()->getLocale())); ?>">credit</a>
                            <a class="drop-item" href="<?php echo e(route('corporates.deposits', app()->getLocale())); ?>">deposits</a>
                            <a class="drop-item" href="<?php echo e(route('corporates.application-for-loan', app()->getLocale())); ?>">application for loan</a>
                            <a class="drop-item" href="<?php echo e(route('corporates.trade-finance', app()->getLocale())); ?>">trade finance</a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item" href="<?php echo e(route('corporates.export-import', app()->getLocale())); ?>">export & import</a>
                            <a class="drop-item" href="<?php echo e(route('corporates.treasury', app()->getLocale())); ?>">treasury</a>
                            <a class="drop-item" href="<?php echo e(route('corporates.correspondent-banks', app()->getLocale())); ?>">correspondent banks</a>
                            <a class="drop-item" href="<?php echo e(route('corporates.local-cards', app()->getLocale())); ?>">local cards</a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item" href="<?php echo e(route('corporates.international-cards', app()->getLocale())); ?>">international cards</a>
                            <a class="drop-item" href="<?php echo e(route('corporates.cciapm', app()->getLocale())); ?>">CCIAPM</a>
                            <a class="drop-item" href="<?php echo e(route('corporates.bank-tariffs', app()->getLocale())); ?>">bank tariffs</a>
                        </div>
                    </div>
                </li>
                <!-- individuals menu -->
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Str::contains(Route::currentRouteName(), 'individuals') ? 'active' : ''); ?>" href="#">individuals</a>
                    <div class="drop-menu">
                        <div class="drop-item-box">
                            <a class="drop-item" href="<?php echo e(route('individuals.account-opening', app()->getLocale())); ?>">account opening & adminstration</a>
                            <a class="drop-item" href="<?php echo e(route('individuals.payments-and-transfers', app()->getLocale())); ?>">payments & transfers</a>
                            <a class="drop-item" href="<?php echo e(route('individuals.deposits', app()->getLocale())); ?>">deposits</a>
                            <a class="drop-item" href="<?php echo e(route('individuals.local-cards', app()->getLocale())); ?>">local cards</a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item" href="<?php echo e(route('individuals.international-cards', app()->getLocale())); ?>">international cards</a>
                            <a class="drop-item" href="<?php echo e(route('individuals.exchange-office', app()->getLocale())); ?>">exchange office</a>
                            <a class="drop-item" href="<?php echo e(route('individuals.exchange-office.currency-conversion', app()->getLocale())); ?>">currency conversion</a>
                            <a class="drop-item" href="<?php echo e(route('individuals.conversion-operations', app()->getLocale())); ?>">conversion operations</a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item" href="<?php echo e(route('individuals.bank-tariffs', app()->getLocale())); ?>">bank tariffs</a>
                        </div>
                    </div>
                </li>
                <!-- investors menu -->
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Str::contains(Route::currentRouteName(), 'investors') ? 'active' : ''); ?>" href="#">investors</a>
                    <div class="drop-menu">
                        <div class="drop-item-box">
                            <a class="drop-item" href="<?php echo e(route('investors.share-information', app()->getLocale())); ?>">share information</a>
                            <a class="drop-item" href="<?php echo e(route('investors.voting-results', app()->getLocale())); ?>">voting results</a>
                            <a class="drop-item" href="<?php echo e(route('investors.information-on-gsm', app()->getLocale())); ?>">information on GSM</a>
                            <a class="drop-item" href="<?php echo e(route('investors.substantial-facts', app()->getLocale())); ?>">substantial facts</a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item" href="<?php echo e(route('investors.affiliate-personas', app()->getLocale())); ?>">affiliate personas & parties</a>
                            <a class="drop-item" href="<?php echo e(route('investors.audit-reports', app()->getLocale())); ?>">audit reports</a>
                            <a class="drop-item" href="<?php echo e(route('investors.financial-statements', app()->getLocale())); ?>">financial statements</a>
                        </div>
                    </div>
                </li>
                <!-- interactive services menu -->
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Str::contains(Route::currentRouteName(), 'interactive-services') ? 'active' : ''); ?>" href="#">interactive services</a>
                    <div class="drop-menu">
                        <div class="drop-item-box">
                            <a class="drop-item" href="<?php echo e(route('interactive-services.virtual-reception', app()->getLocale())); ?>">virtual reception</a>
                            <a class="drop-item" href="<?php echo e(route('interactive-services.sample-forms', app()->getLocale())); ?>">sample forms</a>
                            <a class="drop-item" href="<?php echo e(route('interactive-services.surveys', app()->getLocale())); ?>">surveys</a>
                            <a class="drop-item" href="<?php echo e(route('interactive-services.bank-regulations', app()->getLocale())); ?>">banking regulations</a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item" href="<?php echo e(route('interactive-services.subscription-for-banks-materials', app()->getLocale())); ?>">subscription for bank's materials</a>
                            <a class="drop-item" href="<?php echo e(route('interactive-services.national-symbols', app()->getLocale())); ?>">national symbols</a>
                            <a class="drop-item" href="<?php echo e(route('interactive-services.usefull-links', app()->getLocale())); ?>">useful links</a>
                        </div>
                    </div>
                </li>
                <!-- press center menu -->
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Str::contains(Route::currentRouteName(), 'press-center') ? 'active' : ''); ?>" href="#">press center</a>
                    <div class="drop-menu">
                        <div class="drop-item-box">
                            <a class="drop-item" href="<?php echo e(route('press-center.news', app()->getLocale())); ?>">news</a>
                            <a class="drop-item" href="<?php echo e(route('press-center.gallery-category', app()->getLocale())); ?>">gallery</a>
                            <a class="drop-item" href="<?php echo e(route('press-center.dividends', app()->getLocale())); ?>">dividends</a>
                            <a class="drop-item" href="<?php echo e(route('press-center.procurement', app()->getLocale())); ?>">procurement</a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item" href="<?php echo e(route('press-center.youth-union', app()->getLocale())); ?>">youth union</a>
                            <a class="drop-item" href="<?php echo e(route('press-center.copy-right', app()->getLocale())); ?>">copy right</a>
                        </div>
                    </div>
                </li>
                <!-- about us menu -->
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Str::contains(Route::currentRouteName(), 'about-us') ? 'active' : ''); ?>" href="javascript:void(0)">about us</a>
                    <div class="drop-menu">
                        <div class="drop-item-box ">
                            <a class="drop-item" href="<?php echo e(route('about-us.general-information', app()->getLocale())); ?>">general information</a>
                            <a class="drop-item" href="<?php echo e(route('about-us.history', app()->getLocale())); ?>">history</a>
                            <a class="drop-item" href="<?php echo e(route('about-us.mission', app()->getLocale())); ?>">mission</a>
                            <a class="drop-item" href="<?php echo e(route('about-us.message-from-chairman', app()->getLocale())); ?>">message from chairman</a>
                        </div>
                        <div class="drop-item-box ">
                            <a class="drop-item" href="<?php echo e(route('about-us.management-board', app()->getLocale())); ?>">management board</a>
                            <a class="drop-item" href="<?php echo e(route('about-us.organizational-structure', app()->getLocale())); ?>">organisation structure</a>
                            <a class="drop-item" href="<?php echo e(route('about-us.committees', app()->getLocale())); ?>">committees</a>
                            <a class="drop-item" href="<?php echo e(route('about-us.branches', app()->getLocale())); ?>">branches</a>
                        </div>
                        <div class="drop-item-box ">
                            <a class="drop-item" href="<?php echo e(route('about-us.business-plan', app()->getLocale())); ?>">business plan</a>
                            <a class="drop-item" href="<?php echo e(route('about-us.banks-charter', app()->getLocale())); ?>">bank's charter</a>
                            <a class="drop-item" href="<?php echo e(route('about-us.licenses-and-certificates', app()->getLocale())); ?>">licenses & certificates</a>
                            <a class="drop-item" href="<?php echo e(route('about-us.awards', app()->getLocale())); ?>">awards</a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item" href="<?php echo e(route('about-us.ratings', app()->getLocale())); ?>">ratings</a>
                            <a class="drop-item" href="<?php echo e(route('about-us.careers', app()->getLocale())); ?>">job opportunities</a>
                            <a class="drop-item" href="<?php echo e(route('about-us.contact-us', app()->getLocale())); ?>">contact us</a>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- mega menu desctop ends -->
        </div>
        <div class="logo flex-center">
            <a href="<?php echo e(route('home', app()->getLocale())); ?>">
                <img src="<?php echo e(asset('img/navbar/KDB-logo-mini.svg')); ?>" alt="KDB Bank Logo">
            </a>
        </div>
        <div class="flex-justify-between align-items-center">
            <div class="lang-menu">
                <div>
                    <img src="<?php echo e(asset('img/navbar/' . app()->getLocale() . '.svg')); ?>" width="auto" height="10px">
                    <img src="<?php echo e(asset('img/navbar/caret-down.svg')); ?>" width="auto" height="5px" class="d-none d-md-block">
                </div>
                <div class="pop-up-lang-menu">
                    <a href="<?php echo e(url('/uz' . substr(Request::path(), 2))); ?>">
                        <img src="<?php echo e(asset('img/navbar/uz.svg')); ?>" width="auto" height="10px">
                    </a>
                    <a href="<?php echo e(url('/ru' . substr(Request::path(), 2))); ?>">
                        <img src="<?php echo e(asset('img/navbar/ru.svg')); ?>" width="auto" height="10px">
                    </a>
                    <a href="<?php echo e(url('/en' . substr(Request::path(), 2))); ?>">
                        <img src="<?php echo e(asset('img/navbar/en.svg')); ?>" width="auto" height="10px">
                    </a>
                </div>
            </div>
            <div class="flex-align-center">
                <div class="navbar-course">
                    <span>USD | UZS</span>
                    <span><?php echo e(getUsdRate()); ?></span>
                    <span>9490/9530</span>
                </div>
                <a href="#" class="internet-banking">internet banking</a>
            </div>
        </div>
    </div>
</nav>
<!-- Nav two ends<?php /**PATH C:\Users\User 5\Desktop\kdb\resources\views/layouts/nav.blade.php ENDPATH**/ ?>