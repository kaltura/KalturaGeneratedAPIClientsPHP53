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
class DetachedResponseProfile extends \Kaltura\Client\Type\BaseResponseProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaDetachedResponseProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->type))
			$this->type = (int)$xml->type;
		if(count($xml->fields))
			$this->fields = (string)$xml->fields;
		if(count($xml->filter) && !empty($xml->filter))
			$this->filter = \Kaltura\Client\ParseUtils::unmarshalObject($xml->filter, "KalturaRelatedFilter");
		if(count($xml->pager) && !empty($xml->pager))
			$this->pager = \Kaltura\Client\ParseUtils::unmarshalObject($xml->pager, "KalturaFilterPager");
		if(count($xml->relatedProfiles))
		{
			if(empty($xml->relatedProfiles))
				$this->relatedProfiles = array();
			else
				$this->relatedProfiles = \Kaltura\Client\ParseUtils::unmarshalArray($xml->relatedProfiles, "KalturaDetachedResponseProfile");
		}
		if(count($xml->mappings))
		{
			if(empty($xml->mappings))
				$this->mappings = array();
			else
				$this->mappings = \Kaltura\Client\ParseUtils::unmarshalArray($xml->mappings, "KalturaResponseProfileMapping");
		}
	}
	/**
	 * Friendly name
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\ResponseProfileType
	 */
	public $type = null;

	/**
	 * Comma separated fields list to be included or excluded
	 * @var string
	 */
	public $fields = null;

	/**
	 * 
	 * @var \Kaltura\Client\Type\RelatedFilter
	 */
	public $filter;

	/**
	 * 
	 * @var \Kaltura\Client\Type\FilterPager
	 */
	public $pager;

	/**
	 * 
	 * @var array<KalturaDetachedResponseProfile>
	 */
	public $relatedProfiles;

	/**
	 * 
	 * @var array<KalturaResponseProfileMapping>
	 */
	public $mappings;

}
