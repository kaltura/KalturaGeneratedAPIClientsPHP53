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
// Copyright (C) 2006-2011  Kaltura Inc.
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
class DeliveryProfileGenericAppleHttp extends \Kaltura\Client\Type\DeliveryProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaDeliveryProfileGenericAppleHttp';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		$this->pattern = (string)$xml->pattern;
		$this->rendererClass = (string)$xml->rendererClass;
		if(count($xml->manifestRedirect))
			$this->manifestRedirect = (int)$xml->manifestRedirect;
	}
	/**
	 * 
	 * @var string
	 */
	public $pattern = null;

	/**
	 * rendererClass
	 * 	 
	 * @var string
	 */
	public $rendererClass = null;

	/**
	 * Enable to make playManifest redirect to the domain of the delivery profile
	 * 	 
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $manifestRedirect = null;

}
