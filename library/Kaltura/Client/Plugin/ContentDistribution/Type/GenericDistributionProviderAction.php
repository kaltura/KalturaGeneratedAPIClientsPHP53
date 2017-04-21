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
namespace Kaltura\Client\Plugin\ContentDistribution\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class GenericDistributionProviderAction extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaGenericDistributionProviderAction';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(count($xml->genericDistributionProviderId))
			$this->genericDistributionProviderId = (int)$xml->genericDistributionProviderId;
		if(count($xml->action))
			$this->action = (int)$xml->action;
		if(count($xml->status))
			$this->status = (int)$xml->status;
		if(count($xml->resultsParser))
			$this->resultsParser = (int)$xml->resultsParser;
		if(count($xml->protocol))
			$this->protocol = (int)$xml->protocol;
		if(count($xml->serverAddress))
			$this->serverAddress = (string)$xml->serverAddress;
		if(count($xml->remotePath))
			$this->remotePath = (string)$xml->remotePath;
		if(count($xml->remoteUsername))
			$this->remoteUsername = (string)$xml->remoteUsername;
		if(count($xml->remotePassword))
			$this->remotePassword = (string)$xml->remotePassword;
		if(count($xml->editableFields))
			$this->editableFields = (string)$xml->editableFields;
		if(count($xml->mandatoryFields))
			$this->mandatoryFields = (string)$xml->mandatoryFields;
		if(count($xml->mrssTransformer))
			$this->mrssTransformer = (string)$xml->mrssTransformer;
		if(count($xml->mrssValidator))
			$this->mrssValidator = (string)$xml->mrssValidator;
		if(count($xml->resultsTransformer))
			$this->resultsTransformer = (string)$xml->resultsTransformer;
	}
	/**
	 * Auto generated
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Generic distribution provider action creation date as Unix timestamp (In seconds)
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Generic distribution provider action last update date as Unix timestamp (In seconds)
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 * @var int
	 * @insertonly
	 */
	public $genericDistributionProviderId = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\ContentDistribution\Enum\DistributionAction
	 * @insertonly
	 */
	public $action = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\ContentDistribution\Enum\GenericDistributionProviderStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\ContentDistribution\Enum\GenericDistributionProviderParser
	 */
	public $resultsParser = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\ContentDistribution\Enum\DistributionProtocol
	 */
	public $protocol = null;

	/**
	 * 
	 * @var string
	 */
	public $serverAddress = null;

	/**
	 * 
	 * @var string
	 */
	public $remotePath = null;

	/**
	 * 
	 * @var string
	 */
	public $remoteUsername = null;

	/**
	 * 
	 * @var string
	 */
	public $remotePassword = null;

	/**
	 * 
	 * @var string
	 */
	public $editableFields = null;

	/**
	 * 
	 * @var string
	 */
	public $mandatoryFields = null;

	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $mrssTransformer = null;

	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $mrssValidator = null;

	/**
	 * 
	 * @var string
	 * @readonly
	 */
	public $resultsTransformer = null;

}
