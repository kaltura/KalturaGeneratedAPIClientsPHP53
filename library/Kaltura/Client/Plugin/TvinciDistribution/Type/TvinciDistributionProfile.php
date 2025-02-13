<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platforms allow them to do with
// text.
//
// Copyright (C) 2006-2023  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\TvinciDistribution\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class TvinciDistributionProfile extends \Kaltura\Client\Plugin\ContentDistribution\Type\ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaTvinciDistributionProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->ingestUrl))
			$this->ingestUrl = (string)$xml->ingestUrl;
		if(count($xml->username))
			$this->username = (string)$xml->username;
		if(count($xml->password))
			$this->password = (string)$xml->password;
		if(count($xml->tags))
		{
			if(empty($xml->tags))
				$this->tags = array();
			else
				$this->tags = \Kaltura\Client\ParseUtils::unmarshalArray($xml->tags, "KalturaTvinciDistributionTag");
		}
		if(count($xml->xsltFile))
			$this->xsltFile = (string)$xml->xsltFile;
		if(count($xml->innerType))
			$this->innerType = (string)$xml->innerType;
		if(count($xml->assetsType))
			$this->assetsType = (int)$xml->assetsType;
	}
	/**
	 * 
	 * @var string
	 */
	public $ingestUrl = null;

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
	 * Tags array for Tvinci distribution
	 * @var array<KalturaTvinciDistributionTag>
	 */
	public $tags;

	/**
	 * 
	 * @var string
	 */
	public $xsltFile = null;

	/**
	 * 
	 * @var string
	 */
	public $innerType = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\TvinciDistribution\Enum\TvinciAssetsType
	 */
	public $assetsType = null;

}
