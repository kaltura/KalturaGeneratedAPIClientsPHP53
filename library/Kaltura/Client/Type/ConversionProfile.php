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
 * @package Kaltura
 * @subpackage Client
 */
class ConversionProfile extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaConversionProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->status))
			$this->status = (string)$xml->status;
		if(count($xml->type))
			$this->type = (string)$xml->type;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->systemName))
			$this->systemName = (string)$xml->systemName;
		if(count($xml->tags))
			$this->tags = (string)$xml->tags;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->defaultEntryId))
			$this->defaultEntryId = (string)$xml->defaultEntryId;
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->flavorParamsIds))
			$this->flavorParamsIds = (string)$xml->flavorParamsIds;
		if(count($xml->isDefault))
			$this->isDefault = (int)$xml->isDefault;
		if(count($xml->isPartnerDefault))
		{
			if(!empty($xml->isPartnerDefault))
				$this->isPartnerDefault = true;
			else
				$this->isPartnerDefault = false;
		}
		if(count($xml->cropDimensions) && !empty($xml->cropDimensions))
			$this->cropDimensions = \Kaltura\Client\ParseUtils::unmarshalObject($xml->cropDimensions, "KalturaCropDimensions");
		if(count($xml->clipStart))
			$this->clipStart = (int)$xml->clipStart;
		if(count($xml->clipDuration))
			$this->clipDuration = (int)$xml->clipDuration;
		if(count($xml->xslTransformation))
			$this->xslTransformation = (string)$xml->xslTransformation;
		if(count($xml->storageProfileId))
			$this->storageProfileId = (int)$xml->storageProfileId;
		if(count($xml->mediaParserType))
			$this->mediaParserType = (string)$xml->mediaParserType;
		if(count($xml->calculateComplexity))
			$this->calculateComplexity = (int)$xml->calculateComplexity;
		if(count($xml->collectionTags))
			$this->collectionTags = (string)$xml->collectionTags;
		if(count($xml->conditionalProfiles))
			$this->conditionalProfiles = (string)$xml->conditionalProfiles;
		if(count($xml->detectGOP))
			$this->detectGOP = (int)$xml->detectGOP;
		if(count($xml->mediaInfoXslTransformation))
			$this->mediaInfoXslTransformation = (string)$xml->mediaInfoXslTransformation;
	}
	/**
	 * The id of the Conversion Profile
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\ConversionProfileStatus
	 */
	public $status = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\ConversionProfileType
	 * @insertonly
	 */
	public $type = null;

	/**
	 * The name of the Conversion Profile
	 * @var string
	 */
	public $name = null;

	/**
	 * System name of the Conversion Profile
	 * @var string
	 */
	public $systemName = null;

	/**
	 * Comma separated tags
	 * @var string
	 */
	public $tags = null;

	/**
	 * The description of the Conversion Profile
	 * @var string
	 */
	public $description = null;

	/**
	 * ID of the default entry to be used for template data
	 * @var string
	 */
	public $defaultEntryId = null;

	/**
	 * Creation date as Unix timestamp (In seconds)
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * List of included flavor ids (comma separated)
	 * @var string
	 */
	public $flavorParamsIds = null;

	/**
	 * Indicates that this conversion profile is system default
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $isDefault = null;

	/**
	 * Indicates that this conversion profile is partner default
	 * @var bool
	 * @readonly
	 */
	public $isPartnerDefault = null;

	/**
	 * Cropping dimensions
	 * @var \Kaltura\Client\Type\CropDimensions
	 */
	public $cropDimensions;

	/**
	 * Clipping start position (in miliseconds)
	 * @var int
	 */
	public $clipStart = null;

	/**
	 * Clipping duration (in miliseconds)
	 * @var int
	 */
	public $clipDuration = null;

	/**
	 * XSL to transform ingestion MRSS XML
	 * @var string
	 */
	public $xslTransformation = null;

	/**
	 * ID of default storage profile to be used for linked net-storage file syncs
	 * @var int
	 */
	public $storageProfileId = null;

	/**
	 * Media parser type to be used for extract media
	 * @var \Kaltura\Client\Enum\MediaParserType
	 */
	public $mediaParserType = null;

	/**
	 * Should calculate file conversion complexity
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $calculateComplexity = null;

	/**
	 * Defines the tags that should be used to define 'collective'/group/multi-flavor processing,
	 * 	 like 'mbr' or 'ism'
	 * @var string
	 */
	public $collectionTags = null;

	/**
	 * JSON string with array of "condition,profile-id" pairs.
	 * @var string
	 */
	public $conditionalProfiles = null;

	/**
	 * When set, the ExtractMedia job should detect the source file GOP using this value as the max calculated period
	 * @var int
	 */
	public $detectGOP = null;

	/**
	 * XSL to transform ingestion Media Info XML
	 * @var string
	 */
	public $mediaInfoXslTransformation = null;

}
