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
namespace Kaltura\Client\Plugin\FacebookDistribution\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class FacebookCaptionDistributionInfo extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaFacebookCaptionDistributionInfo';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->language))
			$this->language = (string)$xml->language;
		if(count($xml->label))
			$this->label = (string)$xml->label;
		if(count($xml->filePath))
			$this->filePath = (string)$xml->filePath;
		if(count($xml->remoteId))
			$this->remoteId = (string)$xml->remoteId;
		if(count($xml->version))
			$this->version = (string)$xml->version;
		if(count($xml->assetId))
			$this->assetId = (string)$xml->assetId;
	}
	/**
	 * 
	 * @var string
	 */
	public $language = null;

	/**
	 * 
	 * @var string
	 */
	public $label = null;

	/**
	 * 
	 * @var string
	 */
	public $filePath = null;

	/**
	 * 
	 * @var string
	 */
	public $remoteId = null;

	/**
	 * 
	 * @var string
	 */
	public $version = null;

	/**
	 * 
	 * @var string
	 */
	public $assetId = null;

}
