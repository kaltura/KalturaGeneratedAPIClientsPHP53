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
namespace Kaltura\Client\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class MailJobData extends \Kaltura\Client\Type\JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaMailJobData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->mailType))
			$this->mailType = (string)$xml->mailType;
		if(count($xml->mailPriority))
			$this->mailPriority = (int)$xml->mailPriority;
		if(count($xml->status))
			$this->status = (int)$xml->status;
		if(count($xml->recipientName))
			$this->recipientName = (string)$xml->recipientName;
		if(count($xml->recipientEmail))
			$this->recipientEmail = (string)$xml->recipientEmail;
		if(count($xml->recipientId))
			$this->recipientId = (int)$xml->recipientId;
		if(count($xml->fromName))
			$this->fromName = (string)$xml->fromName;
		if(count($xml->fromEmail))
			$this->fromEmail = (string)$xml->fromEmail;
		if(count($xml->bodyParams))
			$this->bodyParams = (string)$xml->bodyParams;
		if(count($xml->subjectParams))
			$this->subjectParams = (string)$xml->subjectParams;
		if(count($xml->templatePath))
			$this->templatePath = (string)$xml->templatePath;
		if(count($xml->language))
			$this->language = (string)$xml->language;
		if(count($xml->campaignId))
			$this->campaignId = (int)$xml->campaignId;
		if(count($xml->minSendDate))
			$this->minSendDate = (int)$xml->minSendDate;
		if(count($xml->isHtml))
		{
			if(!empty($xml->isHtml))
				$this->isHtml = true;
			else
				$this->isHtml = false;
		}
		if(count($xml->separator))
			$this->separator = (string)$xml->separator;
	}
	/**
	 * 
	 * @var \Kaltura\Client\Enum\MailType
	 */
	public $mailType = null;

	/**
	 * 
	 * @var int
	 */
	public $mailPriority = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\MailJobStatus
	 */
	public $status = null;

	/**
	 * 
	 * @var string
	 */
	public $recipientName = null;

	/**
	 * 
	 * @var string
	 */
	public $recipientEmail = null;

	/**
	 * kuserId
	 * @var int
	 */
	public $recipientId = null;

	/**
	 * 
	 * @var string
	 */
	public $fromName = null;

	/**
	 * 
	 * @var string
	 */
	public $fromEmail = null;

	/**
	 * 
	 * @var string
	 */
	public $bodyParams = null;

	/**
	 * 
	 * @var string
	 */
	public $subjectParams = null;

	/**
	 * 
	 * @var string
	 */
	public $templatePath = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\LanguageCode
	 */
	public $language = null;

	/**
	 * 
	 * @var int
	 */
	public $campaignId = null;

	/**
	 * 
	 * @var int
	 */
	public $minSendDate = null;

	/**
	 * 
	 * @var bool
	 */
	public $isHtml = null;

	/**
	 * 
	 * @var string
	 */
	public $separator = null;

}
