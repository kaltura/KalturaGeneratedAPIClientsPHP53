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
namespace Kaltura\Client\Type;

/**
 * Asset Comment
 * @package Kaltura
 * @subpackage Client
 */
class AssetComment extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaAssetComment';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->assetId))
			$this->assetId = (string)$xml->assetId;
		if(count($xml->assetType))
			$this->assetType = (string)$xml->assetType;
		if(count($xml->header))
			$this->header = (string)$xml->header;
		if(count($xml->subHeader))
			$this->subHeader = (string)$xml->subHeader;
		if(count($xml->text))
			$this->text = (string)$xml->text;
		if(count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(count($xml->writer))
			$this->writer = (string)$xml->writer;
	}
	/**
	 * Comment ID
	 * @var int
	 */
	public $id = null;

	/**
	 * Asset identifier
	 * @var string
	 */
	public $assetId = null;

	/**
	 * Asset Type
	 * @var \Kaltura\Client\Enum\AssetType
	 */
	public $assetType = null;

	/**
	 * Header
	 * @var string
	 */
	public $header = null;

	/**
	 * Sub Header
	 * @var string
	 */
	public $subHeader = null;

	/**
	 * Text
	 * @var string
	 */
	public $text = null;

	/**
	 * CreateDate
	 * @var int
	 */
	public $createDate = null;

	/**
	 * Writer
	 * @var string
	 */
	public $writer = null;

}
