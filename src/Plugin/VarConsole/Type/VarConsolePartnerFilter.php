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
// Copyright (C) 2006-2011  Kaltura Inc.
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
namespace Kaltura\Client\Plugin\VarConsole\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class VarConsolePartnerFilter extends \Kaltura\Client\Type\PartnerFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaVarConsolePartnerFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->groupTypeEq))
			$this->groupTypeEq = (int)$xml->groupTypeEq;
		$this->groupTypeIn = (string)$xml->groupTypeIn;
		$this->partnerPermissionsExist = (string)$xml->partnerPermissionsExist;
	}
	/**
	 * Eq filter for the partner's group type
	 *      
	 * @var \Kaltura\Client\Enum\PartnerGroupType
	 */
	public $groupTypeEq = null;

	/**
	 * In filter for the partner's group type
	 *      
	 * @var string
	 */
	public $groupTypeIn = null;

	/**
	 * Filter for partner permissions- filter contains comma-separated string of permission names which the returned partners should have.
	 *      
	 * @var string
	 */
	public $partnerPermissionsExist = null;

}
