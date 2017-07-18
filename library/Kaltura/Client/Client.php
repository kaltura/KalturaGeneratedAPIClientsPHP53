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
namespace Kaltura\Client;

/**
 * @package Kaltura
 * @subpackage Client
 */
class Client extends Base
{
	/**
	 * @var \Kaltura\Client\Service\AccessControlProfileService
	 */
	protected $accessControlProfile = null;

	/**
	 * @var \Kaltura\Client\Service\AccessControlService
	 */
	protected $accessControl = null;

	/**
	 * @var \Kaltura\Client\Service\AdminUserService
	 */
	protected $adminUser = null;

	/**
	 * @var \Kaltura\Client\Service\AnalyticsService
	 */
	protected $analytics = null;

	/**
	 * @var \Kaltura\Client\Service\AppTokenService
	 */
	protected $appToken = null;

	/**
	 * @var \Kaltura\Client\Service\BaseEntryService
	 */
	protected $baseEntry = null;

	/**
	 * @var \Kaltura\Client\Service\BulkUploadService
	 */
	protected $bulkUpload = null;

	/**
	 * @var \Kaltura\Client\Service\CategoryEntryService
	 */
	protected $categoryEntry = null;

	/**
	 * @var \Kaltura\Client\Service\CategoryService
	 */
	protected $category = null;

	/**
	 * @var \Kaltura\Client\Service\CategoryUserService
	 */
	protected $categoryUser = null;

	/**
	 * @var \Kaltura\Client\Service\ConversionProfileAssetParamsService
	 */
	protected $conversionProfileAssetParams = null;

	/**
	 * @var \Kaltura\Client\Service\ConversionProfileService
	 */
	protected $conversionProfile = null;

	/**
	 * @var \Kaltura\Client\Service\DataService
	 */
	protected $data = null;

	/**
	 * @var \Kaltura\Client\Service\DeliveryProfileService
	 */
	protected $deliveryProfile = null;

	/**
	 * @var \Kaltura\Client\Service\EmailIngestionProfileService
	 */
	protected $EmailIngestionProfile = null;

	/**
	 * @var \Kaltura\Client\Service\EntryServerNodeService
	 */
	protected $entryServerNode = null;

	/**
	 * @var \Kaltura\Client\Service\FileAssetService
	 */
	protected $fileAsset = null;

	/**
	 * @var \Kaltura\Client\Service\FlavorAssetService
	 */
	protected $flavorAsset = null;

	/**
	 * @var \Kaltura\Client\Service\FlavorParamsOutputService
	 */
	protected $flavorParamsOutput = null;

	/**
	 * @var \Kaltura\Client\Service\FlavorParamsService
	 */
	protected $flavorParams = null;

	/**
	 * @var \Kaltura\Client\Service\GroupUserService
	 */
	protected $groupUser = null;

	/**
	 * @var \Kaltura\Client\Service\LiveChannelSegmentService
	 */
	protected $liveChannelSegment = null;

	/**
	 * @var \Kaltura\Client\Service\LiveChannelService
	 */
	protected $liveChannel = null;

	/**
	 * @var \Kaltura\Client\Service\LiveReportsService
	 */
	protected $liveReports = null;

	/**
	 * @var \Kaltura\Client\Service\LiveStatsService
	 */
	protected $liveStats = null;

	/**
	 * @var \Kaltura\Client\Service\LiveStreamService
	 */
	protected $liveStream = null;

	/**
	 * @var \Kaltura\Client\Service\MediaInfoService
	 */
	protected $mediaInfo = null;

	/**
	 * @var \Kaltura\Client\Service\MediaService
	 */
	protected $media = null;

	/**
	 * @var \Kaltura\Client\Service\MixingService
	 */
	protected $mixing = null;

	/**
	 * @var \Kaltura\Client\Service\NotificationService
	 */
	protected $notification = null;

	/**
	 * @var \Kaltura\Client\Service\PartnerService
	 */
	protected $partner = null;

	/**
	 * @var \Kaltura\Client\Service\PermissionItemService
	 */
	protected $permissionItem = null;

	/**
	 * @var \Kaltura\Client\Service\PermissionService
	 */
	protected $permission = null;

