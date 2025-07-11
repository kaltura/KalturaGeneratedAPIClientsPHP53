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
namespace Kaltura\Client\Plugin\Metadata\Enum;

/**
 * @package Kaltura
 * @subpackage Client
 */
class MetadataObjectType extends \Kaltura\Client\EnumBase
{
	const ENTRY = "1";
	const CATEGORY = "2";
	const USER = "3";
	const PARTNER = "4";
	const DYNAMIC_OBJECT = "5";
	const USER_ENTRY = "6";
	const AD_CUE_POINT = "adCuePointMetadata.AdCuePoint";
	const ANNOTATION = "annotationMetadata.Annotation";
	const CODE_CUE_POINT = "codeCuePointMetadata.CodeCuePoint";
	const ANSWER_CUE_POINT = "quiz.AnswerCuePoint";
	const QUESTION_CUE_POINT = "quiz.QuestionCuePoint";
	const THUMB_CUE_POINT = "thumbCuePointMetadata.thumbCuePoint";
}

