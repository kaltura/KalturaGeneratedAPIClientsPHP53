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
namespace Kaltura\Client\Plugin\TvComDistribution\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class TVComDistributionProfile extends \Kaltura\Client\Plugin\ContentDistribution\Type\ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaTVComDistributionProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->metadataProfileId))
			$this->metadataProfileId = (int)$xml->metadataProfileId;
		if(count($xml->feedUrl))
			$this->feedUrl = (string)$xml->feedUrl;
		if(count($xml->feedTitle))
			$this->feedTitle = (string)$xml->feedTitle;
		if(count($xml->feedLink))
			$this->feedLink = (string)$xml->feedLink;
		if(count($xml->feedDescription))
			$this->feedDescription = (string)$xml->feedDescription;
		if(count($xml->feedLanguage))
			$this->feedLanguage = (string)$xml->feedLanguage;
		if(count($xml->feedCopyright))
			$this->feedCopyright = (string)$xml->feedCopyright;
		if(count($xml->feedImageTitle))
			$this->feedImageTitle = (string)$xml->feedImageTitle;
		if(count($xml->feedImageUrl))
			$this->feedImageUrl = (string)$xml->feedImageUrl;
		if(count($xml->feedImageLink))
			$this->feedImageLink = (string)$xml->feedImageLink;
		if(count($xml->feedImageWidth))
			$this->feedImageWidth = (int)$xml->feedImageWidth;
		if(count($xml->feedImageHeight))
			$this->feedImageHeight = (int)$xml->feedImageHeight;
	}
	/**
	 * 
	 * @var int
	 */
	public $metadataProfileId = null;

	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $feedUrl = null;

	/**
	 * 
	 * @var string
	 */
	public $feedTitle = null;

	/**
	 * 
	 * @var string
	 */
	public $feedLink = null;

	/**
	 * 
	 * @var string
	 */
	public $feedDescription = null;

	/**
	 * 
	 * @var string
	 */
	public $feedLanguage = null;

	/**
	 * 
	 * @var string
	 */
	public $feedCopyright = null;

	/**
	 * 
	 * @var string
	 */
	public $feedImageTitle = null;

	/**
	 * 
	 * @var string
	 */
	public $feedImageUrl = null;

	/**
	 * 
	 * @var string
	 */
	public $feedImageLink = null;

	/**
	 * 
	 * @var int
	 */
	public $feedImageWidth = null;

	/**
	 * 
	 * @var int
	 */
	public $feedImageHeight = null;

}
