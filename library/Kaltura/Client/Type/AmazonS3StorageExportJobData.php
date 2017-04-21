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
 * @package Kaltura
 * @subpackage Client
 */
class AmazonS3StorageExportJobData extends \Kaltura\Client\Type\StorageExportJobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaAmazonS3StorageExportJobData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->filesPermissionInS3))
			$this->filesPermissionInS3 = (string)$xml->filesPermissionInS3;
		if(count($xml->s3Region))
			$this->s3Region = (string)$xml->s3Region;
		if(count($xml->sseType))
			$this->sseType = (string)$xml->sseType;
		if(count($xml->sseKmsKeyId))
			$this->sseKmsKeyId = (string)$xml->sseKmsKeyId;
		if(count($xml->signatureType))
			$this->signatureType = (string)$xml->signatureType;
		if(count($xml->endPoint))
			$this->endPoint = (string)$xml->endPoint;
	}
	/**
	 * 
	 * @var \Kaltura\Client\Enum\AmazonS3StorageProfileFilesPermissionLevel
	 */
	public $filesPermissionInS3 = null;

	/**
	 * 
	 * @var string
	 */
	public $s3Region = null;

	/**
	 * 
	 * @var string
	 */
	public $sseType = null;

	/**
	 * 
	 * @var string
	 */
	public $sseKmsKeyId = null;

	/**
	 * 
	 * @var string
	 */
	public $signatureType = null;

	/**
	 * 
	 * @var string
	 */
	public $endPoint = null;

}
