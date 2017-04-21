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
class Rule extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaRule';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->ruleData))
			$this->ruleData = (string)$xml->ruleData;
		if(count($xml->message))
			$this->message = (string)$xml->message;
		if(count($xml->code))
			$this->code = (string)$xml->code;
		if(count($xml->actions))
		{
			if(empty($xml->actions))
				$this->actions = array();
			else
				$this->actions = \Kaltura\Client\ParseUtils::unmarshalArray($xml->actions, "KalturaRuleAction");
		}
		if(count($xml->conditions))
		{
			if(empty($xml->conditions))
				$this->conditions = array();
			else
				$this->conditions = \Kaltura\Client\ParseUtils::unmarshalArray($xml->conditions, "KalturaCondition");
		}
		if(count($xml->contexts))
		{
			if(empty($xml->contexts))
				$this->contexts = array();
			else
				$this->contexts = \Kaltura\Client\ParseUtils::unmarshalArray($xml->contexts, "KalturaContextTypeHolder");
		}
		if(count($xml->stopProcessing))
		{
			if(!empty($xml->stopProcessing))
				$this->stopProcessing = true;
			else
				$this->stopProcessing = false;
		}
		if(count($xml->forceAdminValidation))
			$this->forceAdminValidation = (int)$xml->forceAdminValidation;
	}
	/**
	 * Short Rule Description
	 * @var string
	 */
	public $description = null;

	/**
	 * Rule Custom Data to allow saving rule specific information
	 * @var string
	 */
	public $ruleData = null;

	/**
	 * Message to be thrown to the player in case the rule is fulfilled
	 * @var string
	 */
	public $message = null;

	/**
	 * Code to be thrown to the player in case the rule is fulfilled
	 * @var string
	 */
	public $code = null;

	/**
	 * Actions to be performed by the player in case the rule is fulfilled
	 * @var array<KalturaRuleAction>
	 */
	public $actions;

	/**
	 * Conditions to validate the rule
	 * @var array<KalturaCondition>
	 */
	public $conditions;

	/**
	 * Indicates what contexts should be tested by this rule
	 * @var array<KalturaContextTypeHolder>
	 */
	public $contexts;

	/**
	 * Indicates that this rule is enough and no need to continue checking the rest of the rules
	 * @var bool
	 */
	public $stopProcessing = null;

	/**
	 * Indicates if we should force ks validation for admin ks users as well
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $forceAdminValidation = null;

}
