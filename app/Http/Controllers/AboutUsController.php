<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ManagementBoard;
use App\MessageChairman;
use App\OrganizationalStructure;
use App\AboutusBranch;
use App\AboutusJob;
use App\BusinessPlan;
use App\AboutusContact;
use App\License;
use App\Award;
use App\Rating;
use App\BankTariff;
use App\AboutusCharter;

class AboutUsController extends Controller
{

    public function managementBoard() {
    	$locale = app()->getLocale();
        $users = ManagementBoard::where('status', 'ENABLED')->withTranslation()->get();

        return view('about-us.management-board', compact('users', 'locale'));
    }

    public function messageFromChairman() {
    	$locale = app()->getLocale();
    	$message = MessageChairman::withTranslation()->first();

        return view('about-us.message-from-chairman', compact('message', 'locale'));
    }

    public function organizationalStructure() {
        $structure = OrganizationalStructure::first();

        return view('about-us.organizational-structure', compact('structure'));
    }

    public function branches() {

        $branches = AboutusBranch::withTranslation()->get();

        return view('about-us.branches', compact('branches'));
    }

    public function businessPlan() {
        $plans = BusinessPlan::latest()->get();

        return view('about-us.business-plan', compact('plans'));
    }

    public function banksCharter() {
        $tariffs = AboutusCharter::withTranslation()->latest()->get();

        return view('about-us.banks-charter', compact('tariffs'));
    }

    public function licenseAndCertificates() {
        $licenses = License::latest()->get();

        return view('about-us.licenses-and-certificates', compact('licenses'));
    }

    public function awards() {
        $awards = Award::latest()->get();

        return view('about-us.awards', compact('awards'));
    }

    public function ratings() {
        $ratings = Rating::get();

        $data = [];

        foreach ($ratings as $rating) { 
            $item = [];
            $presenterName = preg_replace("~[^a-z]~i", "", strtolower($rating->presenter_name));

            $item['id'] = $rating->id;
            $item['presenter_name'] = $presenterName;
            $item['presenter_img'] = $rating->presenter_img;
            $item['rating_img'] = $rating->rating_img;
            $item['issued_date'] = date( 'M d, Y', strtotime($rating->issued_date));

            array_push($data, $item);  
        }

        return view('about-us.ratings', compact('data'));
    }

    public function careers() {

        $jobs = AboutusJob::withTranslation()->latest()->get();

        return view('about-us.careers', compact('jobs'));
    }

    public function contactUs() {

        $corporates = AboutusContact::where('category', 'CLIENT SERVICE CORPORATES')->withTranslation()->first();
        $individuals = AboutusContact::where('category', 'CLIENT SERVICE INDIVIDUALS')->withTranslation()->first();
        $crm = AboutusContact::where('category', 'CLIENT RELATIONSHIP MANAGERS')->withTranslation()->first();
        $hr = AboutusContact::where('category', 'HUMAN RESOURCES')->withTranslation()->first();

        $branches = AboutusBranch::withTranslation()->get();

        return view('about-us.contact-us', compact('corporates', 'individuals', 'crm', 'hr', 'branches'));
    }

}
