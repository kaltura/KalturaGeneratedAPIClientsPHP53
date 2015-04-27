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
// Copyright (C) 2006-2015  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\FeedDropFolder\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class FeedItemInfo extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaFeedItemInfo';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		$this->itemXPath = (string)$xml->itemXPath;
		$this->itemPublishDateXPath = (string)$xml->itemPublishDateXPath;
		$this->itemUniqueIdentifierXPath = (string)$xml->itemUniqueIdentifierXPath;
		$this->itemContentFileSizeXPath = (string)$xml->itemContentFileSizeXPath;
		$this->itemContentUrlXPath = (string)$xml->itemContentUrlXPath;
		$this->itemContentBitrateXPath = (string)$xml->itemContentBitrateXPath;
		$this->itemHashXPath = (string)$xml->itemHashXPath;
		$this->itemContentXpath = (string)$xml->itemContentXpath;
		$this->contentBitrateAttributeName = (string)$xml->contentBitrateAttributeName;
	}
	/**
	 * 
	 * @var string
	 */
	public $itemXPath = null;

	/**
	 * 
	 * @var string
	 */
	public $itemPublishDateXPath = null;

	/**
	 * 
	 * @var string
	 */
	public $itemUniqueIdentifierXPath = null;

	/**
	 * 
	 * @var string
	 */
	public $itemContentFileSizeXPath = null;

	/**
	 * 
	 * @var string
	 */
	public $itemContentUrlXPath = null;

	/**
	 * 
	 * @var string
	 */
	public $itemContentBitrateXPath = null;

	/**
	 * 
	 * @var string
	 */
	public $itemHashXPath = null;

	/**
	 * 
	 * @var string
	 */
	public $itemContentXpath = null;

	/**
	 * 
	 * @var string
	 */
	public $contentBitrateAttributeName = null;

}
