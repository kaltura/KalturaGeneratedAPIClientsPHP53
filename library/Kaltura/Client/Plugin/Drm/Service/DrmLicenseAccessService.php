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
namespace Kaltura\Client\Plugin\Drm\Service;

/**
 * Retrieve information and invoke actions on Flavor Asset
 * @package Kaltura
 * @subpackage Client
 */
class DrmLicenseAccessService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * getAccessAction
	 *      input: flavor ids, drmProvider
	 *      Get Access Action
	 * 
	 * @return \Kaltura\Client\Plugin\Drm\Type\DrmLicenseAccessDetails
	 */
	function getAccess($entryId, $flavorIds, $referrer)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "flavorIds", $flavorIds);
		$this->client->addParam($kparams, "referrer", $referrer);
		$this->client->queueServiceActionCall("drm_drmlicenseaccess", "getAccess", "KalturaDrmLicenseAccessDetails", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDrmLicenseAccessDetails");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\Drm\\Type\\DrmLicenseAccessDetails");
		return $resultObject;
	}
}