	/**
	 * @var \Kaltura\Client\Service\PlaylistService
	 */
	protected $playlist = null;

	/**
	 * @var \Kaltura\Client\Service\ReportService
	 */
	protected $report = null;

	/**
	 * @var \Kaltura\Client\Service\ResponseProfileService
	 */
	protected $responseProfile = null;

	/**
	 * @var \Kaltura\Client\Service\SchemaService
	 */
	protected $schema = null;

	/**
	 * @var \Kaltura\Client\Service\SearchService
	 */
	protected $search = null;

	/**
	 * @var \Kaltura\Client\Service\ServerNodeService
	 */
	protected $serverNode = null;

	/**
	 * @var \Kaltura\Client\Service\SessionService
	 */
	protected $session = null;

	/**
	 * @var \Kaltura\Client\Service\StatsService
	 */
	protected $stats = null;

	/**
	 * @var \Kaltura\Client\Service\StorageProfileService
	 */
	protected $storageProfile = null;

	/**
	 * @var \Kaltura\Client\Service\SyndicationFeedService
	 */
	protected $syndicationFeed = null;

	/**
	 * @var \Kaltura\Client\Service\SystemService
	 */
	protected $system = null;

	/**
	 * @var \Kaltura\Client\Service\ThumbAssetService
	 */
	protected $thumbAsset = null;

	/**
	 * @var \Kaltura\Client\Service\ThumbParamsOutputService
	 */
	protected $thumbParamsOutput = null;

	/**
	 * @var \Kaltura\Client\Service\ThumbParamsService
	 */
	protected $thumbParams = null;

	/**
	 * @var \Kaltura\Client\Service\UiConfService
	 */
	protected $uiConf = null;

	/**
	 * @var \Kaltura\Client\Service\UploadService
	 */
	protected $upload = null;

	/**
	 * @var \Kaltura\Client\Service\UploadTokenService
	 */
	protected $uploadToken = null;

	/**
	 * @var \Kaltura\Client\Service\UserEntryService
	 */
	protected $userEntry = null;

	/**
	 * @var \Kaltura\Client\Service\UserRoleService
	 */
	protected $userRole = null;

	/**
	 * @var \Kaltura\Client\Service\UserService
	 */
	protected $user = null;

	/**
	 * @var \Kaltura\Client\Service\WidgetService
	 */
	protected $widget = null;

	/**
	 * Kaltura client constructor
	 *
	 * @param \Kaltura\Client\Configuration $config
	 */
	public function __construct(Configuration $config)
	{
		parent::__construct($config);
		
		$this->setClientTag('php5:17-07-18');
		$this->setApiVersion('3.3.0');
	}
	
