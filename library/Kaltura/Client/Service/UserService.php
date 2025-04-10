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
// Copyright (C) 2006-2023  Kaltura Inc.
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
 * Manage partner users on Kaltura's side
 *  The userId in kaltura is the unique ID in the partner's system, and the [partnerId,Id] couple are unique key in kaltura's DB
 * @package Kaltura
 * @subpackage Client
 */
class UserService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Adds a new user to an existing account in the Kaltura database.
	 * 	 Input param $id is the unique identifier in the partner's system.
	 * 
	 * @return \Kaltura\Client\Type\User
	 */
	function add(\Kaltura\Client\Type\User $user)
	{
		$kparams = array();
		$this->client->addParam($kparams, "user", $user->toParams());
		$this->client->queueServiceActionCall("user", "add", "KalturaUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUser");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\User");
		return $resultObject;
	}

	/**
	 * 
	 * @return \Kaltura\Client\Type\BulkUpload
	 */
	function addFromBulkUpload($fileData, \Kaltura\Client\Type\BulkUploadJobData $bulkUploadData = null, \Kaltura\Client\Type\BulkUploadUserData $bulkUploadUserData = null)
	{
		$kparams = array();
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		if ($bulkUploadData !== null)
			$this->client->addParam($kparams, "bulkUploadData", $bulkUploadData->toParams());
		if ($bulkUploadUserData !== null)
			$this->client->addParam($kparams, "bulkUploadUserData", $bulkUploadUserData->toParams());
		$this->client->queueServiceActionCall("user", "addFromBulkUpload", "KalturaBulkUpload", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaBulkUpload");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\BulkUpload");
		return $resultObject;
	}

	/**
	 * Action which checks whther user login
	 * 
	 * @return bool
	 */
	function checkLoginDataExists(\Kaltura\Client\Type\UserLoginDataFilter $filter)
	{
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("user", "checkLoginDataExists", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Deletes a user from a partner account.
	 * 
	 * @return \Kaltura\Client\Type\User
	 */
	function delete($userId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->queueServiceActionCall("user", "delete", "KalturaUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUser");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\User");
		return $resultObject;
	}

	/**
	 * 
	 * @return \Kaltura\Client\Type\User
	 */
	function demoteAdmin($userId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->queueServiceActionCall("user", "demoteAdmin", "KalturaUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUser");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\User");
		return $resultObject;
	}

	/**
	 * Disables a user's ability to log into a partner account using an email address and a password.
	 * 	 You may use either a userId or a loginId parameter for this action.
	 * 
	 * @return \Kaltura\Client\Type\User
	 */
	function disableLogin($userId = null, $loginId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "loginId", $loginId);
		$this->client->queueServiceActionCall("user", "disableLogin", "KalturaUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUser");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\User");
		return $resultObject;
	}

	/**
	 * Enables a user to log into a partner account using an email address and a password
	 * 
	 * @return \Kaltura\Client\Type\User
	 */
	function enableLogin($userId, $loginId, $password = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "loginId", $loginId);
		$this->client->addParam($kparams, "password", $password);
		$this->client->queueServiceActionCall("user", "enableLogin", "KalturaUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUser");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\User");
		return $resultObject;
	}

	/**
	 * Creates a batch job that sends an email with a link to download a CSV containing a list of users
	 * 
	 * @return string
	 */
	function exportToCsv(\Kaltura\Client\Type\UserFilter $filter = null, $metadataProfileId = null, array $additionalFields = null, array $mappedFields = null, \Kaltura\Client\Type\ExportToCsvOptions $options = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->addParam($kparams, "metadataProfileId", $metadataProfileId);
		if ($additionalFields !== null)
			foreach($additionalFields as $index => $obj)
			{
				$this->client->addParam($kparams, "additionalFields:$index", $obj->toParams());
			}
		if ($mappedFields !== null)
			foreach($mappedFields as $index => $obj)
			{
				$this->client->addParam($kparams, "mappedFields:$index", $obj->toParams());
			}
		if ($options !== null)
			$this->client->addParam($kparams, "options", $options->toParams());
		$this->client->queueServiceActionCall("user", "exportToCsv", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (String)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * get QR image content
	 * 
	 * @return string
	 */
	function generateQrCode($hashKey)
	{
		$kparams = array();
		$this->client->addParam($kparams, "hashKey", $hashKey);
		$this->client->queueServiceActionCall("user", "generateQrCode", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (String)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Retrieves a user object for a specified user ID.
	 * 
	 * @return \Kaltura\Client\Type\User
	 */
	function get($userId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->queueServiceActionCall("user", "get", "KalturaUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUser");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\User");
		return $resultObject;
	}

	/**
	 * Retrieves a user object for a user's login ID and partner ID.
	 * 	 A login ID is the email address used by a user to log into the system.
	 * 
	 * @return \Kaltura\Client\Type\User
	 */
	function getByLoginId($loginId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "loginId", $loginId);
		$this->client->queueServiceActionCall("user", "getByLoginId", "KalturaUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUser");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\User");
		return $resultObject;
	}

	/**
	 * Index an entry by id.
	 * 
	 * @return string
	 */
	function index($id, $shouldUpdate = true)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "shouldUpdate", $shouldUpdate);
		$this->client->queueServiceActionCall("user", "index", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (String)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Lists user objects that are associated with an account.
	 * 	 Blocked users are listed unless you use a filter to exclude them.
	 * 	 Deleted users are not listed unless you use a filter to include them.
	 * 
	 * @return \Kaltura\Client\Type\UserListResponse
	 */
	function listAction(\Kaltura\Client\Type\UserFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("user", "list", "KalturaUserListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUserListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\UserListResponse");
		return $resultObject;
	}

	/**
	 * Logs a user into a partner account with a partner ID, a partner user ID (puser), and a user password.
	 * 
	 * @return string
	 */
	function login($partnerId, $userId, $password, $expiry = 86400, $privileges = "*")
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "password", $password);
		$this->client->addParam($kparams, "expiry", $expiry);
		$this->client->addParam($kparams, "privileges", $privileges);
		$this->client->queueServiceActionCall("user", "login", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (String)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Logs a user to the destination account provided the KS' user ID is associated with the destination account and the loginData ID matches
	 * 
	 * @return \Kaltura\Client\Type\SessionResponse
	 */
	function loginByKs($requestedPartnerId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "requestedPartnerId", $requestedPartnerId);
		$this->client->queueServiceActionCall("user", "loginByKs", "KalturaSessionResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSessionResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\SessionResponse");
		return $resultObject;
	}

	/**
	 * Logs a user into a partner account with a user login ID and a user password.
	 * 
	 * @return string
	 */
	function loginByLoginId($loginId, $password, $partnerId = null, $expiry = 86400, $privileges = "*", $otp = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "loginId", $loginId);
		$this->client->addParam($kparams, "password", $password);
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "expiry", $expiry);
		$this->client->addParam($kparams, "privileges", $privileges);
		$this->client->addParam($kparams, "otp", $otp);
		$this->client->queueServiceActionCall("user", "loginByLoginId", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (String)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Resets user login password
	 * 
	 * @return \Kaltura\Client\Type\User
	 */
	function loginDataResetPassword($loginDataId, $newPassword)
	{
		$kparams = array();
		$this->client->addParam($kparams, "loginDataId", $loginDataId);
		$this->client->addParam($kparams, "newPassword", $newPassword);
		$this->client->queueServiceActionCall("user", "loginDataResetPassword", "KalturaUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUser");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\User");
		return $resultObject;
	}

	/**
	 * Notifies that a user is banned from an account.
	 * 
	 */
	function notifyBan($userId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->queueServiceActionCall("user", "notifyBan", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Replace a user's existing login data to a new or an existing login data
	 * 	 to only be used when admin impersonates a partner
	 * 
	 * @return \Kaltura\Client\Type\User
	 */
	function replaceUserLoginData($userId, $newLoginId, $existingLoginId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "newLoginId", $newLoginId);
		$this->client->addParam($kparams, "existingLoginId", $existingLoginId);
		$this->client->queueServiceActionCall("user", "replaceUserLoginData", "KalturaUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUser");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\User");
		return $resultObject;
	}

	/**
	 * Reset user's password and send the user an email to generate a new one.
	 * 
	 */
	function resetPassword($email, $linkType = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "email", $email);
		$this->client->addParam($kparams, "linkType", $linkType);
		$this->client->queueServiceActionCall("user", "resetPassword", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Will serve a requested CSV
	 * 
	 * @return string
	 */
	function serveCsv($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("user", "serveCsv", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (String)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Set initial user password
	 * 
	 * @return \Kaltura\Client\Type\Authentication
	 */
	function setInitialPassword($hashKey, $newPassword)
	{
		$kparams = array();
		$this->client->addParam($kparams, "hashKey", $hashKey);
		$this->client->addParam($kparams, "newPassword", $newPassword);
		$this->client->queueServiceActionCall("user", "setInitialPassword", "KalturaAuthentication", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAuthentication");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Authentication");
		return $resultObject;
	}

	/**
	 * Updates an existing user object.
	 * 	 You can also use this action to update the userId.
	 * 
	 * @return \Kaltura\Client\Type\User
	 */
	function update($userId, \Kaltura\Client\Type\User $user)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "user", $user->toParams());
		$this->client->queueServiceActionCall("user", "update", "KalturaUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUser");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\User");
		return $resultObject;
	}

	/**
	 * Updates a user's login data: email, password, name.
	 * 
	 */
	function updateLoginData($oldLoginId, $password, $newLoginId = "", $newPassword = "", $newFirstName = null, $newLastName = null, $otp = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "oldLoginId", $oldLoginId);
		$this->client->addParam($kparams, "password", $password);
		$this->client->addParam($kparams, "newLoginId", $newLoginId);
		$this->client->addParam($kparams, "newPassword", $newPassword);
		$this->client->addParam($kparams, "newFirstName", $newFirstName);
		$this->client->addParam($kparams, "newLastName", $newLastName);
		$this->client->addParam($kparams, "otp", $otp);
		$this->client->queueServiceActionCall("user", "updateLoginData", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Validate hash key
	 * 
	 * @return \Kaltura\Client\Type\Authentication
	 */
	function validateHashKey($hashKey)
	{
		$kparams = array();
		$this->client->addParam($kparams, "hashKey", $hashKey);
		$this->client->queueServiceActionCall("user", "validateHashKey", "KalturaAuthentication", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAuthentication");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Authentication");
		return $resultObject;
	}
}
