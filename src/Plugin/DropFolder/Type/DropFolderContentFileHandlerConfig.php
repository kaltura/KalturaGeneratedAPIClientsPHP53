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
// Copyright (C) 2006-2011  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\DropFolder\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class DropFolderContentFileHandlerConfig extends \Kaltura\Client\Plugin\DropFolder\Type\DropFolderFileHandlerConfig
{
	public function getKalturaObjectType()
	{
		return 'KalturaDropFolderContentFileHandlerConfig';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->contentMatchPolicy))
			$this->contentMatchPolicy = (int)$xml->contentMatchPolicy;
		$this->slugRegex = (string)$xml->slugRegex;
	}
	/**
	 * 
	 * @var \Kaltura\Client\Plugin\DropFolder\Enum\DropFolderContentFileHandlerMatchPolicy
	 */
	public $contentMatchPolicy = null;

	/**
	 * Regular expression that defines valid file names to be handled.
	 * 	 The following might be extracted from the file name and used if defined:
	 * 	 - (?P<referenceId>\w+) - will be used as the drop folder file's parsed slug.
	 * 	 - (?P<flavorName>\w+)  - will be used as the drop folder file's parsed flavor.
	 * 	 
	 * @var string
	 */
	public $slugRegex = null;

}
