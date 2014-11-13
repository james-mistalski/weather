<?php
/**
 *
 */
// open weather map's API key
// ironically, they make us sign up but never verify it...
$apiKey = "129fd8ecf3ae2d18138d90a7de5b29db";

// base URL is the basis for *ALL* API calls
$baseUrl = "http://api.openweathermap.org/data/2.5/weather";

// input to the API: direct search
if(($city = filter_input(INPUT_GET, "city", FILTER_SANITIZE_ENCODED)) !== false) {
	$query = "?q=$city";
}
?>