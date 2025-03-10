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
class ImportJobData extends \Kaltura\Client\Type\JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaImportJobData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->srcFileUrl))
			$this->srcFileUrl = (string)$xml->srcFileUrl;
		if(count($xml->destFileLocalPath))
			$this->destFileLocalPath = (string)$xml->destFileLocalPath;
		if(count($xml->flavorAssetId))
			$this->flavorAssetId = (string)$xml->flavorAssetId;
		if(count($xml->fileSize))
			$this->fileSize = (int)$xml->fileSize;
		if(count($xml->destFileSharedPath))
			$this->destFileSharedPath = (string)$xml->destFileSharedPath;
		if(count($xml->urlHeaders))
		{
			if(empty($xml->urlHeaders))
				$this->urlHeaders = array();
			else
				$this->urlHeaders = \Kaltura\Client\ParseUtils::unmarshalArray($xml->urlHeaders, "KalturaString");
		}
		if(count($xml->shouldRedirect))
		{
			if(!empty($xml->shouldRedirect) && $xml->shouldRedirect != 'false')
				$this->shouldRedirect = true;
			else
				$this->shouldRedirect = false;
		}
	}
	/**
	 * 
	 * @var string
	 */
	public $srcFileUrl = null;

	/**
	 * 
	 * @var string
	 */
	public $destFileLocalPath = null;

	/**
	 * 
	 * @var string
	 */
	public $flavorAssetId = null;

	/**
	 * 
	 * @var int
	 */
	public $fileSize = null;

	/**
	 * 
	 * @var string
	 */
	public $destFileSharedPath = null;

	/**
	 * 
	 * @var array<KalturaString>
	 */
	public $urlHeaders;

	/**
	 * 
	 * @var bool
	 */
	public $shouldRedirect = null;

}
