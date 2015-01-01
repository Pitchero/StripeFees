<?php
$country = new StripeCountry();
$country->name = 'Italy';
$country->url = 'https://stripe.com/it/pricing';
$country->code = 'IT';
$country->currency = 'EUR';
$country->is_beta = true;

$fee_structure = new StripeCountryFeeStructure();
$fee_structure->name = 'default';
$fee_structure->is_default = true;
$fee_structure->percentage = 2.9;
$fee_structure->fixed_fee = 30;
$fee_structure->chargeback = 1500;
$country->fee_structures[] = $fee_structure;
$countries[] = $country;