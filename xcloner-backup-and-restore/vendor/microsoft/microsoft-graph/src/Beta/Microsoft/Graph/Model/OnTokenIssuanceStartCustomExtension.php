<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnTokenIssuanceStartCustomExtension File
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
* OnTokenIssuanceStartCustomExtension class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnTokenIssuanceStartCustomExtension extends CustomAuthenticationExtension
{

     /**
     * Gets the claimsForTokenConfiguration
     *
     * @return array|null The claimsForTokenConfiguration
     */
    public function getClaimsForTokenConfiguration()
    {
        if (array_key_exists("claimsForTokenConfiguration", $this->_propDict)) {
           return $this->_propDict["claimsForTokenConfiguration"];
        } else {
            return null;
        }
    }

    /**
    * Sets the claimsForTokenConfiguration
    *
    * @param OnTokenIssuanceStartReturnClaim[] $val The claimsForTokenConfiguration
    *
    * @return OnTokenIssuanceStartCustomExtension
    */
    public function setClaimsForTokenConfiguration($val)
    {
        $this->_propDict["claimsForTokenConfiguration"] = $val;
        return $this;
    }

}
