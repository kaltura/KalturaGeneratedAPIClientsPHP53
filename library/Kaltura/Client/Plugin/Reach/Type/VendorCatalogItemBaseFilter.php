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
// Copyright (C) 2006-2021  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\Reach\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class VendorCatalogItemBaseFilter extends \Kaltura\Client\Type\RelatedFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaVendorCatalogItemBaseFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->idEqual))
			$this->idEqual = (int)$xml->idEqual;
		if(count($xml->idIn))
			$this->idIn = (string)$xml->idIn;
		if(count($xml->idNotIn))
			$this->idNotIn = (string)$xml->idNotIn;
		if(count($xml->vendorPartnerIdEqual))
			$this->vendorPartnerIdEqual = (int)$xml->vendorPartnerIdEqual;
		if(count($xml->vendorPartnerIdIn))
			$this->vendorPartnerIdIn = (string)$xml->vendorPartnerIdIn;
		if(count($xml->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$xml->createdAtGreaterThanOrEqual;
		if(count($xml->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$xml->createdAtLessThanOrEqual;
		if(count($xml->updatedAtGreaterThanOrEqual))
			$this->updatedAtGreaterThanOrEqual = (int)$xml->updatedAtGreaterThanOrEqual;
		if(count($xml->updatedAtLessThanOrEqual))
			$this->updatedAtLessThanOrEqual = (int)$xml->updatedAtLessThanOrEqual;
		if(count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(count($xml->serviceTypeEqual))
			$this->serviceTypeEqual = (int)$xml->serviceTypeEqual;
		if(count($xml->serviceTypeIn))
			$this->serviceTypeIn = (string)$xml->serviceTypeIn;
		if(count($xml->serviceFeatureEqual))
			$this->serviceFeatureEqual = (int)$xml->serviceFeatureEqual;
		if(count($xml->serviceFeatureIn))
			$this->serviceFeatureIn = (string)$xml->serviceFeatureIn;
		if(count($xml->turnAroundTimeEqual))
			$this->turnAroundTimeEqual = (int)$xml->turnAroundTimeEqual;
		if(count($xml->turnAroundTimeIn))
			$this->turnAroundTimeIn = (string)$xml->turnAroundTimeIn;
	}
	/**
	 * 
	 * @var int
	 */
	public $idEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $idIn = null;

	/**
	 * 
	 * @var string
	 */
	public $idNotIn = null;

	/**
	 * 
	 * @var int
	 */
	public $vendorPartnerIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $vendorPartnerIdIn = null;

	/**
	 * 
	 * @var int
	 */
	public $createdAtGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $createdAtLessThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $updatedAtGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $updatedAtLessThanOrEqual = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Reach\Enum\VendorCatalogItemStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Reach\Enum\VendorServiceType
	 */
	public $serviceTypeEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $serviceTypeIn = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Reach\Enum\VendorServiceFeature
	 */
	public $serviceFeatureEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $serviceFeatureIn = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Reach\Enum\VendorServiceTurnAroundTime
	 */
	public $turnAroundTimeEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $turnAroundTimeIn = null;

}
