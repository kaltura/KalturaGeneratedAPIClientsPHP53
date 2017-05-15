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
namespace Kaltura\Client\Plugin\SynacorHboDistribution\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class SynacorHboDistributionProfile extends \Kaltura\Client\Plugin\ContentDistribution\Type\ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaSynacorHboDistributionProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->feedUrl))
			$this->feedUrl = (string)$xml->feedUrl;
		if(count($xml->feedTitle))
			$this->feedTitle = (string)$xml->feedTitle;
		if(count($xml->feedSubtitle))
			$this->feedSubtitle = (string)$xml->feedSubtitle;
		if(count($xml->feedLink))
			$this->feedLink = (string)$xml->feedLink;
		if(count($xml->feedAuthorName))
			$this->feedAuthorName = (string)$xml->feedAuthorName;
	}
	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $feedUrl = null;

	/**
	 * 
	 * @var string
	 */
	public $feedTitle = null;

	/**
	 * 
	 * @var string
	 */
	public $feedSubtitle = null;

	/**
	 * 
	 * @var string
	 */
	public $feedLink = null;

	/**
	 * 
	 * @var string
	 */
	public $feedAuthorName = null;

}
