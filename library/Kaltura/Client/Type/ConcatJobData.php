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
class ConcatJobData extends \Kaltura\Client\Type\JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaConcatJobData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->srcFiles))
		{
			if(empty($xml->srcFiles))
				$this->srcFiles = array();
			else
				$this->srcFiles = \Kaltura\Client\ParseUtils::unmarshalArray($xml->srcFiles, "KalturaString");
		}
		if(count($xml->destFilePath))
			$this->destFilePath = (string)$xml->destFilePath;
		if(count($xml->flavorAssetId))
			$this->flavorAssetId = (string)$xml->flavorAssetId;
		if(count($xml->offset))
			$this->offset = (float)$xml->offset;
		if(count($xml->duration))
			$this->duration = (float)$xml->duration;
		if(count($xml->concatenatedDuration))
			$this->concatenatedDuration = (float)$xml->concatenatedDuration;
		if(count($xml->shouldSort))
		{
			if(!empty($xml->shouldSort) && $xml->shouldSort != 'false')
				$this->shouldSort = true;
			else
				$this->shouldSort = false;
		}
		if(count($xml->conversionCommands))
		{
			if(empty($xml->conversionCommands))
				$this->conversionCommands = array();
			else
				$this->conversionCommands = \Kaltura\Client\ParseUtils::unmarshalArray($xml->conversionCommands, "KalturaString");
		}
		if(count($xml->multiSource))
		{
			if(!empty($xml->multiSource) && $xml->multiSource != 'false')
				$this->multiSource = true;
			else
				$this->multiSource = false;
		}
	}
	/**
	 * Source files to be concatenated
	 * @var array<KalturaString>
	 */
	public $srcFiles;

	/**
	 * Output file
	 * @var string
	 */
	public $destFilePath = null;

	/**
	 * Flavor asset to be ingested with the output
	 * @var string
	 */
	public $flavorAssetId = null;

	/**
	 * Clipping offset in seconds
	 * @var float
	 */
	public $offset = null;

	/**
	 * Clipping duration in seconds
	 * @var float
	 */
	public $duration = null;

	/**
	 * duration of the concated video
	 * @var float
	 */
	public $concatenatedDuration = null;

	/**
	 * Should Sort the clip parts
	 * @var bool
	 */
	public $shouldSort = null;

	/**
	 * conversion commands to be applied to source files
	 * @var array<KalturaString>
	 */
	public $conversionCommands;

	/**
	 * 
	 * @var bool
	 */
	public $multiSource = null;

}
