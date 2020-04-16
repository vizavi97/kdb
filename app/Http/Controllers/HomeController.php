<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConsultationSend;
use App\Slide;
use App\News;
use App\Card;
use App\Gsm;
use App\Consultation;

class HomeController extends Controller
{

    	public function index($locale) {

    		$slides = Slide::withTranslation()->get();

    		$news = News::where('status', 'PUBLISHED')->where('category', 'NEWS')->withTranslation()->latest()->get();
        	$announcements = News::where('status', 'PUBLISHED')->where('category', 'ANNOUNCEMENT')->withTranslation()->latest()->get();
        	$events = Gsm::where('status', 'PUBLISHED')->where('status', 'PUBLISHED')->withTranslation()->latest()->get();

        	$uzcards = Card::where('status', 'ENABLED')->where('payment_system', 'UZCARD')->withTranslation()->get();
        	$humos = Card::where('status', 'ENABLED')->where('payment_system', 'HUMO')->withTranslation()->get();
        	$visas = Card::where('status', 'ENABLED')->where('payment_system', 'VISA')->withTranslation()->get();
        	$masters = Card::where('status', 'ENABLED')->where('payment_system', 'MASTER CARD')->withTranslation()->get();


    		return view('homepage', [
                'slides'        => $slides,
                'news'          => $news,
                'announcements' => $announcements,
                'events'        => $events,
                'uzcards'       => $uzcards,
                'humos'         => $humos,
                'visas'         => $visas,
                'masters'       => $masters,
                'locale'        => $locale
            ]);
    	}


        public function postConsultation($locale, Request $request) {

            $consultation =  new Consultation;

            $consultation->topic = $request->topic;
            $consultation->full_name = $request->full_name;
            $consultation->email = $request->email;
            $consultation->company = $request->company;
            $consultation->phone = $request->phone;
            $consultation->message = $request->message;

            $consultation->save();

            $request->session()->flash( 'success');

            $data = $consultation;

            Mail::to('info@kdb.uz')->send(new ConsultationSend($data));

            return back();
        }
}
