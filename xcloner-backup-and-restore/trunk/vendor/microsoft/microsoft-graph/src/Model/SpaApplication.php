<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SpaApplication File
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
* SpaApplication class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SpaApplication extends Entity
{
    /**
    * Gets the redirectUris
    * Specifies the URLs where user tokens are sent for sign-in, or the redirect URIs where OAuth 2.0 authorization codes and access tokens are sent.
    *
    * @return string|null The redirectUris
    */
    public function getRedirectUris()
    {
        if (array_key_exists("redirectUris", $this->_propDict)) {
            return $this->_propDict["redirectUris"];
        } else {
            return null;
        }
    }

    /**
    * Sets the redirectUris
    * Specifies the URLs where user tokens are sent for sign-in, or the redirect URIs where OAuth 2.0 authorization codes and access tokens are sent.
    *
    * @param string $val The value of the redirectUris
    *
    * @return SpaApplication
    */
    public function setRedirectUris($val)
    {
        $this->_propDict["redirectUris"] = $val;
        return $this;
    }
}
