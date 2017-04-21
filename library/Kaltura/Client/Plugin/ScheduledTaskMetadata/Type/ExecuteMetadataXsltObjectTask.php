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
namespace Kaltura\Client\Plugin\ScheduledTaskMetadata\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class ExecuteMetadataXsltObjectTask extends \Kaltura\Client\Plugin\ScheduledTask\Type\ObjectTask
{
	public function getKalturaObjectType()
	{
		return 'KalturaExecuteMetadataXsltObjectTask';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->metadataProfileId))
			$this->metadataProfileId = (int)$xml->metadataProfileId;
		if(count($xml->metadataObjectType))
			$this->metadataObjectType = (string)$xml->metadataObjectType;
		if(count($xml->xslt))
			$this->xslt = (string)$xml->xslt;
	}
	/**
	 * Metadata profile id to lookup the metadata object
	 * @var int
	 */
	public $metadataProfileId = null;

	/**
	 * Metadata object type to lookup the metadata object
	 * @var \Kaltura\Client\Plugin\Metadata\Enum\MetadataObjectType
	 */
	public $metadataObjectType = null;

	/**
	 * The XSLT to execute
	 * @var string
	 */
	public $xslt = null;

}
