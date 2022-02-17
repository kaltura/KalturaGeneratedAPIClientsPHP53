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
// Copyright (C) 2006-2022  Kaltura Inc.
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
class ReportExportJobData extends \Kaltura\Client\Type\JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaReportExportJobData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->recipientEmail))
			$this->recipientEmail = (string)$xml->recipientEmail;
		if(count($xml->reportItems))
		{
			if(empty($xml->reportItems))
				$this->reportItems = array();
			else
				$this->reportItems = \Kaltura\Client\ParseUtils::unmarshalArray($xml->reportItems, "KalturaReportExportItem");
		}
		if(count($xml->filePaths))
			$this->filePaths = (string)$xml->filePaths;
		if(count($xml->reportsGroup))
			$this->reportsGroup = (string)$xml->reportsGroup;
		if(count($xml->files))
		{
			if(empty($xml->files))
				$this->files = array();
			else
				$this->files = \Kaltura\Client\ParseUtils::unmarshalArray($xml->files, "KalturaReportExportFile");
		}
		if(count($xml->baseUrl))
			$this->baseUrl = (string)$xml->baseUrl;
	}
	/**
	 * 
	 * @var string
	 */
	public $recipientEmail = null;

	/**
	 * 
	 * @var array<KalturaReportExportItem>
	 */
	public $reportItems;

	/**
	 * 
	 * @var string
	 */
	public $filePaths = null;

	/**
	 * 
	 * @var string
	 */
	public $reportsGroup = null;

	/**
	 * 
	 * @var array<KalturaReportExportFile>
	 */
	public $files;

	/**
	 * 
	 * @var string
	 */
	public $baseUrl = null;

}
