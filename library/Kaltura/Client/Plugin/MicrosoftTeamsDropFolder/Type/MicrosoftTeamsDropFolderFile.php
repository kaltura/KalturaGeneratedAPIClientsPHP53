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
// Copyright (C) 2006-2023  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\MicrosoftTeamsDropFolder\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class MicrosoftTeamsDropFolderFile extends \Kaltura\Client\Plugin\DropFolder\Type\DropFolderFile
{
	public function getKalturaObjectType()
	{
		return 'KalturaMicrosoftTeamsDropFolderFile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->remoteId))
			$this->remoteId = (string)$xml->remoteId;
		if(count($xml->ownerId))
			$this->ownerId = (string)$xml->ownerId;
		if(count($xml->additionalUserIds))
			$this->additionalUserIds = (string)$xml->additionalUserIds;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->targetCategoryIds))
			$this->targetCategoryIds = (string)$xml->targetCategoryIds;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->contentUrl))
			$this->contentUrl = (string)$xml->contentUrl;
	}
	/**
	 * 
	 * @var string
	 */
	public $remoteId = null;

	/**
	 * 
	 * @var string
	 */
	public $ownerId = null;

	/**
	 * 
	 * @var string
	 */
	public $additionalUserIds = null;

	/**
	 * 
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 * @var string
	 */
	public $targetCategoryIds = null;

	/**
	 * 
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 * @var string
	 */
	public $contentUrl = null;

}
