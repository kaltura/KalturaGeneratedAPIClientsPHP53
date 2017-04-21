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
class AssetParams extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaAssetParams';
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
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->systemName))
			$this->systemName = (string)$xml->systemName;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->isSystemDefault))
			$this->isSystemDefault = (int)$xml->isSystemDefault;
		if(count($xml->tags))
			$this->tags = (string)$xml->tags;
		if(count($xml->requiredPermissions))
		{
			if(empty($xml->requiredPermissions))
				$this->requiredPermissions = array();
			else
				$this->requiredPermissions = \Kaltura\Client\ParseUtils::unmarshalArray($xml->requiredPermissions, "KalturaString");
		}
		if(count($xml->sourceRemoteStorageProfileId))
			$this->sourceRemoteStorageProfileId = (int)$xml->sourceRemoteStorageProfileId;
		if(count($xml->remoteStorageProfileIds))
			$this->remoteStorageProfileIds = (int)$xml->remoteStorageProfileIds;
		if(count($xml->mediaParserType))
			$this->mediaParserType = (string)$xml->mediaParserType;
		if(count($xml->sourceAssetParamsIds))
			$this->sourceAssetParamsIds = (string)$xml->sourceAssetParamsIds;
	}
	/**
	 * The id of the Flavor Params
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 * @var int
	 */
	public $partnerId = null;

	/**
	 * The name of the Flavor Params
	 * @var string
	 */
	public $name = null;

	/**
	 * System name of the Flavor Params
	 * @var string
	 */
	public $systemName = null;

	/**
	 * The description of the Flavor Params
	 * @var string
	 */
	public $description = null;

	/**
	 * Creation date as Unix timestamp (In seconds)
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * True if those Flavor Params are part of system defaults
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 * @readonly
	 */
	public $isSystemDefault = null;

	/**
	 * The Flavor Params tags are used to identify the flavor for different usage (e.g. web, hd, mobile)
	 * @var string
	 */
	public $tags = null;

	/**
	 * Array of partner permisison names that required for using this asset params
	 * @var array<KalturaString>
	 */
	public $requiredPermissions;

	/**
	 * Id of remote storage profile that used to get the source, zero indicates Kaltura data center
	 * @var int
	 */
	public $sourceRemoteStorageProfileId = null;

	/**
	 * Comma seperated ids of remote storage profiles that the flavor distributed to, the distribution done by the conversion engine
	 * @var int
	 */
	public $remoteStorageProfileIds = null;

	/**
	 * Media parser type to be used for post-conversion validation
	 * @var \Kaltura\Client\Enum\MediaParserType
	 */
	public $mediaParserType = null;

	/**
	 * Comma seperated ids of source flavor params this flavor is created from
	 * @var string
	 */
	public $sourceAssetParamsIds = null;

}
