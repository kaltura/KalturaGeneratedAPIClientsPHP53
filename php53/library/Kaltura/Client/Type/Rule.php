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
// Copyright (C) 2006-2015  Kaltura Inc.
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
		
		$this->message = (string)$xml->message;
		if(empty($xml->actions))
			$this->actions = array();
		else
			$this->actions = \Kaltura\Client\ParseUtils::unmarshalArray($xml->actions, "KalturaRuleAction");
		if(empty($xml->conditions))
			$this->conditions = array();
		else
			$this->conditions = \Kaltura\Client\ParseUtils::unmarshalArray($xml->conditions, "KalturaCondition");
		if(empty($xml->contexts))
			$this->contexts = array();
		else
			$this->contexts = \Kaltura\Client\ParseUtils::unmarshalArray($xml->contexts, "KalturaContextTypeHolder");
		if(!empty($xml->stopProcessing))
			$this->stopProcessing = true;
	}
	/**
	 * Message to be thrown to the player in case the rule is fulfilled
	 * 	 
	 * @var string
	 */
	public $message = null;

	/**
	 * Actions to be performed by the player in case the rule is fulfilled
	 * 	 
	 * @var array of KalturaRuleAction
	 */
	public $actions;

	/**
	 * Conditions to validate the rule
	 * 	 
	 * @var array of KalturaCondition
	 */
	public $conditions;

	/**
	 * Indicates what contexts should be tested by this rule 
	 * 	 
	 * @var array of KalturaContextTypeHolder
	 */
	public $contexts;

	/**
	 * Indicates that this rule is enough and no need to continue checking the rest of the rules 
	 * 	 
	 * @var bool
	 */
	public $stopProcessing = null;

}
