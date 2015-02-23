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
namespace Kaltura\Client\Plugin\Attachment\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class AttachmentAsset extends \Kaltura\Client\Type\Asset
{
	public function getKalturaObjectType()
	{
		return 'KalturaAttachmentAsset';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		$this->filename = (string)$xml->filename;
		$this->title = (string)$xml->title;
		$this->format = (string)$xml->format;
		if(count($xml->status))
			$this->status = (int)$xml->status;
	}
	/**
	 * The filename of the attachment asset content
	 * 	 
	 * @var string
	 */
	public $filename = null;

	/**
	 * Attachment asset title
	 * 	 
	 * @var string
	 */
	public $title = null;

	/**
	 * The attachment format
	 * 	 
	 * @var \Kaltura\Client\Plugin\Attachment\Enum\AttachmentType
	 */
	public $format = null;

	/**
	 * The status of the asset
	 * 	 
	 * @var \Kaltura\Client\Plugin\Attachment\Enum\AttachmentAssetStatus
	 * @readonly
	 */
	public $status = null;

}
