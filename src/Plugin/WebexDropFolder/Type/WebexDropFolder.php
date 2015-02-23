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
namespace Kaltura\Client\Plugin\WebexDropFolder\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class WebexDropFolder extends \Kaltura\Client\Plugin\DropFolder\Type\DropFolder
{
	public function getKalturaObjectType()
	{
		return 'KalturaWebexDropFolder';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		$this->webexUserId = (string)$xml->webexUserId;
		$this->webexPassword = (string)$xml->webexPassword;
		if(count($xml->webexSiteId))
			$this->webexSiteId = (int)$xml->webexSiteId;
		$this->webexPartnerId = (string)$xml->webexPartnerId;
		$this->webexServiceUrl = (string)$xml->webexServiceUrl;
		$this->webexHostIdMetadataFieldName = (string)$xml->webexHostIdMetadataFieldName;
	}
	/**
	 * 
	 * @var string
	 */
	public $webexUserId = null;

	/**
	 * 
	 * @var string
	 */
	public $webexPassword = null;

	/**
	 * 
	 * @var int
	 */
	public $webexSiteId = null;

	/**
	 * 
	 * @var string
	 */
	public $webexPartnerId = null;

	/**
	 * 
	 * @var string
	 */
	public $webexServiceUrl = null;

	/**
	 * 
	 * @var string
	 */
	public $webexHostIdMetadataFieldName = null;

}
