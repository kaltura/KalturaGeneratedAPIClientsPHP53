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
namespace Kaltura\Client\Plugin\Metadata\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class MetadataFieldChangedCondition extends \Kaltura\Client\Type\MatchCondition
{
	public function getKalturaObjectType()
	{
		return 'KalturaMetadataFieldChangedCondition';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->xPath))
			$this->xPath = (string)$xml->xPath;
		if(count($xml->profileId))
			$this->profileId = (int)$xml->profileId;
		if(count($xml->profileSystemName))
			$this->profileSystemName = (string)$xml->profileSystemName;
		if(count($xml->versionA))
			$this->versionA = (string)$xml->versionA;
		if(count($xml->versionB))
			$this->versionB = (string)$xml->versionB;
	}
	/**
	 * May contain the full xpath to the field in three formats
	 * 	 1. Slashed xPath, e.g. /metadata/myElementName
	 * 	 2. Using local-name function, e.g. /[local-name()='metadata']/[local-name()='myElementName']
	 * 	 3. Using only the field name, e.g. myElementName, it will be searched as //myElementName
	 * @var string
	 */
	public $xPath = null;

	/**
	 * Metadata profile id
	 * @var int
	 */
	public $profileId = null;

	/**
	 * Metadata profile system name
	 * @var string
	 */
	public $profileSystemName = null;

	/**
	 * 
	 * @var string
	 */
	public $versionA = null;

	/**
	 * 
	 * @var string
	 */
	public $versionB = null;

}
