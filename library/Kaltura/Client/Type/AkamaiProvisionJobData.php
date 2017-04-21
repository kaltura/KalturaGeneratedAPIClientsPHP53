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
class AkamaiProvisionJobData extends \Kaltura\Client\Type\ProvisionJobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaAkamaiProvisionJobData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->wsdlUsername))
			$this->wsdlUsername = (string)$xml->wsdlUsername;
		if(count($xml->wsdlPassword))
			$this->wsdlPassword = (string)$xml->wsdlPassword;
		if(count($xml->cpcode))
			$this->cpcode = (string)$xml->cpcode;
		if(count($xml->emailId))
			$this->emailId = (string)$xml->emailId;
		if(count($xml->primaryContact))
			$this->primaryContact = (string)$xml->primaryContact;
		if(count($xml->secondaryContact))
			$this->secondaryContact = (string)$xml->secondaryContact;
	}
	/**
	 * 
	 * @var string
	 */
	public $wsdlUsername = null;

	/**
	 * 
	 * @var string
	 */
	public $wsdlPassword = null;

	/**
	 * 
	 * @var string
	 */
	public $cpcode = null;

	/**
	 * 
	 * @var string
	 */
	public $emailId = null;

	/**
	 * 
	 * @var string
	 */
	public $primaryContact = null;

	/**
	 * 
	 * @var string
	 */
	public $secondaryContact = null;

}
