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
// Copyright (C) 2006-2015  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\SystemPartner\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class SystemPartnerConfiguration extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaSystemPartnerConfiguration';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->partnerName))
			$this->partnerName = (string)$xml->partnerName;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->adminName))
			$this->adminName = (string)$xml->adminName;
		if(count($xml->adminEmail))
			$this->adminEmail = (string)$xml->adminEmail;
		if(count($xml->host))
			$this->host = (string)$xml->host;
		if(count($xml->cdnHost))
			$this->cdnHost = (string)$xml->cdnHost;
		if(count($xml->thumbnailHost))
			$this->thumbnailHost = (string)$xml->thumbnailHost;
		if(count($xml->partnerPackage))
			$this->partnerPackage = (int)$xml->partnerPackage;
		if(count($xml->monitorUsage))
			$this->monitorUsage = (int)$xml->monitorUsage;
		if(count($xml->moderateContent))
		{
			if(!empty($xml->moderateContent))
				$this->moderateContent = true;
			else
				$this->moderateContent = false;
		}
		if(count($xml->storageDeleteFromKaltura))
		{
			if(!empty($xml->storageDeleteFromKaltura))
				$this->storageDeleteFromKaltura = true;
			else
				$this->storageDeleteFromKaltura = false;
		}
		if(count($xml->storageServePriority))
			$this->storageServePriority = (int)$xml->storageServePriority;
		if(count($xml->kmcVersion))
			$this->kmcVersion = (int)$xml->kmcVersion;
		if(count($xml->restrictThumbnailByKs))
			$this->restrictThumbnailByKs = (int)$xml->restrictThumbnailByKs;
		if(count($xml->supportAnimatedThumbnails))
		{
			if(!empty($xml->supportAnimatedThumbnails))
				$this->supportAnimatedThumbnails = true;
			else
				$this->supportAnimatedThumbnails = false;
		}
		if(count($xml->defThumbOffset))
			$this->defThumbOffset = (int)$xml->defThumbOffset;
		if(count($xml->defThumbDensity))
			$this->defThumbDensity = (int)$xml->defThumbDensity;
		if(count($xml->userSessionRoleId))
			$this->userSessionRoleId = (int)$xml->userSessionRoleId;
		if(count($xml->adminSessionRoleId))
			$this->adminSessionRoleId = (int)$xml->adminSessionRoleId;
		if(count($xml->alwaysAllowedPermissionNames))
			$this->alwaysAllowedPermissionNames = (string)$xml->alwaysAllowedPermissionNames;
		if(count($xml->importRemoteSourceForConvert))
		{
			if(!empty($xml->importRemoteSourceForConvert))
				$this->importRemoteSourceForConvert = true;
			else
				$this->importRemoteSourceForConvert = false;
		}
		if(count($xml->permissions))
		{
			if(empty($xml->permissions))
				$this->permissions = array();
			else
				$this->permissions = \Kaltura\Client\ParseUtils::unmarshalArray($xml->permissions, "KalturaPermission");
		}
		if(count($xml->notificationsConfig))
			$this->notificationsConfig = (string)$xml->notificationsConfig;
		if(count($xml->allowMultiNotification))
		{
			if(!empty($xml->allowMultiNotification))
				$this->allowMultiNotification = true;
			else
				$this->allowMultiNotification = false;
		}
		if(count($xml->loginBlockPeriod))
			$this->loginBlockPeriod = (int)$xml->loginBlockPeriod;
		if(count($xml->numPrevPassToKeep))
			$this->numPrevPassToKeep = (int)$xml->numPrevPassToKeep;
		if(count($xml->passReplaceFreq))
			$this->passReplaceFreq = (int)$xml->passReplaceFreq;
		if(count($xml->isFirstLogin))
		{
			if(!empty($xml->isFirstLogin))
				$this->isFirstLogin = true;
			else
				$this->isFirstLogin = false;
		}
		if(count($xml->partnerGroupType))
			$this->partnerGroupType = (int)$xml->partnerGroupType;
		if(count($xml->partnerParentId))
			$this->partnerParentId = (int)$xml->partnerParentId;
		if(count($xml->limits))
		{
			if(empty($xml->limits))
				$this->limits = array();
			else
				$this->limits = \Kaltura\Client\ParseUtils::unmarshalArray($xml->limits, "KalturaSystemPartnerLimit");
		}
		if(count($xml->streamerType))
			$this->streamerType = (string)$xml->streamerType;
		if(count($xml->mediaProtocol))
			$this->mediaProtocol = (string)$xml->mediaProtocol;
		if(count($xml->extendedFreeTrailExpiryReason))
			$this->extendedFreeTrailExpiryReason = (string)$xml->extendedFreeTrailExpiryReason;
		if(count($xml->extendedFreeTrailExpiryDate))
			$this->extendedFreeTrailExpiryDate = (int)$xml->extendedFreeTrailExpiryDate;
		if(count($xml->extendedFreeTrail))
			$this->extendedFreeTrail = (int)$xml->extendedFreeTrail;
		if(count($xml->crmId))
			$this->crmId = (string)$xml->crmId;
		if(count($xml->referenceId))
			$this->referenceId = (string)$xml->referenceId;
		if(count($xml->crmLink))
			$this->crmLink = (string)$xml->crmLink;
		if(count($xml->verticalClasiffication))
			$this->verticalClasiffication = (string)$xml->verticalClasiffication;
		if(count($xml->partnerPackageClassOfService))
			$this->partnerPackageClassOfService = (string)$xml->partnerPackageClassOfService;
		if(count($xml->enableBulkUploadNotificationsEmails))
		{
			if(!empty($xml->enableBulkUploadNotificationsEmails))
				$this->enableBulkUploadNotificationsEmails = true;
			else
				$this->enableBulkUploadNotificationsEmails = false;
		}
		if(count($xml->deliveryProfileIds))
			$this->deliveryProfileIds = (string)$xml->deliveryProfileIds;
		if(count($xml->enforceDelivery))
		{
			if(!empty($xml->enforceDelivery))
				$this->enforceDelivery = true;
			else
				$this->enforceDelivery = false;
		}
		if(count($xml->bulkUploadNotificationsEmail))
			$this->bulkUploadNotificationsEmail = (string)$xml->bulkUploadNotificationsEmail;
		if(count($xml->internalUse))
		{
			if(!empty($xml->internalUse))
				$this->internalUse = true;
			else
				$this->internalUse = false;
		}
		if(count($xml->defaultLiveStreamEntrySourceType))
			$this->defaultLiveStreamEntrySourceType = (string)$xml->defaultLiveStreamEntrySourceType;
		if(count($xml->liveStreamProvisionParams))
			$this->liveStreamProvisionParams = (string)$xml->liveStreamProvisionParams;
		if(count($xml->autoModerateEntryFilter) && !empty($xml->autoModerateEntryFilter))
			$this->autoModerateEntryFilter = \Kaltura\Client\ParseUtils::unmarshalObject($xml->autoModerateEntryFilter, "KalturaBaseEntryFilter");
		if(count($xml->logoutUrl))
			$this->logoutUrl = (string)$xml->logoutUrl;
		if(count($xml->defaultEntitlementEnforcement))
		{
			if(!empty($xml->defaultEntitlementEnforcement))
				$this->defaultEntitlementEnforcement = true;
			else
				$this->defaultEntitlementEnforcement = false;
		}
		if(count($xml->cacheFlavorVersion))
			$this->cacheFlavorVersion = (int)$xml->cacheFlavorVersion;
		if(count($xml->apiAccessControlId))
			$this->apiAccessControlId = (int)$xml->apiAccessControlId;
		if(count($xml->defaultDeliveryType))
			$this->defaultDeliveryType = (string)$xml->defaultDeliveryType;
		if(count($xml->defaultEmbedCodeType))
			$this->defaultEmbedCodeType = (string)$xml->defaultEmbedCodeType;
		if(count($xml->customDeliveryTypes))
		{
			if(empty($xml->customDeliveryTypes))
				$this->customDeliveryTypes = array();
			else
				$this->customDeliveryTypes = \Kaltura\Client\ParseUtils::unmarshalArray($xml->customDeliveryTypes, "KalturaKeyBooleanValue");
		}
		if(count($xml->restrictEntryByMetadata))
		{
			if(!empty($xml->restrictEntryByMetadata))
				$this->restrictEntryByMetadata = true;
			else
				$this->restrictEntryByMetadata = false;
		}
		if(count($xml->language))
			$this->language = (string)$xml->language;
		if(count($xml->audioThumbEntryId))
			$this->audioThumbEntryId = (string)$xml->audioThumbEntryId;
		if(count($xml->liveThumbEntryId))
			$this->liveThumbEntryId = (string)$xml->liveThumbEntryId;
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
	public $partnerName = null;

	/**
	 * 
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 * @var string
	 */
	public $adminName = null;

	/**
	 * 
	 * @var string
	 */
	public $adminEmail = null;

	/**
	 * 
	 * @var string
	 */
	public $host = null;

	/**
	 * 
	 * @var string
	 */
	public $cdnHost = null;

	/**
	 * 
	 * @var string
	 */
	public $thumbnailHost = null;

	/**
	 * 
	 * @var int
	 */
	public $partnerPackage = null;

	/**
	 * 
	 * @var int
	 */
	public $monitorUsage = null;

	/**
	 * 
	 * @var bool
	 */
	public $moderateContent = null;

	/**
	 * 
	 * @var bool
	 */
	public $storageDeleteFromKaltura = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\StorageServePriority
	 */
	public $storageServePriority = null;

	/**
	 * 
	 * @var int
	 */
	public $kmcVersion = null;

	/**
	 * 
	 * @var int
	 */
	public $restrictThumbnailByKs = null;

	/**
	 * 
	 * @var bool
	 */
	public $supportAnimatedThumbnails = null;

	/**
	 * 
	 * @var int
	 */
	public $defThumbOffset = null;

	/**
	 * 
	 * @var int
	 */
	public $defThumbDensity = null;

	/**
	 * 
	 * @var int
	 */
	public $userSessionRoleId = null;

	/**
	 * 
	 * @var int
	 */
	public $adminSessionRoleId = null;

	/**
	 * 
	 * @var string
	 */
	public $alwaysAllowedPermissionNames = null;

	/**
	 * 
	 * @var bool
	 */
	public $importRemoteSourceForConvert = null;

	/**
	 * 
	 * @var array<KalturaPermission>
	 */
	public $permissions;

	/**
	 * 
	 * @var string
	 */
	public $notificationsConfig = null;

	/**
	 * 
	 * @var bool
	 */
	public $allowMultiNotification = null;

	/**
	 * 
	 * @var int
	 */
	public $loginBlockPeriod = null;

	/**
	 * 
	 * @var int
	 */
	public $numPrevPassToKeep = null;

	/**
	 * 
	 * @var int
	 */
	public $passReplaceFreq = null;

	/**
	 * 
	 * @var bool
	 */
	public $isFirstLogin = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\PartnerGroupType
	 */
	public $partnerGroupType = null;

	/**
	 * 
	 * @var int
	 */
	public $partnerParentId = null;

	/**
	 * 
	 * @var array<KalturaSystemPartnerLimit>
	 */
	public $limits;

	/**
	 * http/rtmp/hdnetwork
	 * 	 
	 * @var string
	 */
	public $streamerType = null;

	/**
	 * http/https, rtmp/rtmpe
	 * 	 
	 * @var string
	 */
	public $mediaProtocol = null;

	/**
	 * 
	 * @var string
	 */
	public $extendedFreeTrailExpiryReason = null;

	/**
	 * Unix timestamp (In seconds)
	 * 	 
	 * @var int
	 */
	public $extendedFreeTrailExpiryDate = null;

	/**
	 * 
	 * @var int
	 */
	public $extendedFreeTrail = null;

	/**
	 * 
	 * @var string
	 */
	public $crmId = null;

	/**
	 * 
	 * @var string
	 */
	public $referenceId = null;

	/**
	 * 
	 * @var string
	 */
	public $crmLink = null;

	/**
	 * 
	 * @var string
	 */
	public $verticalClasiffication = null;

	/**
	 * 
	 * @var string
	 */
	public $partnerPackageClassOfService = null;

	/**
	 * 
	 * @var bool
	 */
	public $enableBulkUploadNotificationsEmails = null;

	/**
	 * 
	 * @var string
	 */
	public $deliveryProfileIds = null;

	/**
	 * 
	 * @var bool
	 */
	public $enforceDelivery = null;

	/**
	 * 
	 * @var string
	 */
	public $bulkUploadNotificationsEmail = null;

	/**
	 * 
	 * @var bool
	 */
	public $internalUse = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\SourceType
	 */
	public $defaultLiveStreamEntrySourceType = null;

	/**
	 * 
	 * @var string
	 */
	public $liveStreamProvisionParams = null;

	/**
	 * 
	 * @var \Kaltura\Client\Type\BaseEntryFilter
	 */
	public $autoModerateEntryFilter;

	/**
	 * 
	 * @var string
	 */
	public $logoutUrl = null;

	/**
	 * 
	 * @var bool
	 */
	public $defaultEntitlementEnforcement = null;

	/**
	 * 
	 * @var int
	 */
	public $cacheFlavorVersion = null;

	/**
	 * 
	 * @var int
	 */
	public $apiAccessControlId = null;

	/**
	 * 
	 * @var string
	 */
	public $defaultDeliveryType = null;

	/**
	 * 
	 * @var string
	 */
	public $defaultEmbedCodeType = null;

	/**
	 * 
	 * @var array<KalturaKeyBooleanValue>
	 */
	public $customDeliveryTypes;

	/**
	 * 
	 * @var bool
	 */
	public $restrictEntryByMetadata = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\LanguageCode
	 */
	public $language = null;

	/**
	 * 
	 * @var string
	 */
	public $audioThumbEntryId = null;

	/**
	 * 
	 * @var string
	 */
	public $liveThumbEntryId = null;

}
