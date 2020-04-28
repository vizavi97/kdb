<?php

Route::get('/clear-cache', function() {
   $exitCode = Artisan::call('cache:clear');
    return  "cleaned";
});

//////////////////////////////////////////////////////////////
///////////  Voyager
/////////////////////////////////////////////////////////////

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



Route::redirect('/', '/uz');

Route::group(['prefix' => '{locale}', 'middleware' => 'pagespeed'], function () {


    //////////////////////////////////////////////////////////////
    ///////////  About Us
    /////////////////////////////////////////////////////////////

    Route::get('/', 'HomeController@index')->name('home');
    Route::post('/post-consultation', 'HomeController@postConsultation')->name('home.post-consultation');

    Route::get('about-us/general-information', function () {
        return view('about-us.general-information');
    })->name('about-us.general-information');

    Route::get('about-us/history', function () {
        return view('about-us.history');
    })->name('about-us.history');

    Route::get('about-us/mission', function () {
        return view('about-us.mission');
    })->name('about-us.mission');

    Route::get('about-us/message-from-chairman', 'AboutUsController@messageFromChairman')->name('about-us.message-from-chairman');

    Route::get('about-us/management-board', 'AboutUsController@managementBoard')->name('about-us.management-board');

    Route::get('about-us/organizational-structure', "AboutUsController@organizationalStructure")->name('about-us.organizational-structure');

    Route::get('about-us/committees', function () {
        return view('about-us.committees');
    })->name('about-us.committees');

    Route::get('about-us/branches', 'AboutUsController@branches')->name('about-us.branches');

    Route::get('about-us/business-plan', "AboutUsController@businessPlan")->name('about-us.business-plan');

    Route::get('about-us/banks-charter', "AboutUsController@banksCharter")->name('about-us.banks-charter');

    Route::get('about-us/licenses-and-certificates', "AboutUsController@licenseAndCertificates")->name('about-us.licenses-and-certificates');

    Route::get('about-us/awards', "AboutUsController@awards")->name('about-us.awards');

    Route::get('about-us/ratings', "AboutUsController@ratings")->name('about-us.ratings');

     Route::get('about-us/careers', 'AboutUsController@careers')->name('about-us.careers');

    Route::get('about-us/contact-us', 'AboutUsController@contactUs')->name('about-us.contact-us');


    //////////////////////////////////////////////////////////////
    ///////////  Corporates
    /////////////////////////////////////////////////////////////

    Route::get('corporates/crm', 'CorporatePagesController@crm')->name('corporates.crm');

    Route::get('corporates/account-opening', 'CorporatePagesController@accountOpening')->name('corporates.account-opening');

    Route::get('corporates/deposits', 'CorporatePagesController@deposits')->name('corporates.deposits');

    Route::get('corporates/payments-and-cash-management', 'CorporatePagesController@paymentsAndCashManagement')->name('corporates.payments-and-cash-management');

    Route::get('corporates/remote-banking', 'CorporatePagesController@remoteBanking')->name('corporates.remote-banking');

    Route::get('corporates/credit', 'CorporatePagesController@credit')->name('corporates.credit');
    Route::post('corporates/credit/post', "CorporatePagesController@postCredit")->name('credit.post');

    Route::get('corporates/credit/credit-legal-entities', 'CorporatePagesController@creditLegalEntities')->name('corporates.credit.credit-legal-entities');

    Route::get('corporates/credit/application-for-loan', 'CorporatePagesController@applicationForLoan')->name('corporates.credit.application-for-loan');

    Route::get('corporates/trade-finance', 'CorporatePagesController@tradeFinance')->name('corporates.trade-finance');

    Route::get('corporates/local-terminals', function () {
        return view('corporates.local-terminals');
    })->name('corporates.local-terminals');

    Route::get('corporates/export-import', 'CorporatePagesController@exportImport')->name('corporates.export-import');

    Route::get('corporates/treasury', 'CorporatePagesController@treasury')->name('corporates.treasury');

    Route::get('corporates/correspondent-banks', 'CorporatePagesController@correspondentBanks')->name('corporates.correspondent-banks');

    Route::get('corporates/cciapm', 'CorporatePagesController@cciapm')->name('corporates.cciapm');

    Route::get('corporates/bank-tariffs', 'CorporatePagesController@bankTariffs')->name('corporates.bank-tariffs');



    //////////////////////////////////////////////////////////////
    ///////////  Individuals
    /////////////////////////////////////////////////////////////

    Route::get('individuals/account-opening', "IndividualPagesController@accountOpening")->name('individuals.account-opening');

    Route::get('individuals/payments-and-transfers', 'IndividualPagesController@paymentsAndTransfers')->name('individuals.payments-and-transfers');

    //////////  Individuals Remote Banking  //////////////////////

    Route::get('individuals/remote-banking/internet-banking', 'IndividualPagesController@internetBanking')->name('individuals.remote-banking.internet-banking');

    Route::get('individuals/remote-banking/mobile-banking', function () {
        return view('individuals.remote-banking.mobile-banking');
    })->name('individuals.remote-banking.mobile-banking');

    Route::get('individuals/remote-banking/sms-informing', function () {
        return view('individuals.remote-banking.sms-informing');
    })->name('individuals.remote-banking.sms-informing');


    Route::get('individuals/deposits', function () {
        return view('individuals.deposits');
    })->name('individuals.deposits');

    Route::get('individuals/credit', 'IndividualPagesController@credit')->name('individuals.credit');

    Route::get('individuals/international-terminals', function () {
        return view('individuals.international-terminals');
    })->name('individuals.international-terminals');

    Route::get('individuals/exchange-office', 'IndividualPagesController@exchangeOffice')->name('individuals.exchange-office');

    Route::get('individuals/exchange-office/currency-conversion', 'IndividualPagesController@currencyConversion')->name('individuals.exchange-office.currency-conversion');

    Route::get('individuals/exchange-office/procedure', 'IndividualPagesController@procedure')->name('individuals.exchange-office.procedure');


    Route::get('individuals/bank-tariffs', 'IndividualPagesController@bankTariffs')->name('individuals.bank-tariffs');


    //////////////////////////////////////////////////////////////
    ///////////  Investors
    /////////////////////////////////////////////////////////////

    Route::get('investors/share-information', function () {
        return view('investors.share-information');
    })->name('investors.share-information');

    Route::get('investors/voting-results', 'InvestorPagesController@votingResults')->name('investors.voting-results');

    Route::get('investors/information-on-gsm', 'InvestorPagesController@informationOnGsm')->name('investors.information-on-gsm');

    Route::get('investors/substantial-facts', 'InvestorPagesController@substantialFacts')->name('investors.substantial-facts');

    Route::get('investors/substantial-facts/{year}', 'InvestorPagesController@substantialFactsMonths')->name('investors.substantial-facts-months');

    Route::get('investors/substantial-facts/{year}/{months}', 'InvestorPagesController@singleSubstantialFact');

    Route::get('investors/affiliate-personas', 'InvestorPagesController@affiliatePersonas')->name('investors.affiliate-personas');

    Route::get('investors/audit-reports', 'InvestorPagesController@auditReports')->name('investors.audit-reports');

    Route::get('investors/financial-statements', 'InvestorPagesController@financialStatement')->name('investors.financial-statements');



    //////////////////////////////////////////////////////////////
    ///////////  Interactive Services
    /////////////////////////////////////////////////////////////


    Route::get('interactive-services/account-opening', "InteractiveServicePagesController@accountOpening")->name('interactive-services.account-opening');

    Route::get('interactive-services/virtual-reception', function () {
        return view('interactive-services.virtual-reception');
    })->name('interactive-services.virtual-reception');

    Route::post('interactive-services/virtual-reception/check-status', "InteractiveServicePagesController@checkAppStatus")->name('check-app-status.post');
    Route::post('interactive-services/virtual-reception/post', "InteractiveServicePagesController@postVirtualReception")->name('vertual-reception.post');

    Route::get('interactive-services/exchange-rates', "InteractiveServicePagesController@exchangeRates")->name('interactive-services.exchange-rates');

    Route::get('interactive-services/calculators', function () {
        return view('interactive-services.calculators');
    })->name('interactive-services.calculators');

    Route::get('interactive-services/sample-forms', 'InteractiveServicePagesController@sampleForms')->name('interactive-services.sample-forms');

    Route::get('interactive-services/surveys', "InteractiveServicePagesController@surveys")->name('interactive-services.surveys');

    Route::post('interactive-services/surveys/post', "InteractiveServicePagesController@postSurvey")->name('interactive-services.post-survey');

    Route::get('interactive-services/bank-regulations', 'InteractiveServicePagesController@bankingRegulations')->name('interactive-services.bank-regulations');

    Route::get('interactive-services/subscription-for-banks-materials', function () {
        return view('interactive-services.subscription-for-banks-materials');
    })->name('interactive-services.subscription-for-banks-materials');

    Route::post('/post-sucscription', 'InteractiveServicePagesController@postSubscription')->name('interactive-services.post-subscription');

    Route::get('interactive-services/national-symbols', function () {
        return view('interactive-services.national-symbols');
    })->name('interactive-services.national-symbols');

    Route::get('interactive-services/usefull-links', 'InteractiveServicePagesController@usefulLinks')->name('interactive-services.usefull-links');

    //////////////////////////////////////////////////////////////
    ///////////  Search API
    /////////////////////////////////////////////////////////////


    Route::get('interactive-services/search', 'SearchController@index')->name('search');



    //////////////////////////////////////////////////////////////
    ///////////  Press Center
    /////////////////////////////////////////////////////////////

    Route::get('press-center/gallery', 'PressCenterController@galleryCategory')->name('press-center.gallery-category');

    Route::get('press-center/gallery/{data}', 'PressCenterController@gallery')->name('press-center.gallery');

    Route::get('press-center/dividends', 'PressCenterController@dividends')->name('press-center.dividends');

    Route::get('press-center/procurement', 'PressCenterController@procurement')->name('press-center.procurement');

    Route::get('press-center/youth-union', function () {
        return view('press-center.youth-union');
    })->name('press-center.youth-union');

    Route::get('press-center/copy-right', 'PressCenterController@copyRight')->name('press-center.copy-right');


    //////////////////////////////////////////////////////////////
    ///////////  News
    /////////////////////////////////////////////////////////////

    Route::get('press-center/news', 'NewsController@index')->name('press-center.news');
    Route::get('press-center/news/{slug}', 'NewsController@show')->name('press-center.single-news');


    //////////////////////////////////////////////////////////////
    ///////////  Cards
    /////////////////////////////////////////////////////////////

    Route::get('corporates/local-cards', 'CardController@cards')->name('corporates.local-cards');
    Route::get('corporates/international-cards', 'CardController@cards')->name('corporates.international-cards');
    Route::get('individuals/local-cards', 'CardController@cards')->name('individuals.local-cards');
    Route::get('individuals/international-cards', 'CardController@cards')->name('individuals.international-cards');

    Route::get('corporates/{parent}/{slug}', 'CardController@singleCard')->name('corporates.single-card');
    Route::get('individuals/{parent}/{slug}', 'CardController@singleCard')->name('individuals.single-card');

});
