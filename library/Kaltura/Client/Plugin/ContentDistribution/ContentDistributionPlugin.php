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
namespace Kaltura\Client\Plugin\ContentDistribution;

/**
 * @package Kaltura
 * @subpackage Client
 */
class ContentDistributionPlugin extends \Kaltura\Client\Plugin
{
	/**
	 * @var Service\DistributionProfileService
	 */
	protected $distributionProfile = null;

	/**
	 * @var Service\EntryDistributionService
	 */
	protected $entryDistribution = null;

	/**
	 * @var Service\DistributionProviderService
	 */
	protected $distributionProvider = null;

	/**
	 * @var Service\GenericDistributionProviderService
	 */
	protected $genericDistributionProvider = null;

	/**
	 * @var Service\GenericDistributionProviderActionService
	 */
	protected $genericDistributionProviderAction = null;

	/**
	 * @var Service\ContentDistributionBatchService
	 */
	protected $contentDistributionBatch = null;

	protected function __construct(\Kaltura\Client\Client $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return ContentDistributionPlugin
	 */
	public static function get(\Kaltura\Client\Client $client)
	{
		return new ContentDistributionPlugin($client);
	}

	/**
	 * @return array<\Kaltura\Client\ServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'distributionProfile' => $this->getDistributionProfileService(),
			'entryDistribution' => $this->getEntryDistributionService(),
			'distributionProvider' => $this->getDistributionProviderService(),
			'genericDistributionProvider' => $this->getGenericDistributionProviderService(),
			'genericDistributionProviderAction' => $this->getGenericDistributionProviderActionService(),
			'contentDistributionBatch' => $this->getContentDistributionBatchService(),
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'contentDistribution';
	}
	/**
	 * @return \Kaltura\Client\Plugin\ContentDistribution\Service\DistributionProfileService
	 */
	public function getDistributionProfileService()
	{
		if (is_null($this->distributionProfile))
			$this->distributionProfile = new Service\DistributionProfileService($this->_client);
		return $this->distributionProfile;
	}
	/**
	 * @return \Kaltura\Client\Plugin\ContentDistribution\Service\EntryDistributionService
	 */
	public function getEntryDistributionService()
	{
		if (is_null($this->entryDistribution))
			$this->entryDistribution = new Service\EntryDistributionService($this->_client);
		return $this->entryDistribution;
	}
	/**
	 * @return \Kaltura\Client\Plugin\ContentDistribution\Service\DistributionProviderService
	 */
	public function getDistributionProviderService()
	{
		if (is_null($this->distributionProvider))
			$this->distributionProvider = new Service\DistributionProviderService($this->_client);
		return $this->distributionProvider;
	}
	/**
	 * @return \Kaltura\Client\Plugin\ContentDistribution\Service\GenericDistributionProviderService
	 */
	public function getGenericDistributionProviderService()
	{
		if (is_null($this->genericDistributionProvider))
			$this->genericDistributionProvider = new Service\GenericDistributionProviderService($this->_client);
		return $this->genericDistributionProvider;
	}
	/**
	 * @return \Kaltura\Client\Plugin\ContentDistribution\Service\GenericDistributionProviderActionService
	 */
	public function getGenericDistributionProviderActionService()
	{
		if (is_null($this->genericDistributionProviderAction))
			$this->genericDistributionProviderAction = new Service\GenericDistributionProviderActionService($this->_client);
		return $this->genericDistributionProviderAction;
	}
	/**
	 * @return \Kaltura\Client\Plugin\ContentDistribution\Service\ContentDistributionBatchService
	 */
	public function getContentDistributionBatchService()
	{
		if (is_null($this->contentDistributionBatch))
			$this->contentDistributionBatch = new Service\ContentDistributionBatchService($this->_client);
		return $this->contentDistributionBatch;
	}
}

