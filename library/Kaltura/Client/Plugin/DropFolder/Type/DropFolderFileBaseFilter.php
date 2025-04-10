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
namespace Kaltura\Client\Plugin\DropFolder\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class DropFolderFileBaseFilter extends \Kaltura\Client\Type\Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaDropFolderFileBaseFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->idEqual))
			$this->idEqual = (int)$xml->idEqual;
		if(count($xml->idIn))
			$this->idIn = (string)$xml->idIn;
		if(count($xml->idGreaterThanOrEqual))
			$this->idGreaterThanOrEqual = (int)$xml->idGreaterThanOrEqual;
		if(count($xml->partnerIdEqual))
			$this->partnerIdEqual = (int)$xml->partnerIdEqual;
		if(count($xml->partnerIdIn))
			$this->partnerIdIn = (string)$xml->partnerIdIn;
		if(count($xml->dropFolderIdEqual))
			$this->dropFolderIdEqual = (int)$xml->dropFolderIdEqual;
		if(count($xml->dropFolderIdIn))
			$this->dropFolderIdIn = (string)$xml->dropFolderIdIn;
		if(count($xml->fileNameEqual))
			$this->fileNameEqual = (string)$xml->fileNameEqual;
		if(count($xml->fileNameIn))
			$this->fileNameIn = (string)$xml->fileNameIn;
		if(count($xml->fileNameLike))
			$this->fileNameLike = (string)$xml->fileNameLike;
		if(count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(count($xml->statusNotIn))
			$this->statusNotIn = (string)$xml->statusNotIn;
		if(count($xml->parsedSlugEqual))
			$this->parsedSlugEqual = (string)$xml->parsedSlugEqual;
		if(count($xml->parsedSlugIn))
			$this->parsedSlugIn = (string)$xml->parsedSlugIn;
		if(count($xml->parsedSlugLike))
			$this->parsedSlugLike = (string)$xml->parsedSlugLike;
		if(count($xml->parsedFlavorEqual))
			$this->parsedFlavorEqual = (string)$xml->parsedFlavorEqual;
		if(count($xml->parsedFlavorIn))
			$this->parsedFlavorIn = (string)$xml->parsedFlavorIn;
		if(count($xml->parsedFlavorLike))
			$this->parsedFlavorLike = (string)$xml->parsedFlavorLike;
		if(count($xml->leadDropFolderFileIdEqual))
			$this->leadDropFolderFileIdEqual = (int)$xml->leadDropFolderFileIdEqual;
		if(count($xml->deletedDropFolderFileIdEqual))
			$this->deletedDropFolderFileIdEqual = (int)$xml->deletedDropFolderFileIdEqual;
		if(count($xml->entryIdEqual))
			$this->entryIdEqual = (string)$xml->entryIdEqual;
		if(count($xml->errorCodeEqual))
			$this->errorCodeEqual = (string)$xml->errorCodeEqual;
		if(count($xml->errorCodeIn))
			$this->errorCodeIn = (string)$xml->errorCodeIn;
		if(count($xml->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$xml->createdAtGreaterThanOrEqual;
		if(count($xml->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$xml->createdAtLessThanOrEqual;
		if(count($xml->updatedAtGreaterThanOrEqual))
			$this->updatedAtGreaterThanOrEqual = (int)$xml->updatedAtGreaterThanOrEqual;
		if(count($xml->updatedAtLessThanOrEqual))
			$this->updatedAtLessThanOrEqual = (int)$xml->updatedAtLessThanOrEqual;
	}
	/**
	 * 
	 * @var int
	 */
	public $idEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $idIn = null;

	/**
	 * 
	 * @var int
	 */
	public $idGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $partnerIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $partnerIdIn = null;

	/**
	 * 
	 * @var int
	 */
	public $dropFolderIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $dropFolderIdIn = null;

	/**
	 * 
	 * @var string
	 */
	public $fileNameEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $fileNameIn = null;

	/**
	 * 
	 * @var string
	 */
	public $fileNameLike = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\DropFolder\Enum\DropFolderFileStatus
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

	/**
	 * 
	 * @var string
	 */
	public $parsedSlugEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $parsedSlugIn = null;

	/**
	 * 
	 * @var string
	 */
	public $parsedSlugLike = null;

	/**
	 * 
	 * @var string
	 */
	public $parsedFlavorEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $parsedFlavorIn = null;

	/**
	 * 
	 * @var string
	 */
	public $parsedFlavorLike = null;

	/**
	 * 
	 * @var int
	 */
	public $leadDropFolderFileIdEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $deletedDropFolderFileIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $entryIdEqual = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\DropFolder\Enum\DropFolderFileErrorCode
	 */
	public $errorCodeEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $errorCodeIn = null;

	/**
	 * 
	 * @var int
	 */
	public $createdAtGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $createdAtLessThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $updatedAtGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $updatedAtLessThanOrEqual = null;

}
