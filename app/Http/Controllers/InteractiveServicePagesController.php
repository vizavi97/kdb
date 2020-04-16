<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicationRecevied;
use App\Mail\SubscriptionSend;
use App\InvestorsVirtualReception;
use App\SampleForm;
use App\BankingRegulation;
use App\UsefulLink;
use App\Survey;
use App\Vote;
use App\Subscription;
use App\Rate;
use Cookie;
use Storage;

class InteractiveServicePagesController extends Controller
{

    public function checkAppStatus($locale, Request $request) {

        $id = (string) ((int) $request->application_number - 1000);

        $status = InvestorsVirtualReception::find($id)['status'];

        if ($status == null) {
            $status = "NOT FOUND";
        }

        $request->session()->flash( 'status', $status );

        return back();
    }

    public function postVirtualReception($locale, Request $request) {

        if ($request->file('attachment')) {

            $uploadedFile = $request->file('attachment');
            $filename = time() . $uploadedFile->getClientOriginalName();

            Storage::disk('local')->putFileAs(
                'public/investors-virtual-receptions/' . date('F') . date('Y'),
                $uploadedFile,
                $filename
            );

            $download_link = "investors-virtual-receptions\\" . date('FY') . "\\" . $filename;

            $attachment = array("download_link" => $download_link, "original_name" => $uploadedFile->getClientOriginalName());

            $attachment = "[" . json_encode($attachment) . "]";

        }

        $data =  new InvestorsVirtualReception([
            "name" => $request->name,
            "entity" => $request->entity,
            "gender" => $request->gender,
            "country" => $request->country,
            "region" => $request->region,
            "district" => $request->district,
            "mailing_address" => $request->mailing_address,
            "email" => $request->email,
            "phone" => $request->phone,
            "appeal_topic" => $request->appeal_topic,
            "appeal_type" => $request->appeal_type,
            "appeal_subject" => $request->appeal_subject,
            "appeal_text" => $request->appeal_text,
            "privacy_status" => $request->privacy_status,
            "attachment" => isset($attachment) ? $attachment : null
        ]);

        $data->save();

        $appId = InvestorsVirtualReception::latest()->first()['id'];

        $appNum = $appId + 1000;

        $request->session()->flash( 'success', $appNum );

        $data['attachment'] = isset($download_link) ? $download_link : null;

        Mail::to('info@kdb.uz')->send(new ApplicationRecevied($data));

        return back();
    }

    public function exchangeRates() {

        $rates = Rate::get();

        $ratesArr = [];

        foreach ($rates as $rate) {
            $ratesArr[$rate->ccy . 'UZS'] = (float) $rate->buy;
            $ratesArr['UZS' . $rate->ccy] = 1/ (float) $rate->buy;
        }

        $ratesArr = json_encode($ratesArr, JSON_HEX_QUOT);
        return view('interactive-services.exchange-rates', compact('rates', 'ratesArr'));
    }

    public function sampleForms() {
    	$files = SampleForm::withTranslation()->latest()->get();

    	return view('interactive-services.sample-forms', compact('files'));
    }

    public function surveys($locale) {

        $surveys = Survey::withTranslation()->latest()->get();
        $votes = Vote::get();
        $orders = ['one', 'two', 'three', 'four', 'five', 'six'];

        // Get Laravel Session
        $cookie = Cookie::get("laravel_session");
        // Get the current user votes
        $userVotes = Vote::where('user_session', $cookie)->get();

        // If the current user voted, find out which questions answered
        if ($userVotes) {
            foreach ($surveys as $survey) {

                foreach ($orders as $order) {
                    $survey->{"answer_" . $order . "_votes"} = 0;
                }

                $survey->{"all_votes"} = 0;

                $i = 0;
                foreach ($votes as $vote) {
                    if ($survey->id == $vote->question_id) {

                        $i++;
                        foreach ($orders as $order) {
                            if ($vote->answer_name == $survey['answer_' . $order]) {
                                $survey['answer_' . $order . '_votes'] += 1;
                            }
                        }
                    }
                }

                $survey->all_votes = $i;
            }
        }

        $userVoteIds = [];

        foreach ($userVotes as $userVote) {
            array_push($userVoteIds, $userVote->question_id);
        }

        return view('interactive-services.surveys', compact('surveys', 'locale', 'orders', 'userVoteIds'));
    }

    public function postSurvey($locale, Request $request) {

        $vote =  new Vote;

        $vote->user_session = Cookie::get("laravel_session");
        $vote->question_id = $request->question_id;
        $vote->answer_name = $request->answer;

        $vote->save();

        return back();
    }

    public function bankingRegulations() {
    	$files = BankingRegulation::withTranslation()->latest()->get();

    	return view('interactive-services.bank-regulations', compact('files'));
    }

    public function postSubscription($locale, Request $request) {

        $request->validate([
            'full_name' => 'required',
            'email' => 'required|unique:subscriptions',
        ]);

        $subscription =  new Subscription;

        $subscription->full_name = $request->full_name;
        $subscription->company = $request->company;
        $subscription->email = $request->email;

        $subscription->save();

        $request->session()->flash( 'success' );

        $data =  $subscription;

        Mail::to('info@kdb.uz')->send(new SubscriptionSend($data));

        return back();
    }

    public function usefulLinks() {
    	$links = UsefulLink::where('status', 'ENABLED')->withTranslation()->latest()->get();

    	return view('interactive-services.usefull-links', compact('links'));
    }
}
