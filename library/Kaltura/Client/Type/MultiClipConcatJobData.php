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
class MultiClipConcatJobData extends \Kaltura\Client\Type\JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaMultiClipConcatJobData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->destEntryId))
			$this->destEntryId = (string)$xml->destEntryId;
		if(count($xml->multiTempEntryId))
			$this->multiTempEntryId = (string)$xml->multiTempEntryId;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->priority))
			$this->priority = (int)$xml->priority;
		if(count($xml->chapterNamePolicy))
			$this->chapterNamePolicy = (int)$xml->chapterNamePolicy;
		if(count($xml->aspectRatio) && !empty($xml->aspectRatio))
			$this->aspectRatio = \Kaltura\Client\ParseUtils::unmarshalObject($xml->aspectRatio, "KalturaCropAspectRatio");
		if(count($xml->operationResources))
		{
			if(empty($xml->operationResources))
				$this->operationResources = array();
			else
				$this->operationResources = \Kaltura\Client\ParseUtils::unmarshalArray($xml->operationResources, "KalturaOperationResource");
		}
	}
	/**
	 * 
	 * @var string
	 */
	public $destEntryId = null;

	/**
	 * 
	 * @var string
	 */
	public $multiTempEntryId = null;

	/**
	 * 
	 * @var int
	 */
	public $partnerId = null;

	/**
	 * 
	 * @var int
	 */
	public $priority = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\ChapterNamePolicy
	 */
	public $chapterNamePolicy = null;

	/**
	 * 
	 * @var \Kaltura\Client\Type\CropAspectRatio
	 */
	public $aspectRatio;

	/**
	 * 
	 * @var array<KalturaOperationResource>
	 */
	public $operationResources;

}
