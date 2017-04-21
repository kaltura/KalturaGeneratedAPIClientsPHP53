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
abstract class BaseSyndicationFeed extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaBaseSyndicationFeed';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->feedUrl))
			$this->feedUrl = (string)$xml->feedUrl;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->playlistId))
			$this->playlistId = (string)$xml->playlistId;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->status))
			$this->status = (int)$xml->status;
		if(count($xml->type))
			$this->type = (int)$xml->type;
		if(count($xml->landingPage))
			$this->landingPage = (string)$xml->landingPage;
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->allowEmbed))
		{
			if(!empty($xml->allowEmbed))
				$this->allowEmbed = true;
			else
				$this->allowEmbed = false;
		}
		if(count($xml->playerUiconfId))
			$this->playerUiconfId = (int)$xml->playerUiconfId;
		if(count($xml->flavorParamId))
			$this->flavorParamId = (int)$xml->flavorParamId;
		if(count($xml->transcodeExistingContent))
		{
			if(!empty($xml->transcodeExistingContent))
				$this->transcodeExistingContent = true;
			else
				$this->transcodeExistingContent = false;
		}
		if(count($xml->addToDefaultConversionProfile))
		{
			if(!empty($xml->addToDefaultConversionProfile))
				$this->addToDefaultConversionProfile = true;
			else
				$this->addToDefaultConversionProfile = false;
		}
		if(count($xml->categories))
			$this->categories = (string)$xml->categories;
		if(count($xml->storageId))
			$this->storageId = (int)$xml->storageId;
		if(count($xml->entriesOrderBy))
			$this->entriesOrderBy = (string)$xml->entriesOrderBy;
		if(count($xml->enforceEntitlement))
		{
			if(!empty($xml->enforceEntitlement))
				$this->enforceEntitlement = true;
			else
				$this->enforceEntitlement = false;
		}
		if(count($xml->privacyContext))
			$this->privacyContext = (string)$xml->privacyContext;
		if(count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(count($xml->useCategoryEntries))
		{
			if(!empty($xml->useCategoryEntries))
				$this->useCategoryEntries = true;
			else
				$this->useCategoryEntries = false;
		}
		if(count($xml->feedContentTypeHeader))
			$this->feedContentTypeHeader = (string)$xml->feedContentTypeHeader;
	}
	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $feedUrl = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * link a playlist that will set what content the feed will include
	 * 	 if empty, all content will be included in feed
	 * @var string
	 */
	public $playlistId = null;

	/**
	 * feed name
	 * @var string
	 */
	public $name = null;

	/**
	 * feed status
	 * @var \Kaltura\Client\Enum\SyndicationFeedStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * feed type
	 * @var \Kaltura\Client\Enum\SyndicationFeedType
	 * @insertonly
	 */
	public $type = null;

	/**
	 * Base URL for each video, on the partners site
	 * 	 This is required by all syndication types.
	 * @var string
	 */
	public $landingPage = null;

	/**
	 * Creation date as Unix timestamp (In seconds)
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * allow_embed tells google OR yahoo weather to allow embedding the video on google OR yahoo video results
	 * 	 or just to provide a link to the landing page.
	 * 	 it is applied on the video-player_loc property in the XML (google)
	 * 	 and addes media-player tag (yahoo)
	 * @var bool
	 */
	public $allowEmbed = null;

	/**
	 * Select a uiconf ID as player skin to include in the kwidget url
	 * @var int
	 */
	public $playerUiconfId = null;

	/**
	 * 
	 * @var int
	 */
	public $flavorParamId = null;

	/**
	 * 
	 * @var bool
	 */
	public $transcodeExistingContent = null;

	/**
	 * 
	 * @var bool
	 */
	public $addToDefaultConversionProfile = null;

	/**
	 * 
	 * @var string
	 */
	public $categories = null;

	/**
	 * 
	 * @var int
	 */
	public $storageId = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\SyndicationFeedEntriesOrderBy
	 */
	public $entriesOrderBy = null;

	/**
	 * Should enforce entitlement on feed entries
	 * @var bool
	 */
	public $enforceEntitlement = null;

	/**
	 * Set privacy context for search entries that assiged to private and public categories within a category privacy context.
	 * @var string
	 */
	public $privacyContext = null;

	/**
	 * Update date as Unix timestamp (In seconds)
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 * @var bool
	 */
	public $useCategoryEntries = null;

	/**
	 * Feed content-type header value
	 * @var string
	 */
	public $feedContentTypeHeader = null;

}
