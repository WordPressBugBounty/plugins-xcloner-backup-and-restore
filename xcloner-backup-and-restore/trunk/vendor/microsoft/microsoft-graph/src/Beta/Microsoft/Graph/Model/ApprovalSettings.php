<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ApprovalSettings File
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
* ApprovalSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ApprovalSettings extends Entity
{
    /**
    * Gets the approvalMode
    * One of SingleStage, Serial, Parallel, NoApproval (default). NoApproval is used when isApprovalRequired is false.
    *
    * @return string|null The approvalMode
    */
    public function getApprovalMode()
    {
        if (array_key_exists("approvalMode", $this->_propDict)) {
            return $this->_propDict["approvalMode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the approvalMode
    * One of SingleStage, Serial, Parallel, NoApproval (default). NoApproval is used when isApprovalRequired is false.
    *
    * @param string $val The value of the approvalMode
    *
    * @return ApprovalSettings
    */
    public function setApprovalMode($val)
    {
        $this->_propDict["approvalMode"] = $val;
        return $this;
    }

    /**
    * Gets the approvalStages
    * If approval is required, the one or two elements of this collection define each of the stages of approval. An empty array if no approval is required.
    *
    * @return ApprovalStage|null The approvalStages
    */
    public function getApprovalStages()
    {
        if (array_key_exists("approvalStages", $this->_propDict)) {
            if (is_a($this->_propDict["approvalStages"], "\Beta\Microsoft\Graph\Model\ApprovalStage") || is_null($this->_propDict["approvalStages"])) {
                return $this->_propDict["approvalStages"];
            } else {
                $this->_propDict["approvalStages"] = new ApprovalStage($this->_propDict["approvalStages"]);
                return $this->_propDict["approvalStages"];
            }
        }
        return null;
    }

    /**
    * Sets the approvalStages
    * If approval is required, the one or two elements of this collection define each of the stages of approval. An empty array if no approval is required.
    *
    * @param ApprovalStage $val The value to assign to the approvalStages
    *
    * @return ApprovalSettings The ApprovalSettings
    */
    public function setApprovalStages($val)
    {
        $this->_propDict["approvalStages"] = $val;
         return $this;
    }
    /**
    * Gets the isApprovalRequired
    * Indicates whether approval is required for requests in this policy.
    *
    * @return bool|null The isApprovalRequired
    */
    public function getIsApprovalRequired()
    {
        if (array_key_exists("isApprovalRequired", $this->_propDict)) {
            return $this->_propDict["isApprovalRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isApprovalRequired
    * Indicates whether approval is required for requests in this policy.
    *
    * @param bool $val The value of the isApprovalRequired
    *
    * @return ApprovalSettings
    */
    public function setIsApprovalRequired($val)
    {
        $this->_propDict["isApprovalRequired"] = $val;
        return $this;
    }
    /**
    * Gets the isApprovalRequiredForExtension
    * Indicates whether approval is required for a user to extend their assignment.
    *
    * @return bool|null The isApprovalRequiredForExtension
    */
    public function getIsApprovalRequiredForExtension()
    {
        if (array_key_exists("isApprovalRequiredForExtension", $this->_propDict)) {
            return $this->_propDict["isApprovalRequiredForExtension"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isApprovalRequiredForExtension
    * Indicates whether approval is required for a user to extend their assignment.
    *
    * @param bool $val The value of the isApprovalRequiredForExtension
    *
    * @return ApprovalSettings
    */
    public function setIsApprovalRequiredForExtension($val)
    {
        $this->_propDict["isApprovalRequiredForExtension"] = $val;
        return $this;
    }
    /**
    * Gets the isRequestorJustificationRequired
    * Indicates whether the requestor is required to supply a justification in their request.
    *
    * @return bool|null The isRequestorJustificationRequired
    */
    public function getIsRequestorJustificationRequired()
    {
        if (array_key_exists("isRequestorJustificationRequired", $this->_propDict)) {
            return $this->_propDict["isRequestorJustificationRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isRequestorJustificationRequired
    * Indicates whether the requestor is required to supply a justification in their request.
    *
    * @param bool $val The value of the isRequestorJustificationRequired
    *
    * @return ApprovalSettings
    */
    public function setIsRequestorJustificationRequired($val)
    {
        $this->_propDict["isRequestorJustificationRequired"] = $val;
        return $this;
    }
}
