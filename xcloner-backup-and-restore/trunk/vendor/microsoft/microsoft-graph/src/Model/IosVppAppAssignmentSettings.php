<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosVppAppAssignmentSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }

/**
* IosVppAppAssignmentSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosVppAppAssignmentSettings extends MobileAppAssignmentSettings
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.iosVppAppAssignmentSettings");
    }

    /**
    * Gets the useDeviceLicensing
    * Whether or not to use device licensing.
    *
    * @return bool|null The useDeviceLicensing
    */
    public function getUseDeviceLicensing()
    {
        if (array_key_exists("useDeviceLicensing", $this->_propDict)) {
            return $this->_propDict["useDeviceLicensing"];
        } else {
            return null;
        }
    }

    /**
    * Sets the useDeviceLicensing
    * Whether or not to use device licensing.
    *
    * @param bool $val The value of the useDeviceLicensing
    *
    * @return IosVppAppAssignmentSettings
    */
    public function setUseDeviceLicensing($val)
    {
        $this->_propDict["useDeviceLicensing"] = $val;
        return $this;
    }
    /**
    * Gets the vpnConfigurationId
    * The VPN Configuration Id to apply for this app.
    *
    * @return string|null The vpnConfigurationId
    */
    public function getVpnConfigurationId()
    {
        if (array_key_exists("vpnConfigurationId", $this->_propDict)) {
            return $this->_propDict["vpnConfigurationId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the vpnConfigurationId
    * The VPN Configuration Id to apply for this app.
    *
    * @param string $val The value of the vpnConfigurationId
    *
    * @return IosVppAppAssignmentSettings
    */
    public function setVpnConfigurationId($val)
    {
        $this->_propDict["vpnConfigurationId"] = $val;
        return $this;
    }
}
