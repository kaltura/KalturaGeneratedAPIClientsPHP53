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
// Copyright (C) 2006-2021  Kaltura Inc.
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
class MediaInfo extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaMediaInfo';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->flavorAssetId))
			$this->flavorAssetId = (string)$xml->flavorAssetId;
		if(count($xml->fileSize))
			$this->fileSize = (int)$xml->fileSize;
		if(count($xml->containerFormat))
			$this->containerFormat = (string)$xml->containerFormat;
		if(count($xml->containerId))
			$this->containerId = (string)$xml->containerId;
		if(count($xml->containerProfile))
			$this->containerProfile = (string)$xml->containerProfile;
		if(count($xml->containerDuration))
			$this->containerDuration = (int)$xml->containerDuration;
		if(count($xml->containerBitRate))
			$this->containerBitRate = (int)$xml->containerBitRate;
		if(count($xml->videoFormat))
			$this->videoFormat = (string)$xml->videoFormat;
		if(count($xml->videoCodecId))
			$this->videoCodecId = (string)$xml->videoCodecId;
		if(count($xml->videoDuration))
			$this->videoDuration = (int)$xml->videoDuration;
		if(count($xml->videoBitRate))
			$this->videoBitRate = (int)$xml->videoBitRate;
		if(count($xml->videoBitRateMode))
			$this->videoBitRateMode = (int)$xml->videoBitRateMode;
		if(count($xml->videoWidth))
			$this->videoWidth = (int)$xml->videoWidth;
		if(count($xml->videoHeight))
			$this->videoHeight = (int)$xml->videoHeight;
		if(count($xml->videoFrameRate))
			$this->videoFrameRate = (float)$xml->videoFrameRate;
		if(count($xml->videoDar))
			$this->videoDar = (float)$xml->videoDar;
		if(count($xml->videoRotation))
			$this->videoRotation = (int)$xml->videoRotation;
		if(count($xml->audioFormat))
			$this->audioFormat = (string)$xml->audioFormat;
		if(count($xml->audioCodecId))
			$this->audioCodecId = (string)$xml->audioCodecId;
		if(count($xml->audioDuration))
			$this->audioDuration = (int)$xml->audioDuration;
		if(count($xml->audioBitRate))
			$this->audioBitRate = (int)$xml->audioBitRate;
		if(count($xml->audioBitRateMode))
			$this->audioBitRateMode = (int)$xml->audioBitRateMode;
		if(count($xml->audioChannels))
			$this->audioChannels = (int)$xml->audioChannels;
		if(count($xml->audioSamplingRate))
			$this->audioSamplingRate = (int)$xml->audioSamplingRate;
		if(count($xml->audioResolution))
			$this->audioResolution = (int)$xml->audioResolution;
		if(count($xml->writingLib))
			$this->writingLib = (string)$xml->writingLib;
		if(count($xml->rawData))
			$this->rawData = (string)$xml->rawData;
		if(count($xml->multiStreamInfo))
			$this->multiStreamInfo = (string)$xml->multiStreamInfo;
		if(count($xml->scanType))
			$this->scanType = (int)$xml->scanType;
		if(count($xml->multiStream))
			$this->multiStream = (string)$xml->multiStream;
		if(count($xml->isFastStart))
			$this->isFastStart = (int)$xml->isFastStart;
		if(count($xml->contentStreams))
			$this->contentStreams = (string)$xml->contentStreams;
		if(count($xml->complexityValue))
			$this->complexityValue = (int)$xml->complexityValue;
		if(count($xml->maxGOP))
			$this->maxGOP = (float)$xml->maxGOP;
		if(count($xml->matrixCoefficients))
			$this->matrixCoefficients = (string)$xml->matrixCoefficients;
		if(count($xml->colorTransfer))
			$this->colorTransfer = (string)$xml->colorTransfer;
		if(count($xml->colorPrimaries))
			$this->colorPrimaries = (string)$xml->colorPrimaries;
		if(count($xml->pixelFormat))
			$this->pixelFormat = (string)$xml->pixelFormat;
		if(count($xml->colorSpace))
			$this->colorSpace = (string)$xml->colorSpace;
		if(count($xml->chromaSubsampling))
			$this->chromaSubsampling = (string)$xml->chromaSubsampling;
		if(count($xml->bitsDepth))
			$this->bitsDepth = (int)$xml->bitsDepth;
	}
	/**
	 * The id of the media info
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * The id of the related flavor asset
	 * @var string
	 */
	public $flavorAssetId = null;

	/**
	 * The file size
	 * @var int
	 */
	public $fileSize = null;

	/**
	 * The container format
	 * @var string
	 */
	public $containerFormat = null;

	/**
	 * The container id
	 * @var string
	 */
	public $containerId = null;

	/**
	 * The container profile
	 * @var string
	 */
	public $containerProfile = null;

	/**
	 * The container duration
	 * @var int
	 */
	public $containerDuration = null;

	/**
	 * The container bit rate
	 * @var int
	 */
	public $containerBitRate = null;

	/**
	 * The video format
	 * @var string
	 */
	public $videoFormat = null;

	/**
	 * The video codec id
	 * @var string
	 */
	public $videoCodecId = null;

	/**
	 * The video duration
	 * @var int
	 */
	public $videoDuration = null;

	/**
	 * The video bit rate
	 * @var int
	 */
	public $videoBitRate = null;

	/**
	 * The video bit rate mode
	 * @var \Kaltura\Client\Enum\BitRateMode
	 */
	public $videoBitRateMode = null;

	/**
	 * The video width
	 * @var int
	 */
	public $videoWidth = null;

	/**
	 * The video height
	 * @var int
	 */
	public $videoHeight = null;

	/**
	 * The video frame rate
	 * @var float
	 */
	public $videoFrameRate = null;

	/**
	 * The video display aspect ratio (dar)
	 * @var float
	 */
	public $videoDar = null;

	/**
	 * 
	 * @var int
	 */
	public $videoRotation = null;

	/**
	 * The audio format
	 * @var string
	 */
	public $audioFormat = null;

	/**
	 * The audio codec id
	 * @var string
	 */
	public $audioCodecId = null;

	/**
	 * The audio duration
	 * @var int
	 */
	public $audioDuration = null;

	/**
	 * The audio bit rate
	 * @var int
	 */
	public $audioBitRate = null;

	/**
	 * The audio bit rate mode
	 * @var \Kaltura\Client\Enum\BitRateMode
	 */
	public $audioBitRateMode = null;

	/**
	 * The number of audio channels
	 * @var int
	 */
	public $audioChannels = null;

	/**
	 * The audio sampling rate
	 * @var int
	 */
	public $audioSamplingRate = null;

	/**
	 * The audio resolution
	 * @var int
	 */
	public $audioResolution = null;

	/**
	 * The writing library
	 * @var string
	 */
	public $writingLib = null;

	/**
	 * The data as returned by the mediainfo command line
	 * @var string
	 */
	public $rawData = null;

	/**
	 * 
	 * @var string
	 */
	public $multiStreamInfo = null;

	/**
	 * 
	 * @var int
	 */
	public $scanType = null;

	/**
	 * 
	 * @var string
	 */
	public $multiStream = null;

	/**
	 * 
	 * @var int
	 */
	public $isFastStart = null;

	/**
	 * 
	 * @var string
	 */
	public $contentStreams = null;

	/**
	 * 
	 * @var int
	 */
	public $complexityValue = null;

	/**
	 * 
	 * @var float
	 */
	public $maxGOP = null;

	/**
	 * 
	 * @var string
	 */
	public $matrixCoefficients = null;

	/**
	 * 
	 * @var string
	 */
	public $colorTransfer = null;

	/**
	 * 
	 * @var string
	 */
	public $colorPrimaries = null;

	/**
	 * 
	 * @var string
	 */
	public $pixelFormat = null;

	/**
	 * 
	 * @var string
	 */
	public $colorSpace = null;

	/**
	 * 
	 * @var string
	 */
	public $chromaSubsampling = null;

	/**
	 * 
	 * @var int
	 */
	public $bitsDepth = null;

}
