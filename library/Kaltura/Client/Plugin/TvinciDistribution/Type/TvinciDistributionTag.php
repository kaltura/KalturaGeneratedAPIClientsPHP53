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
namespace Kaltura\Client\Plugin\TvinciDistribution\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class TvinciDistributionTag extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaTvinciDistributionTag';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->tagname))
			$this->tagname = (string)$xml->tagname;
		if(count($xml->extension))
			$this->extension = (string)$xml->extension;
		if(count($xml->protocol))
			$this->protocol = (string)$xml->protocol;
		if(count($xml->format))
			$this->format = (string)$xml->format;
		if(count($xml->filename))
			$this->filename = (string)$xml->filename;
		if(count($xml->ppvmodule))
			$this->ppvmodule = (string)$xml->ppvmodule;
	}
	/**
	 * 
	 * @var string
	 */
	public $tagname = null;

	/**
	 * 
	 * @var string
	 */
	public $extension = null;

	/**
	 * 
	 * @var string
	 */
	public $protocol = null;

	/**
	 * 
	 * @var string
	 */
	public $format = null;

	/**
	 * 
	 * @var string
	 */
	public $filename = null;

	/**
	 * 
	 * @var string
	 */
	public $ppvmodule = null;

}
