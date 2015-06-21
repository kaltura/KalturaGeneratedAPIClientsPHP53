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
// Copyright (C) 2006-2015  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\AdminConsole\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class InvestigateThumbAssetData extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaInvestigateThumbAssetData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->thumbAsset) && !empty($xml->thumbAsset))
			$this->thumbAsset = \Kaltura\Client\ParseUtils::unmarshalObject($xml->thumbAsset, "KalturaThumbAsset");
		if(count($xml->fileSyncs) && !empty($xml->fileSyncs))
			$this->fileSyncs = \Kaltura\Client\ParseUtils::unmarshalObject($xml->fileSyncs, "KalturaFileSyncListResponse");
		if(count($xml->thumbParams) && !empty($xml->thumbParams))
			$this->thumbParams = \Kaltura\Client\ParseUtils::unmarshalObject($xml->thumbParams, "KalturaThumbParams");
		if(count($xml->thumbParamsOutputs) && !empty($xml->thumbParamsOutputs))
			$this->thumbParamsOutputs = \Kaltura\Client\ParseUtils::unmarshalObject($xml->thumbParamsOutputs, "KalturaThumbParamsOutputListResponse");
	}
	/**
	 * 
	 * @var \Kaltura\Client\Type\ThumbAsset
	 * @readonly
	 */
	public $thumbAsset;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\FileSync\Type\FileSyncListResponse
	 * @readonly
	 */
	public $fileSyncs;

	/**
	 * 
	 * @var \Kaltura\Client\Type\ThumbParams
	 * @readonly
	 */
	public $thumbParams;

	/**
	 * 
	 * @var \Kaltura\Client\Type\ThumbParamsOutputListResponse
	 * @readonly
	 */
	public $thumbParamsOutputs;

}
