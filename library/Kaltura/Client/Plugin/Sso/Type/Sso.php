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
// Copyright (C) 2006-2022  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\Sso\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class Sso extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaSso';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->applicationType))
			$this->applicationType = (string)$xml->applicationType;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->domain))
			$this->domain = (string)$xml->domain;
		if(count($xml->status))
			$this->status = (int)$xml->status;
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(count($xml->redirectUrl))
			$this->redirectUrl = (string)$xml->redirectUrl;
		if(count($xml->data))
			$this->data = (string)$xml->data;
	}
	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 * @var string
	 */
	public $applicationType = null;

	/**
	 * 
	 * @var int
	 * @insertonly
	 */
	public $partnerId = null;

	/**
	 * 
	 * @var string
	 */
	public $domain = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Sso\Enum\SsoStatus
	 */
	public $status = null;

	/**
	 * Creation date as Unix timestamp (In seconds)
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Last update date as Unix timestamp (In seconds)
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * Redirect URL for a specific application type and (partner id or domain)
	 * @var string
	 */
	public $redirectUrl = null;

	/**
	 * 
	 * @var string
	 */
	public $data = null;

}
