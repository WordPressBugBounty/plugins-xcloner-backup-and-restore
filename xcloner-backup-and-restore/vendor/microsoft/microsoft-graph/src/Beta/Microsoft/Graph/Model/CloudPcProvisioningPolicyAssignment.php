<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcProvisioningPolicyAssignment File
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
* CloudPcProvisioningPolicyAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcProvisioningPolicyAssignment extends Entity
{
    /**
    * Gets the target
    * The assignment target for the provisioning policy. Currently, the only target supported for this policy is a user group. For details, see cloudPcManagementGroupAssignmentTarget.
    *
    * @return CloudPcManagementAssignmentTarget|null The target
    */
    public function getTarget()
    {
        if (array_key_exists("target", $this->_propDict)) {
            if (is_a($this->_propDict["target"], "\Beta\Microsoft\Graph\Model\CloudPcManagementAssignmentTarget") || is_null($this->_propDict["target"])) {
                return $this->_propDict["target"];
            } else {
                $this->_propDict["target"] = new CloudPcManagementAssignmentTarget($this->_propDict["target"]);
                return $this->_propDict["target"];
            }
        }
        return null;
    }

    /**
    * Sets the target
    * The assignment target for the provisioning policy. Currently, the only target supported for this policy is a user group. For details, see cloudPcManagementGroupAssignmentTarget.
    *
    * @param CloudPcManagementAssignmentTarget $val The target
    *
    * @return CloudPcProvisioningPolicyAssignment
    */
    public function setTarget($val)
    {
        $this->_propDict["target"] = $val;
        return $this;
    }

}
