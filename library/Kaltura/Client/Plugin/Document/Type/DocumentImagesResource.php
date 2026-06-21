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
namespace Kaltura\Client\Plugin\Document\Type;

/**
 * Used to ingest a single image extracted from a document entry's
 *  generated image list. The image is selected by its zero-based index
 *  within the document's imagesList.xml.
 * @package Kaltura
 * @subpackage Client
 */
class DocumentImagesResource extends \Kaltura\Client\Type\ContentResource
{
	public function getKalturaObjectType()
	{
		return 'KalturaDocumentImagesResource';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->flavorAssetId))
			$this->flavorAssetId = (string)$xml->flavorAssetId;
		if(count($xml->index))
			$this->index = (int)$xml->index;
	}
	/**
	 * ID of the flavor asset containing the image list
	 * @var string
	 */
	public $flavorAssetId = null;

	/**
	 * Zero-based index of the image to retrieve from the list
	 * @var int
	 */
	public $index = null;

}
