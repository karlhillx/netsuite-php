<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2020-02-19 09:58:55 AM CST
 */

namespace NetSuite\Classes;

class BomSearchBasic extends SearchRecordBasic {
    public $availableForAllAssemblies;
    public $availableForAllLocations;
    public $createdDate;
    public $externalId;
    public $externalIdString;
    public $includeChildren;
    public $internalId;
    public $internalIdNumber;
    public $isInactive;
    public $legacyBomForAssembly;
    public $memo;
    public $name;
    public $restrictToAssemblies;
    public $restrictToLocations;
    public $subsidiary;
    public $useComponentYield;
    public $usedOnAssembly;
    static $paramtypesmap = array(
        "availableForAllAssemblies" => "SearchBooleanField",
        "availableForAllLocations" => "SearchBooleanField",
        "createdDate" => "SearchDateField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "includeChildren" => "SearchBooleanField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "legacyBomForAssembly" => "SearchMultiSelectField",
        "memo" => "SearchStringField",
        "name" => "SearchStringField",
        "restrictToAssemblies" => "SearchMultiSelectField",
        "restrictToLocations" => "SearchMultiSelectField",
        "subsidiary" => "SearchMultiSelectField",
        "useComponentYield" => "SearchBooleanField",
        "usedOnAssembly" => "SearchBooleanField",
    );
}