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
namespace Kaltura\Client\Plugin\BusinessProcessNotification;

/**
 * @package Kaltura
 * @subpackage Client
 */
class BusinessProcessNotificationPlugin extends \Kaltura\Client\Plugin
{
	/**
	 * @var Service\BusinessProcessServerService
	 */
	protected $businessProcessServer = null;

	/**
	 * @var Service\BusinessProcessCaseService
	 */
	protected $businessProcessCase = null;

	protected function __construct(\Kaltura\Client\Client $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return BusinessProcessNotificationPlugin
	 */
	public static function get(\Kaltura\Client\Client $client)
	{
		return new BusinessProcessNotificationPlugin($client);
	}

	/**
	 * @return array<\Kaltura\Client\ServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'businessProcessServer' => $this->getBusinessProcessServerService(),
			'businessProcessCase' => $this->getBusinessProcessCaseService(),
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'businessProcessNotification';
	}
	/**
	 * @return \Kaltura\Client\Plugin\BusinessProcessNotification\Service\BusinessProcessServerService
	 */
	public function getBusinessProcessServerService()
	{
		if (is_null($this->businessProcessServer))
			$this->businessProcessServer = new Service\BusinessProcessServerService($this->_client);
		return $this->businessProcessServer;
	}
	/**
	 * @return \Kaltura\Client\Plugin\BusinessProcessNotification\Service\BusinessProcessCaseService
	 */
	public function getBusinessProcessCaseService()
	{
		if (is_null($this->businessProcessCase))
			$this->businessProcessCase = new Service\BusinessProcessCaseService($this->_client);
		return $this->businessProcessCase;
	}
}

