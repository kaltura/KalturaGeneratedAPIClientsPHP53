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
// Copyright (C) 2006-2021  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\Integration;

/**
 * @package Kaltura
 * @subpackage Client
 */
class IntegrationPlugin extends \Kaltura\Client\Plugin
{
	/**
	 * @var Service\IntegrationService
	 */
	protected $integration = null;

	protected function __construct(\Kaltura\Client\Client $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return IntegrationPlugin
	 */
	public static function get(\Kaltura\Client\Client $client)
	{
		return new IntegrationPlugin($client);
	}

	/**
	 * @return array<\Kaltura\Client\ServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'integration' => $this->getIntegrationService(),
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'integration';
	}
	/**
	 * @return \Kaltura\Client\Plugin\Integration\Service\IntegrationService
	 */
	public function getIntegrationService()
	{
		if (is_null($this->integration))
			$this->integration = new Service\IntegrationService($this->_client);
		return $this->integration;
	}
}

