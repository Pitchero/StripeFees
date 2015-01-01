<?php
$country = new StripeCountry();
$country->name = 'Norway';
$country->url = 'https://stripe.com/no/pricing';
$country->code = 'NO';
$country->currency = 'NOK';
$country->is_beta = true;

$fee_structure = new StripeCountryFeeStructure();
$fee_structure->name = 'default';
$fee_structure->is_default = true;
$fee_structure->percentage = 2.9;
$fee_structure->fixed_fee = 250;
$fee_structure->chargeback = 9000;
$country->fee_structures[] = $fee_structure;
$countries[] = $country;