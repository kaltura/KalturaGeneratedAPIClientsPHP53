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
class SearchResult extends \Kaltura\Client\Type\Search
{
	public function getKalturaObjectType()
	{
		return 'KalturaSearchResult';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->title))
			$this->title = (string)$xml->title;
		if(count($xml->thumbUrl))
			$this->thumbUrl = (string)$xml->thumbUrl;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->tags))
			$this->tags = (string)$xml->tags;
		if(count($xml->url))
			$this->url = (string)$xml->url;
		if(count($xml->sourceLink))
			$this->sourceLink = (string)$xml->sourceLink;
		if(count($xml->credit))
			$this->credit = (string)$xml->credit;
		if(count($xml->licenseType))
			$this->licenseType = (int)$xml->licenseType;
		if(count($xml->flashPlaybackType))
			$this->flashPlaybackType = (string)$xml->flashPlaybackType;
		if(count($xml->fileExt))
			$this->fileExt = (string)$xml->fileExt;
	}
	/**
	 * 
	 * @var string
	 */
	public $id = null;

	/**
	 * 
	 * @var string
	 */
	public $title = null;

	/**
	 * 
	 * @var string
	 */
	public $thumbUrl = null;

	/**
	 * 
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 * @var string
	 */
	public $tags = null;

	/**
	 * 
	 * @var string
	 */
	public $url = null;

	/**
	 * 
	 * @var string
	 */
	public $sourceLink = null;

	/**
	 * 
	 * @var string
	 */
	public $credit = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\LicenseType
	 */
	public $licenseType = null;

	/**
	 * 
	 * @var string
	 */
	public $flashPlaybackType = null;

	/**
	 * 
	 * @var string
	 */
	public $fileExt = null;

}
