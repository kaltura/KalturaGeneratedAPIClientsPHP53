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
 * @package Kaltura
 * @subpackage Client
 */
class QuizUserEntry extends \Kaltura\Client\Type\UserEntry
{
	public function getKalturaObjectType()
	{
		return 'KalturaQuizUserEntry';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->score))
			$this->score = (float)$xml->score;
		if(count($xml->calculatedScore))
			$this->calculatedScore = (float)$xml->calculatedScore;
		if(count($xml->feedback))
			$this->feedback = (string)$xml->feedback;
		if(count($xml->version))
			$this->version = (int)$xml->version;
	}
	/**
	 * 
	 * @var float
	 * @readonly
	 */
	public $score = null;

	/**
	 * 
	 * @var float
	 * @readonly
	 */
	public $calculatedScore = null;

	/**
	 * 
	 * @var string
	 */
	public $feedback = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $version = null;

}
