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
namespace Kaltura\Client\Plugin\Quiz\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class Quiz extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaQuiz';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->version))
			$this->version = (int)$xml->version;
		if(count($xml->uiAttributes))
		{
			if(empty($xml->uiAttributes))
				$this->uiAttributes = array();
			else
				$this->uiAttributes = \Kaltura\Client\ParseUtils::unmarshalArray($xml->uiAttributes, "KalturaKeyValue");
		}
		if(count($xml->showResultOnAnswer))
			$this->showResultOnAnswer = (int)$xml->showResultOnAnswer;
		if(count($xml->showCorrectKeyOnAnswer))
			$this->showCorrectKeyOnAnswer = (int)$xml->showCorrectKeyOnAnswer;
		if(count($xml->allowAnswerUpdate))
			$this->allowAnswerUpdate = (int)$xml->allowAnswerUpdate;
		if(count($xml->showCorrectAfterSubmission))
			$this->showCorrectAfterSubmission = (int)$xml->showCorrectAfterSubmission;
		if(count($xml->allowDownload))
			$this->allowDownload = (int)$xml->allowDownload;
		if(count($xml->showGradeAfterSubmission))
			$this->showGradeAfterSubmission = (int)$xml->showGradeAfterSubmission;
	}
	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $version = null;

	/**
	 * Array of key value ui related objects
	 * @var array<KalturaKeyValue>
	 */
	public $uiAttributes;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $showResultOnAnswer = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $showCorrectKeyOnAnswer = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $allowAnswerUpdate = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $showCorrectAfterSubmission = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $allowDownload = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $showGradeAfterSubmission = null;

}
