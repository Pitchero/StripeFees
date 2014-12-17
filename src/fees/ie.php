<?php
$country = new StripeCountry();
$country->name = 'Republic of Ireland';
$country->url = 'https://stripe.com/ie/pricing';
$country->code = 'IE';
$country->currency = 'EUR';
$country->additional_tax = true;

$fee_structure = new StripeCountryFeeStructure();
$fee_structure->name = 'default';
$fee_structure->is_default = true;
$fee_structure->percentage = 2.4;
$fee_structure->fixed_fee = 24;
$fee_structure->chargeback = 1500;
$country->fee_structures[] = $fee_structure;
$countries[] = $country;