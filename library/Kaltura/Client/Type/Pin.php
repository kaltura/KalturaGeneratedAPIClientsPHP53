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
 * PIN and its origin of definition
 * @package Kaltura
 * @subpackage Client
 */
class Pin extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaPin';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->pin))
			$this->pin = (string)$xml->pin;
		if(count($xml->origin))
			$this->origin = (string)$xml->origin;
		if(count($xml->type))
			$this->type = (string)$xml->type;
	}
	/**
	 * PIN code
	 * @var string
	 */
	public $pin = null;

	/**
	 * Where the PIN was defined at – account, household or user
	 * @var \Kaltura\Client\Enum\RuleLevel
	 */
	public $origin = null;

	/**
	 * PIN type
	 * @var \Kaltura\Client\Enum\PinType
	 */
	public $type = null;

}
