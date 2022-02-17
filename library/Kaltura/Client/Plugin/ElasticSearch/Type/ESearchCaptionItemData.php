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
// Copyright (C) 2006-2022  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\ElasticSearch\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class ESearchCaptionItemData extends \Kaltura\Client\Plugin\ElasticSearch\Type\ESearchItemData
{
	public function getKalturaObjectType()
	{
		return 'KalturaESearchCaptionItemData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->line))
			$this->line = (string)$xml->line;
		if(count($xml->startsAt))
			$this->startsAt = (int)$xml->startsAt;
		if(count($xml->endsAt))
			$this->endsAt = (int)$xml->endsAt;
		if(count($xml->language))
			$this->language = (string)$xml->language;
		if(count($xml->captionAssetId))
			$this->captionAssetId = (string)$xml->captionAssetId;
		if(count($xml->label))
			$this->label = (string)$xml->label;
	}
	/**
	 * 
	 * @var string
	 */
	public $line = null;

	/**
	 * 
	 * @var int
	 */
	public $startsAt = null;

	/**
	 * 
	 * @var int
	 */
	public $endsAt = null;

	/**
	 * 
	 * @var string
	 */
	public $language = null;

	/**
	 * 
	 * @var string
	 */
	public $captionAssetId = null;

	/**
	 * 
	 * @var string
	 */
	public $label = null;

}
