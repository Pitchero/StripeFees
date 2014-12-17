<?php

/*
 * Class to define the structure of Stripe fees
 */

/**
 * Description of StripeCountryFeeStructure
 *
 * @author Jon Milsom
 */
class StripeCountryFeeStructure {
	
	/**
	 * Human readable description of this structure
	 * @var string
	 */
	public $name = 'default';
	
	/**
	 * Is this the default fee structure for this country?
	 * @var boolean
	 */
	public $is_default = true;
	
	/**
	 * Percentage transaction fee on each chargeable amount
	 * @var decimcal
	 */
	public $percentage;

	/**
	 * Fixed transaction fee on each chargeable amount in cents/pence
	 * @var integer
	 */
	public $fixed_fee;
	
	/**
	 * Fee for each chargeback in cents/pence
	 * https://stripe.com/help/disputes
	 * @var integer
	 */
	public $chargeback;
}
