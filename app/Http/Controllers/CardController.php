<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use App\Card;

class CardController extends Controller
{

    public function cards(Router $router, $locale) {

    	$current_route_name = $router->currentRouteName();

		$sentance = trim(preg_replace(array('/\./', '/\-/'), ' ', $current_route_name));
		$array_of_words = explode(" ", $sentance);

    	$ownership = strtoupper( $array_of_words[0] );
    	$validity_area = strtoupper( $array_of_words[1] );

        if (app()->getLocale() == 'ru') {
            $page_name = ($validity_area == "LOCAL") ? 'Карты в национальной валюте' : 'Карты в иностранной валюте'; 
        } elseif (app()->getLocale() == 'uz' ) {
            $page_name = ($validity_area == "LOCAL") ? 'Milliy kartalar' : 'Xalqaro kartalar'; 
        } else {
            $page_name = ($validity_area == "LOCAL") ? 'Local Cards' : 'International Cards'; 
        }

    	$page_slug = $array_of_words[1] . '-' . $array_of_words[2];

    	$cards = Card::where('status', 'ENABLED')
    					->where('ownership', $ownership)
    					->where('validity_area', $validity_area)
    					->withTranslation()->get();

    	$payment_systems = [];

    	foreach ($cards as $card) { 
    	    array_push($payment_systems, $card->payment_system);	 
    	}

        $payment_systems = array_values(array_unique($payment_systems));

        foreach ($payment_systems as $key => $value) {
            $payment_systems[$key] = strtolower(str_replace(' ', '-', $value));
        }

    	return view('cards', [
            'cards'              => $cards,
            'page_name'          => $page_name,
            'payment_systems'    => $payment_systems,
            'page_slug'          => $page_slug,
            'current_route_name' => $current_route_name,
            'locale'             => $locale
        ]);
    }

    public function singleCard(Router $router, $locale, $parent, $slug) {

        $current_route_name = $router->currentRouteName();

    	$card = Card::where('slug', $slug)->withTranslation()->first();

    	$parentPageLink = str_replace( '/' . $slug , '', url()->current());

    	$parentPageName = ucwords( str_replace('-', ' ', $parent) );

    	return view('single-card', compact('card', 'parentPageLink', 'locale', 'current_route_name'));
    }
}
