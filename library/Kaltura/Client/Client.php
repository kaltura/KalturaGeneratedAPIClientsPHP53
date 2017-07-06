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
	 * @var \Kaltura\Client\Service\AnnouncementService
	 */
	protected $announcement = null;

	/**
	 * @var \Kaltura\Client\Service\AppTokenService
	 */
	protected $appToken = null;

	/**
	 * @var \Kaltura\Client\Service\AssetCommentService
	 */
	protected $assetComment = null;

	/**
	 * @var \Kaltura\Client\Service\AssetService
	 */
	protected $asset = null;

	/**
	 * @var \Kaltura\Client\Service\AssetFileService
	 */
	protected $assetFile = null;

	/**
	 * @var \Kaltura\Client\Service\AssetHistoryService
	 */
	protected $assetHistory = null;

	/**
	 * @var \Kaltura\Client\Service\AssetStatisticsService
	 */
	protected $assetStatistics = null;

	/**
	 * @var \Kaltura\Client\Service\BookmarkService
	 */
	protected $bookmark = null;

	/**
	 * @var \Kaltura\Client\Service\CdnAdapterProfileService
	 */
	protected $cdnAdapterProfile = null;

	/**
	 * @var \Kaltura\Client\Service\CdnPartnerSettingsService
	 */
	protected $cdnPartnerSettings = null;

	/**
	 * @var \Kaltura\Client\Service\CDVRAdapterProfileService
	 */
	protected $cDVRAdapterProfile = null;

	/**
	 * @var \Kaltura\Client\Service\ChannelService
	 */
	protected $channel = null;

	/**
	 * @var \Kaltura\Client\Service\CouponService
	 */
	protected $coupon = null;

	/**
	 * @var \Kaltura\Client\Service\EntitlementService
	 */
	protected $entitlement = null;

	/**
	 * @var \Kaltura\Client\Service\ExportTaskService
	 */
	protected $exportTask = null;

	/**
	 * @var \Kaltura\Client\Service\ExternalChannelProfileService
	 */
	protected $externalChannelProfile = null;

	/**
	 * @var \Kaltura\Client\Service\FavoriteService
	 */
	protected $favorite = null;

	/**
	 * @var \Kaltura\Client\Service\FollowTvSeriesService
	 */
	protected $followTvSeries = null;

	/**
	 * @var \Kaltura\Client\Service\HomeNetworkService
	 */
	protected $homeNetwork = null;

	/**
	 * @var \Kaltura\Client\Service\HouseholdService
	 */
	protected $household = null;

	/**
	 * @var \Kaltura\Client\Service\HouseholdDeviceService
	 */
	protected $householdDevice = null;

	/**
	 * @var \Kaltura\Client\Service\HouseholdLimitationsService
	 */
	protected $householdLimitations = null;

	/**
	 * @var \Kaltura\Client\Service\HouseholdPaymentGatewayService
	 */
	protected $householdPaymentGateway = null;

	/**
	 * @var \Kaltura\Client\Service\HouseholdPaymentMethodService
	 */
	protected $householdPaymentMethod = null;

	/**
	 * @var \Kaltura\Client\Service\HouseholdPremiumServiceService
	 */
	protected $householdPremiumService = null;

	/**
	 * @var \Kaltura\Client\Service\HouseholdQuotaService
	 */
	protected $householdQuota = null;

	/**
	 * @var \Kaltura\Client\Service\HouseholdUserService
	 */
	protected $householdUser = null;

	/**
	 * @var \Kaltura\Client\Service\InboxMessageService
	 */
	protected $inboxMessage = null;

	/**
	 * @var \Kaltura\Client\Service\LicensedUrlService
	 */
	protected $licensedUrl = null;

	/**
	 * @var \Kaltura\Client\Service\MessageTemplateService
	 */
	protected $messageTemplate = null;

	/**
	 * @var \Kaltura\Client\Service\NotificationService
	 */
	protected $notification = null;

	/**
	 * @var \Kaltura\Client\Service\NotificationsPartnerSettingsService
	 */
	protected $notificationsPartnerSettings = null;

	/**
	 * @var \Kaltura\Client\Service\NotificationsSettingsService
	 */
	protected $notificationsSettings = null;

	/**
	 * @var \Kaltura\Client\Service\OssAdapterProfileService
	 */
	protected $ossAdapterProfile = null;

	/**
	 * @var \Kaltura\Client\Service\OttCategoryService
	 */
	protected $ottCategory = null;

	/**
	 * @var \Kaltura\Client\Service\OttUserService
	 */
	protected $ottUser = null;

	/**
	 * @var \Kaltura\Client\Service\ParentalRuleService
	 */
	protected $parentalRule = null;

	/**
	 * @var \Kaltura\Client\Service\PartnerConfigurationService
	 */
	protected $partnerConfiguration = null;

	/**
	 * @var \Kaltura\Client\Service\PaymentGatewayProfileService
	 */
	protected $paymentGatewayProfile = null;

	/**
	 * @var \Kaltura\Client\Service\PaymentMethodProfileService
	 */
	protected $paymentMethodProfile = null;

	/**
	 * @var \Kaltura\Client\Service\PersonalFeedService
	 */
	protected $personalFeed = null;

	/**
	 * @var \Kaltura\Client\Service\PinService
	 */
	protected $pin = null;

	/**
	 * @var \Kaltura\Client\Service\PpvService
	 */
	protected $ppv = null;

	/**
	 * @var \Kaltura\Client\Service\ProductPriceService
	 */
	protected $productPrice = null;

	/**
	 * @var \Kaltura\Client\Service\PurchaseSettingsService
	 */
	protected $purchaseSettings = null;

	/**
	 * @var \Kaltura\Client\Service\RecommendationProfileService
	 */
	protected $recommendationProfile = null;

	/**
	 * @var \Kaltura\Client\Service\RecordingService
	 */
	protected $recording = null;

	/**
	 * @var \Kaltura\Client\Service\RegionService
	 */
	protected $region = null;

	/**
	 * @var \Kaltura\Client\Service\RegistrySettingsService
	 */
	protected $registrySettings = null;

	/**
	 * @var \Kaltura\Client\Service\SeriesRecordingService
	 */
	protected $seriesRecording = null;

	/**
	 * @var \Kaltura\Client\Service\SessionService
	 */
	protected $session = null;

	/**
	 * @var \Kaltura\Client\Service\SocialService
	 */
	protected $social = null;

	/**
	 * @var \Kaltura\Client\Service\SubscriptionService
	 */
	protected $subscription = null;

	/**
	 * @var \Kaltura\Client\Service\SystemService
	 */
	protected $system = null;

	/**
	 * @var \Kaltura\Client\Service\TimeShiftedTvPartnerSettingsService
	 */
	protected $timeShiftedTvPartnerSettings = null;

	/**
	 * @var \Kaltura\Client\Service\TopicService
	 */
	protected $topic = null;

	/**
	 * @var \Kaltura\Client\Service\TransactionService
	 */
	protected $transaction = null;

	/**
	 * @var \Kaltura\Client\Service\TransactionHistoryService
	 */
	protected $transactionHistory = null;

	/**
	 * @var \Kaltura\Client\Service\UserAssetRuleService
	 */
	protected $userAssetRule = null;

	/**
	 * @var \Kaltura\Client\Service\UserAssetsListItemService
	 */
	protected $userAssetsListItem = null;

	/**
	 * @var \Kaltura\Client\Service\UserLoginPinService
	 */
	protected $userLoginPin = null;

	/**
	 * @var \Kaltura\Client\Service\UserRoleService
	 */
	protected $userRole = null;

	/**
	 * Kaltura client constructor
	 *
	 * @param \Kaltura\Client\Configuration $config
	 */
	public function __construct(Configuration $config)
	{
		parent::__construct($config);
		
		$this->setClientTag('php5:17-07-06');
		$this->setApiVersion('3.6.287.20330');
	}
	
	/**
	 * @return \Kaltura\Client\Service\AnnouncementService
	 */
	public function getAnnouncementService()
	{
		if (is_null($this->announcement))
			$this->announcement = new \Kaltura\Client\Service\AnnouncementService($this);
		return $this->announcement;
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
	 * @return \Kaltura\Client\Service\AssetCommentService
	 */
	public function getAssetCommentService()
	{
		if (is_null($this->assetComment))
			$this->assetComment = new \Kaltura\Client\Service\AssetCommentService($this);
		return $this->assetComment;
	}
	/**
	 * @return \Kaltura\Client\Service\AssetService
	 */
	public function getAssetService()
	{
		if (is_null($this->asset))
			$this->asset = new \Kaltura\Client\Service\AssetService($this);
		return $this->asset;
	}
	/**
	 * @return \Kaltura\Client\Service\AssetFileService
	 */
	public function getAssetFileService()
	{
		if (is_null($this->assetFile))
			$this->assetFile = new \Kaltura\Client\Service\AssetFileService($this);
		return $this->assetFile;
	}
	/**
	 * @return \Kaltura\Client\Service\AssetHistoryService
	 */
	public function getAssetHistoryService()
	{
		if (is_null($this->assetHistory))
			$this->assetHistory = new \Kaltura\Client\Service\AssetHistoryService($this);
		return $this->assetHistory;
	}
	/**
	 * @return \Kaltura\Client\Service\AssetStatisticsService
	 */
	public function getAssetStatisticsService()
	{
		if (is_null($this->assetStatistics))
			$this->assetStatistics = new \Kaltura\Client\Service\AssetStatisticsService($this);
		return $this->assetStatistics;
	}
	/**
	 * @return \Kaltura\Client\Service\BookmarkService
	 */
	public function getBookmarkService()
	{
		if (is_null($this->bookmark))
			$this->bookmark = new \Kaltura\Client\Service\BookmarkService($this);
		return $this->bookmark;
	}
	/**
	 * @return \Kaltura\Client\Service\CdnAdapterProfileService
	 */
	public function getCdnAdapterProfileService()
	{
		if (is_null($this->cdnAdapterProfile))
			$this->cdnAdapterProfile = new \Kaltura\Client\Service\CdnAdapterProfileService($this);
		return $this->cdnAdapterProfile;
	}
	/**
	 * @return \Kaltura\Client\Service\CdnPartnerSettingsService
	 */
	public function getCdnPartnerSettingsService()
	{
		if (is_null($this->cdnPartnerSettings))
			$this->cdnPartnerSettings = new \Kaltura\Client\Service\CdnPartnerSettingsService($this);
		return $this->cdnPartnerSettings;
	}
	/**
	 * @return \Kaltura\Client\Service\CDVRAdapterProfileService
	 */
	public function getCDVRAdapterProfileService()
	{
		if (is_null($this->cDVRAdapterProfile))
			$this->cDVRAdapterProfile = new \Kaltura\Client\Service\CDVRAdapterProfileService($this);
		return $this->cDVRAdapterProfile;
	}
	/**
	 * @return \Kaltura\Client\Service\ChannelService
	 */
	public function getChannelService()
	{
		if (is_null($this->channel))
			$this->channel = new \Kaltura\Client\Service\ChannelService($this);
		return $this->channel;
	}
	/**
	 * @return \Kaltura\Client\Service\CouponService
	 */
	public function getCouponService()
	{
		if (is_null($this->coupon))
			$this->coupon = new \Kaltura\Client\Service\CouponService($this);
		return $this->coupon;
	}
	/**
	 * @return \Kaltura\Client\Service\EntitlementService
	 */
	public function getEntitlementService()
	{
		if (is_null($this->entitlement))
			$this->entitlement = new \Kaltura\Client\Service\EntitlementService($this);
		return $this->entitlement;
	}
	/**
	 * @return \Kaltura\Client\Service\ExportTaskService
	 */
	public function getExportTaskService()
	{
		if (is_null($this->exportTask))
			$this->exportTask = new \Kaltura\Client\Service\ExportTaskService($this);
		return $this->exportTask;
	}
	/**
	 * @return \Kaltura\Client\Service\ExternalChannelProfileService
	 */
	public function getExternalChannelProfileService()
	{
		if (is_null($this->externalChannelProfile))
			$this->externalChannelProfile = new \Kaltura\Client\Service\ExternalChannelProfileService($this);
		return $this->externalChannelProfile;
	}
	/**
	 * @return \Kaltura\Client\Service\FavoriteService
	 */
	public function getFavoriteService()
	{
		if (is_null($this->favorite))
			$this->favorite = new \Kaltura\Client\Service\FavoriteService($this);
		return $this->favorite;
	}
	/**
	 * @return \Kaltura\Client\Service\FollowTvSeriesService
	 */
	public function getFollowTvSeriesService()
	{
		if (is_null($this->followTvSeries))
			$this->followTvSeries = new \Kaltura\Client\Service\FollowTvSeriesService($this);
		return $this->followTvSeries;
	}
	/**
	 * @return \Kaltura\Client\Service\HomeNetworkService
	 */
	public function getHomeNetworkService()
	{
		if (is_null($this->homeNetwork))
			$this->homeNetwork = new \Kaltura\Client\Service\HomeNetworkService($this);
		return $this->homeNetwork;
	}
	/**
	 * @return \Kaltura\Client\Service\HouseholdService
	 */
	public function getHouseholdService()
	{
		if (is_null($this->household))
			$this->household = new \Kaltura\Client\Service\HouseholdService($this);
		return $this->household;
	}
	/**
	 * @return \Kaltura\Client\Service\HouseholdDeviceService
	 */
	public function getHouseholdDeviceService()
	{
		if (is_null($this->householdDevice))
			$this->householdDevice = new \Kaltura\Client\Service\HouseholdDeviceService($this);
		return $this->householdDevice;
	}
	/**
	 * @return \Kaltura\Client\Service\HouseholdLimitationsService
	 */
	public function getHouseholdLimitationsService()
	{
		if (is_null($this->householdLimitations))
			$this->householdLimitations = new \Kaltura\Client\Service\HouseholdLimitationsService($this);
		return $this->householdLimitations;
	}
	/**
	 * @return \Kaltura\Client\Service\HouseholdPaymentGatewayService
	 */
	public function getHouseholdPaymentGatewayService()
	{
		if (is_null($this->householdPaymentGateway))
			$this->householdPaymentGateway = new \Kaltura\Client\Service\HouseholdPaymentGatewayService($this);
		return $this->householdPaymentGateway;
	}
	/**
	 * @return \Kaltura\Client\Service\HouseholdPaymentMethodService
	 */
	public function getHouseholdPaymentMethodService()
	{
		if (is_null($this->householdPaymentMethod))
			$this->householdPaymentMethod = new \Kaltura\Client\Service\HouseholdPaymentMethodService($this);
		return $this->householdPaymentMethod;
	}
	/**
	 * @return \Kaltura\Client\Service\HouseholdPremiumServiceService
	 */
	public function getHouseholdPremiumServiceService()
	{
		if (is_null($this->householdPremiumService))
			$this->householdPremiumService = new \Kaltura\Client\Service\HouseholdPremiumServiceService($this);
		return $this->householdPremiumService;
	}
	/**
	 * @return \Kaltura\Client\Service\HouseholdQuotaService
	 */
	public function getHouseholdQuotaService()
	{
		if (is_null($this->householdQuota))
			$this->householdQuota = new \Kaltura\Client\Service\HouseholdQuotaService($this);
		return $this->householdQuota;
	}
	/**
	 * @return \Kaltura\Client\Service\HouseholdUserService
	 */
	public function getHouseholdUserService()
	{
		if (is_null($this->householdUser))
			$this->householdUser = new \Kaltura\Client\Service\HouseholdUserService($this);
		return $this->householdUser;
	}
	/**
	 * @return \Kaltura\Client\Service\InboxMessageService
	 */
	public function getInboxMessageService()
	{
		if (is_null($this->inboxMessage))
			$this->inboxMessage = new \Kaltura\Client\Service\InboxMessageService($this);
		return $this->inboxMessage;
	}
	/**
	 * @return \Kaltura\Client\Service\LicensedUrlService
	 */
	public function getLicensedUrlService()
	{
		if (is_null($this->licensedUrl))
			$this->licensedUrl = new \Kaltura\Client\Service\LicensedUrlService($this);
		return $this->licensedUrl;
	}
	/**
	 * @return \Kaltura\Client\Service\MessageTemplateService
	 */
	public function getMessageTemplateService()
	{
		if (is_null($this->messageTemplate))
			$this->messageTemplate = new \Kaltura\Client\Service\MessageTemplateService($this);
		return $this->messageTemplate;
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
	 * @return \Kaltura\Client\Service\NotificationsPartnerSettingsService
	 */
	public function getNotificationsPartnerSettingsService()
	{
		if (is_null($this->notificationsPartnerSettings))
			$this->notificationsPartnerSettings = new \Kaltura\Client\Service\NotificationsPartnerSettingsService($this);
		return $this->notificationsPartnerSettings;
	}
	/**
	 * @return \Kaltura\Client\Service\NotificationsSettingsService
	 */
	public function getNotificationsSettingsService()
	{
		if (is_null($this->notificationsSettings))
			$this->notificationsSettings = new \Kaltura\Client\Service\NotificationsSettingsService($this);
		return $this->notificationsSettings;
	}
	/**
	 * @return \Kaltura\Client\Service\OssAdapterProfileService
	 */
	public function getOssAdapterProfileService()
	{
		if (is_null($this->ossAdapterProfile))
			$this->ossAdapterProfile = new \Kaltura\Client\Service\OssAdapterProfileService($this);
		return $this->ossAdapterProfile;
	}
	/**
	 * @return \Kaltura\Client\Service\OttCategoryService
	 */
	public function getOttCategoryService()
	{
		if (is_null($this->ottCategory))
			$this->ottCategory = new \Kaltura\Client\Service\OttCategoryService($this);
		return $this->ottCategory;
	}
	/**
	 * @return \Kaltura\Client\Service\OttUserService
	 */
	public function getOttUserService()
	{
		if (is_null($this->ottUser))
			$this->ottUser = new \Kaltura\Client\Service\OttUserService($this);
		return $this->ottUser;
	}
	/**
	 * @return \Kaltura\Client\Service\ParentalRuleService
	 */
	public function getParentalRuleService()
	{
		if (is_null($this->parentalRule))
			$this->parentalRule = new \Kaltura\Client\Service\ParentalRuleService($this);
		return $this->parentalRule;
	}
	/**
	 * @return \Kaltura\Client\Service\PartnerConfigurationService
	 */
	public function getPartnerConfigurationService()
	{
		if (is_null($this->partnerConfiguration))
			$this->partnerConfiguration = new \Kaltura\Client\Service\PartnerConfigurationService($this);
		return $this->partnerConfiguration;
	}
	/**
	 * @return \Kaltura\Client\Service\PaymentGatewayProfileService
	 */
	public function getPaymentGatewayProfileService()
	{
		if (is_null($this->paymentGatewayProfile))
			$this->paymentGatewayProfile = new \Kaltura\Client\Service\PaymentGatewayProfileService($this);
		return $this->paymentGatewayProfile;
	}
	/**
	 * @return \Kaltura\Client\Service\PaymentMethodProfileService
	 */
	public function getPaymentMethodProfileService()
	{
		if (is_null($this->paymentMethodProfile))
			$this->paymentMethodProfile = new \Kaltura\Client\Service\PaymentMethodProfileService($this);
		return $this->paymentMethodProfile;
	}
	/**
	 * @return \Kaltura\Client\Service\PersonalFeedService
	 */
	public function getPersonalFeedService()
	{
		if (is_null($this->personalFeed))
			$this->personalFeed = new \Kaltura\Client\Service\PersonalFeedService($this);
		return $this->personalFeed;
	}
	/**
	 * @return \Kaltura\Client\Service\PinService
	 */
	public function getPinService()
	{
		if (is_null($this->pin))
			$this->pin = new \Kaltura\Client\Service\PinService($this);
		return $this->pin;
	}
	/**
	 * @return \Kaltura\Client\Service\PpvService
	 */
	public function getPpvService()
	{
		if (is_null($this->ppv))
			$this->ppv = new \Kaltura\Client\Service\PpvService($this);
		return $this->ppv;
	}
	/**
	 * @return \Kaltura\Client\Service\ProductPriceService
	 */
	public function getProductPriceService()
	{
		if (is_null($this->productPrice))
			$this->productPrice = new \Kaltura\Client\Service\ProductPriceService($this);
		return $this->productPrice;
	}
	/**
	 * @return \Kaltura\Client\Service\PurchaseSettingsService
	 */
	public function getPurchaseSettingsService()
	{
		if (is_null($this->purchaseSettings))
			$this->purchaseSettings = new \Kaltura\Client\Service\PurchaseSettingsService($this);
		return $this->purchaseSettings;
	}
	/**
	 * @return \Kaltura\Client\Service\RecommendationProfileService
	 */
	public function getRecommendationProfileService()
	{
		if (is_null($this->recommendationProfile))
			$this->recommendationProfile = new \Kaltura\Client\Service\RecommendationProfileService($this);
		return $this->recommendationProfile;
	}
	/**
	 * @return \Kaltura\Client\Service\RecordingService
	 */
	public function getRecordingService()
	{
		if (is_null($this->recording))
			$this->recording = new \Kaltura\Client\Service\RecordingService($this);
		return $this->recording;
	}
	/**
	 * @return \Kaltura\Client\Service\RegionService
	 */
	public function getRegionService()
	{
		if (is_null($this->region))
			$this->region = new \Kaltura\Client\Service\RegionService($this);
		return $this->region;
	}
	/**
	 * @return \Kaltura\Client\Service\RegistrySettingsService
	 */
	public function getRegistrySettingsService()
	{
		if (is_null($this->registrySettings))
			$this->registrySettings = new \Kaltura\Client\Service\RegistrySettingsService($this);
		return $this->registrySettings;
	}
	/**
	 * @return \Kaltura\Client\Service\SeriesRecordingService
	 */
	public function getSeriesRecordingService()
	{
		if (is_null($this->seriesRecording))
			$this->seriesRecording = new \Kaltura\Client\Service\SeriesRecordingService($this);
		return $this->seriesRecording;
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
	 * @return \Kaltura\Client\Service\SocialService
	 */
	public function getSocialService()
	{
		if (is_null($this->social))
			$this->social = new \Kaltura\Client\Service\SocialService($this);
		return $this->social;
	}
	/**
	 * @return \Kaltura\Client\Service\SubscriptionService
	 */
	public function getSubscriptionService()
	{
		if (is_null($this->subscription))
			$this->subscription = new \Kaltura\Client\Service\SubscriptionService($this);
		return $this->subscription;
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
	 * @return \Kaltura\Client\Service\TimeShiftedTvPartnerSettingsService
	 */
	public function getTimeShiftedTvPartnerSettingsService()
	{
		if (is_null($this->timeShiftedTvPartnerSettings))
			$this->timeShiftedTvPartnerSettings = new \Kaltura\Client\Service\TimeShiftedTvPartnerSettingsService($this);
		return $this->timeShiftedTvPartnerSettings;
	}
	/**
	 * @return \Kaltura\Client\Service\TopicService
	 */
	public function getTopicService()
	{
		if (is_null($this->topic))
			$this->topic = new \Kaltura\Client\Service\TopicService($this);
		return $this->topic;
	}
	/**
	 * @return \Kaltura\Client\Service\TransactionService
	 */
	public function getTransactionService()
	{
		if (is_null($this->transaction))
			$this->transaction = new \Kaltura\Client\Service\TransactionService($this);
		return $this->transaction;
	}
	/**
	 * @return \Kaltura\Client\Service\TransactionHistoryService
	 */
	public function getTransactionHistoryService()
	{
		if (is_null($this->transactionHistory))
			$this->transactionHistory = new \Kaltura\Client\Service\TransactionHistoryService($this);
		return $this->transactionHistory;
	}
	/**
	 * @return \Kaltura\Client\Service\UserAssetRuleService
	 */
	public function getUserAssetRuleService()
	{
		if (is_null($this->userAssetRule))
			$this->userAssetRule = new \Kaltura\Client\Service\UserAssetRuleService($this);
		return $this->userAssetRule;
	}
	/**
	 * @return \Kaltura\Client\Service\UserAssetsListItemService
	 */
	public function getUserAssetsListItemService()
	{
		if (is_null($this->userAssetsListItem))
			$this->userAssetsListItem = new \Kaltura\Client\Service\UserAssetsListItemService($this);
		return $this->userAssetsListItem;
	}
	/**
	 * @return \Kaltura\Client\Service\UserLoginPinService
	 */
	public function getUserLoginPinService()
	{
		if (is_null($this->userLoginPin))
			$this->userLoginPin = new \Kaltura\Client\Service\UserLoginPinService($this);
		return $this->userLoginPin;
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
	 * Impersonated user id
	 * 
	 * @param int $userId
	 */
	public function setUserId($userId)
	{
		$this->requestConfiguration['userId'] = $userId;
	}
	
	/**
	 * Impersonated user id
	 * 
	 * @return int
	 */
	public function getUserId()
	{
		if(isset($this->requestConfiguration['userId']))
		{
			return $this->requestConfiguration['userId'];
		}
		
		return null;
	}
	
	/**
	 * Content language
	 * 
	 * @param int $language
	 */
	public function setLanguage($language)
	{
		$this->requestConfiguration['language'] = $language;
	}
	
	/**
	 * Content language
	 * 
	 * @return int
	 */
	public function getLanguage()
	{
		if(isset($this->requestConfiguration['language']))
		{
			return $this->requestConfiguration['language'];
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
	 * Clear all volatile configuration parameters
	 */
	protected function resetRequest()
	{
		parent::resetRequest();
	}
}
