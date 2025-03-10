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
namespace Kaltura\Client\Type;

/**
 * Used to ingest media that is available on remote server and accessible using the supplied URL, media file will be downloaded using import job in order to make the asset ready.
 * @package Kaltura
 * @subpackage Client
 */
class UrlResource extends \Kaltura\Client\Type\ContentResource
{
	public function getKalturaObjectType()
	{
		return 'KalturaUrlResource';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->url))
			$this->url = (string)$xml->url;
		if(count($xml->forceAsyncDownload))
		{
			if(!empty($xml->forceAsyncDownload) && $xml->forceAsyncDownload != 'false')
				$this->forceAsyncDownload = true;
			else
				$this->forceAsyncDownload = false;
		}
		if(count($xml->urlHeaders))
		{
			if(empty($xml->urlHeaders))
				$this->urlHeaders = array();
			else
				$this->urlHeaders = \Kaltura\Client\ParseUtils::unmarshalArray($xml->urlHeaders, "KalturaString");
		}
		if(count($xml->shouldRedirect))
		{
			if(!empty($xml->shouldRedirect) && $xml->shouldRedirect != 'false')
				$this->shouldRedirect = true;
			else
				$this->shouldRedirect = false;
		}
	}
	/**
	 * Remote URL, FTP, HTTP or HTTPS
	 * @var string
	 */
	public $url = null;

	/**
	 * Force Import Job
	 * @var bool
	 */
	public $forceAsyncDownload = null;

	/**
	 * 
	 * @var array<KalturaString>
	 */
	public $urlHeaders;

	/**
	 * 
	 * @var bool
	 */
	public $shouldRedirect = null;

}
