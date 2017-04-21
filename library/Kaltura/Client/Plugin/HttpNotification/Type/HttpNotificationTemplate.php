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
namespace Kaltura\Client\Plugin\HttpNotification\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class HttpNotificationTemplate extends \Kaltura\Client\Plugin\EventNotification\Type\EventNotificationTemplate
{
	public function getKalturaObjectType()
	{
		return 'KalturaHttpNotificationTemplate';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->url))
			$this->url = (string)$xml->url;
		if(count($xml->method))
			$this->method = (int)$xml->method;
		if(count($xml->data) && !empty($xml->data))
			$this->data = \Kaltura\Client\ParseUtils::unmarshalObject($xml->data, "KalturaHttpNotificationData");
		if(count($xml->timeout))
			$this->timeout = (int)$xml->timeout;
		if(count($xml->connectTimeout))
			$this->connectTimeout = (int)$xml->connectTimeout;
		if(count($xml->username))
			$this->username = (string)$xml->username;
		if(count($xml->password))
			$this->password = (string)$xml->password;
		if(count($xml->authenticationMethod))
			$this->authenticationMethod = (int)$xml->authenticationMethod;
		if(count($xml->sslVersion))
			$this->sslVersion = (int)$xml->sslVersion;
		if(count($xml->sslCertificate))
			$this->sslCertificate = (string)$xml->sslCertificate;
		if(count($xml->sslCertificateType))
			$this->sslCertificateType = (string)$xml->sslCertificateType;
		if(count($xml->sslCertificatePassword))
			$this->sslCertificatePassword = (string)$xml->sslCertificatePassword;
		if(count($xml->sslEngine))
			$this->sslEngine = (string)$xml->sslEngine;
		if(count($xml->sslEngineDefault))
			$this->sslEngineDefault = (string)$xml->sslEngineDefault;
		if(count($xml->sslKeyType))
			$this->sslKeyType = (string)$xml->sslKeyType;
		if(count($xml->sslKey))
			$this->sslKey = (string)$xml->sslKey;
		if(count($xml->sslKeyPassword))
			$this->sslKeyPassword = (string)$xml->sslKeyPassword;
		if(count($xml->customHeaders))
		{
			if(empty($xml->customHeaders))
				$this->customHeaders = array();
			else
				$this->customHeaders = \Kaltura\Client\ParseUtils::unmarshalArray($xml->customHeaders, "KalturaKeyValue");
		}
	}
	/**
	 * Remote server URL
	 * @var string
	 */
	public $url = null;

	/**
	 * Request method.
	 * @var \Kaltura\Client\Plugin\HttpNotification\Enum\HttpNotificationMethod
	 */
	public $method = null;

	/**
	 * Data to send.
	 * @var \Kaltura\Client\Plugin\HttpNotification\Type\HttpNotificationData
	 */
	public $data;

	/**
	 * The maximum number of seconds to allow cURL functions to execute.
	 * @var int
	 */
	public $timeout = null;

	/**
	 * The number of seconds to wait while trying to connect.
	 * 	 Must be larger than zero.
	 * @var int
	 */
	public $connectTimeout = null;

	/**
	 * A username to use for the connection.
	 * @var string
	 */
	public $username = null;

	/**
	 * A password to use for the connection.
	 * @var string
	 */
	public $password = null;

	/**
	 * The HTTP authentication method to use.
	 * @var \Kaltura\Client\Plugin\HttpNotification\Enum\HttpNotificationAuthenticationMethod
	 */
	public $authenticationMethod = null;

	/**
	 * The SSL version (2 or 3) to use.
	 * 	 By default PHP will try to determine this itself, although in some cases this must be set manually.
	 * @var \Kaltura\Client\Plugin\HttpNotification\Enum\HttpNotificationSslVersion
	 */
	public $sslVersion = null;

	/**
	 * SSL certificate to verify the peer with.
	 * @var string
	 */
	public $sslCertificate = null;

	/**
	 * The format of the certificate.
	 * @var \Kaltura\Client\Plugin\HttpNotification\Enum\HttpNotificationCertificateType
	 */
	public $sslCertificateType = null;

	/**
	 * The password required to use the certificate.
	 * @var string
	 */
	public $sslCertificatePassword = null;

	/**
	 * The identifier for the crypto engine of the private SSL key specified in ssl key.
	 * @var string
	 */
	public $sslEngine = null;

	/**
	 * The identifier for the crypto engine used for asymmetric crypto operations.
	 * @var string
	 */
	public $sslEngineDefault = null;

	/**
	 * The key type of the private SSL key specified in ssl key - PEM / DER / ENG.
	 * @var \Kaltura\Client\Plugin\HttpNotification\Enum\HttpNotificationSslKeyType
	 */
	public $sslKeyType = null;

	/**
	 * Private SSL key.
	 * @var string
	 */
	public $sslKey = null;

	/**
	 * The secret password needed to use the private SSL key specified in ssl key.
	 * @var string
	 */
	public $sslKeyPassword = null;

	/**
	 * Adds a e-mail custom header
	 * @var array<KalturaKeyValue>
	 */
	public $customHeaders;

}
