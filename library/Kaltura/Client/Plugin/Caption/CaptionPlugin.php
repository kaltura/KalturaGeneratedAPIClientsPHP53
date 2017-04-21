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
namespace Kaltura\Client\Plugin\Caption;

/**
 * @package Kaltura
 * @subpackage Client
 */
class CaptionPlugin extends \Kaltura\Client\Plugin
{
	/**
	 * @var Service\CaptionAssetService
	 */
	protected $captionAsset = null;

	/**
	 * @var Service\CaptionParamsService
	 */
	protected $captionParams = null;

	protected function __construct(\Kaltura\Client\Client $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return CaptionPlugin
	 */
	public static function get(\Kaltura\Client\Client $client)
	{
		return new CaptionPlugin($client);
	}

	/**
	 * @return array<\Kaltura\Client\ServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'captionAsset' => $this->getCaptionAssetService(),
			'captionParams' => $this->getCaptionParamsService(),
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'caption';
	}
	/**
	 * @return \Kaltura\Client\Plugin\Caption\Service\CaptionAssetService
	 */
	public function getCaptionAssetService()
	{
		if (is_null($this->captionAsset))
			$this->captionAsset = new Service\CaptionAssetService($this->_client);
		return $this->captionAsset;
	}
	/**
	 * @return \Kaltura\Client\Plugin\Caption\Service\CaptionParamsService
	 */
	public function getCaptionParamsService()
	{
		if (is_null($this->captionParams))
			$this->captionParams = new Service\CaptionParamsService($this->_client);
		return $this->captionParams;
	}
}

