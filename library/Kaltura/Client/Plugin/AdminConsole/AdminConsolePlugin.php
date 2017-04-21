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
namespace Kaltura\Client\Plugin\AdminConsole;

/**
 * @package Kaltura
 * @subpackage Client
 */
class AdminConsolePlugin extends \Kaltura\Client\Plugin
{
	/**
	 * @var Service\EntryAdminService
	 */
	protected $entryAdmin = null;

	/**
	 * @var Service\UiConfAdminService
	 */
	protected $uiConfAdmin = null;

	/**
	 * @var Service\ReportAdminService
	 */
	protected $reportAdmin = null;

	protected function __construct(\Kaltura\Client\Client $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return AdminConsolePlugin
	 */
	public static function get(\Kaltura\Client\Client $client)
	{
		return new AdminConsolePlugin($client);
	}

	/**
	 * @return array<\Kaltura\Client\ServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'entryAdmin' => $this->getEntryAdminService(),
			'uiConfAdmin' => $this->getUiConfAdminService(),
			'reportAdmin' => $this->getReportAdminService(),
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'adminConsole';
	}
	/**
	 * @return \Kaltura\Client\Plugin\AdminConsole\Service\EntryAdminService
	 */
	public function getEntryAdminService()
	{
		if (is_null($this->entryAdmin))
			$this->entryAdmin = new Service\EntryAdminService($this->_client);
		return $this->entryAdmin;
	}
	/**
	 * @return \Kaltura\Client\Plugin\AdminConsole\Service\UiConfAdminService
	 */
	public function getUiConfAdminService()
	{
		if (is_null($this->uiConfAdmin))
			$this->uiConfAdmin = new Service\UiConfAdminService($this->_client);
		return $this->uiConfAdmin;
	}
	/**
	 * @return \Kaltura\Client\Plugin\AdminConsole\Service\ReportAdminService
	 */
	public function getReportAdminService()
	{
		if (is_null($this->reportAdmin))
			$this->reportAdmin = new Service\ReportAdminService($this->_client);
		return $this->reportAdmin;
	}
}

