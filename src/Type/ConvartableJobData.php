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
// Copyright (C) 2006-2011  Kaltura Inc.
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
class ConvartableJobData extends \Kaltura\Client\Type\JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaConvartableJobData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		$this->srcFileSyncLocalPath = (string)$xml->srcFileSyncLocalPath;
		$this->actualSrcFileSyncLocalPath = (string)$xml->actualSrcFileSyncLocalPath;
		$this->srcFileSyncRemoteUrl = (string)$xml->srcFileSyncRemoteUrl;
		if(empty($xml->srcFileSyncs))
			$this->srcFileSyncs = array();
		else
			$this->srcFileSyncs = \Kaltura\Client\ParseUtils::unmarshalArray($xml->srcFileSyncs, "KalturaSourceFileSyncDescriptor");
		if(count($xml->engineVersion))
			$this->engineVersion = (int)$xml->engineVersion;
		if(count($xml->flavorParamsOutputId))
			$this->flavorParamsOutputId = (int)$xml->flavorParamsOutputId;
		if(!empty($xml->flavorParamsOutput))
			$this->flavorParamsOutput = \Kaltura\Client\ParseUtils::unmarshalObject($xml->flavorParamsOutput, "KalturaFlavorParamsOutput");
		if(count($xml->mediaInfoId))
			$this->mediaInfoId = (int)$xml->mediaInfoId;
		if(count($xml->currentOperationSet))
			$this->currentOperationSet = (int)$xml->currentOperationSet;
		if(count($xml->currentOperationIndex))
			$this->currentOperationIndex = (int)$xml->currentOperationIndex;
		if(empty($xml->pluginData))
			$this->pluginData = array();
		else
			$this->pluginData = \Kaltura\Client\ParseUtils::unmarshalArray($xml->pluginData, "KalturaKeyValue");
	}
	/**
	 * 
	 * @var string
	 */
	public $srcFileSyncLocalPath = null;

	/**
	 * The translated path as used by the scheduler
	 * 	 
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
	 * @var array of KalturaSourceFileSyncDescriptor
	 */
	public $srcFileSyncs;

	/**
	 * 
	 * @var int
	 */
	public $engineVersion = null;

	/**
	 * 
	 * @var int
	 */
	public $flavorParamsOutputId = null;

	/**
	 * 
	 * @var \Kaltura\Client\Type\FlavorParamsOutput
	 */
	public $flavorParamsOutput;

	/**
	 * 
	 * @var int
	 */
	public $mediaInfoId = null;

	/**
	 * 
	 * @var int
	 */
	public $currentOperationSet = null;

	/**
	 * 
	 * @var int
	 */
	public $currentOperationIndex = null;

	/**
	 * 
	 * @var array of KalturaKeyValue
	 */
	public $pluginData;

}
