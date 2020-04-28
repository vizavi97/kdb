<?php

namespace App\Http\Controllers;

use App\IndividualsAccountFile;
use Illuminate\Http\Request;
use App\IndividualsCreditEmail;
use App\IndividualsTransferEmail;
use App\IndividualsInternetEmail;
use App\IndividualsCreditBranch;
use App\IndividualsExchangeOffice;
use App\TransferCurrency;
use App\BankTariff;
use App\Rate;

class IndividualPagesController extends Controller {

    public function accountOpening() {
        $files = IndividualsAccountFile::withTranslation()->get();
        return view('individuals.account-opening', compact('files'));
    }

	public function paymentsAndTransfers() {
		$currencies = TransferCurrency::where('status', 'ENABLED')->withTranslation()->get();
		$emails = IndividualsTransferEmail::get();

		return view('individuals.payments-and-transfers', compact('currencies', 'emails'));
	}

	public function internetBanking() {

		$emails = IndividualsInternetEmail::get();

		return view('individuals.remote-banking.internet-banking', compact('emails'));
	}

	public function bankTariffs() {
		$tariffs = BankTariff::withTranslation()->latest()->get();

		return view('individuals.bank-tariffs', compact('tariffs'));
	}

	public function credit() {
		$emails = IndividualsCreditEmail::get();

		$branches = IndividualsCreditBranch::withTranslation()->get();

		return view('individuals.credit', compact('emails', 'branches'));
	}

	public function exchangeOffice() {

		$offices = IndividualsExchangeOffice::withTranslation()->get();

        return view('individuals.exchange-office.exchange-office', compact('offices'));
	}

	public function currencyConversion() {

		$rates = Rate::get();

		$ratesArr = [];

		foreach ($rates as $rate) {
			$ratesArr[$rate->ccy . 'UZS'] = (float) $rate->buy;
			$ratesArr['UZS' . $rate->ccy] = 1/ (float) $rate->buy;
		}

		$ratesArr = json_encode($ratesArr, JSON_HEX_QUOT);
		return view('individuals.exchange-office.currency-conversion', compact('rates', 'ratesArr'));
	}

    public function procedure() {

        return view('individuals.exchange-office.procedure');
    }

}
