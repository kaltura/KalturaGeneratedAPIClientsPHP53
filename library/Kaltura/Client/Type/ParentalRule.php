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
 * Parental rule
 * @package Kaltura
 * @subpackage Client
 */
class ParentalRule extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaParentalRule';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->order))
			$this->order = (int)$xml->order;
		if(count($xml->mediaTag))
			$this->mediaTag = (int)$xml->mediaTag;
		if(count($xml->epgTag))
			$this->epgTag = (int)$xml->epgTag;
		if(count($xml->blockAnonymousAccess))
		{
			if(!empty($xml->blockAnonymousAccess))
				$this->blockAnonymousAccess = true;
			else
				$this->blockAnonymousAccess = false;
		}
		if(count($xml->ruleType))
			$this->ruleType = (string)$xml->ruleType;
		if(count($xml->mediaTagValues))
		{
			if(empty($xml->mediaTagValues))
				$this->mediaTagValues = array();
			else
				$this->mediaTagValues = \Kaltura\Client\ParseUtils::unmarshalArray($xml->mediaTagValues, "KalturaStringValue");
		}
		if(count($xml->epgTagValues))
		{
			if(empty($xml->epgTagValues))
				$this->epgTagValues = array();
			else
				$this->epgTagValues = \Kaltura\Client\ParseUtils::unmarshalArray($xml->epgTagValues, "KalturaStringValue");
		}
		if(count($xml->isDefault))
		{
			if(!empty($xml->isDefault))
				$this->isDefault = true;
			else
				$this->isDefault = false;
		}
		if(count($xml->origin))
			$this->origin = (string)$xml->origin;
	}
	/**
	 * Unique parental rule identifier
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Rule display name
	 * @var string
	 */
	public $name = null;

	/**
	 * Explanatory description
	 * @var string
	 */
	public $description = null;

	/**
	 * Rule order within the full list of rules
	 * @var int
	 */
	public $order = null;

	/**
	 * Media asset tag ID to in which to look for corresponding trigger values
	 * @var int
	 */
	public $mediaTag = null;

	/**
	 * EPG asset tag ID to in which to look for corresponding trigger values
	 * @var int
	 */
	public $epgTag = null;

	/**
	 * Content that correspond to this rule is not available for guests
	 * @var bool
	 */
	public $blockAnonymousAccess = null;

	/**
	 * Rule type – Movies, TV series or both
	 * @var \Kaltura\Client\Enum\ParentalRuleType
	 */
	public $ruleType = null;

	/**
	 * Media tag values that trigger rule
	 * @var array<KalturaStringValue>
	 */
	public $mediaTagValues;

	/**
	 * EPG tag values that trigger rule
	 * @var array<KalturaStringValue>
	 */
	public $epgTagValues;

	/**
	 * Is the rule the default rule of the account
	 * @var bool
	 */
	public $isDefault = null;

	/**
	 * Where was this rule defined account, household or user
	 * @var \Kaltura\Client\Enum\RuleLevel
	 */
	public $origin = null;

}
