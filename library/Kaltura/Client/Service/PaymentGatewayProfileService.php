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
 * @package Kaltura
 * @subpackage Client
 */
class PaymentGatewayProfileService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Insert new payment gateway for partner
	 * 
	 * @return \Kaltura\Client\Type\PaymentGatewayProfile
	 */
	function add(\Kaltura\Client\Type\PaymentGatewayProfile $paymentGateway)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "paymentGateway", $paymentGateway->toParams());
		$this->client->queueServiceActionCall("paymentgatewayprofile", "add", "KalturaPaymentGatewayProfile", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPaymentGatewayProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\PaymentGatewayProfile");
		return $resultObject;
	}

	/**
	 * Delete payment gateway by payment gateway id
	 * 
	 * @return bool
	 */
	function delete($paymentGatewayId)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayId", $paymentGatewayId);
		$this->client->queueServiceActionCall("paymentgatewayprofile", "delete", null, $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Generate payment gateway shared secret
	 * 
	 * @return \Kaltura\Client\Type\PaymentGatewayProfile
	 */
	function generateSharedSecret($paymentGatewayId)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayId", $paymentGatewayId);
		$this->client->queueServiceActionCall("paymentgatewayprofile", "generateSharedSecret", "KalturaPaymentGatewayProfile", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPaymentGatewayProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\PaymentGatewayProfile");
		return $resultObject;
	}

	/**
	 * Gets the Payment Gateway Configuration for the payment gateway identifier given
	 * 
	 * @return \Kaltura\Client\Type\PaymentGatewayConfiguration
	 */
	function getConfiguration($alias, $intent, array $extraParameters)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "alias", $alias);
		$this->client->addParam($kparams, "intent", $intent);
		foreach($extraParameters as $index => $obj)
		{
			$this->client->addParam($kparams, "extraParameters:$index", $obj->toParams());
		}
		$this->client->queueServiceActionCall("paymentgatewayprofile", "getConfiguration", "KalturaPaymentGatewayConfiguration", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPaymentGatewayConfiguration");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\PaymentGatewayConfiguration");
		return $resultObject;
	}

	/**
	 * Returns all payment gateways for partner : id + name
	 * 
	 * @return \Kaltura\Client\Type\PaymentGatewayProfileListResponse
	 */
	function listAction()
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("paymentgatewayprofile", "list", "KalturaPaymentGatewayProfileListResponse", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPaymentGatewayProfileListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\PaymentGatewayProfileListResponse");
		return $resultObject;
	}

	/**
	 * Update payment gateway details
	 * 
	 * @return \Kaltura\Client\Type\PaymentGatewayProfile
	 */
	function update($paymentGatewayId, \Kaltura\Client\Type\PaymentGatewayProfile $paymentGateway)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayId", $paymentGatewayId);
		$this->client->addParam($kparams, "paymentGateway", $paymentGateway->toParams());
		$this->client->queueServiceActionCall("paymentgatewayprofile", "update", "KalturaPaymentGatewayProfile", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPaymentGatewayProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\PaymentGatewayProfile");
		return $resultObject;
	}
}
