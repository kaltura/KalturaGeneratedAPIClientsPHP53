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
class OttUserService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Activate the account by activation token
	 * 
	 * @return \Kaltura\Client\Type\OTTUser
	 */
	function activate($partnerId, $username, $activationToken)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "username", $username);
		$this->client->addParam($kparams, "activationToken", $activationToken);
		$this->client->queueServiceActionCall("ottuser", "activate", "KalturaOTTUser", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaOTTUser");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\OTTUser");
		return $resultObject;
	}

	/**
	 * Edit user details.
	 * 
	 * @return bool
	 */
	function addRole($roleId)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "roleId", $roleId);
		$this->client->queueServiceActionCall("ottuser", "addRole", null, $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Returns tokens (KS and refresh token) for anonymous access
	 * 
	 * @return \Kaltura\Client\Type\LoginSession
	 */
	function anonymousLogin($partnerId, $udid = null)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->queueServiceActionCall("ottuser", "anonymousLogin", "KalturaLoginSession", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLoginSession");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\LoginSession");
		return $resultObject;
	}

	/**
	 * Permanently delete a user. User to delete cannot be an exclusive household master, and cannot be default user.
	 * 
	 * @return bool
	 */
	function delete()
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("ottuser", "delete", null, $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Retrieving users&#39; data
	 * 
	 * @return \Kaltura\Client\Type\OTTUser
	 */
	function get()
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("ottuser", "get", "KalturaOTTUser", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaOTTUser");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\OTTUser");
		return $resultObject;
	}

	/**
	 * Resend the activation token to a user
	 * 
	 * @return \Kaltura\Client\Type\StringValue
	 */
	function getEncryptedUserId()
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("ottuser", "getEncryptedUserId", "KalturaStringValue", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaStringValue");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\StringValue");
		return $resultObject;
	}

	/**
	 * Retrieve user by external identifier or username
	 * 
	 * @return \Kaltura\Client\Type\OTTUserListResponse
	 */
	function listAction(\Kaltura\Client\Type\OTTUserFilter $filter)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("ottuser", "list", "KalturaOTTUserListResponse", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaOTTUserListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\OTTUserListResponse");
		return $resultObject;
	}

	/**
	 * User sign-in via a time-expired sign-in PIN.
	 * 
	 * @return \Kaltura\Client\Type\LoginResponse
	 */
	function login($partnerId, $username = null, $password = null, array $extraParams = null, $udid = null)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "username", $username);
		$this->client->addParam($kparams, "password", $password);
		if ($extraParams !== null)
			foreach($extraParams as $index => $obj)
			{
				$this->client->addParam($kparams, "extraParams:$index", $obj->toParams());
			}
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->queueServiceActionCall("ottuser", "login", "KalturaLoginResponse", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLoginResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\LoginResponse");
		return $resultObject;
	}

	/**
	 * User sign-in via a time-expired sign-in PIN.
	 * 
	 * @return \Kaltura\Client\Type\LoginResponse
	 */
	function loginWithPin($partnerId, $pin, $udid = null, $secret = null)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "pin", $pin);
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->addParam($kparams, "secret", $secret);
		$this->client->queueServiceActionCall("ottuser", "loginWithPin", "KalturaLoginResponse", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLoginResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\LoginResponse");
		return $resultObject;
	}

	/**
	 * Logout the calling user.
	 * 
	 * @return bool
	 */
	function logout()
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("ottuser", "logout", null, $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Returns new Kaltura session (ks) for the user, using the supplied refresh_token (only if it&#39;s valid and not expired)
	 * 
	 * @return \Kaltura\Client\Type\LoginSession
	 */
	function refreshSession($refreshToken, $udid = null)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "refreshToken", $refreshToken);
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->queueServiceActionCall("ottuser", "refreshSession", "KalturaLoginSession", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLoginSession");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\LoginSession");
		return $resultObject;
	}

	/**
	 * Sign up a new user.
	 * 
	 * @return \Kaltura\Client\Type\OTTUser
	 */
	function register($partnerId, \Kaltura\Client\Type\OTTUser $user, $password)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "user", $user->toParams());
		$this->client->addParam($kparams, "password", $password);
		$this->client->queueServiceActionCall("ottuser", "register", "KalturaOTTUser", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaOTTUser");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\OTTUser");
		return $resultObject;
	}

	/**
	 * Resend the activation token to a user
	 * 
	 * @return bool
	 */
	function resendActivationToken($partnerId, $username)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "username", $username);
		$this->client->queueServiceActionCall("ottuser", "resendActivationToken", null, $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Send an e-mail with URL to enable the user to set new password.
	 * 
	 * @return bool
	 */
	function resetPassword($partnerId, $username)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "username", $username);
		$this->client->queueServiceActionCall("ottuser", "resetPassword", null, $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Renew the user&#39;s password after validating the token that sent as part of URL in e-mail.
	 * 
	 * @return \Kaltura\Client\Type\OTTUser
	 */
	function setInitialPassword($partnerId, $token, $password)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "token", $token);
		$this->client->addParam($kparams, "password", $password);
		$this->client->queueServiceActionCall("ottuser", "setInitialPassword", "KalturaOTTUser", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaOTTUser");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\OTTUser");
		return $resultObject;
	}

	/**
	 * Given a user name and existing password, change to a new password.
	 * 
	 * @return \Kaltura\Client\Type\OTTUser
	 */
	function update(\Kaltura\Client\Type\OTTUser $user)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "user", $user->toParams());
		$this->client->queueServiceActionCall("ottuser", "update", "KalturaOTTUser", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaOTTUser");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\OTTUser");
		return $resultObject;
	}

	/**
	 * Given a user name and existing password, change to a new password.
	 * 
	 * @return bool
	 */
	function updateLoginData($username, $oldPassword, $newPassword)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "username", $username);
		$this->client->addParam($kparams, "oldPassword", $oldPassword);
		$this->client->addParam($kparams, "newPassword", $newPassword);
		$this->client->queueServiceActionCall("ottuser", "updateLoginData", null, $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}
}
