<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserFlowApiConnectorConfiguration File
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
* UserFlowApiConnectorConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserFlowApiConnectorConfiguration extends Entity
{

    /**
    * Gets the postAttributeCollection
    *
    * @return IdentityApiConnector|null The postAttributeCollection
    */
    public function getPostAttributeCollection()
    {
        if (array_key_exists("postAttributeCollection", $this->_propDict)) {
            if (is_a($this->_propDict["postAttributeCollection"], "\Microsoft\Graph\Model\IdentityApiConnector") || is_null($this->_propDict["postAttributeCollection"])) {
                return $this->_propDict["postAttributeCollection"];
            } else {
                $this->_propDict["postAttributeCollection"] = new IdentityApiConnector($this->_propDict["postAttributeCollection"]);
                return $this->_propDict["postAttributeCollection"];
            }
        }
        return null;
    }

    /**
    * Sets the postAttributeCollection
    *
    * @param IdentityApiConnector $val The value to assign to the postAttributeCollection
    *
    * @return UserFlowApiConnectorConfiguration The UserFlowApiConnectorConfiguration
    */
    public function setPostAttributeCollection($val)
    {
        $this->_propDict["postAttributeCollection"] = $val;
         return $this;
    }

    /**
    * Gets the postFederationSignup
    *
    * @return IdentityApiConnector|null The postFederationSignup
    */
    public function getPostFederationSignup()
    {
        if (array_key_exists("postFederationSignup", $this->_propDict)) {
            if (is_a($this->_propDict["postFederationSignup"], "\Microsoft\Graph\Model\IdentityApiConnector") || is_null($this->_propDict["postFederationSignup"])) {
                return $this->_propDict["postFederationSignup"];
            } else {
                $this->_propDict["postFederationSignup"] = new IdentityApiConnector($this->_propDict["postFederationSignup"]);
                return $this->_propDict["postFederationSignup"];
            }
        }
        return null;
    }

    /**
    * Sets the postFederationSignup
    *
    * @param IdentityApiConnector $val The value to assign to the postFederationSignup
    *
    * @return UserFlowApiConnectorConfiguration The UserFlowApiConnectorConfiguration
    */
    public function setPostFederationSignup($val)
    {
        $this->_propDict["postFederationSignup"] = $val;
         return $this;
    }
}
