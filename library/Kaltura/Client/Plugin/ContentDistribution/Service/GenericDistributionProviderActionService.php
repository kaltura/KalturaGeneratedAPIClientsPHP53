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
namespace Kaltura\Client\Plugin\ContentDistribution\Service;

/**
 * Generic Distribution Provider Actions service
 * @package Kaltura
 * @subpackage Client
 */
class GenericDistributionProviderActionService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new Generic Distribution Provider Action
	 * 
	 * @return \Kaltura\Client\Plugin\ContentDistribution\Type\GenericDistributionProviderAction
	 */
	function add(\Kaltura\Client\Plugin\ContentDistribution\Type\GenericDistributionProviderAction $genericDistributionProviderAction)
	{
		$kparams = array();
		$this->client->addParam($kparams, "genericDistributionProviderAction", $genericDistributionProviderAction->toParams());
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovideraction", "add", "KalturaGenericDistributionProviderAction", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaGenericDistributionProviderAction");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ContentDistribution\\Type\\GenericDistributionProviderAction");
		return $resultObject;
	}

	/**
	 * Add MRSS transform file to generic distribution provider action
	 * 
	 * @return \Kaltura\Client\Plugin\ContentDistribution\Type\GenericDistributionProviderAction
	 */
	function addMrssTransform($id, $xslData)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "xslData", $xslData);
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovideraction", "addMrssTransform", "KalturaGenericDistributionProviderAction", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaGenericDistributionProviderAction");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ContentDistribution\\Type\\GenericDistributionProviderAction");
		return $resultObject;
	}

	/**
	 * Add MRSS transform file to generic distribution provider action
	 * 
	 * @return \Kaltura\Client\Plugin\ContentDistribution\Type\GenericDistributionProviderAction
	 */
	function addMrssTransformFromFile($id, $xslFile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$kfiles = array();
		$this->client->addParam($kfiles, "xslFile", $xslFile);
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovideraction", "addMrssTransformFromFile", "KalturaGenericDistributionProviderAction", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaGenericDistributionProviderAction");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ContentDistribution\\Type\\GenericDistributionProviderAction");
		return $resultObject;
	}

	/**
	 * Add MRSS validate file to generic distribution provider action
	 * 
	 * @return \Kaltura\Client\Plugin\ContentDistribution\Type\GenericDistributionProviderAction
	 */
	function addMrssValidate($id, $xsdData)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "xsdData", $xsdData);
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovideraction", "addMrssValidate", "KalturaGenericDistributionProviderAction", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaGenericDistributionProviderAction");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ContentDistribution\\Type\\GenericDistributionProviderAction");
		return $resultObject;
	}

	/**
	 * Add MRSS validate file to generic distribution provider action
	 * 
	 * @return \Kaltura\Client\Plugin\ContentDistribution\Type\GenericDistributionProviderAction
	 */
	function addMrssValidateFromFile($id, $xsdFile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$kfiles = array();
		$this->client->addParam($kfiles, "xsdFile", $xsdFile);
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovideraction", "addMrssValidateFromFile", "KalturaGenericDistributionProviderAction", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaGenericDistributionProviderAction");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ContentDistribution\\Type\\GenericDistributionProviderAction");
		return $resultObject;
	}

	/**
	 * Add results transform file to generic distribution provider action
	 * 
	 * @return \Kaltura\Client\Plugin\ContentDistribution\Type\GenericDistributionProviderAction
	 */
	function addResultsTransform($id, $transformData)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "transformData", $transformData);
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovideraction", "addResultsTransform", "KalturaGenericDistributionProviderAction", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaGenericDistributionProviderAction");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ContentDistribution\\Type\\GenericDistributionProviderAction");
		return $resultObject;
	}

	/**
	 * Add MRSS transform file to generic distribution provider action
	 * 
	 * @return \Kaltura\Client\Plugin\ContentDistribution\Type\GenericDistributionProviderAction
	 */
	function addResultsTransformFromFile($id, $transformFile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$kfiles = array();
		$this->client->addParam($kfiles, "transformFile", $transformFile);
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovideraction", "addResultsTransformFromFile", "KalturaGenericDistributionProviderAction", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaGenericDistributionProviderAction");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ContentDistribution\\Type\\GenericDistributionProviderAction");
		return $resultObject;
	}

	/**
	 * Delete Generic Distribution Provider Action by id
	 * 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovideraction", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Delete Generic Distribution Provider Action by provider id
	 * 
	 */
	function deleteByProviderId($genericDistributionProviderId, $actionType)
	{
		$kparams = array();
		$this->client->addParam($kparams, "genericDistributionProviderId", $genericDistributionProviderId);
		$this->client->addParam($kparams, "actionType", $actionType);
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovideraction", "deleteByProviderId", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Get Generic Distribution Provider Action by id
	 * 
	 * @return \Kaltura\Client\Plugin\ContentDistribution\Type\GenericDistributionProviderAction
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovideraction", "get", "KalturaGenericDistributionProviderAction", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaGenericDistributionProviderAction");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ContentDistribution\\Type\\GenericDistributionProviderAction");
		return $resultObject;
	}

	/**
	 * Get Generic Distribution Provider Action by provider id
	 * 
	 * @return \Kaltura\Client\Plugin\ContentDistribution\Type\GenericDistributionProviderAction
	 */
	function getByProviderId($genericDistributionProviderId, $actionType)
	{
		$kparams = array();
		$this->client->addParam($kparams, "genericDistributionProviderId", $genericDistributionProviderId);
		$this->client->addParam($kparams, "actionType", $actionType);
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovideraction", "getByProviderId", "KalturaGenericDistributionProviderAction", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaGenericDistributionProviderAction");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ContentDistribution\\Type\\GenericDistributionProviderAction");
		return $resultObject;
	}

	/**
	 * List all distribution providers
	 * 
	 * @return \Kaltura\Client\Plugin\ContentDistribution\Type\GenericDistributionProviderActionListResponse
	 */
	function listAction(\Kaltura\Client\Plugin\ContentDistribution\Type\GenericDistributionProviderActionFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovideraction", "list", "KalturaGenericDistributionProviderActionListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaGenericDistributionProviderActionListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ContentDistribution\\Type\\GenericDistributionProviderActionListResponse");
		return $resultObject;
	}

	/**
	 * Update Generic Distribution Provider Action by id
	 * 
	 * @return \Kaltura\Client\Plugin\ContentDistribution\Type\GenericDistributionProviderAction
	 */
	function update($id, \Kaltura\Client\Plugin\ContentDistribution\Type\GenericDistributionProviderAction $genericDistributionProviderAction)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "genericDistributionProviderAction", $genericDistributionProviderAction->toParams());
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovideraction", "update", "KalturaGenericDistributionProviderAction", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaGenericDistributionProviderAction");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ContentDistribution\\Type\\GenericDistributionProviderAction");
		return $resultObject;
	}

	/**
	 * Update Generic Distribution Provider Action by provider id
	 * 
	 * @return \Kaltura\Client\Plugin\ContentDistribution\Type\GenericDistributionProviderAction
	 */
	function updateByProviderId($genericDistributionProviderId, $actionType, \Kaltura\Client\Plugin\ContentDistribution\Type\GenericDistributionProviderAction $genericDistributionProviderAction)
	{
		$kparams = array();
		$this->client->addParam($kparams, "genericDistributionProviderId", $genericDistributionProviderId);
		$this->client->addParam($kparams, "actionType", $actionType);
		$this->client->addParam($kparams, "genericDistributionProviderAction", $genericDistributionProviderAction->toParams());
		$this->client->queueServiceActionCall("contentdistribution_genericdistributionprovideraction", "updateByProviderId", "KalturaGenericDistributionProviderAction", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaGenericDistributionProviderAction");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\ContentDistribution\\Type\\GenericDistributionProviderAction");
		return $resultObject;
	}
}
