<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platforms allow them to do with
// text.
//
// Copyright (C) 2006-2023  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\VerizonVcastDistribution\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class VerizonVcastDistributionProfile extends \Kaltura\Client\Plugin\ContentDistribution\Type\ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaVerizonVcastDistributionProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->ftpHost))
			$this->ftpHost = (string)$xml->ftpHost;
		if(count($xml->ftpLogin))
			$this->ftpLogin = (string)$xml->ftpLogin;
		if(count($xml->ftpPass))
			$this->ftpPass = (string)$xml->ftpPass;
		if(count($xml->providerName))
			$this->providerName = (string)$xml->providerName;
		if(count($xml->providerId))
			$this->providerId = (string)$xml->providerId;
		if(count($xml->entitlement))
			$this->entitlement = (string)$xml->entitlement;
		if(count($xml->priority))
			$this->priority = (string)$xml->priority;
		if(count($xml->allowStreaming))
			$this->allowStreaming = (string)$xml->allowStreaming;
		if(count($xml->streamingPriceCode))
			$this->streamingPriceCode = (string)$xml->streamingPriceCode;
		if(count($xml->allowDownload))
			$this->allowDownload = (string)$xml->allowDownload;
		if(count($xml->downloadPriceCode))
			$this->downloadPriceCode = (string)$xml->downloadPriceCode;
	}
	/**
	 * 
	 * @var string
	 */
	public $ftpHost = null;

	/**
	 * 
	 * @var string
	 */
	public $ftpLogin = null;

	/**
	 * 
	 * @var string
	 */
	public $ftpPass = null;

	/**
	 * 
	 * @var string
	 */
	public $providerName = null;

	/**
	 * 
	 * @var string
	 */
	public $providerId = null;

	/**
	 * 
	 * @var string
	 */
	public $entitlement = null;

	/**
	 * 
	 * @var string
	 */
	public $priority = null;

	/**
	 * 
	 * @var string
	 */
	public $allowStreaming = null;

	/**
	 * 
	 * @var string
	 */
	public $streamingPriceCode = null;

	/**
	 * 
	 * @var string
	 */
	public $allowDownload = null;

	/**
	 * 
	 * @var string
	 */
	public $downloadPriceCode = null;

}
