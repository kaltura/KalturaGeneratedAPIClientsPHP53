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
namespace Kaltura\Client\Plugin\ContentDistribution\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class GenericDistributionProvider extends \Kaltura\Client\Plugin\ContentDistribution\Type\DistributionProvider
{
	public function getKalturaObjectType()
	{
		return 'KalturaGenericDistributionProvider';
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
		if(count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->isDefault))
		{
			if(!empty($xml->isDefault))
				$this->isDefault = true;
			else
				$this->isDefault = false;
		}
		if(count($xml->status))
			$this->status = (int)$xml->status;
		if(count($xml->optionalFlavorParamsIds))
			$this->optionalFlavorParamsIds = (string)$xml->optionalFlavorParamsIds;
		if(count($xml->requiredFlavorParamsIds))
			$this->requiredFlavorParamsIds = (string)$xml->requiredFlavorParamsIds;
		if(count($xml->optionalThumbDimensions))
		{
			if(empty($xml->optionalThumbDimensions))
				$this->optionalThumbDimensions = array();
			else
				$this->optionalThumbDimensions = \Kaltura\Client\ParseUtils::unmarshalArray($xml->optionalThumbDimensions, "KalturaDistributionThumbDimensions");
		}
		if(count($xml->requiredThumbDimensions))
		{
			if(empty($xml->requiredThumbDimensions))
				$this->requiredThumbDimensions = array();
			else
				$this->requiredThumbDimensions = \Kaltura\Client\ParseUtils::unmarshalArray($xml->requiredThumbDimensions, "KalturaDistributionThumbDimensions");
		}
		if(count($xml->editableFields))
			$this->editableFields = (string)$xml->editableFields;
		if(count($xml->mandatoryFields))
			$this->mandatoryFields = (string)$xml->mandatoryFields;
	}
	/**
	 * Auto generated
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Generic distribution provider creation date as Unix timestamp (In seconds)
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Generic distribution provider last update date as Unix timestamp (In seconds)
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * 
	 * @var bool
	 */
	public $isDefault = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\ContentDistribution\Enum\GenericDistributionProviderStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 * @var string
	 */
	public $optionalFlavorParamsIds = null;

	/**
	 * 
	 * @var string
	 */
	public $requiredFlavorParamsIds = null;

	/**
	 * 
	 * @var array<KalturaDistributionThumbDimensions>
	 */
	public $optionalThumbDimensions;

	/**
	 * 
	 * @var array<KalturaDistributionThumbDimensions>
	 */
	public $requiredThumbDimensions;

	/**
	 * 
	 * @var string
	 */
	public $editableFields = null;

	/**
	 * 
	 * @var string
	 */
	public $mandatoryFields = null;

}