	/**
	 * @return \Kaltura\Client\Service\AccessControlProfileService
	 */
	public function getAccessControlProfileService()
	{
		if (is_null($this->accessControlProfile))
			$this->accessControlProfile = new \Kaltura\Client\Service\AccessControlProfileService($this);
		return $this->accessControlProfile;
	}
	/**
	 * @return \Kaltura\Client\Service\AccessControlService
	 */
	public function getAccessControlService()
	{
		if (is_null($this->accessControl))
			$this->accessControl = new \Kaltura\Client\Service\AccessControlService($this);
		return $this->accessControl;
	}
	/**
	 * @return \Kaltura\Client\Service\AdminUserService
	 */
	public function getAdminUserService()
	{
		if (is_null($this->adminUser))
			$this->adminUser = new \Kaltura\Client\Service\AdminUserService($this);
		return $this->adminUser;
	}
	/**
	 * @return \Kaltura\Client\Service\AnalyticsService
	 */
	public function getAnalyticsService()
	{
		if (is_null($this->analytics))
			$this->analytics = new \Kaltura\Client\Service\AnalyticsService($this);
		return $this->analytics;
	}
	/**
	 * @return \Kaltura\Client\Service\AppTokenService
	 */
	public function getAppTokenService()
	{
		if (is_null($this->appToken))
			$this->appToken = new \Kaltura\Client\Service\AppTokenService($this);
		return $this->appToken;
	}
	/**
	 * @return \Kaltura\Client\Service\BaseEntryService
	 */
	public function getBaseEntryService()
	{
		if (is_null($this->baseEntry))
			$this->baseEntry = new \Kaltura\Client\Service\BaseEntryService($this);
		return $this->baseEntry;
	}
	/**
	 * @return \Kaltura\Client\Service\BulkUploadService
	 */
	public function getBulkUploadService()
	{
		if (is_null($this->bulkUpload))
			$this->bulkUpload = new \Kaltura\Client\Service\BulkUploadService($this);
		return $this->bulkUpload;
	}
	/**
	 * @return \Kaltura\Client\Service\CategoryEntryService
	 */
	public function getCategoryEntryService()
	{
		if (is_null($this->categoryEntry))
			$this->categoryEntry = new \Kaltura\Client\Service\CategoryEntryService($this);
		return $this->categoryEntry;
	}
	/**
	 * @return \Kaltura\Client\Service\CategoryService
	 */
	public function getCategoryService()
	{
		if (is_null($this->category))
			$this->category = new \Kaltura\Client\Service\CategoryService($this);
		return $this->category;
	}
	/**
	 * @return \Kaltura\Client\Service\CategoryUserService
	 */
	public function getCategoryUserService()
	{
		if (is_null($this->categoryUser))
			$this->categoryUser = new \Kaltura\Client\Service\CategoryUserService($this);
		return $this->categoryUser;
	}
	/**
	 * @return \Kaltura\Client\Service\ConversionProfileAssetParamsService
	 */
	public function getConversionProfileAssetParamsService()
	{
		if (is_null($this->conversionProfileAssetParams))
			$this->conversionProfileAssetParams = new \Kaltura\Client\Service\ConversionProfileAssetParamsService($this);
		return $this->conversionProfileAssetParams;
	}
	/**
	 * @return \Kaltura\Client\Service\ConversionProfileService
	 */
	public function getConversionProfileService()
	{
		if (is_null($this->conversionProfile))
			$this->conversionProfile = new \Kaltura\Client\Service\ConversionProfileService($this);
		return $this->conversionProfile;
	}
	/**
	 * @return \Kaltura\Client\Service\DataService
	 */
	public function getDataService()
	{
		if (is_null($this->data))
			$this->data = new \Kaltura\Client\Service\DataService($this);
		return $this->data;
	}
	/**
	 * @return \Kaltura\Client\Service\DeliveryProfileService
	 */
	public function getDeliveryProfileService()
	{
		if (is_null($this->deliveryProfile))
			$this->deliveryProfile = new \Kaltura\Client\Service\DeliveryProfileService($this);
		return $this->deliveryProfile;
	}
	/**
	 * @return \Kaltura\Client\Service\EmailIngestionProfileService
	 */
	public function getEmailIngestionProfileService()
	{
		if (is_null($this->EmailIngestionProfile))
			$this->EmailIngestionProfile = new \Kaltura\Client\Service\EmailIngestionProfileService($this);
		return $this->EmailIngestionProfile;
	}
	/**
	 * @return \Kaltura\Client\Service\EntryServerNodeService
	 */
	public function getEntryServerNodeService()
	{
		if (is_null($this->entryServerNode))
			$this->entryServerNode = new \Kaltura\Client\Service\EntryServerNodeService($this);
		return $this->entryServerNode;
	}
	/**
	 * @return \Kaltura\Client\Service\FileAssetService
	 */
	public function getFileAssetService()
	{
		if (is_null($this->fileAsset))
			$this->fileAsset = new \Kaltura\Client\Service\FileAssetService($this);
		return $this->fileAsset;
	}
	/**
	 * @return \Kaltura\Client\Service\FlavorAssetService
	 */
	public function getFlavorAssetService()
	{
		if (is_null($this->flavorAsset))
			$this->flavorAsset = new \Kaltura\Client\Service\FlavorAssetService($this);
		return $this->flavorAsset;
	}
	/**
	 * @return \Kaltura\Client\Service\FlavorParamsOutputService
	 */
	public function getFlavorParamsOutputService()
	{
		if (is_null($this->flavorParamsOutput))
			$this->flavorParamsOutput = new \Kaltura\Client\Service\FlavorParamsOutputService($this);
		return $this->flavorParamsOutput;
	}
	/**
	 * @return \Kaltura\Client\Service\FlavorParamsService
	 */
	public function getFlavorParamsService()
	{
		if (is_null($this->flavorParams))
			$this->flavorParams = new \Kaltura\Client\Service\FlavorParamsService($this);
		return $this->flavorParams;
	}
	/**
	 * @return \Kaltura\Client\Service\GroupUserService
	 */
	public function getGroupUserService()
	{
		if (is_null($this->groupUser))
			$this->groupUser = new \Kaltura\Client\Service\GroupUserService($this);
		return $this->groupUser;
	}
	/**
	 * @return \Kaltura\Client\Service\LiveChannelSegmentService
	 */
	public function getLiveChannelSegmentService()
	{
		if (is_null($this->liveChannelSegment))
			$this->liveChannelSegment = new \Kaltura\Client\Service\LiveChannelSegmentService($this);
		return $this->liveChannelSegment;
	}
	/**
	 * @return \Kaltura\Client\Service\LiveChannelService
	 */
	public function getLiveChannelService()
	{
		if (is_null($this->liveChannel))
			$this->liveChannel = new \Kaltura\Client\Service\LiveChannelService($this);
		return $this->liveChannel;
	}
	/**
	 * @return \Kaltura\Client\Service\LiveReportsService
	 */
	public function getLiveReportsService()
	{
		if (is_null($this->liveReports))
			$this->liveReports = new \Kaltura\Client\Service\LiveReportsService($this);
		return $this->liveReports;
	}
	/**
	 * @return \Kaltura\Client\Service\LiveStatsService
	 */
	public function getLiveStatsService()
	{
		if (is_null($this->liveStats))
			$this->liveStats = new \Kaltura\Client\Service\LiveStatsService($this);
		return $this->liveStats;
	}
	/**
	 * @return \Kaltura\Client\Service\LiveStreamService
	 */
	public function getLiveStreamService()
	{
		if (is_null($this->liveStream))
			$this->liveStream = new \Kaltura\Client\Service\LiveStreamService($this);
		return $this->liveStream;
	}
	/**
	 * @return \Kaltura\Client\Service\MediaInfoService
	 */
	public function getMediaInfoService()
	{
		if (is_null($this->mediaInfo))
			$this->mediaInfo = new \Kaltura\Client\Service\MediaInfoService($this);
		return $this->mediaInfo;
	}
	/**
	 * @return \Kaltura\Client\Service\MediaService
	 */
	public function getMediaService()
	{
		if (is_null($this->media))
			$this->media = new \Kaltura\Client\Service\MediaService($this);
		return $this->media;
	}
	/**
	 * @return \Kaltura\Client\Service\MixingService
	 */
	public function getMixingService()
	{
		if (is_null($this->mixing))
			$this->mixing = new \Kaltura\Client\Service\MixingService($this);
		return $this->mixing;
	}
	/**
	 * @return \Kaltura\Client\Service\NotificationService
	 */
	public function getNotificationService()
	{
		if (is_null($this->notification))
			$this->notification = new \Kaltura\Client\Service\NotificationService($this);
		return $this->notification;
	}
	/**
	 * @return \Kaltura\Client\Service\PartnerService
	 */
	public function getPartnerService()
	{
		if (is_null($this->partner))
			$this->partner = new \Kaltura\Client\Service\PartnerService($this);
		return $this->partner;
	}
	/**
	 * @return \Kaltura\Client\Service\PermissionItemService
	 */
	public function getPermissionItemService()
	{
		if (is_null($this->permissionItem))
			$this->permissionItem = new \Kaltura\Client\Service\PermissionItemService($this);
		return $this->permissionItem;
	}
	/**
	 * @return \Kaltura\Client\Service\PermissionService
	 */
	public function getPermissionService()
	{
		if (is_null($this->permission))
			$this->permission = new \Kaltura\Client\Service\PermissionService($this);
		return $this->permission;
	}
	/**
	 * @return \Kaltura\Client\Service\PlaylistService
	 */
	public function getPlaylistService()
	{
		if (is_null($this->playlist))
			$this->playlist = new \Kaltura\Client\Service\PlaylistService($this);
		return $this->playlist;
	}
	/**
	 * @return \Kaltura\Client\Service\ReportService
	 */
	public function getReportService()
	{
		if (is_null($this->report))
			$this->report = new \Kaltura\Client\Service\ReportService($this);
		return $this->report;
	}
	/**
	 * @return \Kaltura\Client\Service\ResponseProfileService
	 */
	public function getResponseProfileService()
	{
		if (is_null($this->responseProfile))
			$this->responseProfile = new \Kaltura\Client\Service\ResponseProfileService($this);
		return $this->responseProfile;
	}
	/**
	 * @return \Kaltura\Client\Service\SchemaService
	 */
	public function getSchemaService()
	{
		if (is_null($this->schema))
			$this->schema = new \Kaltura\Client\Service\SchemaService($this);
		return $this->schema;
	}
	/**
	 * @return \Kaltura\Client\Service\SearchService
	 */
	public function getSearchService()
	{
		if (is_null($this->search))
			$this->search = new \Kaltura\Client\Service\SearchService($this);
		return $this->search;
	}
	/**
	 * @return \Kaltura\Client\Service\ServerNodeService
	 */
	public function getServerNodeService()
	{
		if (is_null($this->serverNode))
			$this->serverNode = new \Kaltura\Client\Service\ServerNodeService($this);
		return $this->serverNode;
	}
	/**
	 * @return \Kaltura\Client\Service\SessionService
	 */
	public function getSessionService()
	{
		if (is_null($this->session))
			$this->session = new \Kaltura\Client\Service\SessionService($this);
		return $this->session;
	}
	/**
	 * @return \Kaltura\Client\Service\StatsService
	 */
	public function getStatsService()
	{
		if (is_null($this->stats))
			$this->stats = new \Kaltura\Client\Service\StatsService($this);
		return $this->stats;
	}
	/**
	 * @return \Kaltura\Client\Service\StorageProfileService
	 */
	public function getStorageProfileService()
	{
		if (is_null($this->storageProfile))
			$this->storageProfile = new \Kaltura\Client\Service\StorageProfileService($this);
		return $this->storageProfile;
	}
	/**
	 * @return \Kaltura\Client\Service\SyndicationFeedService
	 */
	public function getSyndicationFeedService()
	{
		if (is_null($this->syndicationFeed))
			$this->syndicationFeed = new \Kaltura\Client\Service\SyndicationFeedService($this);
		return $this->syndicationFeed;
	}
	/**
	 * @return \Kaltura\Client\Service\SystemService
	 */
	public function getSystemService()
	{
		if (is_null($this->system))
			$this->system = new \Kaltura\Client\Service\SystemService($this);
		return $this->system;
	}
	/**
	 * @return \Kaltura\Client\Service\ThumbAssetService
	 */
	public function getThumbAssetService()
	{
		if (is_null($this->thumbAsset))
			$this->thumbAsset = new \Kaltura\Client\Service\ThumbAssetService($this);
		return $this->thumbAsset;
	}
	/**
	 * @return \Kaltura\Client\Service\ThumbParamsOutputService
	 */
	public function getThumbParamsOutputService()
	{
		if (is_null($this->thumbParamsOutput))
			$this->thumbParamsOutput = new \Kaltura\Client\Service\ThumbParamsOutputService($this);
		return $this->thumbParamsOutput;
	}
	/**
	 * @return \Kaltura\Client\Service\ThumbParamsService
	 */
	public function getThumbParamsService()
	{
		if (is_null($this->thumbParams))
			$this->thumbParams = new \Kaltura\Client\Service\ThumbParamsService($this);
		return $this->thumbParams;
	}
	/**
	 * @return \Kaltura\Client\Service\UiConfService
	 */
	public function getUiConfService()
	{
		if (is_null($this->uiConf))
			$this->uiConf = new \Kaltura\Client\Service\UiConfService($this);
		return $this->uiConf;
	}
	/**
	 * @return \Kaltura\Client\Service\UploadService
	 */
	public function getUploadService()
	{
		if (is_null($this->upload))
			$this->upload = new \Kaltura\Client\Service\UploadService($this);
		return $this->upload;
	}
	/**
	 * @return \Kaltura\Client\Service\UploadTokenService
	 */
	public function getUploadTokenService()
	{
		if (is_null($this->uploadToken))
			$this->uploadToken = new \Kaltura\Client\Service\UploadTokenService($this);
		return $this->uploadToken;
	}
	/**
	 * @return \Kaltura\Client\Service\UserEntryService
	 */
	public function getUserEntryService()
	{
		if (is_null($this->userEntry))
			$this->userEntry = new \Kaltura\Client\Service\UserEntryService($this);
		return $this->userEntry;
	}
	/**
	 * @return \Kaltura\Client\Service\UserRoleService
	 */
	public function getUserRoleService()
	{
		if (is_null($this->userRole))
			$this->userRole = new \Kaltura\Client\Service\UserRoleService($this);
		return $this->userRole;
	}
	/**
	 * @return \Kaltura\Client\Service\UserService
	 */
	public function getUserService()
	{
		if (is_null($this->user))
			$this->user = new \Kaltura\Client\Service\UserService($this);
		return $this->user;
	}
	/**
	 * @return \Kaltura\Client\Service\WidgetService
	 */
	public function getWidgetService()
	{
		if (is_null($this->widget))
			$this->widget = new \Kaltura\Client\Service\WidgetService($this);
		return $this->widget;
	}
	/**
	 * @param string $clientTag
	 */
	public function setClientTag($clientTag)
	{
		$this->clientConfiguration['clientTag'] = $clientTag;
	}
	
