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
namespace Kaltura\Client\Plugin\DropFolder\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class DropFolderBaseFilter extends \Kaltura\Client\Type\Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaDropFolderBaseFilter';
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
		if(count($xml->partnerIdEqual))
			$this->partnerIdEqual = (int)$xml->partnerIdEqual;
		if(count($xml->partnerIdIn))
			$this->partnerIdIn = (string)$xml->partnerIdIn;
		if(count($xml->nameLike))
			$this->nameLike = (string)$xml->nameLike;
		if(count($xml->typeEqual))
			$this->typeEqual = (string)$xml->typeEqual;
		if(count($xml->typeIn))
			$this->typeIn = (string)$xml->typeIn;
		if(count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(count($xml->conversionProfileIdEqual))
			$this->conversionProfileIdEqual = (int)$xml->conversionProfileIdEqual;
		if(count($xml->conversionProfileIdIn))
			$this->conversionProfileIdIn = (string)$xml->conversionProfileIdIn;
		if(count($xml->dcEqual))
			$this->dcEqual = (int)$xml->dcEqual;
		if(count($xml->dcIn))
			$this->dcIn = (string)$xml->dcIn;
		if(count($xml->pathEqual))
			$this->pathEqual = (string)$xml->pathEqual;
		if(count($xml->pathLike))
			$this->pathLike = (string)$xml->pathLike;
		if(count($xml->fileHandlerTypeEqual))
			$this->fileHandlerTypeEqual = (string)$xml->fileHandlerTypeEqual;
		if(count($xml->fileHandlerTypeIn))
			$this->fileHandlerTypeIn = (string)$xml->fileHandlerTypeIn;
		if(count($xml->fileNamePatternsLike))
			$this->fileNamePatternsLike = (string)$xml->fileNamePatternsLike;
		if(count($xml->fileNamePatternsMultiLikeOr))
			$this->fileNamePatternsMultiLikeOr = (string)$xml->fileNamePatternsMultiLikeOr;
		if(count($xml->fileNamePatternsMultiLikeAnd))
			$this->fileNamePatternsMultiLikeAnd = (string)$xml->fileNamePatternsMultiLikeAnd;
		if(count($xml->tagsLike))
			$this->tagsLike = (string)$xml->tagsLike;
		if(count($xml->tagsMultiLikeOr))
			$this->tagsMultiLikeOr = (string)$xml->tagsMultiLikeOr;
		if(count($xml->tagsMultiLikeAnd))
			$this->tagsMultiLikeAnd = (string)$xml->tagsMultiLikeAnd;
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
	public $partnerIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $partnerIdIn = null;

	/**
	 * 
	 * @var string
	 */
	public $nameLike = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\DropFolder\Enum\DropFolderType
	 */
	public $typeEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $typeIn = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\DropFolder\Enum\DropFolderStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 * @var int
	 */
	public $conversionProfileIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $conversionProfileIdIn = null;

	/**
	 * 
	 * @var int
	 */
	public $dcEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $dcIn = null;

	/**
	 * 
	 * @var string
	 */
	public $pathEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $pathLike = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\DropFolder\Enum\DropFolderFileHandlerType
	 */
	public $fileHandlerTypeEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $fileHandlerTypeIn = null;

	/**
	 * 
	 * @var string
	 */
	public $fileNamePatternsLike = null;

	/**
	 * 
	 * @var string
	 */
	public $fileNamePatternsMultiLikeOr = null;

	/**
	 * 
	 * @var string
	 */
	public $fileNamePatternsMultiLikeAnd = null;

	/**
	 * 
	 * @var string
	 */
	public $tagsLike = null;

	/**
	 * 
	 * @var string
	 */
	public $tagsMultiLikeOr = null;

	/**
	 * 
	 * @var string
	 */
	public $tagsMultiLikeAnd = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\DropFolder\Enum\DropFolderErrorCode
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
