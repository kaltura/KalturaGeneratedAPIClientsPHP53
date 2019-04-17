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
// Copyright (C) 2006-2019  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\Caption\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class CopyCaptionsJobData extends \Kaltura\Client\Type\JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaCopyCaptionsJobData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->entryId))
			$this->entryId = (string)$xml->entryId;
		if(count($xml->clipsDescriptionArray))
		{
			if(empty($xml->clipsDescriptionArray))
				$this->clipsDescriptionArray = array();
			else
				$this->clipsDescriptionArray = \Kaltura\Client\ParseUtils::unmarshalArray($xml->clipsDescriptionArray, "KalturaClipDescription");
		}
		if(count($xml->fullCopy))
		{
			if(!empty($xml->fullCopy) && $xml->fullCopy != 'false')
				$this->fullCopy = true;
			else
				$this->fullCopy = false;
		}
	}
	/**
	 * entry Id
	 * @var string
	 */
	public $entryId = null;

	/**
	 * an array of source start time and duration
	 * @var array<KalturaClipDescription>
	 */
	public $clipsDescriptionArray;

	/**
	 * 
	 * @var bool
	 */
	public $fullCopy = null;

}
