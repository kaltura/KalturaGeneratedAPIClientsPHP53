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
namespace Kaltura\Client\Plugin\Audit\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class AuditTrailBaseFilter extends \Kaltura\Client\Type\RelatedFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaAuditTrailBaseFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->idEqual))
			$this->idEqual = (int)$xml->idEqual;
		if(count($xml->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$xml->createdAtGreaterThanOrEqual;
		if(count($xml->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$xml->createdAtLessThanOrEqual;
		if(count($xml->parsedAtGreaterThanOrEqual))
			$this->parsedAtGreaterThanOrEqual = (int)$xml->parsedAtGreaterThanOrEqual;
		if(count($xml->parsedAtLessThanOrEqual))
			$this->parsedAtLessThanOrEqual = (int)$xml->parsedAtLessThanOrEqual;
		if(count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(count($xml->auditObjectTypeEqual))
			$this->auditObjectTypeEqual = (string)$xml->auditObjectTypeEqual;
		if(count($xml->auditObjectTypeIn))
			$this->auditObjectTypeIn = (string)$xml->auditObjectTypeIn;
		if(count($xml->objectIdEqual))
			$this->objectIdEqual = (string)$xml->objectIdEqual;
		if(count($xml->objectIdIn))
			$this->objectIdIn = (string)$xml->objectIdIn;
		if(count($xml->relatedObjectIdEqual))
			$this->relatedObjectIdEqual = (string)$xml->relatedObjectIdEqual;
		if(count($xml->relatedObjectIdIn))
			$this->relatedObjectIdIn = (string)$xml->relatedObjectIdIn;
		if(count($xml->relatedObjectTypeEqual))
			$this->relatedObjectTypeEqual = (string)$xml->relatedObjectTypeEqual;
		if(count($xml->relatedObjectTypeIn))
			$this->relatedObjectTypeIn = (string)$xml->relatedObjectTypeIn;
		if(count($xml->entryIdEqual))
			$this->entryIdEqual = (string)$xml->entryIdEqual;
		if(count($xml->entryIdIn))
			$this->entryIdIn = (string)$xml->entryIdIn;
		if(count($xml->masterPartnerIdEqual))
			$this->masterPartnerIdEqual = (int)$xml->masterPartnerIdEqual;
		if(count($xml->masterPartnerIdIn))
			$this->masterPartnerIdIn = (string)$xml->masterPartnerIdIn;
		if(count($xml->partnerIdEqual))
			$this->partnerIdEqual = (int)$xml->partnerIdEqual;
		if(count($xml->partnerIdIn))
			$this->partnerIdIn = (string)$xml->partnerIdIn;
		if(count($xml->requestIdEqual))
			$this->requestIdEqual = (string)$xml->requestIdEqual;
		if(count($xml->requestIdIn))
			$this->requestIdIn = (string)$xml->requestIdIn;
		if(count($xml->userIdEqual))
			$this->userIdEqual = (string)$xml->userIdEqual;
		if(count($xml->userIdIn))
			$this->userIdIn = (string)$xml->userIdIn;
		if(count($xml->actionEqual))
			$this->actionEqual = (string)$xml->actionEqual;
		if(count($xml->actionIn))
			$this->actionIn = (string)$xml->actionIn;
		if(count($xml->ksEqual))
			$this->ksEqual = (string)$xml->ksEqual;
		if(count($xml->contextEqual))
			$this->contextEqual = (int)$xml->contextEqual;
		if(count($xml->contextIn))
			$this->contextIn = (string)$xml->contextIn;
		if(count($xml->entryPointEqual))
			$this->entryPointEqual = (string)$xml->entryPointEqual;
		if(count($xml->entryPointIn))
			$this->entryPointIn = (string)$xml->entryPointIn;
		if(count($xml->serverNameEqual))
			$this->serverNameEqual = (string)$xml->serverNameEqual;
		if(count($xml->serverNameIn))
			$this->serverNameIn = (string)$xml->serverNameIn;
		if(count($xml->ipAddressEqual))
			$this->ipAddressEqual = (string)$xml->ipAddressEqual;
		if(count($xml->ipAddressIn))
			$this->ipAddressIn = (string)$xml->ipAddressIn;
		if(count($xml->clientTagEqual))
			$this->clientTagEqual = (string)$xml->clientTagEqual;
	}
	/**
	 * 
	 * @var int
	 */
	public $idEqual = null;

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
	public $parsedAtGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $parsedAtLessThanOrEqual = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Audit\Enum\AuditTrailStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Audit\Enum\AuditTrailObjectType
	 */
	public $auditObjectTypeEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $auditObjectTypeIn = null;

	/**
	 * 
	 * @var string
	 */
	public $objectIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $objectIdIn = null;

	/**
	 * 
	 * @var string
	 */
	public $relatedObjectIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $relatedObjectIdIn = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Audit\Enum\AuditTrailObjectType
	 */
	public $relatedObjectTypeEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $relatedObjectTypeIn = null;

	/**
	 * 
	 * @var string
	 */
	public $entryIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $entryIdIn = null;

	/**
	 * 
	 * @var int
	 */
	public $masterPartnerIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $masterPartnerIdIn = null;

	/**
	 * 
	 * @var int
	 */
	public $partnerIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $partnerIdIn = null;

	/**
	 * 
	 * @var string
	 */
	public $requestIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $requestIdIn = null;

	/**
	 * 
	 * @var string
	 */
	public $userIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $userIdIn = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Audit\Enum\AuditTrailAction
	 */
	public $actionEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $actionIn = null;

	/**
	 * 
	 * @var string
	 */
	public $ksEqual = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Audit\Enum\AuditTrailContext
	 */
	public $contextEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $contextIn = null;

	/**
	 * 
	 * @var string
	 */
	public $entryPointEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $entryPointIn = null;

	/**
	 * 
	 * @var string
	 */
	public $serverNameEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $serverNameIn = null;

	/**
	 * 
	 * @var string
	 */
	public $ipAddressEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $ipAddressIn = null;

	/**
	 * 
	 * @var string
	 */
	public $clientTagEqual = null;

}
