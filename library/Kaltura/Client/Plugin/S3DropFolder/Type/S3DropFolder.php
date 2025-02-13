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
namespace Kaltura\Client\Plugin\S3DropFolder\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class S3DropFolder extends \Kaltura\Client\Plugin\DropFolder\Type\DropFolder
{
	public function getKalturaObjectType()
	{
		return 'KalturaS3DropFolder';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->s3Host))
			$this->s3Host = (string)$xml->s3Host;
		if(count($xml->s3Region))
			$this->s3Region = (string)$xml->s3Region;
		if(count($xml->s3UserId))
			$this->s3UserId = (string)$xml->s3UserId;
		if(count($xml->s3Password))
			$this->s3Password = (string)$xml->s3Password;
	}
	/**
	 * 
	 * @var string
	 */
	public $s3Host = null;

	/**
	 * 
	 * @var string
	 */
	public $s3Region = null;

	/**
	 * 
	 * @var string
	 */
	public $s3UserId = null;

	/**
	 * 
	 * @var string
	 */
	public $s3Password = null;

}
