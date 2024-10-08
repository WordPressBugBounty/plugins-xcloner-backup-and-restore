<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationStrengthPolicy File
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
* AuthenticationStrengthPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationStrengthPolicy extends Entity
{

     /**
     * Gets the allowedCombinations
     *
     * @return array|null The allowedCombinations
     */
    public function getAllowedCombinations()
    {
        if (array_key_exists("allowedCombinations", $this->_propDict)) {
           return $this->_propDict["allowedCombinations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedCombinations
    *
    * @param AuthenticationMethodModes[] $val The allowedCombinations
    *
    * @return AuthenticationStrengthPolicy
    */
    public function setAllowedCombinations($val)
    {
        $this->_propDict["allowedCombinations"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return AuthenticationStrengthPolicy
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the description
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    *
    * @param string $val The description
    *
    * @return AuthenticationStrengthPolicy
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return AuthenticationStrengthPolicy
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the modifiedDateTime
    *
    * @return \DateTime|null The modifiedDateTime
    */
    public function getModifiedDateTime()
    {
        if (array_key_exists("modifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["modifiedDateTime"], "\DateTime") || is_null($this->_propDict["modifiedDateTime"])) {
                return $this->_propDict["modifiedDateTime"];
            } else {
                $this->_propDict["modifiedDateTime"] = new \DateTime($this->_propDict["modifiedDateTime"]);
                return $this->_propDict["modifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the modifiedDateTime
    *
    * @param \DateTime $val The modifiedDateTime
    *
    * @return AuthenticationStrengthPolicy
    */
    public function setModifiedDateTime($val)
    {
        $this->_propDict["modifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the policyType
    *
    * @return AuthenticationStrengthPolicyType|null The policyType
    */
    public function getPolicyType()
    {
        if (array_key_exists("policyType", $this->_propDict)) {
            if (is_a($this->_propDict["policyType"], "\Beta\Microsoft\Graph\Model\AuthenticationStrengthPolicyType") || is_null($this->_propDict["policyType"])) {
                return $this->_propDict["policyType"];
            } else {
                $this->_propDict["policyType"] = new AuthenticationStrengthPolicyType($this->_propDict["policyType"]);
                return $this->_propDict["policyType"];
            }
        }
        return null;
    }

    /**
    * Sets the policyType
    *
    * @param AuthenticationStrengthPolicyType $val The policyType
    *
    * @return AuthenticationStrengthPolicy
    */
    public function setPolicyType($val)
    {
        $this->_propDict["policyType"] = $val;
        return $this;
    }

    /**
    * Gets the requirementsSatisfied
    *
    * @return AuthenticationStrengthRequirements|null The requirementsSatisfied
    */
    public function getRequirementsSatisfied()
    {
        if (array_key_exists("requirementsSatisfied", $this->_propDict)) {
            if (is_a($this->_propDict["requirementsSatisfied"], "\Beta\Microsoft\Graph\Model\AuthenticationStrengthRequirements") || is_null($this->_propDict["requirementsSatisfied"])) {
                return $this->_propDict["requirementsSatisfied"];
            } else {
                $this->_propDict["requirementsSatisfied"] = new AuthenticationStrengthRequirements($this->_propDict["requirementsSatisfied"]);
                return $this->_propDict["requirementsSatisfied"];
            }
        }
        return null;
    }

    /**
    * Sets the requirementsSatisfied
    *
    * @param AuthenticationStrengthRequirements $val The requirementsSatisfied
    *
    * @return AuthenticationStrengthPolicy
    */
    public function setRequirementsSatisfied($val)
    {
        $this->_propDict["requirementsSatisfied"] = $val;
        return $this;
    }


     /**
     * Gets the combinationConfigurations
     *
     * @return array|null The combinationConfigurations
     */
    public function getCombinationConfigurations()
    {
        if (array_key_exists("combinationConfigurations", $this->_propDict)) {
           return $this->_propDict["combinationConfigurations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the combinationConfigurations
    *
    * @param AuthenticationCombinationConfiguration[] $val The combinationConfigurations
    *
    * @return AuthenticationStrengthPolicy
    */
    public function setCombinationConfigurations($val)
    {
        $this->_propDict["combinationConfigurations"] = $val;
        return $this;
    }

}
