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
namespace Kaltura\Client\Plugin\EmailNotification\Type;

/**
 * API object which provides the recipients of category related notifications.
 * @package Kaltura
 * @subpackage Client
 */
class EmailNotificationCategoryRecipientProvider extends \Kaltura\Client\Plugin\EmailNotification\Type\EmailNotificationRecipientProvider
{
	public function getKalturaObjectType()
	{
		return 'KalturaEmailNotificationCategoryRecipientProvider';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->categoryId) && !empty($xml->categoryId))
			$this->categoryId = \Kaltura\Client\ParseUtils::unmarshalObject($xml->categoryId, "KalturaStringValue");
		if(count($xml->categoryUserFilter) && !empty($xml->categoryUserFilter))
			$this->categoryUserFilter = \Kaltura\Client\ParseUtils::unmarshalObject($xml->categoryUserFilter, "KalturaCategoryUserProviderFilter");
	}
	/**
	 * The ID of the category whose subscribers should receive the email notification.
	 * @var \Kaltura\Client\Type\StringValue
	 */
	public $categoryId;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\EmailNotification\Type\CategoryUserProviderFilter
	 */
	public $categoryUserFilter;

}
