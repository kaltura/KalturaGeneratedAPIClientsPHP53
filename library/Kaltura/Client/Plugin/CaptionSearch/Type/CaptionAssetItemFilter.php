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
namespace Kaltura\Client\Plugin\CaptionSearch\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class CaptionAssetItemFilter extends \Kaltura\Client\Plugin\Caption\Type\CaptionAssetFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaCaptionAssetItemFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->contentLike))
			$this->contentLike = (string)$xml->contentLike;
		if(count($xml->contentMultiLikeOr))
			$this->contentMultiLikeOr = (string)$xml->contentMultiLikeOr;
		if(count($xml->contentMultiLikeAnd))
			$this->contentMultiLikeAnd = (string)$xml->contentMultiLikeAnd;
		if(count($xml->partnerDescriptionLike))
			$this->partnerDescriptionLike = (string)$xml->partnerDescriptionLike;
		if(count($xml->partnerDescriptionMultiLikeOr))
			$this->partnerDescriptionMultiLikeOr = (string)$xml->partnerDescriptionMultiLikeOr;
		if(count($xml->partnerDescriptionMultiLikeAnd))
			$this->partnerDescriptionMultiLikeAnd = (string)$xml->partnerDescriptionMultiLikeAnd;
		if(count($xml->languageEqual))
			$this->languageEqual = (string)$xml->languageEqual;
		if(count($xml->languageIn))
			$this->languageIn = (string)$xml->languageIn;
		if(count($xml->labelEqual))
			$this->labelEqual = (string)$xml->labelEqual;
		if(count($xml->labelIn))
			$this->labelIn = (string)$xml->labelIn;
		if(count($xml->startTimeGreaterThanOrEqual))
			$this->startTimeGreaterThanOrEqual = (int)$xml->startTimeGreaterThanOrEqual;
		if(count($xml->startTimeLessThanOrEqual))
			$this->startTimeLessThanOrEqual = (int)$xml->startTimeLessThanOrEqual;
		if(count($xml->endTimeGreaterThanOrEqual))
			$this->endTimeGreaterThanOrEqual = (int)$xml->endTimeGreaterThanOrEqual;
		if(count($xml->endTimeLessThanOrEqual))
			$this->endTimeLessThanOrEqual = (int)$xml->endTimeLessThanOrEqual;
	}
	/**
	 * 
	 * @var string
	 */
	public $contentLike = null;

	/**
	 * 
	 * @var string
	 */
	public $contentMultiLikeOr = null;

	/**
	 * 
	 * @var string
	 */
	public $contentMultiLikeAnd = null;

	/**
	 * 
	 * @var string
	 */
	public $partnerDescriptionLike = null;

	/**
	 * 
	 * @var string
	 */
	public $partnerDescriptionMultiLikeOr = null;

	/**
	 * 
	 * @var string
	 */
	public $partnerDescriptionMultiLikeAnd = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\Language
	 */
	public $languageEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $languageIn = null;

	/**
	 * 
	 * @var string
	 */
	public $labelEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $labelIn = null;

	/**
	 * 
	 * @var int
	 */
	public $startTimeGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $startTimeLessThanOrEqual = null;

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

}
