<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvestorsVotingResult;
use App\InvestorsSubstantialFact;
use App\InvestorsAffiliateParty;
use App\InvestorsAuditReport;
use App\InvestorsFinancialStatement;
use App\Gsm;
use App\PdfFile;
use Carbon\Carbon;

class InvestorPagesController extends Controller
{
    public function votingResults() {
    	$files = InvestorsVotingResult::withTranslation()->latest()->get();

    	return view('investors.voting-results', compact('files'));
    }

    public function informationOnGsm() {
    	$posts = Gsm::where('status', 'PUBLISHED')->withTranslation()->latest()->get();

    	return view('investors.information-on-gsm', compact('posts'));
    }

    public function substantialFacts() {
		
    	$files = InvestorsSubstantialFact::withTranslation()->latest()->get();

    	$years = [];

    	foreach ( $files as $file ) {
    		array_push($years, Carbon::parse($file->created_at)->format('Y') );
    	}

    	$years = array_unique($years);

    	return view('investors.substantial-facts', compact('years'));
	}
	
	public function substantialFactsMonths($locale, $year) {

		$files = InvestorsSubstantialFact::withTranslation()->latest()->get();

    	$months = [];

    	foreach ( $files as $file ) {

			Carbon::setLocale(app()->getLocale());

			if (app()->getLocale() == 'uz') {
				Carbon::setLocale('uz_UZ');
			}

			$created_at = Carbon::parse($file->created_at);

			if ($year == $created_at->format('Y')) {
				$row = [];
				array_push($row, $created_at->isoFormat('MMMM') );
				Carbon::setLocale('en');
				array_push($row, $created_at->isoFormat('MMMM') );
				array_push($months, json_encode($row));
			}
    	}

		$months = array_unique($months);

    	return view('investors.substantial-facts-months', compact('months', 'year'));
	}

    public function singleSubstantialFact($locale, $year, $month) {
	
        $files = InvestorsSubstantialFact::withTranslation($locale)->latest()->get();

        $facts = [];
        Carbon::setLocale('en');

        foreach ($files as $file) {
            $created_at = Carbon::parse($file->created_at);

            if ( $year == $created_at->format('Y') && $month == $created_at->isoFormat('MMMM') ) {
                array_push($facts, $file);

                Carbon::setLocale($locale);

                if ($locale == 'uz') {
                    Carbon::setLocale('uz_UZ');
                }
                $month = $created_at->isoFormat('MMMM');
            }
        }

    	return view('investors.single-substantial-fact', compact('facts', 'month', 'year', 'locale'));
    }

    public function affiliatePersonas() {
    	$parties = InvestorsAffiliateParty::withTranslation()->get();

    	return view('investors.affiliate-personas', compact('parties'));
    }

    public function auditReports() {
    	$reports = InvestorsAuditReport::withTranslation()->latest()->get();

    	return view('investors.audit-reports', compact('reports'));
    }

    public function financialStatement() {
    	$files = InvestorsFinancialStatement::withTranslation()->latest()->get();


    	return view('investors.financial-statements', compact('files'));
    }
}
