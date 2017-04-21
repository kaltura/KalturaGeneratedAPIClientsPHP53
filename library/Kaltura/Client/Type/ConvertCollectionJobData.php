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
class ConvertCollectionJobData extends \Kaltura\Client\Type\ConvartableJobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaConvertCollectionJobData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->destDirLocalPath))
			$this->destDirLocalPath = (string)$xml->destDirLocalPath;
		if(count($xml->destDirRemoteUrl))
			$this->destDirRemoteUrl = (string)$xml->destDirRemoteUrl;
		if(count($xml->destFileName))
			$this->destFileName = (string)$xml->destFileName;
		if(count($xml->inputXmlLocalPath))
			$this->inputXmlLocalPath = (string)$xml->inputXmlLocalPath;
		if(count($xml->inputXmlRemoteUrl))
			$this->inputXmlRemoteUrl = (string)$xml->inputXmlRemoteUrl;
		if(count($xml->commandLinesStr))
			$this->commandLinesStr = (string)$xml->commandLinesStr;
		if(count($xml->flavors))
		{
			if(empty($xml->flavors))
				$this->flavors = array();
			else
				$this->flavors = \Kaltura\Client\ParseUtils::unmarshalArray($xml->flavors, "KalturaConvertCollectionFlavorData");
		}
	}
	/**
	 * 
	 * @var string
	 */
	public $destDirLocalPath = null;

	/**
	 * 
	 * @var string
	 */
	public $destDirRemoteUrl = null;

	/**
	 * 
	 * @var string
	 */
	public $destFileName = null;

	/**
	 * 
	 * @var string
	 */
	public $inputXmlLocalPath = null;

	/**
	 * 
	 * @var string
	 */
	public $inputXmlRemoteUrl = null;

	/**
	 * 
	 * @var string
	 */
	public $commandLinesStr = null;

	/**
	 * 
	 * @var array<KalturaConvertCollectionFlavorData>
	 */
	public $flavors;

}
