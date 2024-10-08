<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationSynchronizationConnectionSettings File
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
* EducationSynchronizationConnectionSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationSynchronizationConnectionSettings extends Entity
{
    /**
    * Gets the clientId
    * Client ID used to connect to the provider.
    *
    * @return string|null The clientId
    */
    public function getClientId()
    {
        if (array_key_exists("clientId", $this->_propDict)) {
            return $this->_propDict["clientId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the clientId
    * Client ID used to connect to the provider.
    *
    * @param string $val The value of the clientId
    *
    * @return EducationSynchronizationConnectionSettings
    */
    public function setClientId($val)
    {
        $this->_propDict["clientId"] = $val;
        return $this;
    }
    /**
    * Gets the clientSecret
    * Client secret to authenticate the connection to the provider.
    *
    * @return string|null The clientSecret
    */
    public function getClientSecret()
    {
        if (array_key_exists("clientSecret", $this->_propDict)) {
            return $this->_propDict["clientSecret"];
        } else {
            return null;
        }
    }

    /**
    * Sets the clientSecret
    * Client secret to authenticate the connection to the provider.
    *
    * @param string $val The value of the clientSecret
    *
    * @return EducationSynchronizationConnectionSettings
    */
    public function setClientSecret($val)
    {
        $this->_propDict["clientSecret"] = $val;
        return $this;
    }
}
