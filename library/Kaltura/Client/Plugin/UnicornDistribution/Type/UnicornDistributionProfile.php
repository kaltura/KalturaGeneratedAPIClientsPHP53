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
namespace Kaltura\Client\Plugin\UnicornDistribution\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class UnicornDistributionProfile extends \Kaltura\Client\Plugin\ContentDistribution\Type\ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaUnicornDistributionProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->username))
			$this->username = (string)$xml->username;
		if(count($xml->password))
			$this->password = (string)$xml->password;
		if(count($xml->domainName))
			$this->domainName = (string)$xml->domainName;
		if(count($xml->channelGuid))
			$this->channelGuid = (string)$xml->channelGuid;
		if(count($xml->apiHostUrl))
			$this->apiHostUrl = (string)$xml->apiHostUrl;
		if(count($xml->domainGuid))
			$this->domainGuid = (string)$xml->domainGuid;
		if(count($xml->adFreeApplicationGuid))
			$this->adFreeApplicationGuid = (string)$xml->adFreeApplicationGuid;
		if(count($xml->remoteAssetParamsId))
			$this->remoteAssetParamsId = (int)$xml->remoteAssetParamsId;
		if(count($xml->storageProfileId))
			$this->storageProfileId = (string)$xml->storageProfileId;
	}
	/**
	 * The email address associated with the Upload User, used to authorize the incoming request.
	 * @var string
	 */
	public $username = null;

	/**
	 * The password used in association with the email to determine if the Upload User is authorized the incoming request.
	 * @var string
	 */
	public $password = null;

	/**
	 * The name of the Domain that the Upload User should have access to, Used for authentication.
	 * @var string
	 */
	public $domainName = null;

	/**
	 * The Channel GUID assigned to this Publication Rule. Must be a valid Channel in the Domain that was used in authentication.
	 * @var string
	 */
	public $channelGuid = null;

	/**
	 * The API host URL that the Upload User should have access to, Used for HTTP content submission.
	 * @var string
	 */
	public $apiHostUrl = null;

	/**
	 * The GUID of the Customer Domain in the Unicorn system obtained by contacting your Unicorn representative.
	 * @var string
	 */
	public $domainGuid = null;

	/**
	 * The GUID for the application in which to record metrics and enforce business rules obtained through your Unicorn representative.
	 * @var string
	 */
	public $adFreeApplicationGuid = null;

	/**
	 * The flavor-params that will be used for the remote asset.
	 * @var int
	 */
	public $remoteAssetParamsId = null;

	/**
	 * The remote storage that should be used for the remote asset.
	 * @var string
	 */
	public $storageProfileId = null;

}
