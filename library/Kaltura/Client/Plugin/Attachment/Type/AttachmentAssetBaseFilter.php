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
namespace Kaltura\Client\Plugin\Attachment\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class AttachmentAssetBaseFilter extends \Kaltura\Client\Type\AssetFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaAttachmentAssetBaseFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->formatEqual))
			$this->formatEqual = (string)$xml->formatEqual;
		if(count($xml->formatIn))
			$this->formatIn = (string)$xml->formatIn;
		if(count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(count($xml->statusNotIn))
			$this->statusNotIn = (string)$xml->statusNotIn;
	}
	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Attachment\Enum\AttachmentType
	 */
	public $formatEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $formatIn = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Attachment\Enum\AttachmentAssetStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 * @var string
	 */
	public $statusNotIn = null;

}
