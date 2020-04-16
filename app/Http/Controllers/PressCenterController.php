<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PresscenterProcurementEmail;
use App\Dividend;
use App\Copy;
use App\GalleryCategory;
use Illuminate\Support\Facades\Storage;

class PressCenterController extends Controller
{

        public function galleryCategory() {
        
            return view('press-center.gallery-category');
        }

        public function gallery($locale, $data) {

            $categories = GalleryCategory::withTranslation()->latest()->get();
        
            return view('press-center.gallery', compact('locale', 'data', 'categories'));
        }

    	public function dividends() {
    		$locale = app()->getLocale();
    		$dividends = Dividend::withTranslation()->latest()->get();
        
        	return view('press-center.dividends', compact('dividends', 'locale'));
    	}

    	public function procurement() {
    		$emails = PresscenterProcurementEmail::get();

    		return view('press-center.procurement', compact('emails'));
    	}

    	public function copyRight() {
    		$copy = Copy::withTranslation()->first();

    		return view('press-center.copy-right', compact('copy'));
    	}
}
