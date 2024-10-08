<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidManagedStoreAppAssignmentSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }

/**
* AndroidManagedStoreAppAssignmentSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidManagedStoreAppAssignmentSettings extends MobileAppAssignmentSettings
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.androidManagedStoreAppAssignmentSettings");
    }

    /**
    * Gets the androidManagedStoreAppTrackIds
    * The track IDs to enable for this app assignment.
    *
    * @return string|null The androidManagedStoreAppTrackIds
    */
    public function getAndroidManagedStoreAppTrackIds()
    {
        if (array_key_exists("androidManagedStoreAppTrackIds", $this->_propDict)) {
            return $this->_propDict["androidManagedStoreAppTrackIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the androidManagedStoreAppTrackIds
    * The track IDs to enable for this app assignment.
    *
    * @param string $val The value of the androidManagedStoreAppTrackIds
    *
    * @return AndroidManagedStoreAppAssignmentSettings
    */
    public function setAndroidManagedStoreAppTrackIds($val)
    {
        $this->_propDict["androidManagedStoreAppTrackIds"] = $val;
        return $this;
    }

    /**
    * Gets the autoUpdateMode
    * The prioritization of automatic updates for this app assignment. Possible values are: default, postponed, priority, unknownFutureValue.
    *
    * @return AndroidManagedStoreAutoUpdateMode|null The autoUpdateMode
    */
    public function getAutoUpdateMode()
    {
        if (array_key_exists("autoUpdateMode", $this->_propDict)) {
            if (is_a($this->_propDict["autoUpdateMode"], "\Beta\Microsoft\Graph\Model\AndroidManagedStoreAutoUpdateMode") || is_null($this->_propDict["autoUpdateMode"])) {
                return $this->_propDict["autoUpdateMode"];
            } else {
                $this->_propDict["autoUpdateMode"] = new AndroidManagedStoreAutoUpdateMode($this->_propDict["autoUpdateMode"]);
                return $this->_propDict["autoUpdateMode"];
            }
        }
        return null;
    }

    /**
    * Sets the autoUpdateMode
    * The prioritization of automatic updates for this app assignment. Possible values are: default, postponed, priority, unknownFutureValue.
    *
    * @param AndroidManagedStoreAutoUpdateMode $val The value to assign to the autoUpdateMode
    *
    * @return AndroidManagedStoreAppAssignmentSettings The AndroidManagedStoreAppAssignmentSettings
    */
    public function setAutoUpdateMode($val)
    {
        $this->_propDict["autoUpdateMode"] = $val;
         return $this;
    }
}
