<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RiskUserActivity File
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
* RiskUserActivity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RiskUserActivity extends Entity
{

    /**
    * Gets the detail
    * Details of the detected risk. Possible values are: none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, hidden, adminConfirmedUserCompromised, unknownFutureValue.
    *
    * @return RiskDetail|null The detail
    */
    public function getDetail()
    {
        if (array_key_exists("detail", $this->_propDict)) {
            if (is_a($this->_propDict["detail"], "\Microsoft\Graph\Model\RiskDetail") || is_null($this->_propDict["detail"])) {
                return $this->_propDict["detail"];
            } else {
                $this->_propDict["detail"] = new RiskDetail($this->_propDict["detail"]);
                return $this->_propDict["detail"];
            }
        }
        return null;
    }

    /**
    * Sets the detail
    * Details of the detected risk. Possible values are: none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, hidden, adminConfirmedUserCompromised, unknownFutureValue.
    *
    * @param RiskDetail $val The value to assign to the detail
    *
    * @return RiskUserActivity The RiskUserActivity
    */
    public function setDetail($val)
    {
        $this->_propDict["detail"] = $val;
         return $this;
    }
    /**
    * Gets the riskEventTypes
    * The type of risk event detected.
    *
    * @return string|null The riskEventTypes
    */
    public function getRiskEventTypes()
    {
        if (array_key_exists("riskEventTypes", $this->_propDict)) {
            return $this->_propDict["riskEventTypes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the riskEventTypes
    * The type of risk event detected.
    *
    * @param string $val The value of the riskEventTypes
    *
    * @return RiskUserActivity
    */
    public function setRiskEventTypes($val)
    {
        $this->_propDict["riskEventTypes"] = $val;
        return $this;
    }
}
