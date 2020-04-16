<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CreditAppReceived;
use Illuminate\Routing\Router;
use App\PdfFile;
use App\CorrespondentBank;
use App\Card;
use App\BankTariff;
use App\CorporatesAccountFile;
use App\CorporatesLoanFile;
use App\CorporatesLoanEmail;
use App\CorporatesTradeEmail;
use App\CorporatesExportContact;
use App\CreditApplication;

class CorporatePagesController extends Controller
{

    public function crm() {

        return view('corporates.crm');
    }

    public function accountOpening() {

    	$files = CorporatesAccountFile::withTranslation()->get();

    	return view('corporates.account-opening', compact('files'));
    }

    public function paymentsAndCashManagement() {

    	return view('corporates.payments-and-cash-management');
    }

    public function remoteBanking() {

    	return view('corporates.remote-banking');
    }

    public function credit() {

        return view('corporates.credit.credit');
    }

    public function postCredit($locale, Request $request) {

        $data =  new CreditApplication([
            "company" => $request->company,
            "activity_type" => $request->activity_type,
            "activity_type" => $request->activity_type,
            "employees_number" => $request->employees_number,
            "tax_id" => $request->tax_id,
            "address" => $request->address,
            "manager_name" => $request->manager_name,
            "email" => $request->email,
            "phone" => $request->phone,
            "bank_name" => $request->bank_name,
            "revenue_national" => $request->revenue_national,
            "revenue_foreign" => $request->revenue_foreign,
            "debt_uzs" => $request->debt_uzs,
            "debt_usd" => $request->debt_usd,
            "debt_eur" => $request->debt_eur,
            "loan_amount" => $request->loan_amount,
            "loan_currency" => $request->loan_currency,
            "purpose" => $request->purpose,
            "loan_term" => $request->loan_term,
            "grace_period" => $request->grace_period,
            "collateral" => $request->collateral,
            "collateral_name" => $request->collateral_name,
            "collateral_value" => $request->collateral_value,
        ]);

        $data->save();

        $request->session()->flash( 'success', "Successfully sent" );

        Mail::to('info@kdb.uz')->send(new CreditAppReceived($data));

        return back();
    }

    public function creditLegalEntities() {
        
        return view('corporates.credit.credit-legal-entities');
    }

    public function deposits() {

    	return view('corporates.deposits');
    }

    public function applicationForLoan() {

        $files = CorporatesLoanFile::withTranslation()->latest()->get();

    	$emails = CorporatesLoanEmail::get();

    	return view('corporates.application-for-loan', compact('emails', 'files'));
    }

    public function tradeFinance() {

    	$emails = CorporatesTradeEmail::get();

    	return view('corporates.trade-finance', compact('emails'));
    }

    public function exportImport() {

        $contacts = CorporatesExportContact::withTranslation()->get();

    	return view('corporates.export-import', compact('contacts'));
    }

    public function treasury() {

    	return view('corporates.treasury');
    }

    public function correspondentBanks() {

    	$banks = CorrespondentBank::where('status', 'ENABLED')->latest()->get();

    	return view('corporates.correspondent-banks', compact('banks'));
    }

    public function cciapm() {

    	return view('corporates.cciapm');
    }

    public function bankTariffs() {

        $tariffs = BankTariff::withTranslation()->latest()->get();

    	return view('corporates.bank-tariffs', compact('tariffs'));
    }
}


  
