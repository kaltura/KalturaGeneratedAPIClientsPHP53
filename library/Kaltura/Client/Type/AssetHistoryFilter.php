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
class AssetHistoryFilter extends \Kaltura\Client\Type\Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaAssetHistoryFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->typeIn))
			$this->typeIn = (string)$xml->typeIn;
		if(count($xml->assetIdIn))
			$this->assetIdIn = (string)$xml->assetIdIn;
		if(count($xml->statusEqual))
			$this->statusEqual = (string)$xml->statusEqual;
	}
	/**
	 * Comma separated list of asset types to search within.
	 *             Possible values: 0 – EPG linear programs entries, any media type ID (according to media type IDs defined dynamically in the system).
	 *             If omitted – all types should be included.
	 * @var string
	 */
	public $typeIn = null;

	/**
	 * Comma separated list of asset identifiers.
	 * @var string
	 */
	public $assetIdIn = null;

	/**
	 * Which type of recently watched media to include in the result – those that finished watching, those that are in progress or both.
	 *             If omitted or specified filter = all – return all types.
	 *             Allowed values: progress – return medias that are in-progress, done – return medias that finished watching.
	 * @var \Kaltura\Client\Enum\WatchStatus
	 */
	public $statusEqual = null;

}
