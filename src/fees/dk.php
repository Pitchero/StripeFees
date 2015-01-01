<?php
$country = new StripeCountry();
$country->name = 'Denmark';
$country->url = 'https://stripe.com/dk/pricing';
$country->code = 'DK';
$country->currency = 'DKK';
$country->is_beta = true;

$fee_structure = new StripeCountryFeeStructure();
$fee_structure->name = 'default';
$fee_structure->is_default = true;
$fee_structure->percentage = 2.9;
$fee_structure->fixed_fee = 225;
$fee_structure->chargeback = 8000;
$country->fee_structures[] = $fee_structure;
$countries[] = $country;