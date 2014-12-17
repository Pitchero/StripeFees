<?php
$country = new StripeCountry();
$country->name = 'Australia';
$country->url = 'https://stripe.com/au/pricing';
$country->code = 'AU';
$country->currency = 'AUD';

$fee_structure = new StripeCountryFeeStructure();
$fee_structure->name = 'domestic';
$fee_structure->is_default = true;
$fee_structure->percentage = 1.75;
$fee_structure->fixed_fee = 30;
$fee_structure->chargeback = 2500;
$country->fee_structures[] = $fee_structure;

$fee_structure = new StripeCountryFeeStructure();
$fee_structure->name = 'international';
$fee_structure->is_default = false;
$fee_structure->percentage = 2.9;
$fee_structure->fixed_fee = 30;
$fee_structure->chargeback = 2500;
$country->fee_structures[] = $fee_structure;

$fee_structure = new StripeCountryFeeStructure();
$fee_structure->name = 'american_express';
$fee_structure->is_default = false;
$fee_structure->percentage = 2.9;
$fee_structure->fixed_fee = 30;
$fee_structure->chargeback = 2500;
$country->fee_structures[] = $fee_structure;
$countries[] = $country;