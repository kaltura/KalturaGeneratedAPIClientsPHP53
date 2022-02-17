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
// Copyright (C) 2006-2022  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\Reach;

/**
 * @package Kaltura
 * @subpackage Client
 */
class ReachPlugin extends \Kaltura\Client\Plugin
{
	/**
	 * @var Service\VendorCatalogItemService
	 */
	protected $vendorCatalogItem = null;

	/**
	 * @var Service\ReachProfileService
	 */
	protected $reachProfile = null;

	/**
	 * @var Service\EntryVendorTaskService
	 */
	protected $entryVendorTask = null;

	/**
	 * @var Service\PartnerCatalogItemService
	 */
	protected $PartnerCatalogItem = null;

	protected function __construct(\Kaltura\Client\Client $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return ReachPlugin
	 */
	public static function get(\Kaltura\Client\Client $client)
	{
		return new ReachPlugin($client);
	}

	/**
	 * @return array<\Kaltura\Client\ServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'vendorCatalogItem' => $this->getVendorCatalogItemService(),
			'reachProfile' => $this->getReachProfileService(),
			'entryVendorTask' => $this->getEntryVendorTaskService(),
			'PartnerCatalogItem' => $this->getPartnerCatalogItemService(),
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'reach';
	}
	/**
	 * @return \Kaltura\Client\Plugin\Reach\Service\VendorCatalogItemService
	 */
	public function getVendorCatalogItemService()
	{
		if (is_null($this->vendorCatalogItem))
			$this->vendorCatalogItem = new Service\VendorCatalogItemService($this->_client);
		return $this->vendorCatalogItem;
	}
	/**
	 * @return \Kaltura\Client\Plugin\Reach\Service\ReachProfileService
	 */
	public function getReachProfileService()
	{
		if (is_null($this->reachProfile))
			$this->reachProfile = new Service\ReachProfileService($this->_client);
		return $this->reachProfile;
	}
	/**
	 * @return \Kaltura\Client\Plugin\Reach\Service\EntryVendorTaskService
	 */
	public function getEntryVendorTaskService()
	{
		if (is_null($this->entryVendorTask))
			$this->entryVendorTask = new Service\EntryVendorTaskService($this->_client);
		return $this->entryVendorTask;
	}
	/**
	 * @return \Kaltura\Client\Plugin\Reach\Service\PartnerCatalogItemService
	 */
	public function getPartnerCatalogItemService()
	{
		if (is_null($this->PartnerCatalogItem))
			$this->PartnerCatalogItem = new Service\PartnerCatalogItemService($this->_client);
		return $this->PartnerCatalogItem;
	}
}

