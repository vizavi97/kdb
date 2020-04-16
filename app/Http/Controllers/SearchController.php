<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutusBranch;
use App\AboutusCharter;
use App\AboutusContact;
use App\AboutusJob;
use App\Award;
use App\BankingRegulation;
use App\BankTariff;
use App\BusinessPlan;
use App\Card;
use App\Copy;
use App\CorporatesAccountFile;
use App\CorporatesExportContact;
use App\CorporatesLoanEmail;
use App\CorporatesLoanFile;
use App\CorporatesTradeEmail;
use App\CorrespondentBank;
use App\Gsm;
use App\IndividualsCreditBranch;
use App\IndividualsCreditEmail;
use App\IndividualsExchangeOffice;
use App\IndividualsInternetEmail;
use App\IndividualsTransferEmail;
use App\InvestorsAffiliateParty;
use App\InvestorsAuditReport;
use App\InvestorsFinancialStatement;
use App\InvestorsSubstantialFact;
use App\InvestorsVotingResult;
use App\ManagementBoard;
use App\MessageChairman;
use App\News;
use Lang;

class SearchController extends Controller
{   
    
    public function index($locale, Request $request) {

        $query = $request['query'];

        $queryArr = explode(' ', $query);

        $results = [];

        if (!empty($queryArr)) {

            $locales = ['uz', 'en', 'ru'];

            foreach ($locales as $locale) {


                ///////////////////////////////////////////////////
                ////////     SEARCH LANG FILES
                ///////////////////////////////////////////////////

                $currentLang = app()->getLocale();

                $type = 'lang';

                app()->setLocale($locale);

                $files = [
                    [
                        'filePath' => '/about-us/awards',
                        'url'      => '/about-us/awards'
                    ],
                    [
                        'filePath' => '/about-us/banks-charter',
                        'url'      => '/about-us/banks-charter'
                    ],
                    [
                        'filePath' => '/about-us/branches',
                        'url'      => '/about-us/branches'
                    ],
                    [
                        'filePath' => '/about-us/business-plan',
                        'url'      => '/about-us/business-plan'
                    ],
                    [
                        'filePath' => '/about-us/careers',
                        'url'      => '/about-us/careers'
                    ],
                    [
                        'filePath' => '/about-us/committees',
                        'url'      => '/about-us/committees'
                    ],
                    [
                        'filePath' => '/about-us/contact-us',
                        'url'      => '/about-us/contact-us'
                    ],
                    [
                        'filePath' => '/about-us/general-information',
                        'url'      => '/about-us/general-information'
                    ],
                    [
                        'filePath' => '/about-us/history',
                        'url'      => '/about-us/history'
                    ],
                    [
                        'filePath' => '/about-us/licenses-and-certificates',
                        'url'      => '/about-us/licenses-and-certificates'
                    ],
                    [
                        'filePath' => '/about-us/management-board',
                        'url'      => '/about-us/management-board'
                    ],
                    [
                        'filePath' => '/about-us/message-from-chairman',
                        'url'      => '/about-us/message-from-chairman'
                    ],
                    [
                        'filePath' => '/about-us/mission',
                        'url'      => '/about-us/mission'
                    ],
                    [
                        'filePath' => '/about-us/organizational-structure',
                        'url'      => '/about-us/organizational-structure'
                    ],
                    [
                        'filePath' => '/about-us/ratings',
                        'url'      => '/about-us/ratings'
                    ],
                    [
                        'filePath' => '/corporates/credit/credit-legal-entities',
                        'url'      => '/corporates/credit/credit-legal-entities'
                    ],
                    [
                        'filePath' => '/corporates/credit/credit',
                        'url'      => '/corporates/credit'
                    ],
                    [
                        'filePath' => '/corporates/account-opening',
                        'url'      => '/corporates/account-opening'
                    ],
                    [
                        'filePath' => '/corporates/application-for-loan',
                        'url'      => '/corporates/credit/application-for-loan'
                    ],
                    [
                        'filePath' => '/corporates/bank-tariffs',
                        'url'      => '/corporates/bank-tariffs'
                    ],
                    [
                        'filePath' => '/corporates/cciapm',
                        'url'      => '/corporates/cciapm'
                    ],
                    [
                        'filePath' => '/corporates/correspondent-banks',
                        'url'      => '/corporates/correspondent-banks'
                    ],
                    [
                        'filePath' => '/corporates/crm',
                        'url'      => '/corporates/crm'
                    ],
                    [
                        'filePath' => '/corporates/deposits',
                        'url'      => '/corporates/deposits'
                    ],
                    [
                        'filePath' => '/corporates/export-import',
                        'url'      => '/corporates/export-import'
                    ],
                    [
                        'filePath' => '/corporates/local-terminals',
                        'url'      => '/corporates/local-terminals'
                    ],
                    [
                        'filePath' => '/corporates/payments-and-cash-management',
                        'url'      => '/corporates/payments-and-cash-management'
                    ],
                    [
                        'filePath' => '/corporates/remote-banking',
                        'url'      => '/corporates/remote-banking'
                    ],
                    [
                        'filePath' => '/corporates/trade-finance',
                        'url'      => '/corporates/trade-finance'
                    ],
                    [
                        'filePath' => '/corporates/treasury',
                        'url'      => '/corporates/treasury'
                    ],
                    [
                        'filePath' => '/individuals/exchange-office/currency-conversion',
                        'url'      => '/individuals/exchange-office/currency-conversion'
                    ],
                    [
                        'filePath' => '/individuals/exchange-office/exchange-office',
                        'url'      => '/individuals/exchange-office'
                    ],
                    [
                        'filePath' => '/individuals/remote-banking/internet-banking',
                        'url'      => '/individuals/remote-banking/internet-banking'
                    ],
                    [
                        'filePath' => '/individuals/remote-banking/mobile-banking',
                        'url'      => '/individuals/remote-banking/mobile-banking'
                    ],
                    [
                        'filePath' => '/individuals/remote-banking/sms-informing',
                        'url'      => '/individuals/remote-banking/sms-informing'
                    ],
                    [
                        'filePath' => '/individuals/account-opening',
                        'url'      => '/individuals/account-opening'
                    ],
                    [
                        'filePath' => '/individuals/bank-tariffs',
                        'url'      => '/individuals/bank-tariffs'
                    ],
                    [
                        'filePath' => '/individuals/credit',
                        'url'      => '/individuals/credit'
                    ],
                    [
                        'filePath' => '/individuals/deposits',
                        'url'      => '/individuals/deposits'
                    ],
                    [
                        'filePath' => '/individuals/payments-and-transfers',
                        'url'      => '/individuals/payments-and-transfers'
                    ],
                    [
                        'filePath' => '/interactive-services/bank-regulations',
                        'url'      => '/interactive-services/bank-regulations'
                    ],
                    [
                        'filePath' => '/interactive-services/bank-regulations',
                        'url'      => '/interactive-services/bank-regulations'
                    ],
                    [
                        'filePath' => '/interactive-services/calculators',
                        'url'      => '/interactive-services/calculators'
                    ],
                    [
                        'filePath' => '/interactive-services/exchange-rates',
                        'url'      => '/interactive-services/exchange-rates'
                    ],
                    [
                        'filePath' => '/interactive-services/national-symbols',
                        'url'      => '/interactive-services/national-symbols'
                    ],
                    [
                        'filePath' => '/interactive-services/sample-forms',
                        'url'      => '/interactive-services/sample-forms'
                    ],
                    [
                        'filePath' => '/interactive-services/subscriptionfor-banks-materials',
                        'url'      => '/interactive-services/subscription-for-banks-materials'
                    ],
                    [
                        'filePath' => '/interactive-services/surveys',
                        'url'      => '/interactive-services/surveys'
                    ],
                    [
                        'filePath' => '/interactive-services/usefull-links',
                        'url'      => '/interactive-services/usefull-links'
                    ],
                    [
                        'filePath' => '/interactive-services/virtual-reception',
                        'url'      => '/interactive-services/virtual-reception'
                    ],
                    [
                        'filePath' => '/investors/affiliate-personas',
                        'url'      => '/investors/affiliate-personas'
                    ],
                    [
                        'filePath' => '/investors/audit-reports',
                        'url'      => '/investors/audit-reports'
                    ],
                    [
                        'filePath' => '/investors/financial-statements',
                        'url'      => '/investors/financial-statements'
                    ],
                    [
                        'filePath' => '/investors/information-on-gsm',
                        'url'      => '/investors/information-on-gsm'
                    ],
                    [
                        'filePath' => '/investors/share-information',
                        'url'      => '/investors/share-information'
                    ],
                    [
                        'filePath' => '/investors/substantial-facts',
                        'url'      => '/investors/substantial-facts'
                    ],
                    [
                        'filePath' => '/investors/voting-results',
                        'url'      => '/investors/voting-results'
                    ],
                    [
                        'filePath' => '/press-center/copy-right',
                        'url'      => '/press-center/copy-right'
                    ],
                    [
                        'filePath' => '/press-center/dividends',
                        'url'      => '/press-center/dividends'
                    ],
                    [
                        'filePath' => '/press-center/gallery',
                        'url'      => '/press-center/gallery'
                    ],
                    [
                        'filePath' => '/press-center/news',
                        'url'      => '/press-center/news'
                    ],
                    [
                        'filePath' => '/press-center/procurement',
                        'url'      => '/press-center/procurement'
                    ],
                    [
                        'filePath' => '/press-center/youth-union',
                        'url'      => '/press-center/youth-union'
                    ],
                    [
                        'filePath' => '/homepage',
                        'url'      => '/'
                    ],
                ];
                
                foreach ($files as $file) {

                    $data = Lang::get($file['filePath']);

                    $keys = [];

                    $url = url('/' . $locale . $file['url']);

                    foreach ($data as $key => $val) {

                        array_push($keys, $key);

                    }

                    $results = search($data, $keys, $queryArr, $results, $url, $locale, $type);

                }

                app()->setLocale($currentLang);


                /////////////////////////////////////////////////////////////
                ////////     SEARCH DATABASE DATE WITH TRANSLATIONS
                /////////////////////////////////////////////////////////////

                $type = 'db trans';

                // Search branches
                $items = AboutusBranch::withTranslation()->get();

                foreach ($items as $item) {

                    $rows = ['name', 'address'];
                    $url = url('/' . $locale . '/about-us/branches');

                    $results = search($item, $rows, $queryArr, $results, $url, $locale, $type);

                }

                // Search charters
                $items = AboutusCharter::withTranslation()->get();

                foreach ($items as $item) {

                    $rows = ['title'];
                    $url = url('/' . $locale . '/about-us/banks-charter');

                    $results = search($item, $rows, $queryArr, $results, $url, $locale, $type);

                }

                // Search Contact
                $items = AboutusContact::withTranslation()->get();

                foreach ($items as $item) {

                    $rows = ['worker_1_name', 'worker_1_email', 'worker_2_name', 'worker_2_email', 'worker_3_name', 'worker_3_email'];
                    $url = url('/' . $locale . '/about-us/contact-us');

                    $results = search($item, $rows, $queryArr, $results, $url, $locale, $type);

                }

                // Search Jobs
                $items = AboutusJob::withTranslation()->get();

                foreach ($items as $item) {

                    $rows = ['department', 'position', 'desc'];
                    $url = url('/' . $locale . '/about-us/careers');

                    $results = search($item, $rows, $queryArr, $results, $url, $locale, $type);

                }

                // Search Award
                $items = Award::withTranslation()->get();

                foreach ($items as $item) {

                    $rows = ['title', 'excerpt', 'body'];
                    $url = url('/' . $locale . '/about-us/awards');

                    $results = search($item, $rows, $queryArr, $results, $url, $locale, $type);

                }

                // Search Banking Regulation
                $items = Award::withTranslation()->get();

                foreach ($items as $item) {

                    $rows = ['name'];
                    $url = url('/' . $locale . '/interactive-services/bank-regulations');

                    $results = search($item, $rows, $queryArr, $results, $url, $locale, $type);

                }

                // Search Bank Tariff
                $items = BankTariff::withTranslation()->get();

                foreach ($items as $item) {

                    $rows = ['title'];
                    $url = url('/' . $locale . '/corporates/bank-tariffs');

                    $results = search($item, $rows, $queryArr, $results, $url, $locale, $type);

                }

                // Search Business Plan
                $items = BusinessPlan::withTranslation()->get();

                foreach ($items as $item) {

                    $rows = ['name'];
                    $url = url('/' . $locale . '/about-us/business-plan');

                    $results = search($item, $rows, $queryArr, $results, $url, $locale, $type);

                }

                // Search Card
                $items = Card::withTranslation()->get();

                foreach ($items as $item) {

                    $rows = ['name', 'payment_system', 'currency', 'type', 'note', 'excerpt', 'description', 'instruction', 'tarriffs'];
                    $url = url('/' . $locale . '/' . strtolower($item['ownership']) . '/' . strtolower($item['validity_area']) . '-cards/' . strtolower($item['slug']));

                    $results = search($item, $rows, $queryArr, $results, $url, $locale, $type);

                }

                // Search Copy
                $items = Copy::withTranslation()->get();

                foreach ($items as $item) {

                    $rows = ['copy'];
                    $url = url('/' . $locale . '/press-center/copy-right');

                    $results = search($item, $rows, $queryArr, $results, $url, $locale, $type);

                }

                // Search Corporate Account Files
                $items = CorporatesAccountFile::withTranslation()->get();

                foreach ($items as $item) {

                    $rows = ['title'];
                    $url = url('/' . $locale . '/corporates/account-opening');

                    $results = search($item, $rows, $queryArr, $results, $url, $locale, $type);

                }

                // Search Corporate Export Contact
                $items = CorporatesExportContact::withTranslation()->get();

                foreach ($items as $item) {
 
                    $rows = ['user_name', 'duty'];
                    $url = url('/' . $locale . '/corporates/export-import');
 
                    $results = search($item, $rows, $queryArr, $results, $url, $locale, $type);
 
                }

                // Search Corporate Loan File
                $items = CorporatesLoanFile::withTranslation()->get();

                foreach ($items as $item) {
 
                    $rows = ['title'];
                    $url = url('/' . $locale . '/corporates/credit/application-for-loan');
 
                    $results = search($item, $rows, $queryArr, $results, $url, $locale, $type);
 
                }

                // Search GSM
                $items = Gsm::withTranslation()->get();

                foreach ($items as $item) {
 
                    $rows = ['title', 'body', 'address', 'excerpt'];
                    $url = url('/' . $locale . '/press-center/news/' . strtolower($item['slug']));
 
                    $results = search($item, $rows, $queryArr, $results, $url, $locale, $type);
 
                }

                // Search Individuals Credit Branch
                $items = IndividualsCreditBranch::withTranslation()->get();

                foreach ($items as $item) {
 
                    $rows = ['title', 'address'];
                    $url = url('/' . $locale . '/individuals/credit');
 
                    $results = search($item, $rows, $queryArr, $results, $url, $locale, $type);
 
                }

                // Search Individuals Exchange Office
                $items = IndividualsExchangeOffice::withTranslation()->get();

                foreach ($items as $item) {
 
                    $rows = ['title', 'address'];
                    $url = url('/' . $locale . '/individuals/exchange-office');
 
                    $results = search($item, $rows, $queryArr, $results, $url, $locale, $type);
 
                }

                // Search Individuals Affiliate Parties
                $items = InvestorsAffiliateParty::withTranslation()->get();

                foreach ($items as $item) {
 
                    $rows = ['name', 'address', 'grounds'];
                    $url = url('/' . $locale . '/investors/affiliate-personas');
 
                    $results = search($item, $rows, $queryArr, $results, $url, $locale, $type);
 
                }

                // Search Individuals Audit Reports
                $items = InvestorsAuditReport::withTranslation()->get();

                foreach ($items as $item) {
 
                    $rows = ['name'];
                    $url = url('/' . $locale . '/investors/affiliate-personas');
 
                    $results = search($item, $rows, $queryArr, $results, $url, $locale, $type);
 
                }

                // Search Financial Statements
                $items = InvestorsFinancialStatement::withTranslation()->get();

                foreach ($items as $item) {
 
                    $rows = ['title'];
                    $url = url('/' . $locale . '/investors/financial-statements');
 
                    $results = search($item, $rows, $queryArr, $results, $url, $locale, $type);
 
                }

                // Search Substantial Facts
                $items = InvestorsSubstantialFact::withTranslation()->get();

                foreach ($items as $item) {
 
                    $rows = ['title'];
                    $url = url('/' . $locale . '/investors/substantial-facts');
 
                    $results = search($item, $rows, $queryArr, $results, $url, $locale, $type);
 
                }

                // Search Investors Voting Results
                $items = InvestorsVotingResult::withTranslation()->get();

                foreach ($items as $item) {
 
                    $rows = ['title'];
                    $url = url('/' . $locale . '/investors/voting-results');
 
                    $results = search($item, $rows, $queryArr, $results, $url, $locale, $type);
 
                }

                // Search Management Boards
                $items = ManagementBoard::withTranslation()->get();

                foreach ($items as $item) {
 
                    $rows = ['name', 'desc'];
                    $url = url('/' . $locale . '/about-us/management-board');
 
                    $results = search($item, $rows, $queryArr, $results, $url, $locale, $type);
 
                }

                // Search Message Chairman
                $items = MessageChairman::withTranslation()->get();

                foreach ($items as $item) {
 
                    $rows = ['name', 'desc', 'message'];
                    $url = url('/' . $locale . '/about-us/message-from-chairman');
 
                    $results = search($item, $rows, $queryArr, $results, $url, $locale, $type);
 
                }

                // Search News
                $items = News::withTranslation()->get();

                foreach ($items as $item) {
 
                    $rows = ['title', 'body', 'excerpt'];
                    $url = url('/' . $locale . '/press-center/news/' . strtolower($item->slug));
 
                    $results = search($item, $rows, $queryArr, $results, $url, $locale, $type);
 
                }

            }

            /////////////////////////////////////////////////////////////
            ////////     SEARCH DATABASE DATE WITHOUT TRANSLATIONS
            ////////////////////////////////////////////////////////////

            $type = 'db static';

            // Search Corporate Loan Emails
            $items = CorporatesLoanEmail::get();

            foreach ($items as $item) {

                $rows = ['email'];
                $url = url('/en/corporates/credit/application-for-loan');

                $results = search($item, $rows, $queryArr, $results, $url, 'en', $type);

            }

            // Search Corporate Trade Email
            $items = CorporatesTradeEmail::get();

            foreach ($items as $item) {

                $rows = ['email'];
                $url = url('/en/corporates/trade-finance');

                $results = search($item, $rows, $queryArr, $results, $url, 'en', $type);

            }

            // Search Correspondent Banks
            $items = CorrespondentBank::get();

            foreach ($items as $item) {

                $rows = ['name', 'country'];
                $url = url('/en/corporates/correspondent-banks');

                $results = search($item, $rows, $queryArr, $results, $url, 'en', $type);

            }

            // Search Individuals Credit Email
            $items = IndividualsCreditEmail::get();

            foreach ($items as $item) {

                $rows = ['email'];
                $url = url('/en/individuals/credit');

                $results = search($item, $rows, $queryArr, $results, $url, 'en', $type);

            }

            // Search Individuals Internet Email
            $items = IndividualsInternetEmail::get();

            foreach ($items as $item) {

                $rows = ['email'];
                $url = url('/en/individuals/remote-banking/internet-banking');

                $results = search($item, $rows, $queryArr, $results, $url, 'en', $type);

            }

            // Search Individuals Internet Email
            $items = IndividualsTransferEmail::get();

            foreach ($items as $item) {

                $rows = ['email'];
                $url = url('/en/individuals/payments-and-transfers');

                $results = search($item, $rows, $queryArr, $results, $url, 'en', $type);

            }
            

        }

        return view('interactive-services.search', compact('results', 'query'));

    }

}
