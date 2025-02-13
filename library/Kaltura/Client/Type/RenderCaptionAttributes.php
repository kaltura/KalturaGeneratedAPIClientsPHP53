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
namespace Kaltura\Client\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class RenderCaptionAttributes extends \Kaltura\Client\Type\CaptionAttributes
{
	public function getKalturaObjectType()
	{
		return 'KalturaRenderCaptionAttributes';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->fontName))
			$this->fontName = (string)$xml->fontName;
		if(count($xml->fontSize))
			$this->fontSize = (int)$xml->fontSize;
		if(count($xml->primaryColour))
			$this->primaryColour = (string)$xml->primaryColour;
		if(count($xml->borderStyle))
			$this->borderStyle = (int)$xml->borderStyle;
		if(count($xml->backColour))
			$this->backColour = (string)$xml->backColour;
		if(count($xml->outlineColour))
			$this->outlineColour = (string)$xml->outlineColour;
		if(count($xml->shadow))
			$this->shadow = (int)$xml->shadow;
		if(count($xml->bold))
		{
			if(!empty($xml->bold) && $xml->bold != 'false')
				$this->bold = true;
			else
				$this->bold = false;
		}
		if(count($xml->italic))
		{
			if(!empty($xml->italic) && $xml->italic != 'false')
				$this->italic = true;
			else
				$this->italic = false;
		}
		if(count($xml->underline))
		{
			if(!empty($xml->underline) && $xml->underline != 'false')
				$this->underline = true;
			else
				$this->underline = false;
		}
		if(count($xml->alignment))
			$this->alignment = (int)$xml->alignment;
		if(count($xml->captionAssetId))
			$this->captionAssetId = (string)$xml->captionAssetId;
	}
	/**
	 * 
	 * @var string
	 */
	public $fontName = null;

	/**
	 * 
	 * @var int
	 */
	public $fontSize = null;

	/**
	 * 
	 * @var string
	 */
	public $primaryColour = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\BorderStyle
	 */
	public $borderStyle = null;

	/**
	 * 
	 * @var string
	 */
	public $backColour = null;

	/**
	 * 
	 * @var string
	 */
	public $outlineColour = null;

	/**
	 * 
	 * @var int
	 */
	public $shadow = null;

	/**
	 * 
	 * @var bool
	 */
	public $bold = null;

	/**
	 * 
	 * @var bool
	 */
	public $italic = null;

	/**
	 * 
	 * @var bool
	 */
	public $underline = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\CaptionsAlignment
	 */
	public $alignment = null;

	/**
	 * 
	 * @var string
	 */
	public $captionAssetId = null;

}
