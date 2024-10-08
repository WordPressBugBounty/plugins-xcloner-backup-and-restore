<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserScopeTeamsAppInstallation File
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
* UserScopeTeamsAppInstallation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserScopeTeamsAppInstallation extends TeamsAppInstallation
{
    /**
    * Gets the chat
    * The chat between the user and Teams app.
    *
    * @return Chat|null The chat
    */
    public function getChat()
    {
        if (array_key_exists("chat", $this->_propDict)) {
            if (is_a($this->_propDict["chat"], "\Microsoft\Graph\Model\Chat") || is_null($this->_propDict["chat"])) {
                return $this->_propDict["chat"];
            } else {
                $this->_propDict["chat"] = new Chat($this->_propDict["chat"]);
                return $this->_propDict["chat"];
            }
        }
        return null;
    }

    /**
    * Sets the chat
    * The chat between the user and Teams app.
    *
    * @param Chat $val The chat
    *
    * @return UserScopeTeamsAppInstallation
    */
    public function setChat($val)
    {
        $this->_propDict["chat"] = $val;
        return $this;
    }

}
