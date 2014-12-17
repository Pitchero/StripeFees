<?php

require 'StripeCountry.php';
require 'StripeCountryFeeStructure.php';

/**
 * Compile fees for each country
 */
$countries = array();

$di = new RecursiveDirectoryIterator('fees');
foreach (new RecursiveIteratorIterator($di) as $filename => $file) {
	if($file->isFile() && $file->getFilename() != '_template.php') {
		include $filename;
	}
}

/**
 * Generate output
 */
foreach($countries as $country) {
	$country->default_fee_structure = $country->getDefaultFeeStructure();
	if($country->default_fee_structure) {
		$country->percentage = $country->default_fee_structure->percentage;
		$country->fixed_fee = $country->default_fee_structure->fixed_fee;
		$country->chargeback = $country->default_fee_structure->chargeback;
	}
	unset($country->default_fee_structure);
}

$json_countries = json_encode($countries);

// Output to file
file_put_contents('../public/fees.json', $json_countries);

header('Content-Type: application/json');
echo $json_countries;
exit;