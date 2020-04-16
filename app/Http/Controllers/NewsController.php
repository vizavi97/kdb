<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\News;
use App\Gsm;

class NewsController extends Controller
{

	// Return to the page containing all the news
    public function index() {

        $locale = app()->getLocale();

        $news = News::where('category', 'NEWS')->withTranslation()->latest()->get();
        $announcements = News::where('category', 'ANNOUNCEMENT')->withTranslation()->latest()->get();
        $events = Gsm::where('status', 'PUBLISHED')->withTranslation()->latest()->get();

    	return view('press-center.news', compact('news', 'announcements', 'events', 'locale'));
    }

    public function show(Request $request, $locale, $slug) {

    	$post = News::where('slug', $slug)->withTranslation()->first();

        if (!$post) {
            $post = Gsm::where('slug', $slug)->withTranslation()->first();
        }

    	return view('press-center.single-news', compact('post', 'locale', 'slug'));
    }

}
