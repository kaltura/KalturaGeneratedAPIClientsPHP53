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
namespace Kaltura\Client\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class BulkUploadJobData extends \Kaltura\Client\Type\JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaBulkUploadJobData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		$this->userId = (string)$xml->userId;
		$this->uploadedBy = (string)$xml->uploadedBy;
		if(count($xml->conversionProfileId))
			$this->conversionProfileId = (int)$xml->conversionProfileId;
		$this->resultsFileLocalPath = (string)$xml->resultsFileLocalPath;
		$this->resultsFileUrl = (string)$xml->resultsFileUrl;
		if(count($xml->numOfEntries))
			$this->numOfEntries = (int)$xml->numOfEntries;
		if(count($xml->numOfObjects))
			$this->numOfObjects = (int)$xml->numOfObjects;
		$this->filePath = (string)$xml->filePath;
		$this->bulkUploadObjectType = (string)$xml->bulkUploadObjectType;
		$this->fileName = (string)$xml->fileName;
		if(!empty($xml->objectData))
			$this->objectData = \Kaltura\Client\ParseUtils::unmarshalObject($xml->objectData, "KalturaBulkUploadObjectData");
		$this->type = (string)$xml->type;
		$this->emailRecipients = (string)$xml->emailRecipients;
		if(count($xml->numOfErrorObjects))
			$this->numOfErrorObjects = (int)$xml->numOfErrorObjects;
	}
	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $userId = null;

	/**
	 * The screen name of the user
	 * 	 
	 * @var string
	 * @readonly
	 */
	public $uploadedBy = null;

	/**
	 * Selected profile id for all bulk entries
	 * 	 
	 * @var int
	 * @readonly
	 */
	public $conversionProfileId = null;

	/**
	 * Created by the API
	 * 	 
	 * @var string
	 * @readonly
	 */
	public $resultsFileLocalPath = null;

	/**
	 * Created by the API
	 * 	 
	 * @var string
	 * @readonly
	 */
	public $resultsFileUrl = null;

	/**
	 * Number of created entries
	 * 	 
	 * @var int
	 * @readonly
	 */
	public $numOfEntries = null;

	/**
	 * Number of created objects
	 * 	 
	 * @var int
	 * @readonly
	 */
	public $numOfObjects = null;

	/**
	 * The bulk upload file path
	 * 	 
	 * @var string
	 * @readonly
	 */
	public $filePath = null;

	/**
	 * Type of object for bulk upload
	 * 	 
	 * @var \Kaltura\Client\Enum\BulkUploadObjectType
	 * @readonly
	 */
	public $bulkUploadObjectType = null;

	/**
	 * Friendly name of the file, used to be recognized later in the logs.
	 * 	 
	 * @var string
	 */
	public $fileName = null;

	/**
	 * Data pertaining to the objects being uploaded
	 * 	 
	 * @var \Kaltura\Client\Type\BulkUploadObjectData
	 * @readonly
	 */
	public $objectData;

	/**
	 * Type of bulk upload
	 * 	 
	 * @var \Kaltura\Client\Enum\BulkUploadType
	 * @readonly
	 */
	public $type = null;

	/**
	 * Recipients of the email for bulk upload success/failure
	 * 	 
	 * @var string
	 */
	public $emailRecipients = null;

	/**
	 * Number of objects that finished on error status
	 * 	 
	 * @var int
	 */
	public $numOfErrorObjects = null;

}
