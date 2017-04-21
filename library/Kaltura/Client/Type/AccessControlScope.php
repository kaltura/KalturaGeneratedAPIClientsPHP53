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
class AccessControlScope extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaAccessControlScope';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->referrer))
			$this->referrer = (string)$xml->referrer;
		if(count($xml->ip))
			$this->ip = (string)$xml->ip;
		if(count($xml->ks))
			$this->ks = (string)$xml->ks;
		if(count($xml->userAgent))
			$this->userAgent = (string)$xml->userAgent;
		if(count($xml->time))
			$this->time = (int)$xml->time;
		if(count($xml->contexts))
		{
			if(empty($xml->contexts))
				$this->contexts = array();
			else
				$this->contexts = \Kaltura\Client\ParseUtils::unmarshalArray($xml->contexts, "KalturaAccessControlContextTypeHolder");
		}
		if(count($xml->hashes))
		{
			if(empty($xml->hashes))
				$this->hashes = array();
			else
				$this->hashes = \Kaltura\Client\ParseUtils::unmarshalArray($xml->hashes, "KalturaKeyValue");
		}
	}
	/**
	 * URL to be used to test domain conditions.
	 * @var string
	 */
	public $referrer = null;

	/**
	 * IP to be used to test geographic location conditions.
	 * @var string
	 */
	public $ip = null;

	/**
	 * Kaltura session to be used to test session and user conditions.
	 * @var string
	 */
	public $ks = null;

	/**
	 * Browser or client application to be used to test agent conditions.
	 * @var string
	 */
	public $userAgent = null;

	/**
	 * Unix timestamp (In seconds) to be used to test entry scheduling, keep null to use now.
	 * @var int
	 */
	public $time = null;

	/**
	 * Indicates what contexts should be tested. No contexts means any context.
	 * @var array<KalturaAccessControlContextTypeHolder>
	 */
	public $contexts;

	/**
	 * Array of hashes to pass to the access control profile scope
	 * @var array<KalturaKeyValue>
	 */
	public $hashes;

}
