<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2017  Kaltura Inc.
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU Affero General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Affero General Public License for more details.
//
// You should have received a copy of the GNU Affero General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
// @ignore
// ===================================================================================================

/**
 * @namespace
 */
namespace Kaltura\Client\Type;

/**
 * Payment gateway profile
 * @package Kaltura
 * @subpackage Client
 */
class PaymentGatewayProfile extends \Kaltura\Client\Type\PaymentGatewayBaseProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaPaymentGatewayProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->isActive))
			$this->isActive = (int)$xml->isActive;
		if(count($xml->adapterUrl))
			$this->adapterUrl = (string)$xml->adapterUrl;
		if(count($xml->transactUrl))
			$this->transactUrl = (string)$xml->transactUrl;
		if(count($xml->statusUrl))
			$this->statusUrl = (string)$xml->statusUrl;
		if(count($xml->renewUrl))
			$this->renewUrl = (string)$xml->renewUrl;
		if(count($xml->paymentGatewayeSettings))
		{
			if(empty($xml->paymentGatewayeSettings))
				$this->paymentGatewayeSettings = array();
			else
				$this->paymentGatewayeSettings = \Kaltura\Client\ParseUtils::unmarshalMap($xml->paymentGatewayeSettings, "KalturaStringValue");
		}
		if(count($xml->externalIdentifier))
			$this->externalIdentifier = (string)$xml->externalIdentifier;
		if(count($xml->pendingInterval))
			$this->pendingInterval = (int)$xml->pendingInterval;
		if(count($xml->pendingRetries))
			$this->pendingRetries = (int)$xml->pendingRetries;
		if(count($xml->sharedSecret))
			$this->sharedSecret = (string)$xml->sharedSecret;
		if(count($xml->renewIntervalMinutes))
			$this->renewIntervalMinutes = (int)$xml->renewIntervalMinutes;
		if(count($xml->renewStartMinutes))
			$this->renewStartMinutes = (int)$xml->renewStartMinutes;
	}
	/**
	 * Payment gateway is active status
	 * @var int
	 */
	public $isActive = null;

	/**
	 * Payment gateway adapter URL
	 * @var string
	 */
	public $adapterUrl = null;

	/**
	 * Payment gateway transact URL
	 * @var string
	 */
	public $transactUrl = null;

	/**
	 * Payment gateway status URL
	 * @var string
	 */
	public $statusUrl = null;

	/**
	 * Payment gateway renew URL
	 * @var string
	 */
	public $renewUrl = null;

	/**
	 * Payment gateway extra parameters
	 * @var array<string, KalturaStringValue>
	 */
	public $paymentGatewayeSettings;

	/**
	 * Payment gateway external identifier
	 * @var string
	 */
	public $externalIdentifier = null;

	/**
	 * Pending Interval in minutes
	 * @var int
	 */
	public $pendingInterval = null;

	/**
	 * Pending Retries
	 * @var int
	 */
	public $pendingRetries = null;

	/**
	 * Shared Secret
	 * @var string
	 */
	public $sharedSecret = null;

	/**
	 * Renew Interval Minutes
	 * @var int
	 */
	public $renewIntervalMinutes = null;

	/**
	 * Renew Start Minutes
	 * @var int
	 */
	public $renewStartMinutes = null;

}
