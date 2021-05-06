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
namespace Kaltura\Client\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class PartnerBaseFilter extends \Kaltura\Client\Type\Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaPartnerBaseFilter';
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
		if(count($xml->nameLike))
			$this->nameLike = (string)$xml->nameLike;
		if(count($xml->nameMultiLikeOr))
			$this->nameMultiLikeOr = (string)$xml->nameMultiLikeOr;
		if(count($xml->nameMultiLikeAnd))
			$this->nameMultiLikeAnd = (string)$xml->nameMultiLikeAnd;
		if(count($xml->nameEqual))
			$this->nameEqual = (string)$xml->nameEqual;
		if(count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(count($xml->partnerPackageEqual))
			$this->partnerPackageEqual = (int)$xml->partnerPackageEqual;
		if(count($xml->partnerPackageGreaterThanOrEqual))
			$this->partnerPackageGreaterThanOrEqual = (int)$xml->partnerPackageGreaterThanOrEqual;
		if(count($xml->partnerPackageLessThanOrEqual))
			$this->partnerPackageLessThanOrEqual = (int)$xml->partnerPackageLessThanOrEqual;
		if(count($xml->partnerPackageIn))
			$this->partnerPackageIn = (string)$xml->partnerPackageIn;
		if(count($xml->partnerGroupTypeEqual))
			$this->partnerGroupTypeEqual = (int)$xml->partnerGroupTypeEqual;
		if(count($xml->partnerNameDescriptionWebsiteAdminNameAdminEmailLike))
			$this->partnerNameDescriptionWebsiteAdminNameAdminEmailLike = (string)$xml->partnerNameDescriptionWebsiteAdminNameAdminEmailLike;
		if(count($xml->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$xml->createdAtGreaterThanOrEqual;
		if(count($xml->idGreaterThan))
			$this->idGreaterThan = (int)$xml->idGreaterThan;
		if(count($xml->monitorUsageEqual))
			$this->monitorUsageEqual = (int)$xml->monitorUsageEqual;
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
	 * @var string
	 */
	public $nameLike = null;

	/**
	 * 
	 * @var string
	 */
	public $nameMultiLikeOr = null;

	/**
	 * 
	 * @var string
	 */
	public $nameMultiLikeAnd = null;

	/**
	 * 
	 * @var string
	 */
	public $nameEqual = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\PartnerStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 * @var int
	 */
	public $partnerPackageEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $partnerPackageGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $partnerPackageLessThanOrEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $partnerPackageIn = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\PartnerGroupType
	 */
	public $partnerGroupTypeEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $partnerNameDescriptionWebsiteAdminNameAdminEmailLike = null;

	/**
	 * 
	 * @var int
	 */
	public $createdAtGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $idGreaterThan = null;

	/**
	 * 
	 * @var int
	 */
	public $monitorUsageEqual = null;

}
