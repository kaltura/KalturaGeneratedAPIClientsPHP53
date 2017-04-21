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
namespace Kaltura\Client\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class AssetParamsOutput extends \Kaltura\Client\Type\AssetParams
{
	public function getKalturaObjectType()
	{
		return 'KalturaAssetParamsOutput';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->assetParamsId))
			$this->assetParamsId = (int)$xml->assetParamsId;
		if(count($xml->assetParamsVersion))
			$this->assetParamsVersion = (string)$xml->assetParamsVersion;
		if(count($xml->assetId))
			$this->assetId = (string)$xml->assetId;
		if(count($xml->assetVersion))
			$this->assetVersion = (string)$xml->assetVersion;
		if(count($xml->readyBehavior))
			$this->readyBehavior = (int)$xml->readyBehavior;
		if(count($xml->format))
			$this->format = (string)$xml->format;
	}
	/**
	 * 
	 * @var int
	 */
	public $assetParamsId = null;

	/**
	 * 
	 * @var string
	 */
	public $assetParamsVersion = null;

	/**
	 * 
	 * @var string
	 */
	public $assetId = null;

	/**
	 * 
	 * @var string
	 */
	public $assetVersion = null;

	/**
	 * 
	 * @var int
	 */
	public $readyBehavior = null;

	/**
	 * The container format of the Flavor Params
	 * @var \Kaltura\Client\Enum\ContainerFormat
	 */
	public $format = null;

}
