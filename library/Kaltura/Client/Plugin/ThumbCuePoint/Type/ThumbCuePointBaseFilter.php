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
namespace Kaltura\Client\Plugin\ThumbCuePoint\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class ThumbCuePointBaseFilter extends \Kaltura\Client\Plugin\CuePoint\Type\CuePointFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaThumbCuePointBaseFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->descriptionLike))
			$this->descriptionLike = (string)$xml->descriptionLike;
		if(count($xml->descriptionMultiLikeOr))
			$this->descriptionMultiLikeOr = (string)$xml->descriptionMultiLikeOr;
		if(count($xml->descriptionMultiLikeAnd))
			$this->descriptionMultiLikeAnd = (string)$xml->descriptionMultiLikeAnd;
		if(count($xml->titleLike))
			$this->titleLike = (string)$xml->titleLike;
		if(count($xml->titleMultiLikeOr))
			$this->titleMultiLikeOr = (string)$xml->titleMultiLikeOr;
		if(count($xml->titleMultiLikeAnd))
			$this->titleMultiLikeAnd = (string)$xml->titleMultiLikeAnd;
		if(count($xml->subTypeEqual))
			$this->subTypeEqual = (int)$xml->subTypeEqual;
		if(count($xml->subTypeIn))
			$this->subTypeIn = (string)$xml->subTypeIn;
	}
	/**
	 * 
	 * @var string
	 */
	public $descriptionLike = null;

	/**
	 * 
	 * @var string
	 */
	public $descriptionMultiLikeOr = null;

	/**
	 * 
	 * @var string
	 */
	public $descriptionMultiLikeAnd = null;

	/**
	 * 
	 * @var string
	 */
	public $titleLike = null;

	/**
	 * 
	 * @var string
	 */
	public $titleMultiLikeOr = null;

	/**
	 * 
	 * @var string
	 */
	public $titleMultiLikeAnd = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\CuePoint\Enum\ThumbCuePointSubType
	 */
	public $subTypeEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $subTypeIn = null;

}
