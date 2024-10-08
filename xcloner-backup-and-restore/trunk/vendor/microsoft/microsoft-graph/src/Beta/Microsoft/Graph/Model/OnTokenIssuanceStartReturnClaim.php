<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnTokenIssuanceStartReturnClaim File
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
* OnTokenIssuanceStartReturnClaim class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnTokenIssuanceStartReturnClaim extends Entity
{
    /**
    * Gets the claimIdInApiResponse
    *
    * @return string|null The claimIdInApiResponse
    */
    public function getClaimIdInApiResponse()
    {
        if (array_key_exists("claimIdInApiResponse", $this->_propDict)) {
            return $this->_propDict["claimIdInApiResponse"];
        } else {
            return null;
        }
    }

    /**
    * Sets the claimIdInApiResponse
    *
    * @param string $val The value of the claimIdInApiResponse
    *
    * @return OnTokenIssuanceStartReturnClaim
    */
    public function setClaimIdInApiResponse($val)
    {
        $this->_propDict["claimIdInApiResponse"] = $val;
        return $this;
    }
}
