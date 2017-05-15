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
namespace Kaltura\Client\Plugin\Widevine\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class WidevineRepositorySyncJobData extends \Kaltura\Client\Type\JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaWidevineRepositorySyncJobData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->syncMode))
			$this->syncMode = (int)$xml->syncMode;
		if(count($xml->wvAssetIds))
			$this->wvAssetIds = (string)$xml->wvAssetIds;
		if(count($xml->modifiedAttributes))
			$this->modifiedAttributes = (string)$xml->modifiedAttributes;
		if(count($xml->monitorSyncCompletion))
			$this->monitorSyncCompletion = (int)$xml->monitorSyncCompletion;
	}
	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Widevine\Enum\WidevineRepositorySyncMode
	 */
	public $syncMode = null;

	/**
	 * 
	 * @var string
	 */
	public $wvAssetIds = null;

	/**
	 * 
	 * @var string
	 */
	public $modifiedAttributes = null;

	/**
	 * 
	 * @var int
	 */
	public $monitorSyncCompletion = null;

}
