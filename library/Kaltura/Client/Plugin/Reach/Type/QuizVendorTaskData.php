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
namespace Kaltura\Client\Plugin\Reach\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class QuizVendorTaskData extends \Kaltura\Client\Plugin\Reach\Type\LocalizedVendorTaskData
{
	public function getKalturaObjectType()
	{
		return 'KalturaQuizVendorTaskData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->numberOfQuestions))
			$this->numberOfQuestions = (int)$xml->numberOfQuestions;
		if(count($xml->questionsType))
			$this->questionsType = (string)$xml->questionsType;
		if(count($xml->context))
			$this->context = (string)$xml->context;
		if(count($xml->formalStyle))
			$this->formalStyle = (string)$xml->formalStyle;
		if(count($xml->createQuiz))
		{
			if(!empty($xml->createQuiz) && $xml->createQuiz != 'false')
				$this->createQuiz = true;
			else
				$this->createQuiz = false;
		}
		if(count($xml->quizOutput))
			$this->quizOutput = (string)$xml->quizOutput;
	}
	/**
	 * Number Of Questions.
	 * @var int
	 */
	public $numberOfQuestions = null;

	/**
	 * Questions Type.
	 * @var string
	 */
	public $questionsType = null;

	/**
	 * Quiz Context.
	 * @var string
	 */
	public $context = null;

	/**
	 * Formal Style.
	 * @var string
	 */
	public $formalStyle = null;

	/**
	 * Create quiz flag.
	 * @var bool
	 */
	public $createQuiz = null;

	/**
	 * Quiz entry Id
	 * @var string
	 */
	public $quizOutput = null;

}
