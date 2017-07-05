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
class RelatedFilter extends \Kaltura\Client\Type\AssetFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaRelatedFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->kSql))
			$this->kSql = (string)$xml->kSql;
		if(count($xml->idEqual))
			$this->idEqual = (string)$xml->idEqual;
		if(count($xml->typeIn))
			$this->typeIn = (string)$xml->typeIn;
	}
	/**
	 * Search assets using dynamic criteria. Provided collection of nested expressions with key, comparison operators, value, and logical conjunction.
	 *             Possible keys: any Tag or Meta defined in the system and the following reserved keys: start_date, end_date. 
	 *             epg_id, media_id - for specific asset IDs.
	 *             geo_block - only valid value is &quot;true&quot;: When enabled, only assets that are not restriced to the user by geo-block rules will return.
	 *             parental_rules - only valid value is &quot;true&quot;: When enabled, only assets that the user doesn&#39;t need to provide PIN code will return.
	 *             epg_channel_id – the channel identifier of the EPG program.
	 *             entitled_assets - valid values: &quot;free&quot;, &quot;entitled&quot;, &quot;both&quot;. free - gets only free to watch assets. entitled - only those that the user is implicitly entitled to watch.
	 *             Comparison operators: for numerical fields =, &gt;, &gt;=, &lt;, &lt;=, : (in). For alpha-numerical fields =, != (not), ~ (like), !~, ^ (starts with). Logical conjunction: and, or. 
	 *             Search values are limited to 20 characters each.
	 *             (maximum length of entire filter is 1024 characters)
	 * @var string
	 */
	public $kSql = null;

	/**
	 * the ID of the asset for which to return related assets
	 * @var string
	 */
	public $idEqual = null;

	/**
	 * Comma separated list of asset types to search within. 
	 *             Possible values: 0 – EPG linear programs entries, any media type ID (according to media type IDs defined dynamically in the system).
	 *             If omitted – all types should be included.
	 * @var string
	 */
	public $typeIn = null;

}
