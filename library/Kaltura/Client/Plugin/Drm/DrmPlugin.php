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
namespace Kaltura\Client\Plugin\Drm;

/**
 * @package Kaltura
 * @subpackage Client
 */
class DrmPlugin extends \Kaltura\Client\Plugin
{
	/**
	 * @var Service\DrmPolicyService
	 */
	protected $drmPolicy = null;

	/**
	 * @var Service\DrmProfileService
	 */
	protected $drmProfile = null;

	/**
	 * @var Service\DrmLicenseAccessService
	 */
	protected $drmLicenseAccess = null;

	protected function __construct(\Kaltura\Client\Client $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return DrmPlugin
	 */
	public static function get(\Kaltura\Client\Client $client)
	{
		return new DrmPlugin($client);
	}

	/**
	 * @return array<\Kaltura\Client\ServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'drmPolicy' => $this->getDrmPolicyService(),
			'drmProfile' => $this->getDrmProfileService(),
			'drmLicenseAccess' => $this->getDrmLicenseAccessService(),
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'drm';
	}
	/**
	 * @return \Kaltura\Client\Plugin\Drm\Service\DrmPolicyService
	 */
	public function getDrmPolicyService()
	{
		if (is_null($this->drmPolicy))
			$this->drmPolicy = new Service\DrmPolicyService($this->_client);
		return $this->drmPolicy;
	}
	/**
	 * @return \Kaltura\Client\Plugin\Drm\Service\DrmProfileService
	 */
	public function getDrmProfileService()
	{
		if (is_null($this->drmProfile))
			$this->drmProfile = new Service\DrmProfileService($this->_client);
		return $this->drmProfile;
	}
	/**
	 * @return \Kaltura\Client\Plugin\Drm\Service\DrmLicenseAccessService
	 */
	public function getDrmLicenseAccessService()
	{
		if (is_null($this->drmLicenseAccess))
			$this->drmLicenseAccess = new Service\DrmLicenseAccessService($this->_client);
		return $this->drmLicenseAccess;
	}
}

