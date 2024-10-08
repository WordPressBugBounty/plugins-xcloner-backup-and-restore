<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CredentialUsageSummary File
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
* CredentialUsageSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CredentialUsageSummary extends Entity
{
    /**
    * Gets the authMethod
    * Represents the authentication method that the user used. Possible values are:email, mobileSMS, mobileCall, officePhone, securityQuestion (only used for self-service password reset), appNotification, appCode, alternateMobileCall (supported only in registration), fido, appPassword, unknownFutureValue.
    *
    * @return UsageAuthMethod|null The authMethod
    */
    public function getAuthMethod()
    {
        if (array_key_exists("authMethod", $this->_propDict)) {
            if (is_a($this->_propDict["authMethod"], "\Beta\Microsoft\Graph\Model\UsageAuthMethod") || is_null($this->_propDict["authMethod"])) {
                return $this->_propDict["authMethod"];
            } else {
                $this->_propDict["authMethod"] = new UsageAuthMethod($this->_propDict["authMethod"]);
                return $this->_propDict["authMethod"];
            }
        }
        return null;
    }

    /**
    * Sets the authMethod
    * Represents the authentication method that the user used. Possible values are:email, mobileSMS, mobileCall, officePhone, securityQuestion (only used for self-service password reset), appNotification, appCode, alternateMobileCall (supported only in registration), fido, appPassword, unknownFutureValue.
    *
    * @param UsageAuthMethod $val The authMethod
    *
    * @return CredentialUsageSummary
    */
    public function setAuthMethod($val)
    {
        $this->_propDict["authMethod"] = $val;
        return $this;
    }

    /**
    * Gets the failureActivityCount
    * Provides the count of failed resets or registration data.
    *
    * @return int|null The failureActivityCount
    */
    public function getFailureActivityCount()
    {
        if (array_key_exists("failureActivityCount", $this->_propDict)) {
            return $this->_propDict["failureActivityCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the failureActivityCount
    * Provides the count of failed resets or registration data.
    *
    * @param int $val The failureActivityCount
    *
    * @return CredentialUsageSummary
    */
    public function setFailureActivityCount($val)
    {
        $this->_propDict["failureActivityCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the feature
    * Defines the feature to report. Possible values are: registration, reset, unknownFutureValue.
    *
    * @return FeatureType|null The feature
    */
    public function getFeature()
    {
        if (array_key_exists("feature", $this->_propDict)) {
            if (is_a($this->_propDict["feature"], "\Beta\Microsoft\Graph\Model\FeatureType") || is_null($this->_propDict["feature"])) {
                return $this->_propDict["feature"];
            } else {
                $this->_propDict["feature"] = new FeatureType($this->_propDict["feature"]);
                return $this->_propDict["feature"];
            }
        }
        return null;
    }

    /**
    * Sets the feature
    * Defines the feature to report. Possible values are: registration, reset, unknownFutureValue.
    *
    * @param FeatureType $val The feature
    *
    * @return CredentialUsageSummary
    */
    public function setFeature($val)
    {
        $this->_propDict["feature"] = $val;
        return $this;
    }

    /**
    * Gets the successfulActivityCount
    * Provides the count of successful registrations or resets.
    *
    * @return int|null The successfulActivityCount
    */
    public function getSuccessfulActivityCount()
    {
        if (array_key_exists("successfulActivityCount", $this->_propDict)) {
            return $this->_propDict["successfulActivityCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the successfulActivityCount
    * Provides the count of successful registrations or resets.
    *
    * @param int $val The successfulActivityCount
    *
    * @return CredentialUsageSummary
    */
    public function setSuccessfulActivityCount($val)
    {
        $this->_propDict["successfulActivityCount"] = intval($val);
        return $this;
    }

}
