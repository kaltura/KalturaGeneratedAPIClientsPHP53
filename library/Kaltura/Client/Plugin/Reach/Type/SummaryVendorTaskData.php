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
class SummaryVendorTaskData extends \Kaltura\Client\Plugin\Reach\Type\LocalizedVendorTaskData
{
	public function getKalturaObjectType()
	{
		return 'KalturaSummaryVendorTaskData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->typeOfSummary))
			$this->typeOfSummary = (string)$xml->typeOfSummary;
		if(count($xml->writingStyle))
			$this->writingStyle = (string)$xml->writingStyle;
		if(count($xml->summaryOutputJson))
			$this->summaryOutputJson = (string)$xml->summaryOutputJson;
	}
	/**
	 * Type of summary.
	 * @var \Kaltura\Client\Plugin\Reach\Enum\TypeOfSummaryTaskData
	 */
	public $typeOfSummary = null;

	/**
	 * Writing style of the summary.
	 * @var \Kaltura\Client\Plugin\Reach\Enum\SummaryWritingStyleTaskData
	 */
	public $writingStyle = null;

	/**
	 * JSON string containing the summary output.
	 * @var string
	 */
	public $summaryOutputJson = null;

}
