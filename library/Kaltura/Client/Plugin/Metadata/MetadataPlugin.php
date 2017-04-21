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
namespace Kaltura\Client\Plugin\Metadata;

/**
 * @package Kaltura
 * @subpackage Client
 */
class MetadataPlugin extends \Kaltura\Client\Plugin
{
	/**
	 * @var Service\MetadataService
	 */
	protected $metadata = null;

	/**
	 * @var Service\MetadataProfileService
	 */
	protected $metadataProfile = null;

	/**
	 * @var Service\MetadataBatchService
	 */
	protected $metadataBatch = null;

	protected function __construct(\Kaltura\Client\Client $client)
	{
		parent::__construct($client);
	}

	/**
	 * @return MetadataPlugin
	 */
	public static function get(\Kaltura\Client\Client $client)
	{
		return new MetadataPlugin($client);
	}

	/**
	 * @return array<\Kaltura\Client\ServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'metadata' => $this->getMetadataService(),
			'metadataProfile' => $this->getMetadataProfileService(),
			'metadataBatch' => $this->getMetadataBatchService(),
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'metadata';
	}
	/**
	 * @return \Kaltura\Client\Plugin\Metadata\Service\MetadataService
	 */
	public function getMetadataService()
	{
		if (is_null($this->metadata))
			$this->metadata = new Service\MetadataService($this->_client);
		return $this->metadata;
	}
	/**
	 * @return \Kaltura\Client\Plugin\Metadata\Service\MetadataProfileService
	 */
	public function getMetadataProfileService()
	{
		if (is_null($this->metadataProfile))
			$this->metadataProfile = new Service\MetadataProfileService($this->_client);
		return $this->metadataProfile;
	}
	/**
	 * @return \Kaltura\Client\Plugin\Metadata\Service\MetadataBatchService
	 */
	public function getMetadataBatchService()
	{
		if (is_null($this->metadataBatch))
			$this->metadataBatch = new Service\MetadataBatchService($this->_client);
		return $this->metadataBatch;
	}
}

