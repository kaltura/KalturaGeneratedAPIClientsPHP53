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
namespace Kaltura\Client\Plugin\Annotation\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class AnnotationBaseFilter extends \Kaltura\Client\Plugin\CuePoint\Type\CuePointFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaAnnotationBaseFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->parentIdEqual))
			$this->parentIdEqual = (string)$xml->parentIdEqual;
		if(count($xml->parentIdIn))
			$this->parentIdIn = (string)$xml->parentIdIn;
		if(count($xml->textLike))
			$this->textLike = (string)$xml->textLike;
		if(count($xml->textMultiLikeOr))
			$this->textMultiLikeOr = (string)$xml->textMultiLikeOr;
		if(count($xml->textMultiLikeAnd))
			$this->textMultiLikeAnd = (string)$xml->textMultiLikeAnd;
		if(count($xml->endTimeGreaterThanOrEqual))
			$this->endTimeGreaterThanOrEqual = (int)$xml->endTimeGreaterThanOrEqual;
		if(count($xml->endTimeLessThanOrEqual))
			$this->endTimeLessThanOrEqual = (int)$xml->endTimeLessThanOrEqual;
		if(count($xml->durationGreaterThanOrEqual))
			$this->durationGreaterThanOrEqual = (int)$xml->durationGreaterThanOrEqual;
		if(count($xml->durationLessThanOrEqual))
			$this->durationLessThanOrEqual = (int)$xml->durationLessThanOrEqual;
		if(count($xml->isPublicEqual))
			$this->isPublicEqual = (int)$xml->isPublicEqual;
	}
	/**
	 * 
	 * @var string
	 */
	public $parentIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $parentIdIn = null;

	/**
	 * 
	 * @var string
	 */
	public $textLike = null;

	/**
	 * 
	 * @var string
	 */
	public $textMultiLikeOr = null;

	/**
	 * 
	 * @var string
	 */
	public $textMultiLikeAnd = null;

	/**
	 * 
	 * @var int
	 */
	public $endTimeGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $endTimeLessThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $durationGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $durationLessThanOrEqual = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $isPublicEqual = null;

}
