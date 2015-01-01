<?php
$country = new StripeCountry();
$country->name = 'Sweden';
$country->url = 'https://stripe.com/se/pricing';
$country->code = 'SE';
$country->currency = 'SEK';
$country->is_beta = true;

$fee_structure = new StripeCountryFeeStructure();
$fee_structure->name = 'default';
$fee_structure->is_default = true;
$fee_structure->percentage = 2.9;
$fee_structure->fixed_fee = 280;
$fee_structure->chargeback = 10000;
$country->fee_structures[] = $fee_structure;
$countries[] = $country;