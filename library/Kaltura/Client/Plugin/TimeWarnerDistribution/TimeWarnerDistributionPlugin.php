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
namespace Kaltura\Client\Plugin\TimeWarnerDistribution;

/**
 * @package Kaltura
 * @subpackage Client
 */
class TimeWarnerDistributionPlugin extends \Kaltura\Client\Plugin
{
	/**
	 * @var Service\TimeWarnerService
	 */
	protected $timeWarner = null;

	protected function __construct(\Kaltura\Client\Client $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return TimeWarnerDistributionPlugin
	 */
	public static function get(\Kaltura\Client\Client $client)
	{
		return new TimeWarnerDistributionPlugin($client);
	}

	/**
	 * @return array<\Kaltura\Client\ServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'timeWarner' => $this->getTimeWarnerService(),
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'timeWarnerDistribution';
	}
	/**
	 * @return \Kaltura\Client\Plugin\TimeWarnerDistribution\Service\TimeWarnerService
	 */
	public function getTimeWarnerService()
	{
		if (is_null($this->timeWarner))
			$this->timeWarner = new Service\TimeWarnerService($this->_client);
		return $this->timeWarner;
	}
}

