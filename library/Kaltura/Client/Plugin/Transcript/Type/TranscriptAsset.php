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
namespace Kaltura\Client\Plugin\Transcript\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class TranscriptAsset extends \Kaltura\Client\Plugin\Attachment\Type\AttachmentAsset
{
	public function getKalturaObjectType()
	{
		return 'KalturaTranscriptAsset';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->accuracy))
			$this->accuracy = (float)$xml->accuracy;
		if(count($xml->humanVerified))
			$this->humanVerified = (int)$xml->humanVerified;
		if(count($xml->language))
			$this->language = (string)$xml->language;
		if(count($xml->providerType))
			$this->providerType = (string)$xml->providerType;
	}
	/**
	 * The accuracy of the transcript - values between 0 and 1
	 * @var float
	 */
	public $accuracy = null;

	/**
	 * Was verified by human or machine
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $humanVerified = null;

	/**
	 * The language of the transcript
	 * @var \Kaltura\Client\Enum\Language
	 */
	public $language = null;

	/**
	 * The provider of the transcript
	 * @var \Kaltura\Client\Plugin\Transcript\Enum\TranscriptProviderType
	 */
	public $providerType = null;

}
