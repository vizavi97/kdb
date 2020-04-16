<?php

use App\Rate;
use Illuminate\Support\Facades\Cache;

function startsWith($string, $startString) 
{ 
    $len = strlen($startString); 
    return (strtolower(substr($string, 0, $len)) === strtolower($startString)); 
} 

function searchArray($url, $array) {
	foreach ($array as $key => $val) {
		if ($val['url'] === $url) {
			return true;
		}
	}
	return false;
}

function search($item, $rows, $queryArr, $results, $url, $locale, $type) {

	if (searchArray($url, $results) == false) {
		

		// Search all requested the rows in the database
		foreach($rows as $row) {

			if (searchArray($url, $results) == false) {

				if ($type == 'lang' || $type == "db static") {

					$data = $item[$row];

				} elseif ($type == 'db trans') {

					$data = $item->getTranslatedAttribute($row, $locale, 'fallbackLocale');

				}

				$sentance = strip_tags( $data );
				$words = explode(' ', $sentance);
				$targetPos = null;
				$longResult = [];

				// Identify the first word that starts with the search query
				for ($i = 0; $i < count($words); $i++) {

					$longResult[$i] = $words[$i];

					foreach ($queryArr as $query) {

						$queryLen = strlen($query);

						if (startsWith($words[$i], $query)) {

							// Highlight the phrase you want to design in Front End with a span tag and give it a class name with the target
							$longResult[$i] = '<strong>' . substr($words[$i], 0, $queryLen) . '</strong>' . substr($words[$i], $queryLen);

							// Get target position
							$targetPos = $i;
						}
					}

				}

				// Shorten result
				if ( $targetPos > 6 && count($longResult) > 13 ) {
					$shortResult = array_slice($longResult, $targetPos - 6, 13);
					$shortResult = '...' . implode(' ', $shortResult) . '...';
				} else {
					$shortResult = implode(' ', $longResult);
				}


				if ( $targetPos != null ) {
					$result = [];
					$result['text'] = $shortResult;
					$result['url']  = $url;
					array_push($results, $result); 
				}
			}

		}
	}

	return $results;
}
  
function getCbuRates(){

	$expiresAt = now()->addMinutes(60 * 24);

	if (Cache::get('cburates')) {
		return Cache::get('cburates');
	}

	// Get USD Rate from CBU website
  	$url = "http://cbu.uz/ru/arkhiv-kursov-valyut/json/";

  	$file_headers = @get_headers($url);
	if ( get_http_response_code($url) == "200" ) {
	    
	    $json = file_get_contents($url);
	    
		$rates = json_decode($json, true);
		  
		Cache::put('cburates', $rates, $expiresAt);

	    return $rates;    
	}

	return false;

}

function getKdbRates() {

	$rates = Rate::all();
	return $rates;
}

function get_http_response_code($theURL) {
	
    $headers = get_headers($theURL);
    return substr($headers[0], 9, 3);
}
 
