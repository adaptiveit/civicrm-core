<?php
/*
 +--------------------------------------------------------------------+
 | CiviCRM version 4.6                                                |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2014                                |
 +--------------------------------------------------------------------+
 | This file is a part of CiviCRM.                                    |
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License and the CiviCRM Licensing Exception along                  |
 | with this program; if not, contact CiviCRM LLC                     |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +--------------------------------------------------------------------+
*/

/**
 * File for the CiviCRM APIv3 location type functions
 *
 * @package CiviCRM_APIv3
 * @subpackage API_LocationType
 *
 * @copyright CiviCRM LLC (c) 2004-2014
 * @version $Id: LocationType.php 2012-11-02 Jon Goldberg $
 */

/**
 * Add a Location Type
 *
 * Allowed @params array keys are:
 *
 * @example LocationTypeCreate.php Standard Create Example
 *
 * @param array $params
 *
 * @return array
 *   API result array
 * {@getfields email_create}
 */
function civicrm_api3_location_type_create($params) {
  //set display_name equal to name if it's not defined
  if (!array_key_exists('display_name', $params) && array_key_exists('name', $params)) {
    $params['display_name'] = $params['name'];
  }

  return _civicrm_api3_basic_create(_civicrm_api3_get_BAO(__FUNCTION__), $params);
}

/**
 * Adjust Metadata for Create action
 *
 * The metadata is used for setting defaults, documentation & validation
 * @param array $params
 *   Array or parameters determined by getfields.
 */
function _civicrm_api3_location_type_create_spec(&$params) {
  $params['is_active']['api.default'] = 1;
  $params['name']['api.required'] = 1;
}

/**
 * Deletes an existing Location Type
 *
 * @param array $params
 *
 * @example LocationTypeDelete.php Standard Delete Example
 *
 * @return array
 *   API result array
 * {@getfields LocationType_delete}
 */
function civicrm_api3_location_type_delete($params) {
  return _civicrm_api3_basic_delete(_civicrm_api3_get_BAO(__FUNCTION__), $params);
}

/**
 * Retrieve one or more Location Types
 *
 * @param array input parameters
 *
 *
 * @example LocationTypeGet.php Standard Get Example
 *
 * @param array $params
 *   An associative array of name/value pairs.
 *
 * @return array
 *   api result
 * {@getfields LocationType_get}
 */
function civicrm_api3_location_type_get($params) {
  return _civicrm_api3_basic_get(_civicrm_api3_get_BAO(__FUNCTION__), $params);
}
