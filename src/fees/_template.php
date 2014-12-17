<?php

/* 
 * 
 */

// Setup country definitions
$country = new StripeCountry();

// Define each fee structure
$fee_structure = new StripeCountryFeeStructure();
$country->fee_structures[] = $fee_structure;

// Add the new country to the countries array
$countries[] = $country;