	/**
	 * @return string
	 */
	public function getClientTag()
	{
		if(isset($this->clientConfiguration['clientTag']))
		{
			return $this->clientConfiguration['clientTag'];
		}
		
		return null;
	}
	
	/**
	 * @param string $apiVersion
	 */
	public function setApiVersion($apiVersion)
	{
		$this->clientConfiguration['apiVersion'] = $apiVersion;
	}
	
	/**
	 * @return string
	 */
	public function getApiVersion()
	{
		if(isset($this->clientConfiguration['apiVersion']))
		{
			return $this->clientConfiguration['apiVersion'];
		}
		
		return null;
	}
	
	/**
	 * Impersonated partner id
	 * 
	 * @param int $partnerId
	 */
	public function setPartnerId($partnerId)
	{
		$this->requestConfiguration['partnerId'] = $partnerId;
	}
	
	/**
	 * Impersonated partner id
	 * 
	 * @return int
	 */
	public function getPartnerId()
	{
		if(isset($this->requestConfiguration['partnerId']))
		{
			return $this->requestConfiguration['partnerId'];
		}
		
		return null;
	}
	
	/**
	 * Kaltura API session
	 * 
	 * @param string $ks
	 */
	public function setKs($ks)
	{
		$this->requestConfiguration['ks'] = $ks;
	}
	
