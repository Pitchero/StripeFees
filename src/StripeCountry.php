<?php

/*
 * Class to define the structure of each Stripe country
 */

/**
 * Description of StripeCountry
 *
 * @author Jon Milsom
 */
class StripeCountry {
		
	/**
	 * Human readable ISO country short name - http://en.wikipedia.org/wiki/ISO_3166-1
	 * @var type 
	 */
	public $name;
	
	/**
	 * URL to Stripe pricing page for this country
	 * @link string
	 */
	public $url;
	
	/**
	 * Is this country in Stripe's beta program?
	 * @var bool
	 */
	public $is_beta = false;
	
	/**
	 * ISO two character country code e.g. GB
	 * @var type 
	 */
	public $code;
	
	/**
	 * ISO three character currency code e.g. GBP
	 * @var type 
	 */
	public $currency;
	
	/**
	 * Is additional VAT or GST charged IN ADDITION to the transaction fees?
	 * https://support.stripe.com/questions/vat-on-stripes-fees
	 * @var boolean
	 */
	public $additional_tax = false;
	
	/**
	 * DEFAULT Percentage transaction fee on each chargeable amount
	 * @var decimcal
	 */
	public $percentage;
	
	/**
	 * DEFAULT Fixed transaction fee on each chargeable amount in cents/pence
	 * @var integer
	 */
	public $fixed_fee;
	
	/**
	 * DEFAULT Fee for each chargeback in cents/pence
	 * https://stripe.com/help/disputes
	 * @var integer
	 */
	public $chargeback;
	
	/**
	 * An array of StripeCountryFeeStructure objects
	 * @var \StripeCountryFeeStructure[] 
	 */
	public $fee_structures = array();
	
	/**
	 * Return the default fee structure for this country
	 * @return \StripeCountryFeeStructure
	 */
	public function getDefaultFeeStructure() {
		foreach($this->fee_structures as $fee_structure) {
			if($fee_structure->is_default) {
				return $fee_structure;
			}
		}
		return null;
	}
}
