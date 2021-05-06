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
class Widget extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaWidget';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->sourceWidgetId))
			$this->sourceWidgetId = (string)$xml->sourceWidgetId;
		if(count($xml->rootWidgetId))
			$this->rootWidgetId = (string)$xml->rootWidgetId;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->entryId))
			$this->entryId = (string)$xml->entryId;
		if(count($xml->uiConfId))
			$this->uiConfId = (int)$xml->uiConfId;
		if(count($xml->securityType))
			$this->securityType = (int)$xml->securityType;
		if(count($xml->securityPolicy))
			$this->securityPolicy = (int)$xml->securityPolicy;
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(count($xml->partnerData))
			$this->partnerData = (string)$xml->partnerData;
		if(count($xml->widgetHTML))
			$this->widgetHTML = (string)$xml->widgetHTML;
		if(count($xml->enforceEntitlement))
		{
			if(!empty($xml->enforceEntitlement) && $xml->enforceEntitlement != 'false')
				$this->enforceEntitlement = true;
			else
				$this->enforceEntitlement = false;
		}
		if(count($xml->privacyContext))
			$this->privacyContext = (string)$xml->privacyContext;
		if(count($xml->addEmbedHtml5Support))
		{
			if(!empty($xml->addEmbedHtml5Support) && $xml->addEmbedHtml5Support != 'false')
				$this->addEmbedHtml5Support = true;
			else
				$this->addEmbedHtml5Support = false;
		}
		if(count($xml->roles))
			$this->roles = (string)$xml->roles;
		if(count($xml->privileges))
			$this->privileges = (string)$xml->privileges;
	}
	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 * @var string
	 */
	public $sourceWidgetId = null;

	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $rootWidgetId = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * 
	 * @var string
	 */
	public $entryId = null;

	/**
	 * 
	 * @var int
	 */
	public $uiConfId = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\WidgetSecurityType
	 */
	public $securityType = null;

	/**
	 * 
	 * @var int
	 */
	public $securityPolicy = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * Can be used to store various partner related data as a string
	 * @var string
	 */
	public $partnerData = null;

	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $widgetHTML = null;

	/**
	 * Should enforce entitlement on feed entries
	 * @var bool
	 */
	public $enforceEntitlement = null;

	/**
	 * Set privacy context for search entries that assiged to private and public categories within a category privacy context.
	 * @var string
	 */
	public $privacyContext = null;

	/**
	 * Addes the HTML5 script line to the widget's embed code
	 * @var bool
	 */
	public $addEmbedHtml5Support = null;

	/**
	 * 
	 * @var string
	 */
	public $roles = null;

	/**
	 * 
	 * @var string
	 */
	public $privileges = null;

}
