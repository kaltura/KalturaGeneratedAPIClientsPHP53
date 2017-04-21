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
class ITunesSyndicationFeed extends \Kaltura\Client\Type\BaseSyndicationFeed
{
	public function getKalturaObjectType()
	{
		return 'KalturaITunesSyndicationFeed';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->feedDescription))
			$this->feedDescription = (string)$xml->feedDescription;
		if(count($xml->language))
			$this->language = (string)$xml->language;
		if(count($xml->feedLandingPage))
			$this->feedLandingPage = (string)$xml->feedLandingPage;
		if(count($xml->ownerName))
			$this->ownerName = (string)$xml->ownerName;
		if(count($xml->ownerEmail))
			$this->ownerEmail = (string)$xml->ownerEmail;
		if(count($xml->feedImageUrl))
			$this->feedImageUrl = (string)$xml->feedImageUrl;
		if(count($xml->category))
			$this->category = (string)$xml->category;
		if(count($xml->adultContent))
			$this->adultContent = (string)$xml->adultContent;
		if(count($xml->feedAuthor))
			$this->feedAuthor = (string)$xml->feedAuthor;
		if(count($xml->enforceOrder))
			$this->enforceOrder = (int)$xml->enforceOrder;
	}
	/**
	 * feed description
	 * @var string
	 */
	public $feedDescription = null;

	/**
	 * feed language
	 * @var string
	 */
	public $language = null;

	/**
	 * feed landing page (i.e publisher website)
	 * @var string
	 */
	public $feedLandingPage = null;

	/**
	 * author/publisher name
	 * @var string
	 */
	public $ownerName = null;

	/**
	 * publisher email
	 * @var string
	 */
	public $ownerEmail = null;

	/**
	 * podcast thumbnail
	 * @var string
	 */
	public $feedImageUrl = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\ITunesSyndicationFeedCategories
	 * @readonly
	 */
	public $category = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\ITunesSyndicationFeedAdultValues
	 */
	public $adultContent = null;

	/**
	 * 
	 * @var string
	 */
	public $feedAuthor = null;

	/**
	 * true in case you want to enfore the palylist order on the
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $enforceOrder = null;

}
