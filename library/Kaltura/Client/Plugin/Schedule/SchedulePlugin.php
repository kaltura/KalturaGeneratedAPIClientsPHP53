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
namespace Kaltura\Client\Plugin\Schedule;

/**
 * @package Kaltura
 * @subpackage Client
 */
class SchedulePlugin extends \Kaltura\Client\Plugin
{
	/**
	 * @var Service\ScheduleEventService
	 */
	protected $scheduleEvent = null;

	/**
	 * @var Service\ScheduleResourceService
	 */
	protected $scheduleResource = null;

	/**
	 * @var Service\ScheduleEventResourceService
	 */
	protected $scheduleEventResource = null;

	protected function __construct(\Kaltura\Client\Client $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return SchedulePlugin
	 */
	public static function get(\Kaltura\Client\Client $client)
	{
		return new SchedulePlugin($client);
	}

	/**
	 * @return array<\Kaltura\Client\ServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'scheduleEvent' => $this->getScheduleEventService(),
			'scheduleResource' => $this->getScheduleResourceService(),
			'scheduleEventResource' => $this->getScheduleEventResourceService(),
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'schedule';
	}
	/**
	 * @return \Kaltura\Client\Plugin\Schedule\Service\ScheduleEventService
	 */
	public function getScheduleEventService()
	{
		if (is_null($this->scheduleEvent))
			$this->scheduleEvent = new Service\ScheduleEventService($this->_client);
		return $this->scheduleEvent;
	}
	/**
	 * @return \Kaltura\Client\Plugin\Schedule\Service\ScheduleResourceService
	 */
	public function getScheduleResourceService()
	{
		if (is_null($this->scheduleResource))
			$this->scheduleResource = new Service\ScheduleResourceService($this->_client);
		return $this->scheduleResource;
	}
	/**
	 * @return \Kaltura\Client\Plugin\Schedule\Service\ScheduleEventResourceService
	 */
	public function getScheduleEventResourceService()
	{
		if (is_null($this->scheduleEventResource))
			$this->scheduleEventResource = new Service\ScheduleEventResourceService($this->_client);
		return $this->scheduleEventResource;
	}
}

