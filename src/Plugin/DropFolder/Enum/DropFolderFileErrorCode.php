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
namespace Kaltura\Client\Plugin\DropFolder\Enum;

/**
 * @package Kaltura
 * @subpackage Client
 */
class DropFolderFileErrorCode
{
	const ERROR_ADDING_BULK_UPLOAD = "dropFolderXmlBulkUpload.ERROR_ADDING_BULK_UPLOAD";
	const ERROR_ADD_CONTENT_RESOURCE = "dropFolderXmlBulkUpload.ERROR_ADD_CONTENT_RESOURCE";
	const ERROR_IN_BULK_UPLOAD = "dropFolderXmlBulkUpload.ERROR_IN_BULK_UPLOAD";
	const ERROR_WRITING_TEMP_FILE = "dropFolderXmlBulkUpload.ERROR_WRITING_TEMP_FILE";
	const LOCAL_FILE_WRONG_CHECKSUM = "dropFolderXmlBulkUpload.LOCAL_FILE_WRONG_CHECKSUM";
	const LOCAL_FILE_WRONG_SIZE = "dropFolderXmlBulkUpload.LOCAL_FILE_WRONG_SIZE";
	const MALFORMED_XML_FILE = "dropFolderXmlBulkUpload.MALFORMED_XML_FILE";
	const XML_FILE_SIZE_EXCEED_LIMIT = "dropFolderXmlBulkUpload.XML_FILE_SIZE_EXCEED_LIMIT";
	const ERROR_UPDATE_ENTRY = "1";
	const ERROR_ADD_ENTRY = "2";
	const FLAVOR_NOT_FOUND = "3";
	const FLAVOR_MISSING_IN_FILE_NAME = "4";
	const SLUG_REGEX_NO_MATCH = "5";
	const ERROR_READING_FILE = "6";
	const ERROR_DOWNLOADING_FILE = "7";
	const ERROR_UPDATE_FILE = "8";
	const ERROR_ADDING_CONTENT_PROCESSOR = "10";
	const ERROR_IN_CONTENT_PROCESSOR = "11";
	const ERROR_DELETING_FILE = "12";
	const FILE_NO_MATCH = "13";
}

