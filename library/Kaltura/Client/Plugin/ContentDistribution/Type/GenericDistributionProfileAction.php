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
namespace Kaltura\Client\Plugin\ContentDistribution\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class GenericDistributionProfileAction extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaGenericDistributionProfileAction';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->protocol))
			$this->protocol = (int)$xml->protocol;
		if(count($xml->serverUrl))
			$this->serverUrl = (string)$xml->serverUrl;
		if(count($xml->serverPath))
			$this->serverPath = (string)$xml->serverPath;
		if(count($xml->username))
			$this->username = (string)$xml->username;
		if(count($xml->password))
			$this->password = (string)$xml->password;
		if(count($xml->ftpPassiveMode))
		{
			if(!empty($xml->ftpPassiveMode))
				$this->ftpPassiveMode = true;
			else
				$this->ftpPassiveMode = false;
		}
		if(count($xml->httpFieldName))
			$this->httpFieldName = (string)$xml->httpFieldName;
		if(count($xml->httpFileName))
			$this->httpFileName = (string)$xml->httpFileName;
	}
	/**
	 * 
	 * @var \Kaltura\Client\Plugin\ContentDistribution\Enum\DistributionProtocol
	 */
	public $protocol = null;

	/**
	 * 
	 * @var string
	 */
	public $serverUrl = null;

	/**
	 * 
	 * @var string
	 */
	public $serverPath = null;

	/**
	 * 
	 * @var string
	 */
	public $username = null;

	/**
	 * 
	 * @var string
	 */
	public $password = null;

	/**
	 * 
	 * @var bool
	 */
	public $ftpPassiveMode = null;

	/**
	 * 
	 * @var string
	 */
	public $httpFieldName = null;

	/**
	 * 
	 * @var string
	 */
	public $httpFileName = null;

}
