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
class BulkUploadResultCategory extends \Kaltura\Client\Type\BulkUploadResult
{
	public function getKalturaObjectType()
	{
		return 'KalturaBulkUploadResultCategory';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->relativePath))
			$this->relativePath = (string)$xml->relativePath;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->referenceId))
			$this->referenceId = (string)$xml->referenceId;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->tags))
			$this->tags = (string)$xml->tags;
		if(count($xml->appearInList))
			$this->appearInList = (int)$xml->appearInList;
		if(count($xml->privacy))
			$this->privacy = (int)$xml->privacy;
		if(count($xml->inheritanceType))
			$this->inheritanceType = (int)$xml->inheritanceType;
		if(count($xml->userJoinPolicy))
			$this->userJoinPolicy = (int)$xml->userJoinPolicy;
		if(count($xml->defaultPermissionLevel))
			$this->defaultPermissionLevel = (int)$xml->defaultPermissionLevel;
		if(count($xml->owner))
			$this->owner = (string)$xml->owner;
		if(count($xml->contributionPolicy))
			$this->contributionPolicy = (int)$xml->contributionPolicy;
		if(count($xml->partnerSortValue))
			$this->partnerSortValue = (int)$xml->partnerSortValue;
		if(count($xml->moderation))
		{
			if(!empty($xml->moderation))
				$this->moderation = true;
			else
				$this->moderation = false;
		}
	}
	/**
	 * 
	 * @var string
	 */
	public $relativePath = null;

	/**
	 * 
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 * @var string
	 */
	public $referenceId = null;

	/**
	 * 
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 * @var string
	 */
	public $tags = null;

	/**
	 * 
	 * @var int
	 */
	public $appearInList = null;

	/**
	 * 
	 * @var int
	 */
	public $privacy = null;

	/**
	 * 
	 * @var int
	 */
	public $inheritanceType = null;

	/**
	 * 
	 * @var int
	 */
	public $userJoinPolicy = null;

	/**
	 * 
	 * @var int
	 */
	public $defaultPermissionLevel = null;

	/**
	 * 
	 * @var string
	 */
	public $owner = null;

	/**
	 * 
	 * @var int
	 */
	public $contributionPolicy = null;

	/**
	 * 
	 * @var int
	 */
	public $partnerSortValue = null;

	/**
	 * 
	 * @var bool
	 */
	public $moderation = null;

}
