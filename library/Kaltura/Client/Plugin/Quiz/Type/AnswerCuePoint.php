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
class AnswerCuePoint extends \Kaltura\Client\Plugin\CuePoint\Type\CuePoint
{
	public function getKalturaObjectType()
	{
		return 'KalturaAnswerCuePoint';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->parentId))
			$this->parentId = (string)$xml->parentId;
		if(count($xml->quizUserEntryId))
			$this->quizUserEntryId = (string)$xml->quizUserEntryId;
		if(count($xml->answerKey))
			$this->answerKey = (string)$xml->answerKey;
		if(count($xml->isCorrect))
			$this->isCorrect = (int)$xml->isCorrect;
		if(count($xml->correctAnswerKeys))
		{
			if(empty($xml->correctAnswerKeys))
				$this->correctAnswerKeys = array();
			else
				$this->correctAnswerKeys = \Kaltura\Client\ParseUtils::unmarshalArray($xml->correctAnswerKeys, "KalturaString");
		}
		if(count($xml->explanation))
			$this->explanation = (string)$xml->explanation;
	}
	/**
	 * 
	 * @var string
	 * @insertonly
	 */
	public $parentId = null;

	/**
	 * 
	 * @var string
	 * @insertonly
	 */
	public $quizUserEntryId = null;

	/**
	 * 
	 * @var string
	 */
	public $answerKey = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 * @readonly
	 */
	public $isCorrect = null;

	/**
	 * Array of string
	 * @var array<KalturaString>
	 * @readonly
	 */
	public $correctAnswerKeys;

	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $explanation = null;

}
