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
namespace Kaltura\Client\Plugin\Reach\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class ModerationVendorTaskData extends \Kaltura\Client\Plugin\Reach\Type\VendorTaskData
{
	public function getKalturaObjectType()
	{
		return 'KalturaModerationVendorTaskData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->ruleIds))
			$this->ruleIds = (string)$xml->ruleIds;
		if(count($xml->policyIds))
			$this->policyIds = (string)$xml->policyIds;
		if(count($xml->categoryIds))
			$this->categoryIds = (string)$xml->categoryIds;
		if(count($xml->moderationOutputJson))
			$this->moderationOutputJson = (string)$xml->moderationOutputJson;
	}
	/**
	 * A comma seperated string of rule IDs.
	 * @var string
	 */
	public $ruleIds = null;

	/**
	 * A comma seperated string of policy IDs.
	 * @var string
	 */
	public $policyIds = null;

	/**
	 * A comma seperated string of category IDs.
	 * @var string
	 */
	public $categoryIds = null;

	/**
	 * JSON string containing the moderation output.
	 * @var string
	 */
	public $moderationOutputJson = null;

}
