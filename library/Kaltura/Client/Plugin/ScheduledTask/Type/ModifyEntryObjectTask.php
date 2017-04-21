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
namespace Kaltura\Client\Plugin\ScheduledTask\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class ModifyEntryObjectTask extends \Kaltura\Client\Plugin\ScheduledTask\Type\ObjectTask
{
	public function getKalturaObjectType()
	{
		return 'KalturaModifyEntryObjectTask';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->inputMetadataProfileId))
			$this->inputMetadataProfileId = (int)$xml->inputMetadataProfileId;
		if(count($xml->inputMetadata))
		{
			if(empty($xml->inputMetadata))
				$this->inputMetadata = array();
			else
				$this->inputMetadata = \Kaltura\Client\ParseUtils::unmarshalArray($xml->inputMetadata, "KalturaKeyValue");
		}
		if(count($xml->outputMetadataProfileId))
			$this->outputMetadataProfileId = (int)$xml->outputMetadataProfileId;
		if(count($xml->outputMetadata))
		{
			if(empty($xml->outputMetadata))
				$this->outputMetadata = array();
			else
				$this->outputMetadata = \Kaltura\Client\ParseUtils::unmarshalArray($xml->outputMetadata, "KalturaKeyValue");
		}
		if(count($xml->inputUserId))
			$this->inputUserId = (string)$xml->inputUserId;
		if(count($xml->inputEntitledUsersEdit))
			$this->inputEntitledUsersEdit = (string)$xml->inputEntitledUsersEdit;
		if(count($xml->inputEntitledUsersPublish))
			$this->inputEntitledUsersPublish = (string)$xml->inputEntitledUsersPublish;
	}
	/**
	 * The input metadata profile id
	 * @var int
	 */
	public $inputMetadataProfileId = null;

	/**
	 * array of {input metadata xpath location,entry field} objects
	 * @var array<KalturaKeyValue>
	 */
	public $inputMetadata;

	/**
	 * The output metadata profile id
	 * @var int
	 */
	public $outputMetadataProfileId = null;

	/**
	 * array of {output metadata xpath location,entry field} objects
	 * @var array<KalturaKeyValue>
	 */
	public $outputMetadata;

	/**
	 * The input user id to set on the entry
	 * @var string
	 */
	public $inputUserId = null;

	/**
	 * The input entitled users edit to set on the entry
	 * @var string
	 */
	public $inputEntitledUsersEdit = null;

	/**
	 * The input entitled users publish to set on the entry
	 * @var string
	 */
	public $inputEntitledUsersPublish = null;

}
