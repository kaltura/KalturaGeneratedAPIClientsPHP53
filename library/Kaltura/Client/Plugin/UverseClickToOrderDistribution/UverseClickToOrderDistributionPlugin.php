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
namespace Kaltura\Client\Plugin\UverseClickToOrderDistribution;

/**
 * @package Kaltura
 * @subpackage Client
 */
class UverseClickToOrderDistributionPlugin extends \Kaltura\Client\Plugin
{
	/**
	 * @var Service\UverseClickToOrderService
	 */
	protected $uverseClickToOrder = null;

	protected function __construct(\Kaltura\Client\Client $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return UverseClickToOrderDistributionPlugin
	 */
	public static function get(\Kaltura\Client\Client $client)
	{
		return new UverseClickToOrderDistributionPlugin($client);
	}

	/**
	 * @return array<\Kaltura\Client\ServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'uverseClickToOrder' => $this->getUverseClickToOrderService(),
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'uverseClickToOrderDistribution';
	}
	/**
	 * @return \Kaltura\Client\Plugin\UverseClickToOrderDistribution\Service\UverseClickToOrderService
	 */
	public function getUverseClickToOrderService()
	{
		if (is_null($this->uverseClickToOrder))
			$this->uverseClickToOrder = new Service\UverseClickToOrderService($this->_client);
		return $this->uverseClickToOrder;
	}
}

