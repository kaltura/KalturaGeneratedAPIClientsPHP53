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
namespace Kaltura\Client\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class ReportInputFilter extends \Kaltura\Client\Type\ReportInputBaseFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaReportInputFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->keywords))
			$this->keywords = (string)$xml->keywords;
		if(count($xml->searchInTags))
		{
			if(!empty($xml->searchInTags) && $xml->searchInTags != 'false')
				$this->searchInTags = true;
			else
				$this->searchInTags = false;
		}
		if(count($xml->searchInAdminTags))
		{
			if(!empty($xml->searchInAdminTags) && $xml->searchInAdminTags != 'false')
				$this->searchInAdminTags = true;
			else
				$this->searchInAdminTags = false;
		}
		if(count($xml->categories))
			$this->categories = (string)$xml->categories;
		if(count($xml->categoriesIdsIn))
			$this->categoriesIdsIn = (string)$xml->categoriesIdsIn;
		if(count($xml->customVar1In))
			$this->customVar1In = (string)$xml->customVar1In;
		if(count($xml->customVar2In))
			$this->customVar2In = (string)$xml->customVar2In;
		if(count($xml->customVar3In))
			$this->customVar3In = (string)$xml->customVar3In;
		if(count($xml->deviceIn))
			$this->deviceIn = (string)$xml->deviceIn;
		if(count($xml->countryIn))
			$this->countryIn = (string)$xml->countryIn;
		if(count($xml->regionIn))
			$this->regionIn = (string)$xml->regionIn;
		if(count($xml->citiesIn))
			$this->citiesIn = (string)$xml->citiesIn;
		if(count($xml->operatingSystemFamilyIn))
			$this->operatingSystemFamilyIn = (string)$xml->operatingSystemFamilyIn;
		if(count($xml->operatingSystemIn))
			$this->operatingSystemIn = (string)$xml->operatingSystemIn;
		if(count($xml->browserFamilyIn))
			$this->browserFamilyIn = (string)$xml->browserFamilyIn;
		if(count($xml->browserIn))
			$this->browserIn = (string)$xml->browserIn;
		if(count($xml->timeZoneOffset))
			$this->timeZoneOffset = (int)$xml->timeZoneOffset;
		if(count($xml->interval))
			$this->interval = (string)$xml->interval;
		if(count($xml->mediaTypeIn))
			$this->mediaTypeIn = (string)$xml->mediaTypeIn;
		if(count($xml->sourceTypeIn))
			$this->sourceTypeIn = (string)$xml->sourceTypeIn;
		if(count($xml->ownerIdsIn))
			$this->ownerIdsIn = (string)$xml->ownerIdsIn;
		if(count($xml->entryOperator) && !empty($xml->entryOperator))
			$this->entryOperator = \Kaltura\Client\ParseUtils::unmarshalObject($xml->entryOperator, "KalturaESearchEntryOperator");
		if(count($xml->entryCreatedAtGreaterThanOrEqual))
			$this->entryCreatedAtGreaterThanOrEqual = (int)$xml->entryCreatedAtGreaterThanOrEqual;
		if(count($xml->entryCreatedAtLessThanOrEqual))
			$this->entryCreatedAtLessThanOrEqual = (int)$xml->entryCreatedAtLessThanOrEqual;
		if(count($xml->entryIdIn))
			$this->entryIdIn = (string)$xml->entryIdIn;
		if(count($xml->playbackTypeIn))
			$this->playbackTypeIn = (string)$xml->playbackTypeIn;
		if(count($xml->playbackContextIdsIn))
			$this->playbackContextIdsIn = (string)$xml->playbackContextIdsIn;
		if(count($xml->rootEntryIdIn))
			$this->rootEntryIdIn = (string)$xml->rootEntryIdIn;
		if(count($xml->errorCodeIn))
			$this->errorCodeIn = (string)$xml->errorCodeIn;
		if(count($xml->playerVersionIn))
			$this->playerVersionIn = (string)$xml->playerVersionIn;
		if(count($xml->ispIn))
			$this->ispIn = (string)$xml->ispIn;
		if(count($xml->applicationVersionIn))
			$this->applicationVersionIn = (string)$xml->applicationVersionIn;
		if(count($xml->nodeIdsIn))
			$this->nodeIdsIn = (string)$xml->nodeIdsIn;
		if(count($xml->categoriesAncestorIdIn))
			$this->categoriesAncestorIdIn = (string)$xml->categoriesAncestorIdIn;
		if(count($xml->hotspotIdIn))
			$this->hotspotIdIn = (string)$xml->hotspotIdIn;
		if(count($xml->crmIdIn))
			$this->crmIdIn = (string)$xml->crmIdIn;
		if(count($xml->playlistIdIn))
			$this->playlistIdIn = (string)$xml->playlistIdIn;
		if(count($xml->domainIn))
			$this->domainIn = (string)$xml->domainIn;
		if(count($xml->canonicalUrlIn))
			$this->canonicalUrlIn = (string)$xml->canonicalUrlIn;
	}
	/**
	 * Search keywords to filter objects
	 * @var string
	 */
	public $keywords = null;

	/**
	 * Search keywords in objects tags
	 * @var bool
	 */
	public $searchInTags = null;

	/**
	 * Search keywords in objects admin tags
	 * @var bool
	 */
	public $searchInAdminTags = null;

	/**
	 * Search objects in specified categories
	 * @var string
	 */
	public $categories = null;

	/**
	 * Search objects in specified category ids
	 * @var string
	 */
	public $categoriesIdsIn = null;

	/**
	 * Filter by customVar1
	 * @var string
	 */
	public $customVar1In = null;

	/**
	 * Filter by customVar2
	 * @var string
	 */
	public $customVar2In = null;

	/**
	 * Filter by customVar3
	 * @var string
	 */
	public $customVar3In = null;

	/**
	 * Filter by device
	 * @var string
	 */
	public $deviceIn = null;

	/**
	 * Filter by country
	 * @var string
	 */
	public $countryIn = null;

	/**
	 * Filter by region
	 * @var string
	 */
	public $regionIn = null;

	/**
	 * Filter by city
	 * @var string
	 */
	public $citiesIn = null;

	/**
	 * Filter by operating system family
	 * @var string
	 */
	public $operatingSystemFamilyIn = null;

	/**
	 * Filter by operating system
	 * @var string
	 */
	public $operatingSystemIn = null;

	/**
	 * Filter by browser family
	 * @var string
	 */
	public $browserFamilyIn = null;

	/**
	 * Filter by browser
	 * @var string
	 */
	public $browserIn = null;

	/**
	 * Time zone offset in minutes
	 * @var int
	 */
	public $timeZoneOffset = null;

	/**
	 * Aggregated results according to interval
	 * @var \Kaltura\Client\Enum\ReportInterval
	 */
	public $interval = null;

	/**
	 * Filter by media types
	 * @var string
	 */
	public $mediaTypeIn = null;

	/**
	 * Filter by source types
	 * @var string
	 */
	public $sourceTypeIn = null;

	/**
	 * Filter by entry owner
	 * @var string
	 */
	public $ownerIdsIn = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\ElasticSearch\Type\ESearchEntryOperator
	 */
	public $entryOperator;

	/**
	 * Entry created at greater than or equal as Unix timestamp
	 * @var int
	 */
	public $entryCreatedAtGreaterThanOrEqual = null;

	/**
	 * Entry created at less than or equal as Unix timestamp
	 * @var int
	 */
	public $entryCreatedAtLessThanOrEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $entryIdIn = null;

	/**
	 * 
	 * @var string
	 */
	public $playbackTypeIn = null;

	/**
	 * filter by playback context ids
	 * @var string
	 */
	public $playbackContextIdsIn = null;

	/**
	 * filter by root entry ids
	 * @var string
	 */
	public $rootEntryIdIn = null;

	/**
	 * filter by error code
	 * @var string
	 */
	public $errorCodeIn = null;

	/**
	 * filter by player version
	 * @var string
	 */
	public $playerVersionIn = null;

	/**
	 * filter by isp
	 * @var string
	 */
	public $ispIn = null;

	/**
	 * filter by application version
	 * @var string
	 */
	public $applicationVersionIn = null;

	/**
	 * filter by node id
	 * @var string
	 */
	public $nodeIdsIn = null;

	/**
	 * filter by categories ancestor
	 * @var string
	 */
	public $categoriesAncestorIdIn = null;

	/**
	 * filter by hotspot id
	 * @var string
	 */
	public $hotspotIdIn = null;

	/**
	 * filter by crm id
	 * @var string
	 */
	public $crmIdIn = null;

	/**
	 * filter by playlist id
	 * @var string
	 */
	public $playlistIdIn = null;

	/**
	 * filter by domain
	 * @var string
	 */
	public $domainIn = null;

	/**
	 * filter by canonical url
	 * @var string
	 */
	public $canonicalUrlIn = null;

}
