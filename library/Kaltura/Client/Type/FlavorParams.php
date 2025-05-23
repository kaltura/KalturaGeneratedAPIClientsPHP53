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
class FlavorParams extends \Kaltura\Client\Type\AssetParams
{
	public function getKalturaObjectType()
	{
		return 'KalturaFlavorParams';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->videoCodec))
			$this->videoCodec = (string)$xml->videoCodec;
		if(count($xml->videoBitrate))
			$this->videoBitrate = (int)$xml->videoBitrate;
		if(count($xml->audioCodec))
			$this->audioCodec = (string)$xml->audioCodec;
		if(count($xml->audioBitrate))
			$this->audioBitrate = (int)$xml->audioBitrate;
		if(count($xml->audioChannels))
			$this->audioChannels = (int)$xml->audioChannels;
		if(count($xml->audioSampleRate))
			$this->audioSampleRate = (int)$xml->audioSampleRate;
		if(count($xml->width))
			$this->width = (int)$xml->width;
		if(count($xml->height))
			$this->height = (int)$xml->height;
		if(count($xml->frameRate))
			$this->frameRate = (float)$xml->frameRate;
		if(count($xml->gopSize))
			$this->gopSize = (int)$xml->gopSize;
		if(count($xml->conversionEngines))
			$this->conversionEngines = (string)$xml->conversionEngines;
		if(count($xml->conversionEnginesExtraParams))
			$this->conversionEnginesExtraParams = (string)$xml->conversionEnginesExtraParams;
		if(count($xml->twoPass))
		{
			if(!empty($xml->twoPass) && $xml->twoPass != 'false')
				$this->twoPass = true;
			else
				$this->twoPass = false;
		}
		if(count($xml->deinterlice))
			$this->deinterlice = (int)$xml->deinterlice;
		if(count($xml->rotate))
			$this->rotate = (int)$xml->rotate;
		if(count($xml->operators))
			$this->operators = (string)$xml->operators;
		if(count($xml->engineVersion))
			$this->engineVersion = (int)$xml->engineVersion;
		if(count($xml->format))
			$this->format = (string)$xml->format;
		if(count($xml->aspectRatioProcessingMode))
			$this->aspectRatioProcessingMode = (int)$xml->aspectRatioProcessingMode;
		if(count($xml->forceFrameToMultiplication16))
			$this->forceFrameToMultiplication16 = (int)$xml->forceFrameToMultiplication16;
		if(count($xml->isGopInSec))
			$this->isGopInSec = (int)$xml->isGopInSec;
		if(count($xml->isAvoidVideoShrinkFramesizeToSource))
			$this->isAvoidVideoShrinkFramesizeToSource = (int)$xml->isAvoidVideoShrinkFramesizeToSource;
		if(count($xml->isAvoidVideoShrinkBitrateToSource))
			$this->isAvoidVideoShrinkBitrateToSource = (int)$xml->isAvoidVideoShrinkBitrateToSource;
		if(count($xml->isVideoFrameRateForLowBrAppleHls))
			$this->isVideoFrameRateForLowBrAppleHls = (int)$xml->isVideoFrameRateForLowBrAppleHls;
		if(count($xml->multiStream))
			$this->multiStream = (string)$xml->multiStream;
		if(count($xml->anamorphicPixels))
			$this->anamorphicPixels = (float)$xml->anamorphicPixels;
		if(count($xml->isAvoidForcedKeyFrames))
			$this->isAvoidForcedKeyFrames = (int)$xml->isAvoidForcedKeyFrames;
		if(count($xml->forcedKeyFramesMode))
			$this->forcedKeyFramesMode = (int)$xml->forcedKeyFramesMode;
		if(count($xml->isCropIMX))
			$this->isCropIMX = (int)$xml->isCropIMX;
		if(count($xml->optimizationPolicy))
			$this->optimizationPolicy = (int)$xml->optimizationPolicy;
		if(count($xml->maxFrameRate))
			$this->maxFrameRate = (int)$xml->maxFrameRate;
		if(count($xml->videoConstantBitrate))
			$this->videoConstantBitrate = (int)$xml->videoConstantBitrate;
		if(count($xml->videoBitrateTolerance))
			$this->videoBitrateTolerance = (int)$xml->videoBitrateTolerance;
		if(count($xml->watermarkData))
			$this->watermarkData = (string)$xml->watermarkData;
		if(count($xml->subtitlesData))
			$this->subtitlesData = (string)$xml->subtitlesData;
		if(count($xml->cropData))
			$this->cropData = (string)$xml->cropData;
		if(count($xml->isEncrypted))
			$this->isEncrypted = (int)$xml->isEncrypted;
		if(count($xml->contentAwareness))
			$this->contentAwareness = (float)$xml->contentAwareness;
		if(count($xml->chunkedEncodeMode))
			$this->chunkedEncodeMode = (int)$xml->chunkedEncodeMode;
		if(count($xml->clipOffset))
			$this->clipOffset = (int)$xml->clipOffset;
		if(count($xml->clipDuration))
			$this->clipDuration = (int)$xml->clipDuration;
	}
	/**
	 * The video codec of the Flavor Params
	 * @var \Kaltura\Client\Enum\VideoCodec
	 */
	public $videoCodec = null;

	/**
	 * The video bitrate (in KBits) of the Flavor Params
	 * @var int
	 */
	public $videoBitrate = null;

	/**
	 * The audio codec of the Flavor Params
	 * @var \Kaltura\Client\Enum\AudioCodec
	 */
	public $audioCodec = null;

	/**
	 * The audio bitrate (in KBits) of the Flavor Params
	 * @var int
	 */
	public $audioBitrate = null;

	/**
	 * The number of audio channels for "downmixing"
	 * @var int
	 */
	public $audioChannels = null;

	/**
	 * The audio sample rate of the Flavor Params
	 * @var int
	 */
	public $audioSampleRate = null;

	/**
	 * The desired width of the Flavor Params
	 * @var int
	 */
	public $width = null;

	/**
	 * The desired height of the Flavor Params
	 * @var int
	 */
	public $height = null;

	/**
	 * The frame rate of the Flavor Params
	 * @var float
	 */
	public $frameRate = null;

	/**
	 * The gop size of the Flavor Params
	 * @var int
	 */
	public $gopSize = null;

	/**
	 * The list of conversion engines (comma separated)
	 * @var string
	 */
	public $conversionEngines = null;

	/**
	 * The list of conversion engines extra params (separated with "|")
	 * @var string
	 */
	public $conversionEnginesExtraParams = null;

	/**
	 * 
	 * @var bool
	 */
	public $twoPass = null;

	/**
	 * 
	 * @var int
	 */
	public $deinterlice = null;

	/**
	 * 
	 * @var int
	 */
	public $rotate = null;

	/**
	 * 
	 * @var string
	 */
	public $operators = null;

	/**
	 * 
	 * @var int
	 */
	public $engineVersion = null;

	/**
	 * The container format of the Flavor Params
	 * @var \Kaltura\Client\Enum\ContainerFormat
	 */
	public $format = null;

	/**
	 * 
	 * @var int
	 */
	public $aspectRatioProcessingMode = null;

	/**
	 * 
	 * @var int
	 */
	public $forceFrameToMultiplication16 = null;

	/**
	 * 
	 * @var int
	 */
	public $isGopInSec = null;

	/**
	 * 
	 * @var int
	 */
	public $isAvoidVideoShrinkFramesizeToSource = null;

	/**
	 * 
	 * @var int
	 */
	public $isAvoidVideoShrinkBitrateToSource = null;

	/**
	 * 
	 * @var int
	 */
	public $isVideoFrameRateForLowBrAppleHls = null;

	/**
	 * 
	 * @var string
	 */
	public $multiStream = null;

	/**
	 * 
	 * @var float
	 */
	public $anamorphicPixels = null;

	/**
	 * 
	 * @var int
	 */
	public $isAvoidForcedKeyFrames = null;

	/**
	 * 
	 * @var int
	 */
	public $forcedKeyFramesMode = null;

	/**
	 * 
	 * @var int
	 */
	public $isCropIMX = null;

	/**
	 * 
	 * @var int
	 */
	public $optimizationPolicy = null;

	/**
	 * 
	 * @var int
	 */
	public $maxFrameRate = null;

	/**
	 * 
	 * @var int
	 */
	public $videoConstantBitrate = null;

	/**
	 * 
	 * @var int
	 */
	public $videoBitrateTolerance = null;

	/**
	 * 
	 * @var string
	 */
	public $watermarkData = null;

	/**
	 * 
	 * @var string
	 */
	public $subtitlesData = null;

	/**
	 * 
	 * @var string
	 */
	public $cropData = null;

	/**
	 * 
	 * @var int
	 */
	public $isEncrypted = null;

	/**
	 * 
	 * @var float
	 */
	public $contentAwareness = null;

	/**
	 * 
	 * @var int
	 */
	public $chunkedEncodeMode = null;

	/**
	 * 
	 * @var int
	 */
	public $clipOffset = null;

	/**
	 * 
	 * @var int
	 */
	public $clipDuration = null;

}
