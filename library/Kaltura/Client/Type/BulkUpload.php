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
class BulkUpload extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaBulkUpload';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->uploadedBy))
			$this->uploadedBy = (string)$xml->uploadedBy;
		if(count($xml->uploadedByUserId))
			$this->uploadedByUserId = (string)$xml->uploadedByUserId;
		if(count($xml->uploadedOn))
			$this->uploadedOn = (int)$xml->uploadedOn;
		if(count($xml->numOfEntries))
			$this->numOfEntries = (int)$xml->numOfEntries;
		if(count($xml->status))
			$this->status = (int)$xml->status;
		if(count($xml->logFileUrl))
			$this->logFileUrl = (string)$xml->logFileUrl;
		if(count($xml->csvFileUrl))
			$this->csvFileUrl = (string)$xml->csvFileUrl;
		if(count($xml->bulkFileUrl))
			$this->bulkFileUrl = (string)$xml->bulkFileUrl;
		if(count($xml->bulkUploadType))
			$this->bulkUploadType = (string)$xml->bulkUploadType;
		if(count($xml->results))
		{
			if(empty($xml->results))
				$this->results = array();
			else
				$this->results = \Kaltura\Client\ParseUtils::unmarshalArray($xml->results, "KalturaBulkUploadResult");
		}
		if(count($xml->error))
			$this->error = (string)$xml->error;
		if(count($xml->errorType))
			$this->errorType = (int)$xml->errorType;
		if(count($xml->errorNumber))
			$this->errorNumber = (int)$xml->errorNumber;
		if(count($xml->fileName))
			$this->fileName = (string)$xml->fileName;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->numOfObjects))
			$this->numOfObjects = (int)$xml->numOfObjects;
		if(count($xml->bulkUploadObjectType))
			$this->bulkUploadObjectType = (string)$xml->bulkUploadObjectType;
	}
	/**
	 * 
	 * @var int
	 */
	public $id = null;

	/**
	 * 
	 * @var string
	 */
	public $uploadedBy = null;

	/**
	 * 
	 * @var string
	 */
	public $uploadedByUserId = null;

	/**
	 * 
	 * @var int
	 */
	public $uploadedOn = null;

	/**
	 * 
	 * @var int
	 */
	public $numOfEntries = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\BatchJobStatus
	 */
	public $status = null;

	/**
	 * 
	 * @var string
	 */
	public $logFileUrl = null;

	/**
	 * 
	 * @var string
	 */
	public $csvFileUrl = null;

	/**
	 * 
	 * @var string
	 */
	public $bulkFileUrl = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\BulkUploadType
	 */
	public $bulkUploadType = null;

	/**
	 * 
	 * @var array<KalturaBulkUploadResult>
	 */
	public $results;

	/**
	 * 
	 * @var string
	 */
	public $error = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\BatchJobErrorTypes
	 */
	public $errorType = null;

	/**
	 * 
	 * @var int
	 */
	public $errorNumber = null;

	/**
	 * 
	 * @var string
	 */
	public $fileName = null;

	/**
	 * 
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 * @var int
	 */
	public $numOfObjects = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\BulkUploadObjectType
	 */
	public $bulkUploadObjectType = null;

}
