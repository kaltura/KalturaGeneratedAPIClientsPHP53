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
namespace Kaltura\Client\Plugin\CrossKalturaDistribution\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class CrossKalturaDistributionJobProviderData extends \Kaltura\Client\Plugin\ContentDistribution\Type\ConfigurableDistributionJobProviderData
{
	public function getKalturaObjectType()
	{
		return 'KalturaCrossKalturaDistributionJobProviderData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->distributedFlavorAssets))
			$this->distributedFlavorAssets = (string)$xml->distributedFlavorAssets;
		if(count($xml->distributedThumbAssets))
			$this->distributedThumbAssets = (string)$xml->distributedThumbAssets;
		if(count($xml->distributedMetadata))
			$this->distributedMetadata = (string)$xml->distributedMetadata;
		if(count($xml->distributedCaptionAssets))
			$this->distributedCaptionAssets = (string)$xml->distributedCaptionAssets;
		if(count($xml->distributedFileAssets))
			$this->distributedFileAssets = (string)$xml->distributedFileAssets;
		if(count($xml->distributedAttachmentAssets))
			$this->distributedAttachmentAssets = (string)$xml->distributedAttachmentAssets;
		if(count($xml->distributedCuePoints))
			$this->distributedCuePoints = (string)$xml->distributedCuePoints;
		if(count($xml->distributedThumbCuePoints))
			$this->distributedThumbCuePoints = (string)$xml->distributedThumbCuePoints;
		if(count($xml->distributedTimedThumbAssets))
			$this->distributedTimedThumbAssets = (string)$xml->distributedTimedThumbAssets;
	}
	/**
	 * Key-value array where the keys are IDs of distributed flavor assets in the source account and the values are the matching IDs in the target account
	 * @var string
	 */
	public $distributedFlavorAssets = null;

	/**
	 * Key-value array where the keys are IDs of distributed thumb assets in the source account and the values are the matching IDs in the target account
	 * @var string
	 */
	public $distributedThumbAssets = null;

	/**
	 * Key-value array where the keys are IDs of distributed metadata objects in the source account and the values are the matching IDs in the target account
	 * @var string
	 */
	public $distributedMetadata = null;

	/**
	 * Key-value array where the keys are IDs of distributed caption assets in the source account and the values are the matching IDs in the target account
	 * @var string
	 */
	public $distributedCaptionAssets = null;

	/**
	 * Key-value array where the keys are IDs of distributed fileassets in the source account and the values are the matching IDs in the target account
	 * @var string
	 */
	public $distributedFileAssets = null;

	/**
	 * Key-value array where the keys are IDs of distributed caption assets in the source account and the values are the matching IDs in the target account
	 * @var string
	 */
	public $distributedAttachmentAssets = null;

	/**
	 * Key-value array where the keys are IDs of distributed cue points in the source account and the values are the matching IDs in the target account
	 * @var string
	 */
	public $distributedCuePoints = null;

	/**
	 * Key-value array where the keys are IDs of distributed thumb cue points in the source account and the values are the matching IDs in the target account
	 * @var string
	 */
	public $distributedThumbCuePoints = null;

	/**
	 * Key-value array where the keys are IDs of distributed timed thumb assets in the source account and the values are the matching IDs in the target account
	 * @var string
	 */
	public $distributedTimedThumbAssets = null;

}
