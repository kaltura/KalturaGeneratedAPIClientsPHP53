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
class CaptureThumbJobData extends \Kaltura\Client\Type\JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaCaptureThumbJobData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->srcFileSyncLocalPath))
			$this->srcFileSyncLocalPath = (string)$xml->srcFileSyncLocalPath;
		if(count($xml->actualSrcFileSyncLocalPath))
			$this->actualSrcFileSyncLocalPath = (string)$xml->actualSrcFileSyncLocalPath;
		if(count($xml->srcFileSyncRemoteUrl))
			$this->srcFileSyncRemoteUrl = (string)$xml->srcFileSyncRemoteUrl;
		if(count($xml->thumbParamsOutputId))
			$this->thumbParamsOutputId = (int)$xml->thumbParamsOutputId;
		if(count($xml->thumbAssetId))
			$this->thumbAssetId = (string)$xml->thumbAssetId;
		if(count($xml->srcAssetId))
			$this->srcAssetId = (string)$xml->srcAssetId;
		if(count($xml->srcAssetType))
			$this->srcAssetType = (string)$xml->srcAssetType;
		if(count($xml->thumbPath))
			$this->thumbPath = (string)$xml->thumbPath;
	}
	/**
	 * 
	 * @var string
	 */
	public $srcFileSyncLocalPath = null;

	/**
	 * The translated path as used by the scheduler
	 * @var string
	 */
	public $actualSrcFileSyncLocalPath = null;

	/**
	 * 
	 * @var string
	 */
	public $srcFileSyncRemoteUrl = null;

	/**
	 * 
	 * @var int
	 */
	public $thumbParamsOutputId = null;

	/**
	 * 
	 * @var string
	 */
	public $thumbAssetId = null;

	/**
	 * 
	 * @var string
	 */
	public $srcAssetId = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\AssetType
	 */
	public $srcAssetType = null;

	/**
	 * 
	 * @var string
	 */
	public $thumbPath = null;

}
