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
 * Used to ingest media file that is already accessible on the shared disc.
 * @package Kaltura
 * @subpackage Client
 */
class ServerFileResource extends \Kaltura\Client\Type\GenericDataCenterContentResource
{
	public function getKalturaObjectType()
	{
		return 'KalturaServerFileResource';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->localFilePath))
			$this->localFilePath = (string)$xml->localFilePath;
		if(count($xml->keepOriginalFile))
		{
			if(!empty($xml->keepOriginalFile) && $xml->keepOriginalFile != 'false')
				$this->keepOriginalFile = true;
			else
				$this->keepOriginalFile = false;
		}
	}
	/**
	 * Full path to the local file
	 * @var string
	 */
	public $localFilePath = null;

	/**
	 * Should keep original file (false = mv, true = cp)
	 * @var bool
	 */
	public $keepOriginalFile = null;

}
