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
// Copyright (C) 2006-2021  Kaltura Inc.
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
class ExtractMediaJobData extends \Kaltura\Client\Type\ConvartableJobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaExtractMediaJobData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->flavorAssetId))
			$this->flavorAssetId = (string)$xml->flavorAssetId;
		if(count($xml->calculateComplexity))
		{
			if(!empty($xml->calculateComplexity) && $xml->calculateComplexity != 'false')
				$this->calculateComplexity = true;
			else
				$this->calculateComplexity = false;
		}
		if(count($xml->extractId3Tags))
		{
			if(!empty($xml->extractId3Tags) && $xml->extractId3Tags != 'false')
				$this->extractId3Tags = true;
			else
				$this->extractId3Tags = false;
		}
		if(count($xml->destDataFilePath))
			$this->destDataFilePath = (string)$xml->destDataFilePath;
		if(count($xml->detectGOP))
			$this->detectGOP = (int)$xml->detectGOP;
	}
	/**
	 * 
	 * @var string
	 */
	public $flavorAssetId = null;

	/**
	 * 
	 * @var bool
	 */
	public $calculateComplexity = null;

	/**
	 * 
	 * @var bool
	 */
	public $extractId3Tags = null;

	/**
	 * The data output file
	 * @var string
	 */
	public $destDataFilePath = null;

	/**
	 * 
	 * @var int
	 */
	public $detectGOP = null;

}
