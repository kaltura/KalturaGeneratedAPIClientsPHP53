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
namespace Kaltura\Client\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class OperationResources extends \Kaltura\Client\Type\ContentResource
{
	public function getKalturaObjectType()
	{
		return 'KalturaOperationResources';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->resources))
		{
			if(empty($xml->resources))
				$this->resources = array();
			else
				$this->resources = \Kaltura\Client\ParseUtils::unmarshalArray($xml->resources, "KalturaOperationResource");
		}
		if(count($xml->chapterNamePolicy))
			$this->chapterNamePolicy = (int)$xml->chapterNamePolicy;
		if(count($xml->dimensionsAttributes))
		{
			if(empty($xml->dimensionsAttributes))
				$this->dimensionsAttributes = array();
			else
				$this->dimensionsAttributes = \Kaltura\Client\ParseUtils::unmarshalArray($xml->dimensionsAttributes, "KalturaDimensionsAttributes");
		}
	}
	/**
	 * 
	 * @var array<KalturaOperationResource>
	 */
	public $resources;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\ChapterNamePolicy
	 */
	public $chapterNamePolicy = null;

	/**
	 * 
	 * @var array<KalturaDimensionsAttributes>
	 */
	public $dimensionsAttributes;

}
