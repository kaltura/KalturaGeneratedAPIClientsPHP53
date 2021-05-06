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
class ReportExportItem extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaReportExportItem';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->reportTitle))
			$this->reportTitle = (string)$xml->reportTitle;
		if(count($xml->action))
			$this->action = (int)$xml->action;
		if(count($xml->reportType))
			$this->reportType = (string)$xml->reportType;
		if(count($xml->filter) && !empty($xml->filter))
			$this->filter = \Kaltura\Client\ParseUtils::unmarshalObject($xml->filter, "KalturaReportInputFilter");
		if(count($xml->order))
			$this->order = (string)$xml->order;
		if(count($xml->objectIds))
			$this->objectIds = (string)$xml->objectIds;
		if(count($xml->responseOptions) && !empty($xml->responseOptions))
			$this->responseOptions = \Kaltura\Client\ParseUtils::unmarshalObject($xml->responseOptions, "KalturaReportResponseOptions");
	}
	/**
	 * 
	 * @var string
	 */
	public $reportTitle = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\ReportExportItemType
	 */
	public $action = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\ReportType
	 */
	public $reportType = null;

	/**
	 * 
	 * @var \Kaltura\Client\Type\ReportInputFilter
	 */
	public $filter;

	/**
	 * 
	 * @var string
	 */
	public $order = null;

	/**
	 * 
	 * @var string
	 */
	public $objectIds = null;

	/**
	 * 
	 * @var \Kaltura\Client\Type\ReportResponseOptions
	 */
	public $responseOptions;

}
