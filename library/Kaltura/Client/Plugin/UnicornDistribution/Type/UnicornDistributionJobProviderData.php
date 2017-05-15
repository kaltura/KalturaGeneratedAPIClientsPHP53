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
namespace Kaltura\Client\Plugin\UnicornDistribution\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class UnicornDistributionJobProviderData extends \Kaltura\Client\Plugin\ContentDistribution\Type\ConfigurableDistributionJobProviderData
{
	public function getKalturaObjectType()
	{
		return 'KalturaUnicornDistributionJobProviderData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->catalogGuid))
			$this->catalogGuid = (string)$xml->catalogGuid;
		if(count($xml->title))
			$this->title = (string)$xml->title;
		if(count($xml->mediaChanged))
		{
			if(!empty($xml->mediaChanged))
				$this->mediaChanged = true;
			else
				$this->mediaChanged = false;
		}
		if(count($xml->flavorAssetVersion))
			$this->flavorAssetVersion = (string)$xml->flavorAssetVersion;
		if(count($xml->notificationBaseUrl))
			$this->notificationBaseUrl = (string)$xml->notificationBaseUrl;
	}
	/**
	 * The Catalog GUID the video is in or will be ingested into.
	 * @var string
	 */
	public $catalogGuid = null;

	/**
	 * The Title assigned to the video. The Foreign Key will be used if no title is provided.
	 * @var string
	 */
	public $title = null;

	/**
	 * Indicates that the media content changed and therefore the job should wait for HTTP callback notification to be closed.
	 * @var bool
	 */
	public $mediaChanged = null;

	/**
	 * Flavor asset version.
	 * @var string
	 */
	public $flavorAssetVersion = null;

	/**
	 * The schema and host name to the Kaltura server, e.g. http://www.kaltura.com
	 * @var string
	 */
	public $notificationBaseUrl = null;

}
