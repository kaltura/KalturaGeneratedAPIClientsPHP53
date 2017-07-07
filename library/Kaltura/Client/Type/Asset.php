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
class Asset extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaAsset';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->entryId))
			$this->entryId = (string)$xml->entryId;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->version))
			$this->version = (int)$xml->version;
		if(count($xml->size))
			$this->size = (int)$xml->size;
		if(count($xml->tags))
			$this->tags = (string)$xml->tags;
		if(count($xml->fileExt))
			$this->fileExt = (string)$xml->fileExt;
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(count($xml->deletedAt))
			$this->deletedAt = (int)$xml->deletedAt;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->partnerData))
			$this->partnerData = (string)$xml->partnerData;
		if(count($xml->partnerDescription))
			$this->partnerDescription = (string)$xml->partnerDescription;
		if(count($xml->actualSourceAssetParamsIds))
			$this->actualSourceAssetParamsIds = (string)$xml->actualSourceAssetParamsIds;
	}
	/**
	 * The ID of the Flavor Asset
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * The entry ID of the Flavor Asset
	 * @var string
	 * @readonly
	 */
	public $entryId = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * The version of the Flavor Asset
	 * @var int
	 * @readonly
	 */
	public $version = null;

	/**
	 * The size (in KBytes) of the Flavor Asset
	 * @var int
	 * @readonly
	 */
	public $size = null;

	/**
	 * Tags used to identify the Flavor Asset in various scenarios
	 * @var string
	 */
	public $tags = null;

	/**
	 * The file extension
	 * @var string
	 * @insertonly
	 */
	public $fileExt = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $deletedAt = null;

	/**
	 * System description, error message, warnings and failure cause.
	 * @var string
	 * @readonly
	 */
	public $description = null;

	/**
	 * Partner private data
	 * @var string
	 */
	public $partnerData = null;

	/**
	 * Partner friendly description
	 * @var string
	 */
	public $partnerDescription = null;

	/**
	 * Comma separated list of source flavor params ids
	 * @var string
	 */
	public $actualSourceAssetParamsIds = null;

}
