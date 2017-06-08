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
abstract class ServerNode extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaServerNode';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(count($xml->heartbeatTime))
			$this->heartbeatTime = (int)$xml->heartbeatTime;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->systemName))
			$this->systemName = (string)$xml->systemName;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->hostName))
			$this->hostName = (string)$xml->hostName;
		if(count($xml->status))
			$this->status = (int)$xml->status;
		if(count($xml->type))
			$this->type = (string)$xml->type;
		if(count($xml->tags))
			$this->tags = (string)$xml->tags;
		if(count($xml->dc))
			$this->dc = (int)$xml->dc;
		if(count($xml->parentId))
			$this->parentId = (string)$xml->parentId;
	}
	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $heartbeatTime = null;

	/**
	 * serverNode name
	 * @var string
	 */
	public $name = null;

	/**
	 * serverNode uniqe system name
	 * @var string
	 */
	public $systemName = null;

	/**
	 * 
	 * @var string
	 */
	public $description = null;

	/**
	 * serverNode hostName
	 * @var string
	 */
	public $hostName = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\ServerNodeStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\ServerNodeType
	 * @readonly
	 */
	public $type = null;

	/**
	 * serverNode tags
	 * @var string
	 */
	public $tags = null;

	/**
	 * DC where the serverNode is located
	 * @var int
	 * @readonly
	 */
	public $dc = null;

	/**
	 * Id of the parent serverNode
	 * @var string
	 */
	public $parentId = null;

}
