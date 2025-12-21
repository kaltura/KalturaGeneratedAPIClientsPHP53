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
namespace Kaltura\Client\Plugin\ElasticSearch\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class ESearchScoreFunctionParams extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaESearchScoreFunctionParams';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->decayAlgorithm))
			$this->decayAlgorithm = (string)$xml->decayAlgorithm;
		if(count($xml->functionField))
			$this->functionField = (string)$xml->functionField;
		if(count($xml->boostMode))
			$this->boostMode = (string)$xml->boostMode;
		if(count($xml->origin))
			$this->origin = (string)$xml->origin;
		if(count($xml->weight))
			$this->weight = (float)$xml->weight;
		if(count($xml->scale))
			$this->scale = (string)$xml->scale;
		if(count($xml->decay))
			$this->decay = (float)$xml->decay;
	}
	/**
	 * 
	 * @var \Kaltura\Client\Plugin\ElasticSearch\Enum\ESearchScoreFunctionDecayAlgorithm
	 */
	public $decayAlgorithm = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\ElasticSearch\Enum\ESearchScoreFunctionField
	 */
	public $functionField = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\ElasticSearch\Enum\ESearchScoreFunctionBoostMode
	 */
	public $boostMode = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\ElasticSearch\Enum\ESearchScoreFunctionOrigin
	 */
	public $origin = null;

	/**
	 * 
	 * @var float
	 */
	public $weight = null;

	/**
	 * 
	 * @var string
	 */
	public $scale = null;

	/**
	 * 
	 * @var float
	 */
	public $decay = null;

}
