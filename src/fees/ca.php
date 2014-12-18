<?php
$country = new StripeCountry();
$country->name = 'Canada';
$country->url = 'https://stripe.com/ca/pricing';
$country->code = 'CA';
$country->currency = 'CAD';
$country->is_beta = false;

$fee_structure = new StripeCountryFeeStructure();
$fee_structure->name = 'default';
$fee_structure->is_default = true;
$fee_structure->percentage = 2.9;
$fee_structure->fixed_fee = 30;
$fee_structure->chargeback = 1500;
$country->fee_structures[] = $fee_structure;
$countries[] = $country;