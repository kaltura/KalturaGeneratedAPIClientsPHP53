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
 * Watch history asset info
 * @package Kaltura
 * @subpackage Client
 */
class AssetHistory extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaAssetHistory';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->assetId))
			$this->assetId = (string)$xml->assetId;
		if(count($xml->position))
			$this->position = (int)$xml->position;
		if(count($xml->duration))
			$this->duration = (int)$xml->duration;
		if(count($xml->watchedDate))
			$this->watchedDate = (string)$xml->watchedDate;
		if(count($xml->finishedWatching))
		{
			if(!empty($xml->finishedWatching))
				$this->finishedWatching = true;
			else
				$this->finishedWatching = false;
		}
	}
	/**
	 * Asset identifier
	 * @var int
	 * @readonly
	 */
	public $assetId = null;

	/**
	 * Position in seconds of the relevant asset
	 * @var int
	 * @readonly
	 */
	public $position = null;

	/**
	 * Duration in seconds of the relevant asset
	 * @var int
	 * @readonly
	 */
	public $duration = null;

	/**
	 * The date when the media was last watched
	 * @var int
	 * @readonly
	 */
	public $watchedDate = null;

	/**
	 * Boolean which specifies whether the user finished watching the movie or not
	 * @var bool
	 * @readonly
	 */
	public $finishedWatching = null;

}