	/**
	 * Kaltura API session
	 * 
	 * @return string
	 */
	public function getKs()
	{
		if(isset($this->requestConfiguration['ks']))
		{
			return $this->requestConfiguration['ks'];
		}
		
		return null;
	}
	
	/**
	 * Kaltura API session
	 * 
	 * @param string $sessionId
	 */
	public function setSessionId($sessionId)
	{
		$this->requestConfiguration['ks'] = $sessionId;
	}
	
	/**
	 * Kaltura API session
	 * 
	 * @return string
	 */
	public function getSessionId()
	{
		if(isset($this->requestConfiguration['ks']))
		{
			return $this->requestConfiguration['ks'];
		}
		
		return null;
	}
	
	/**
	 * Response profile - this attribute will be automatically unset after every API call.
	 * 
	 * @param \Kaltura\Client\Type\BaseResponseProfile $responseProfile
	 */
	public function setResponseProfile(\Kaltura\Client\Type\BaseResponseProfile $responseProfile)
	{
		$this->requestConfiguration['responseProfile'] = $responseProfile;
	}
	
	/**
	 * Response profile - this attribute will be automatically unset after every API call.
	 * 
	 * @return \Kaltura\Client\Type\BaseResponseProfile
	 */
	public function getResponseProfile()
	{
		if(isset($this->requestConfiguration['responseProfile']))
		{
			return $this->requestConfiguration['responseProfile'];
		}
		
		return null;
	}
	
	/**
	 * Clear all volatile configuration parameters
	 */
	protected function resetRequest()
	{
		parent::resetRequest();
		unset($this->requestConfiguration['responseProfile']);
	}
}
