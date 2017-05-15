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
namespace Kaltura\Client\Plugin\FtpDistribution\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class FtpDistributionFile extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaFtpDistributionFile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->assetId))
			$this->assetId = (string)$xml->assetId;
		if(count($xml->filename))
			$this->filename = (string)$xml->filename;
		if(count($xml->contents))
			$this->contents = (string)$xml->contents;
		if(count($xml->localFilePath))
			$this->localFilePath = (string)$xml->localFilePath;
		if(count($xml->version))
			$this->version = (string)$xml->version;
		if(count($xml->hash))
			$this->hash = (string)$xml->hash;
	}
	/**
	 * 
	 * @var string
	 */
	public $assetId = null;

	/**
	 * 
	 * @var string
	 */
	public $filename = null;

	/**
	 * 
	 * @var string
	 */
	public $contents = null;

	/**
	 * 
	 * @var string
	 */
	public $localFilePath = null;

	/**
	 * 
	 * @var string
	 */
	public $version = null;

	/**
	 * 
	 * @var string
	 */
	public $hash = null;

}
