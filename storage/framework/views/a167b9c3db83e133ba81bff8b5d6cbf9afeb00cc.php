
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
                    <img src="<?php echo e(asset('img/navbar/message-icon.svg')); ?>" alt="massage icon" width="18px" height="auto">
                </a>
                <div class="allow-speech">
                    <div>
                        <img src="<?php echo e(asset('img/navbar/volume-icon.svg')); ?>" alt="volume icon" width="auto"
                             height="16px">
                    </div>

                    
                    <div class="pop-up">
                        <div class="checkbox-parent">
                            <input type="checkbox" id="allow-speech">
                            <label for="allow-speech"><span class="pl-2"><?php echo app('translator')->get('layouts/nav.turn-on'); ?></span></label>
                        </div>
                    </div>
                    

                </div>
                <div class="resize-text">
                    <div>
                        <img src="<?php echo e(asset('img/navbar/eye-icon.svg')); ?>" alt="eye icon" width="20px" height="auto">
                    </div>

                    
                    <div class="pop-up">
                        <input type="range" id="resize-text" min="16" max="24" value="16" step="1">
                    </div>
                    

                </div>
                <img src="<?php echo e(asset('img/navbar/search-icon.svg')); ?>" alt="search icon" width="18px" height="auto"
                     id="search-open">
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
            </div>
            <a class="phone-number" href="tel:+998781208080"><span>(+99878)</span>120-80-00</a>
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="12" viewBox="0 0 18 12"><path
                                d="M3,18H21V16H3Zm0-5H21V11H3ZM3,6V8H21V6Z" transform="translate(-3 -6)"/></svg>
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
                    <a href="https://ibank.kdb.uz/" class="internet-banking-mobile"
                       target="_blank"><?php echo app('translator')->get('layouts/nav.internet-banking'); ?></a>
                    <ul class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-12 mb-md-5 mb-sm-2">
                                    <!-- corporates menu -->
                                    <li class="mega-menu-inner">
                                        <a class="mega-menu-header" data-toggle="collapse" href="#corporates-collapse"
                                           role="button" aria-expanded="false" aria-controls="corporates-collapse">
                                            <?php echo app('translator')->get('layouts/nav.corporates'); ?>
                                            <i class="fas fa-caret-down"></i>
                                        </a>
                                        <div class="mega-menu-callapse collapse" id="corporates-collapse">
                                            <div class="drop-body card card-body">
                                                <a class="drop-item"
                                                   href="<?php echo e(route('corporates.crm', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.client-relatioship'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('corporates.account-opening', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.account-opening'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('corporates.payments-and-cash-management', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.payments-cash'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('corporates.deposits', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.deposits'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('corporates.remote-banking', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.digital-banking'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('corporates.credit', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.credit'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('corporates.trade-finance', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.trade-finance'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('corporates.export-import', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.export-import'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('corporates.treasury', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.treasury'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('corporates.correspondent-banks', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.correspondent-banks'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('corporates.local-cards', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.local-cards'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('corporates.international-cards', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.international-cards'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('corporates.local-terminals', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.acquiring-services'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('corporates.cciapm', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.cciapm'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('corporates.bank-tariffs', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.bank-tariffs'); ?></a>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                                <div class="col-12 mb-md-5 mb-sm-2">
                                    <!-- individuals menu -->
                                    <li class="mega-menu-inner">
                                        <a class="mega-menu-header" data-toggle="collapse" href="#individuals-collapse"
                                           role="button" aria-expanded="false" aria-controls="individuals-collapse">
                                            <?php echo app('translator')->get('layouts/nav.individuals'); ?>
                                            <i class="fas fa-caret-down"></i>
                                        </a>
                                        <div class="mega-menu-callapse collapse" id="individuals-collapse">
                                            <div class="drop-body card card-body">
                                                <a class="drop-item"
                                                   href="<?php echo e(route('individuals.account-opening', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.account-opening-2'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('individuals.payments-and-transfers', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.payments-transfers'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('individuals.remote-banking.internet-banking', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.digital-banking-2'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('individuals.deposits', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.deposits-2'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('individuals.credit', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.credit-2'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('individuals.local-cards', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.local-cards-2'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('individuals.international-cards', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.international-cards-2'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('individuals.exchange-office', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.exchange-office'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('individuals.bank-tariffs', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.bank-tariffs-2'); ?></a>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-12 mb-md-5 mb-sm-2">
                                    <!-- investors menu -->
                                    <li class="mega-menu-inner">
                                        <a class="mega-menu-header" data-toggle="collapse" href="#investors-collapse"
                                           role="button" aria-expanded="false" aria-controls="investors-collapse">
                                            <?php echo app('translator')->get('layouts/nav.investors'); ?>
                                            <i class="fas fa-caret-down"></i>
                                        </a>
                                        <div class="mega-menu-callapse collapse" id="investors-collapse">
                                            <div class="drop-body card card-body">
                                                <a class="drop-item"
                                                   href="<?php echo e(route('investors.share-information', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.share-information'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('investors.voting-results', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.voting-results'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('investors.information-on-gsm', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.information-on'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('investors.substantial-facts', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.substantial-facts'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('investors.affiliate-personas', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.affiliate-personas'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('investors.audit-reports', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.audit-reports'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('investors.financial-statements', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.financial-statements'); ?></a>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                                <div class="col-12 mb-md-5 mb-sm-2">
                                    <!-- interactive service menu -->
                                    <li class="mega-menu-inner">
                                        <a class="mega-menu-header" data-toggle="collapse"
                                           href="#interactive-service-collapse" role="button" aria-expanded="false"
                                           aria-controls="interactive-service-collapse">
                                            <?php echo app('translator')->get('layouts/nav.interactive-services'); ?>
                                            <i class="fas fa-caret-down"></i>
                                        </a>
                                        <div class="mega-menu-callapse collapse" id="interactive-service-collapse">
                                            <div class="drop-body card card-body">
                                                <a class="drop-item"
                                                   href="<?php echo e(route('interactive-services.virtual-reception', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.virtual-reception'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('interactive-services.exchange-rates', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.exchange-rates'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('interactive-services.calculators', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.calculators'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('interactive-services.sample-forms', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.sample-forms'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('interactive-services.surveys', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.surveys'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('interactive-services.bank-regulations', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.banking-regulations'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('interactive-services.subscription-for-banks-materials', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.subscription-for'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('interactive-services.national-symbols', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.national-symbols'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('interactive-services.usefull-links', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.useful-links'); ?></a>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-12 mb-md-5 mb-sm-2">
                                    <!-- press center menu -->
                                    <li class="mega-menu-inner">
                                        <a class="mega-menu-header" data-toggle="collapse" href="#press-center-collapse"
                                           role="button" aria-expanded="false" aria-controls="press-center-collapse">
                                            <?php echo app('translator')->get('layouts/nav.press-center'); ?>
                                            <i class="fas fa-caret-down"></i>
                                        </a>
                                        <div class="mega-menu-callapse collapse" id="press-center-collapse">
                                            <div class="drop-body card card-body">
                                                <a class="drop-item"
                                                   href="<?php echo e(route('press-center.news', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.news'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('press-center.gallery-category', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.gallery'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('press-center.dividends', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.dividends'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('press-center.procurement', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.procurement'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('press-center.youth-union', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.youth-union'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('press-center.copy-right', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.terms-of'); ?></a>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                                <div class="col-12 mb-md-5 mb-sm-2">
                                    <!-- about us menu -->
                                    <li class="mega-menu-inner">
                                        <a class="mega-menu-header" data-toggle="collapse" href="#about-us-collapse"
                                           role="button" aria-expanded="false" aria-controls="about-us-collapse">
                                            <?php echo app('translator')->get('layouts/nav.about-us'); ?>
                                            <i class="fas fa-caret-down"></i>
                                        </a>
                                        <div class="mega-menu-callapse collapse" id="about-us-collapse">
                                            <div class="drop-body card card-body">
                                                <a class="drop-item"
                                                   href="<?php echo e(route('about-us.general-information', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.general-information'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('about-us.history', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.history'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('about-us.mission', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.mission'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('about-us.message-from-chairman', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.message-from'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('about-us.management-board', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.management-board'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('about-us.organizational-structure', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.organisation-structure'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('about-us.committees', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.committees'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('about-us.branches', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.branches'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('about-us.business-plan', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.business-plan'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('about-us.banks-charter', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.bank-charter'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('about-us.licenses-and-certificates', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.licenses-certificates'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('about-us.awards', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.awards'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('about-us.ratings', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.ratings'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('about-us.careers', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.job-opportunities'); ?></a>
                                                <a class="drop-item"
                                                   href="<?php echo e(route('about-us.contact-us', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.contact-us'); ?></a>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </ul>
                    <div class="close-menu-button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                            <path d="M19,6.41,17.59,5,12,10.59,6.41,5,5,6.41,10.59,12,5,17.59,6.41,19,12,13.41,17.59,19,19,17.59,13.41,12Z"
                                  transform="translate(-5 -5)" fill="#fff"/>
                        </svg>
                    </div>
                </div>
                <!-- gamburber mega menu starts -->
            </div>

            <!-- mega menu desctop starts -->
            <ul class="navbar-menu-desctop d-xl-flex d-none">
                <!-- corporates menu -->
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Str::contains(Route::currentRouteName(), 'corporates') ? 'active' : ''); ?>"
                       href="#">
                        <?php echo app('translator')->get('layouts/nav.corporates-2'); ?>
                    </a>
                    <div class="drop-menu">
                        <div class="drop-item-box">
                            <a class="drop-item"
                               href="<?php echo e(route('corporates.crm', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.client-relationship'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('corporates.account-opening', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.account-opening-3'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('corporates.payments-and-cash-management', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.payments-cash-2'); ?></a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item"
                               href="<?php echo e(route('corporates.deposits', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.deposits-3'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('corporates.remote-banking', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.digital-banking-3'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('corporates.credit', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.credit-3'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('corporates.trade-finance', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.trade-finance-2'); ?></a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item"
                               href="<?php echo e(route('corporates.export-import', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.export-import-2'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('corporates.treasury', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.treasury-2'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('corporates.correspondent-banks', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.correspondent-banks-2'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('corporates.local-cards', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.local-cards-3'); ?></a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item"
                               href="<?php echo e(route('corporates.international-cards', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.international-cards-3'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('corporates.local-terminals', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.acquiring-services-2'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('corporates.cciapm', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.cciapm-2'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('corporates.bank-tariffs', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.bank-tariffs-3'); ?></a>
                        </div>
                    </div>
                </li>
                <!-- individuals menu -->
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Str::contains(Route::currentRouteName(), 'individuals') ? 'active' : ''); ?>"
                       href="#">
                        <?php echo app('translator')->get('layouts/nav.individuals-2'); ?>
                    </a>
                    <div class="drop-menu">
                        <div class="drop-item-box">
                            <a class="drop-item"
                               href="<?php echo e(route('individuals.account-opening', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.account-opening-4'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('individuals.payments-and-transfers', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.payments-transfers-2'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('individuals.remote-banking.internet-banking', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.digital-banking-4'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('individuals.deposits', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.deposits-4'); ?></a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item"
                               href="<?php echo e(route('individuals.credit', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.credit-4'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('individuals.local-cards', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.local-cards-4'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('individuals.international-cards', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.international-cards-4'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('individuals.exchange-office', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.exchange-office-3'); ?></a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item"
                               href="<?php echo e(route('individuals.bank-tariffs', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.bank-tariffs-4'); ?></a>
                        </div>
                    </div>
                </li>
                <!-- investors menu -->
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Str::contains(Route::currentRouteName(), 'investors') ? 'active' : ''); ?>"
                       href="#"><?php echo app('translator')->get('layouts/nav.investors-2'); ?></a>
                    <div class="drop-menu">
                        <div class="drop-item-box">
                            <a class="drop-item"
                               href="<?php echo e(route('investors.share-information', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.share-information-2'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('investors.voting-results', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.voting-results-2'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('investors.information-on-gsm', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.information-on-2'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('investors.substantial-facts', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.substantial-fact-3'); ?></a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item"
                               href="<?php echo e(route('investors.affiliate-personas', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.affiliate-personas-2'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('investors.audit-reports', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.audit-reports-2'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('investors.financial-statements', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.financial-statements-2'); ?></a>
                        </div>
                    </div>
                </li>
                <!-- interactive services menu -->
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Str::contains(Route::currentRouteName(), 'interactive-services') ? 'active' : ''); ?>"
                       href="#">
                        <?php echo app('translator')->get('layouts/nav.interactive-services-2'); ?>
                    </a>
                    <div class="drop-menu">
                        <div class="drop-item-box">
                            <a class="drop-item"
                               href="<?php echo e(route('interactive-services.virtual-reception', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.virtual-reception-2'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('interactive-services.exchange-rates', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.exchange-rates-2'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('interactive-services.calculators', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.calculators-2'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('interactive-services.sample-forms', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.sample-forms-2'); ?></a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item"
                               href="<?php echo e(route('interactive-services.surveys', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.surveys-2'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('interactive-services.bank-regulations', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.banking-regulations-2'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('interactive-services.subscription-for-banks-materials', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.subscription-for-2'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('interactive-services.national-symbols', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.national-symbols-2'); ?></a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item"
                               href="<?php echo e(route('interactive-services.usefull-links', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.useful-links-2'); ?></a>
                        </div>
                    </div>
                </li>
                <!-- press center menu -->
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Str::contains(Route::currentRouteName(), 'press-center') ? 'active' : ''); ?>"
                       href="#">
                        <?php echo app('translator')->get('layouts/nav.press-center-2'); ?>
                    </a>
                    <div class="drop-menu">
                        <div class="drop-item-box">
                            <a class="drop-item"
                               href="<?php echo e(route('press-center.news', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.news-2'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('press-center.gallery-category', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.gallery-2'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('press-center.dividends', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.dividends-2'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('press-center.procurement', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.procurement-2'); ?></a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item"
                               href="<?php echo e(route('press-center.youth-union', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.youth-union-2'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('press-center.copy-right', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.terms-of-2'); ?></a>
                        </div>
                    </div>
                </li>
                <!-- about us menu -->
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Str::contains(Route::currentRouteName(), 'about-us') ? 'active' : ''); ?>"
                       href="javascript:void(0)">
                        <?php echo app('translator')->get('layouts/nav.about-us-2'); ?>
                    </a>
                    <div class="drop-menu">
                        <div class="drop-item-box ">
                            <a class="drop-item"
                               href="<?php echo e(route('about-us.general-information', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.general-information-2'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('about-us.history', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.history-2'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('about-us.mission', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.mission-2'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('about-us.message-from-chairman', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.message-from-2'); ?></a>
                        </div>
                        <div class="drop-item-box ">
                            <a class="drop-item"
                               href="<?php echo e(route('about-us.management-board', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.management-board-2'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('about-us.organizational-structure', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.organisation-structure-2'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('about-us.committees', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.committees-2'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('about-us.branches', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.branches-2'); ?></a>
                        </div>
                        <div class="drop-item-box ">
                            <a class="drop-item"
                               href="<?php echo e(route('about-us.business-plan', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.business-plan-2'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('about-us.banks-charter', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.bank-charter-2'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('about-us.licenses-and-certificates', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.licenses-certificates-2'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('about-us.awards', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.awards-2'); ?></a>
                        </div>
                        <div class="drop-item-box">
                            <a class="drop-item"
                               href="<?php echo e(route('about-us.ratings', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.ratings-2'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('about-us.careers', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.job-opportunities-2'); ?></a>
                            <a class="drop-item"
                               href="<?php echo e(route('about-us.contact-us', app()->getLocale())); ?>"><?php echo app('translator')->get('layouts/nav.contact-us-2'); ?></a>
                        </div>
                    </div>
                </li>
            </ul>
            
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
                    <img src="<?php echo e(asset('img/navbar/caret-down.svg')); ?>" width="auto" height="5px"
                         class="d-none d-md-block">
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
                    <a href="<?php echo e(route('interactive-services.exchange-rates', app()->getLocale())); ?>">
                        <marquee scrolldelay="200" class="rate-link">
                            <span>USD | UZS</span>
                            <span><?php echo e(getCbuRates()[0]['Rate']); ?></span>
                            <span><?php echo e(getKdbRates()[0]->buy . '/' . getKdbRates()[0]->sell); ?></span>

                            <span class="navbar-course-child">EUR | UZS</span>
                            <span class="navbar-course-child-green"> <?php echo e(getCbuRates()[1]['Rate']); ?> </span>
                            <span class="navbar-course-child-blue"> <?php echo e(getKdbRates()[1]->buy . '/' . getKdbRates()[1]->sell); ?> </span>
                        </marquee>
                    </a>
                </div>
                <a href="https://ibank.kdb.uz/" class="internet-banking"
                   target="_blank"><?php echo app('translator')->get('layouts/nav.internet-banking-2'); ?></a>
            </div>
        </div>
    </div>
</nav>




<div id="search">
    <input type="search" id="search-input" placeholder="Search here...">
    <button id="search-close">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/>
        </svg>
    </button>
</div>


<script>
    let lang = "<?php echo e(app()->getLocale()); ?>";
    let baseUrl = "<?php echo e(url('/')); ?>";
</script>
<?php /**PATH /var/www/u0560543/kdb.itmaker.uz/resources/views/layouts/nav.blade.php ENDPATH**/ ?>