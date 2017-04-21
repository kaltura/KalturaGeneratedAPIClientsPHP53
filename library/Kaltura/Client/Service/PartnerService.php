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
namespace Kaltura\Client\Service;

/**
 * partner service allows you to change/manage your partner personal details and settings as well
 * @package Kaltura
 * @subpackage Client
 */
class PartnerService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Count partner's existing sub-publishers (count includes the partner itself).
	 * 
	 * @return int
	 */
	function count(\Kaltura\Client\Type\PartnerFilter $filter = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("partner", "count", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (int)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Retrieve partner object by Id
	 * 
	 * @return \Kaltura\Client\Type\Partner
	 */
	function get($id = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("partner", "get", "KalturaPartner", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPartner");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Partner");
		return $resultObject;
	}

	/**
	 * Retrieve all info attributed to the partner
	 * 	 This action expects no parameters. It returns information for the current KS partnerId.
	 * 
	 * @return \Kaltura\Client\Type\Partner
	 */
	function getInfo()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("partner", "getInfo", "KalturaPartner", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPartner");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Partner");
		return $resultObject;
	}

	/**
	 * Retrieve partner secret and admin secret
	 * 
	 * @return \Kaltura\Client\Type\Partner
	 */
	function getSecrets($partnerId, $adminEmail, $cmsPassword)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "adminEmail", $adminEmail);
		$this->client->addParam($kparams, "cmsPassword", $cmsPassword);
		$this->client->queueServiceActionCall("partner", "getSecrets", "KalturaPartner", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPartner");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Partner");
		return $resultObject;
	}

	/**
	 * Get usage statistics for a partner
	 * 	 Calculation is done according to partner's package
	 * 
	 * @return \Kaltura\Client\Type\PartnerStatistics
	 */
	function getStatistics()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("partner", "getStatistics", "KalturaPartnerStatistics", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPartnerStatistics");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\PartnerStatistics");
		return $resultObject;
	}

	/**
	 * Get usage statistics for a partner
	 * 	 Calculation is done according to partner's package
	 * 	 Additional data returned is a graph points of streaming usage in a timeframe
	 * 	 The resolution can be "days" or "months"
	 * 
	 * @return \Kaltura\Client\Type\PartnerUsage
	 */
	function getUsage($year = "", $month = 1, $resolution = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "year", $year);
		$this->client->addParam($kparams, "month", $month);
		$this->client->addParam($kparams, "resolution", $resolution);
		$this->client->queueServiceActionCall("partner", "getUsage", "KalturaPartnerUsage", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPartnerUsage");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\PartnerUsage");
		return $resultObject;
	}

	/**
	 * List partners by filter with paging support
	 * 	 Current implementation will only list the sub partners of the partner initiating the api call (using the current KS).
	 * 	 This action is only partially implemented to support listing sub partners of a VAR partner.
	 * 
	 * @return \Kaltura\Client\Type\PartnerListResponse
	 */
	function listAction(\Kaltura\Client\Type\PartnerFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("partner", "list", "KalturaPartnerListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPartnerListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\PartnerListResponse");
		return $resultObject;
	}

	/**
	 * List partner's current processes' statuses
	 * 
	 * @return \Kaltura\Client\Type\FeatureStatusListResponse
	 */
	function listFeatureStatus()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("partner", "listFeatureStatus", "KalturaFeatureStatusListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaFeatureStatusListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\FeatureStatusListResponse");
		return $resultObject;
	}

	/**
	 * Retrieve a list of partner objects which the current user is allowed to access.
	 * 
	 * @return \Kaltura\Client\Type\PartnerListResponse
	 */
	function listPartnersForUser(\Kaltura\Client\Type\PartnerFilter $partnerFilter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($partnerFilter !== null)
			$this->client->addParam($kparams, "partnerFilter", $partnerFilter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("partner", "listPartnersForUser", "KalturaPartnerListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPartnerListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\PartnerListResponse");
		return $resultObject;
	}

	/**
	 * Create a new Partner object
	 * 
	 * @return \Kaltura\Client\Type\Partner
	 */
	function register(\Kaltura\Client\Type\Partner $partner, $cmsPassword = "", $templatePartnerId = null, $silent = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partner", $partner->toParams());
		$this->client->addParam($kparams, "cmsPassword", $cmsPassword);
		$this->client->addParam($kparams, "templatePartnerId", $templatePartnerId);
		$this->client->addParam($kparams, "silent", $silent);
		$this->client->queueServiceActionCall("partner", "register", "KalturaPartner", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPartner");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Partner");
		return $resultObject;
	}

	/**
	 * Update details and settings of an existing partner
	 * 
	 * @return \Kaltura\Client\Type\Partner
	 */
	function update(\Kaltura\Client\Type\Partner $partner, $allowEmpty = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partner", $partner->toParams());
		$this->client->addParam($kparams, "allowEmpty", $allowEmpty);
		$this->client->queueServiceActionCall("partner", "update", "KalturaPartner", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPartner");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Partner");
		return $resultObject;
	}
}
