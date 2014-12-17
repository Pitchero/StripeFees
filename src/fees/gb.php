<?php
$country = new StripeCountry();
$country->name = 'United Kingdom';
$country->url = 'https://stripe.com/gb/pricing';
$country->code = 'GB';
$country->currency = 'GBP';
$country->is_beta = false;

$fee_structure = new StripeCountryFeeStructure();
$fee_structure->name = 'default';
$fee_structure->is_default = true;
$fee_structure->percentage = 2.4;
$fee_structure->fixed_fee = 20;
$fee_structure->chargeback = 1500;
$country->fee_structures[] = $fee_structure;
$countries[] = $country;