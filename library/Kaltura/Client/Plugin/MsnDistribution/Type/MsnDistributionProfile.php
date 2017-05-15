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
namespace Kaltura\Client\Plugin\MsnDistribution\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class MsnDistributionProfile extends \Kaltura\Client\Plugin\ContentDistribution\Type\ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaMsnDistributionProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->username))
			$this->username = (string)$xml->username;
		if(count($xml->password))
			$this->password = (string)$xml->password;
		if(count($xml->domain))
			$this->domain = (string)$xml->domain;
		if(count($xml->csId))
			$this->csId = (string)$xml->csId;
		if(count($xml->source))
			$this->source = (string)$xml->source;
		if(count($xml->sourceFriendlyName))
			$this->sourceFriendlyName = (string)$xml->sourceFriendlyName;
		if(count($xml->pageGroup))
			$this->pageGroup = (string)$xml->pageGroup;
		if(count($xml->sourceFlavorParamsId))
			$this->sourceFlavorParamsId = (int)$xml->sourceFlavorParamsId;
		if(count($xml->wmvFlavorParamsId))
			$this->wmvFlavorParamsId = (int)$xml->wmvFlavorParamsId;
		if(count($xml->flvFlavorParamsId))
			$this->flvFlavorParamsId = (int)$xml->flvFlavorParamsId;
		if(count($xml->slFlavorParamsId))
			$this->slFlavorParamsId = (int)$xml->slFlavorParamsId;
		if(count($xml->slHdFlavorParamsId))
			$this->slHdFlavorParamsId = (int)$xml->slHdFlavorParamsId;
		if(count($xml->msnvideoCat))
			$this->msnvideoCat = (string)$xml->msnvideoCat;
		if(count($xml->msnvideoTop))
			$this->msnvideoTop = (string)$xml->msnvideoTop;
		if(count($xml->msnvideoTopCat))
			$this->msnvideoTopCat = (string)$xml->msnvideoTopCat;
	}
	/**
	 * 
	 * @var string
	 */
	public $username = null;

	/**
	 * 
	 * @var string
	 */
	public $password = null;

	/**
	 * 
	 * @var string
	 */
	public $domain = null;

	/**
	 * 
	 * @var string
	 */
	public $csId = null;

	/**
	 * 
	 * @var string
	 */
	public $source = null;

	/**
	 * 
	 * @var string
	 */
	public $sourceFriendlyName = null;

	/**
	 * 
	 * @var string
	 */
	public $pageGroup = null;

	/**
	 * 
	 * @var int
	 */
	public $sourceFlavorParamsId = null;

	/**
	 * 
	 * @var int
	 */
	public $wmvFlavorParamsId = null;

	/**
	 * 
	 * @var int
	 */
	public $flvFlavorParamsId = null;

	/**
	 * 
	 * @var int
	 */
	public $slFlavorParamsId = null;

	/**
	 * 
	 * @var int
	 */
	public $slHdFlavorParamsId = null;

	/**
	 * 
	 * @var string
	 */
	public $msnvideoCat = null;

	/**
	 * 
	 * @var string
	 */
	public $msnvideoTop = null;

	/**
	 * 
	 * @var string
	 */
	public $msnvideoTopCat = null;

}
