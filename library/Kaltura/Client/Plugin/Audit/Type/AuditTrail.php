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
class AuditTrail extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaAuditTrail';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->parsedAt))
			$this->parsedAt = (int)$xml->parsedAt;
		if(count($xml->status))
			$this->status = (int)$xml->status;
		if(count($xml->auditObjectType))
			$this->auditObjectType = (string)$xml->auditObjectType;
		if(count($xml->objectId))
			$this->objectId = (string)$xml->objectId;
		if(count($xml->relatedObjectId))
			$this->relatedObjectId = (string)$xml->relatedObjectId;
		if(count($xml->relatedObjectType))
			$this->relatedObjectType = (string)$xml->relatedObjectType;
		if(count($xml->entryId))
			$this->entryId = (string)$xml->entryId;
		if(count($xml->masterPartnerId))
			$this->masterPartnerId = (int)$xml->masterPartnerId;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->requestId))
			$this->requestId = (string)$xml->requestId;
		if(count($xml->userId))
			$this->userId = (string)$xml->userId;
		if(count($xml->action))
			$this->action = (string)$xml->action;
		if(count($xml->data) && !empty($xml->data))
			$this->data = \Kaltura\Client\ParseUtils::unmarshalObject($xml->data, "KalturaAuditTrailInfo");
		if(count($xml->ks))
			$this->ks = (string)$xml->ks;
		if(count($xml->context))
			$this->context = (int)$xml->context;
		if(count($xml->entryPoint))
			$this->entryPoint = (string)$xml->entryPoint;
		if(count($xml->serverName))
			$this->serverName = (string)$xml->serverName;
		if(count($xml->ipAddress))
			$this->ipAddress = (string)$xml->ipAddress;
		if(count($xml->userAgent))
			$this->userAgent = (string)$xml->userAgent;
		if(count($xml->clientTag))
			$this->clientTag = (string)$xml->clientTag;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->errorDescription))
			$this->errorDescription = (string)$xml->errorDescription;
	}
	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Indicates when the data was parsed
	 * @var int
	 * @readonly
	 */
	public $parsedAt = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Audit\Enum\AuditTrailStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Audit\Enum\AuditTrailObjectType
	 */
	public $auditObjectType = null;

	/**
	 * 
	 * @var string
	 */
	public $objectId = null;

	/**
	 * 
	 * @var string
	 */
	public $relatedObjectId = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Audit\Enum\AuditTrailObjectType
	 */
	public $relatedObjectType = null;

	/**
	 * 
	 * @var string
	 */
	public $entryId = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $masterPartnerId = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $requestId = null;

	/**
	 * 
	 * @var string
	 */
	public $userId = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Audit\Enum\AuditTrailAction
	 */
	public $action = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Audit\Type\AuditTrailInfo
	 */
	public $data;

	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $ks = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Audit\Enum\AuditTrailContext
	 * @readonly
	 */
	public $context = null;

	/**
	 * The API service and action that called and caused this audit
	 * @var string
	 * @readonly
	 */
	public $entryPoint = null;

	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $serverName = null;

	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $ipAddress = null;

	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $userAgent = null;

	/**
	 * 
	 * @var string
	 */
	public $clientTag = null;

	/**
	 * 
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $errorDescription = null;

}
