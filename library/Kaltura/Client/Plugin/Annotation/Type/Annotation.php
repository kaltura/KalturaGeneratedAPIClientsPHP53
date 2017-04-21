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
class Annotation extends \Kaltura\Client\Plugin\CuePoint\Type\CuePoint
{
	public function getKalturaObjectType()
	{
		return 'KalturaAnnotation';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->parentId))
			$this->parentId = (string)$xml->parentId;
		if(count($xml->text))
			$this->text = (string)$xml->text;
		if(count($xml->endTime))
			$this->endTime = (int)$xml->endTime;
		if(count($xml->duration))
			$this->duration = (int)$xml->duration;
		if(count($xml->depth))
			$this->depth = (int)$xml->depth;
		if(count($xml->childrenCount))
			$this->childrenCount = (int)$xml->childrenCount;
		if(count($xml->directChildrenCount))
			$this->directChildrenCount = (int)$xml->directChildrenCount;
		if(count($xml->isPublic))
			$this->isPublic = (int)$xml->isPublic;
		if(count($xml->searchableOnEntry))
			$this->searchableOnEntry = (int)$xml->searchableOnEntry;
	}
	/**
	 * 
	 * @var string
	 * @insertonly
	 */
	public $parentId = null;

	/**
	 * 
	 * @var string
	 */
	public $text = null;

	/**
	 * End time in milliseconds
	 * @var int
	 */
	public $endTime = null;

	/**
	 * Duration in milliseconds
	 * @var int
	 * @readonly
	 */
	public $duration = null;

	/**
	 * Depth in the tree
	 * @var int
	 * @readonly
	 */
	public $depth = null;

	/**
	 * Number of all descendants
	 * @var int
	 * @readonly
	 */
	public $childrenCount = null;

	/**
	 * Number of children, first generation only.
	 * @var int
	 * @readonly
	 */
	public $directChildrenCount = null;

	/**
	 * Is the annotation public.
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $isPublic = null;

	/**
	 * Should the cue point get indexed on the entry.
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $searchableOnEntry = null;

}
