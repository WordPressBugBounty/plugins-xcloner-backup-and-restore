<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementAutopilotEvent File
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
* DeviceManagementAutopilotEvent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementAutopilotEvent extends Entity
{
    /**
    * Gets the accountSetupDuration
    * Time spent in user ESP.
    *
    * @return \DateInterval|null The accountSetupDuration
    */
    public function getAccountSetupDuration()
    {
        if (array_key_exists("accountSetupDuration", $this->_propDict)) {
            if (is_a($this->_propDict["accountSetupDuration"], "\DateInterval") || is_null($this->_propDict["accountSetupDuration"])) {
                return $this->_propDict["accountSetupDuration"];
            } else {
                $this->_propDict["accountSetupDuration"] = new \DateInterval($this->_propDict["accountSetupDuration"]);
                return $this->_propDict["accountSetupDuration"];
            }
        }
        return null;
    }

    /**
    * Sets the accountSetupDuration
    * Time spent in user ESP.
    *
    * @param \DateInterval $val The accountSetupDuration
    *
    * @return DeviceManagementAutopilotEvent
    */
    public function setAccountSetupDuration($val)
    {
        $this->_propDict["accountSetupDuration"] = $val;
        return $this;
    }

    /**
    * Gets the accountSetupStatus
    * Deployment status for the enrollment status page account setup phase. Possible values are: unknown, success, inProgress, failure, successWithTimeout, notAttempted, disabled.
    *
    * @return WindowsAutopilotDeploymentState|null The accountSetupStatus
    */
    public function getAccountSetupStatus()
    {
        if (array_key_exists("accountSetupStatus", $this->_propDict)) {
            if (is_a($this->_propDict["accountSetupStatus"], "\Beta\Microsoft\Graph\Model\WindowsAutopilotDeploymentState") || is_null($this->_propDict["accountSetupStatus"])) {
                return $this->_propDict["accountSetupStatus"];
            } else {
                $this->_propDict["accountSetupStatus"] = new WindowsAutopilotDeploymentState($this->_propDict["accountSetupStatus"]);
                return $this->_propDict["accountSetupStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the accountSetupStatus
    * Deployment status for the enrollment status page account setup phase. Possible values are: unknown, success, inProgress, failure, successWithTimeout, notAttempted, disabled.
    *
    * @param WindowsAutopilotDeploymentState $val The accountSetupStatus
    *
    * @return DeviceManagementAutopilotEvent
    */
    public function setAccountSetupStatus($val)
    {
        $this->_propDict["accountSetupStatus"] = $val;
        return $this;
    }

    /**
    * Gets the deploymentDuration
    * Autopilot deployment duration including enrollment.
    *
    * @return \DateInterval|null The deploymentDuration
    */
    public function getDeploymentDuration()
    {
        if (array_key_exists("deploymentDuration", $this->_propDict)) {
            if (is_a($this->_propDict["deploymentDuration"], "\DateInterval") || is_null($this->_propDict["deploymentDuration"])) {
                return $this->_propDict["deploymentDuration"];
            } else {
                $this->_propDict["deploymentDuration"] = new \DateInterval($this->_propDict["deploymentDuration"]);
                return $this->_propDict["deploymentDuration"];
            }
        }
        return null;
    }

    /**
    * Sets the deploymentDuration
    * Autopilot deployment duration including enrollment.
    *
    * @param \DateInterval $val The deploymentDuration
    *
    * @return DeviceManagementAutopilotEvent
    */
    public function setDeploymentDuration($val)
    {
        $this->_propDict["deploymentDuration"] = $val;
        return $this;
    }

    /**
    * Gets the deploymentEndDateTime
    * Deployment end time.
    *
    * @return \DateTime|null The deploymentEndDateTime
    */
    public function getDeploymentEndDateTime()
    {
        if (array_key_exists("deploymentEndDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["deploymentEndDateTime"], "\DateTime") || is_null($this->_propDict["deploymentEndDateTime"])) {
                return $this->_propDict["deploymentEndDateTime"];
            } else {
                $this->_propDict["deploymentEndDateTime"] = new \DateTime($this->_propDict["deploymentEndDateTime"]);
                return $this->_propDict["deploymentEndDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the deploymentEndDateTime
    * Deployment end time.
    *
    * @param \DateTime $val The deploymentEndDateTime
    *
    * @return DeviceManagementAutopilotEvent
    */
    public function setDeploymentEndDateTime($val)
    {
        $this->_propDict["deploymentEndDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the deploymentStartDateTime
    * Deployment start time.
    *
    * @return \DateTime|null The deploymentStartDateTime
    */
    public function getDeploymentStartDateTime()
    {
        if (array_key_exists("deploymentStartDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["deploymentStartDateTime"], "\DateTime") || is_null($this->_propDict["deploymentStartDateTime"])) {
                return $this->_propDict["deploymentStartDateTime"];
            } else {
                $this->_propDict["deploymentStartDateTime"] = new \DateTime($this->_propDict["deploymentStartDateTime"]);
                return $this->_propDict["deploymentStartDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the deploymentStartDateTime
    * Deployment start time.
    *
    * @param \DateTime $val The deploymentStartDateTime
    *
    * @return DeviceManagementAutopilotEvent
    */
    public function setDeploymentStartDateTime($val)
    {
        $this->_propDict["deploymentStartDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the deploymentState
    * Deployment state like Success, Failure, InProgress, SuccessWithTimeout. Possible values are: unknown, success, inProgress, failure, successWithTimeout, notAttempted, disabled.
    *
    * @return WindowsAutopilotDeploymentState|null The deploymentState
    */
    public function getDeploymentState()
    {
        if (array_key_exists("deploymentState", $this->_propDict)) {
            if (is_a($this->_propDict["deploymentState"], "\Beta\Microsoft\Graph\Model\WindowsAutopilotDeploymentState") || is_null($this->_propDict["deploymentState"])) {
                return $this->_propDict["deploymentState"];
            } else {
                $this->_propDict["deploymentState"] = new WindowsAutopilotDeploymentState($this->_propDict["deploymentState"]);
                return $this->_propDict["deploymentState"];
            }
        }
        return null;
    }

    /**
    * Sets the deploymentState
    * Deployment state like Success, Failure, InProgress, SuccessWithTimeout. Possible values are: unknown, success, inProgress, failure, successWithTimeout, notAttempted, disabled.
    *
    * @param WindowsAutopilotDeploymentState $val The deploymentState
    *
    * @return DeviceManagementAutopilotEvent
    */
    public function setDeploymentState($val)
    {
        $this->_propDict["deploymentState"] = $val;
        return $this;
    }

    /**
    * Gets the deploymentTotalDuration
    * Total deployment duration from enrollment to Desktop screen.
    *
    * @return \DateInterval|null The deploymentTotalDuration
    */
    public function getDeploymentTotalDuration()
    {
        if (array_key_exists("deploymentTotalDuration", $this->_propDict)) {
            if (is_a($this->_propDict["deploymentTotalDuration"], "\DateInterval") || is_null($this->_propDict["deploymentTotalDuration"])) {
                return $this->_propDict["deploymentTotalDuration"];
            } else {
                $this->_propDict["deploymentTotalDuration"] = new \DateInterval($this->_propDict["deploymentTotalDuration"]);
                return $this->_propDict["deploymentTotalDuration"];
            }
        }
        return null;
    }

    /**
    * Sets the deploymentTotalDuration
    * Total deployment duration from enrollment to Desktop screen.
    *
    * @param \DateInterval $val The deploymentTotalDuration
    *
    * @return DeviceManagementAutopilotEvent
    */
    public function setDeploymentTotalDuration($val)
    {
        $this->_propDict["deploymentTotalDuration"] = $val;
        return $this;
    }

    /**
    * Gets the deviceId
    * Device id associated with the object
    *
    * @return string|null The deviceId
    */
    public function getDeviceId()
    {
        if (array_key_exists("deviceId", $this->_propDict)) {
            return $this->_propDict["deviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceId
    * Device id associated with the object
    *
    * @param string $val The deviceId
    *
    * @return DeviceManagementAutopilotEvent
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }

    /**
    * Gets the devicePreparationDuration
    * Time spent in device enrollment.
    *
    * @return \DateInterval|null The devicePreparationDuration
    */
    public function getDevicePreparationDuration()
    {
        if (array_key_exists("devicePreparationDuration", $this->_propDict)) {
            if (is_a($this->_propDict["devicePreparationDuration"], "\DateInterval") || is_null($this->_propDict["devicePreparationDuration"])) {
                return $this->_propDict["devicePreparationDuration"];
            } else {
                $this->_propDict["devicePreparationDuration"] = new \DateInterval($this->_propDict["devicePreparationDuration"]);
                return $this->_propDict["devicePreparationDuration"];
            }
        }
        return null;
    }

    /**
    * Sets the devicePreparationDuration
    * Time spent in device enrollment.
    *
    * @param \DateInterval $val The devicePreparationDuration
    *
    * @return DeviceManagementAutopilotEvent
    */
    public function setDevicePreparationDuration($val)
    {
        $this->_propDict["devicePreparationDuration"] = $val;
        return $this;
    }

    /**
    * Gets the deviceRegisteredDateTime
    * Device registration date.
    *
    * @return \DateTime|null The deviceRegisteredDateTime
    */
    public function getDeviceRegisteredDateTime()
    {
        if (array_key_exists("deviceRegisteredDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["deviceRegisteredDateTime"], "\DateTime") || is_null($this->_propDict["deviceRegisteredDateTime"])) {
                return $this->_propDict["deviceRegisteredDateTime"];
            } else {
                $this->_propDict["deviceRegisteredDateTime"] = new \DateTime($this->_propDict["deviceRegisteredDateTime"]);
                return $this->_propDict["deviceRegisteredDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceRegisteredDateTime
    * Device registration date.
    *
    * @param \DateTime $val The deviceRegisteredDateTime
    *
    * @return DeviceManagementAutopilotEvent
    */
    public function setDeviceRegisteredDateTime($val)
    {
        $this->_propDict["deviceRegisteredDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the deviceSerialNumber
    * Device serial number.
    *
    * @return string|null The deviceSerialNumber
    */
    public function getDeviceSerialNumber()
    {
        if (array_key_exists("deviceSerialNumber", $this->_propDict)) {
            return $this->_propDict["deviceSerialNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceSerialNumber
    * Device serial number.
    *
    * @param string $val The deviceSerialNumber
    *
    * @return DeviceManagementAutopilotEvent
    */
    public function setDeviceSerialNumber($val)
    {
        $this->_propDict["deviceSerialNumber"] = $val;
        return $this;
    }

    /**
    * Gets the deviceSetupDuration
    * Time spent in device ESP.
    *
    * @return \DateInterval|null The deviceSetupDuration
    */
    public function getDeviceSetupDuration()
    {
        if (array_key_exists("deviceSetupDuration", $this->_propDict)) {
            if (is_a($this->_propDict["deviceSetupDuration"], "\DateInterval") || is_null($this->_propDict["deviceSetupDuration"])) {
                return $this->_propDict["deviceSetupDuration"];
            } else {
                $this->_propDict["deviceSetupDuration"] = new \DateInterval($this->_propDict["deviceSetupDuration"]);
                return $this->_propDict["deviceSetupDuration"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceSetupDuration
    * Time spent in device ESP.
    *
    * @param \DateInterval $val The deviceSetupDuration
    *
    * @return DeviceManagementAutopilotEvent
    */
    public function setDeviceSetupDuration($val)
    {
        $this->_propDict["deviceSetupDuration"] = $val;
        return $this;
    }

    /**
    * Gets the deviceSetupStatus
    * Deployment status for the enrollment status page device setup phase. Possible values are: unknown, success, inProgress, failure, successWithTimeout, notAttempted, disabled.
    *
    * @return WindowsAutopilotDeploymentState|null The deviceSetupStatus
    */
    public function getDeviceSetupStatus()
    {
        if (array_key_exists("deviceSetupStatus", $this->_propDict)) {
            if (is_a($this->_propDict["deviceSetupStatus"], "\Beta\Microsoft\Graph\Model\WindowsAutopilotDeploymentState") || is_null($this->_propDict["deviceSetupStatus"])) {
                return $this->_propDict["deviceSetupStatus"];
            } else {
                $this->_propDict["deviceSetupStatus"] = new WindowsAutopilotDeploymentState($this->_propDict["deviceSetupStatus"]);
                return $this->_propDict["deviceSetupStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceSetupStatus
    * Deployment status for the enrollment status page device setup phase. Possible values are: unknown, success, inProgress, failure, successWithTimeout, notAttempted, disabled.
    *
    * @param WindowsAutopilotDeploymentState $val The deviceSetupStatus
    *
    * @return DeviceManagementAutopilotEvent
    */
    public function setDeviceSetupStatus($val)
    {
        $this->_propDict["deviceSetupStatus"] = $val;
        return $this;
    }

    /**
    * Gets the enrollmentFailureDetails
    * Enrollment failure details.
    *
    * @return string|null The enrollmentFailureDetails
    */
    public function getEnrollmentFailureDetails()
    {
        if (array_key_exists("enrollmentFailureDetails", $this->_propDict)) {
            return $this->_propDict["enrollmentFailureDetails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enrollmentFailureDetails
    * Enrollment failure details.
    *
    * @param string $val The enrollmentFailureDetails
    *
    * @return DeviceManagementAutopilotEvent
    */
    public function setEnrollmentFailureDetails($val)
    {
        $this->_propDict["enrollmentFailureDetails"] = $val;
        return $this;
    }

    /**
    * Gets the enrollmentStartDateTime
    * Device enrollment start date.
    *
    * @return \DateTime|null The enrollmentStartDateTime
    */
    public function getEnrollmentStartDateTime()
    {
        if (array_key_exists("enrollmentStartDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["enrollmentStartDateTime"], "\DateTime") || is_null($this->_propDict["enrollmentStartDateTime"])) {
                return $this->_propDict["enrollmentStartDateTime"];
            } else {
                $this->_propDict["enrollmentStartDateTime"] = new \DateTime($this->_propDict["enrollmentStartDateTime"]);
                return $this->_propDict["enrollmentStartDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the enrollmentStartDateTime
    * Device enrollment start date.
    *
    * @param \DateTime $val The enrollmentStartDateTime
    *
    * @return DeviceManagementAutopilotEvent
    */
    public function setEnrollmentStartDateTime($val)
    {
        $this->_propDict["enrollmentStartDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the enrollmentState
    * Enrollment state like Enrolled, Failed. Possible values are: unknown, enrolled, pendingReset, failed, notContacted, blocked.
    *
    * @return EnrollmentState|null The enrollmentState
    */
    public function getEnrollmentState()
    {
        if (array_key_exists("enrollmentState", $this->_propDict)) {
            if (is_a($this->_propDict["enrollmentState"], "\Beta\Microsoft\Graph\Model\EnrollmentState") || is_null($this->_propDict["enrollmentState"])) {
                return $this->_propDict["enrollmentState"];
            } else {
                $this->_propDict["enrollmentState"] = new EnrollmentState($this->_propDict["enrollmentState"]);
                return $this->_propDict["enrollmentState"];
            }
        }
        return null;
    }

    /**
    * Sets the enrollmentState
    * Enrollment state like Enrolled, Failed. Possible values are: unknown, enrolled, pendingReset, failed, notContacted, blocked.
    *
    * @param EnrollmentState $val The enrollmentState
    *
    * @return DeviceManagementAutopilotEvent
    */
    public function setEnrollmentState($val)
    {
        $this->_propDict["enrollmentState"] = $val;
        return $this;
    }

    /**
    * Gets the enrollmentType
    * Enrollment type. Possible values are: unknown, azureADJoinedWithAutopilotProfile, offlineDomainJoined, azureADJoinedUsingDeviceAuthWithAutopilotProfile, azureADJoinedUsingDeviceAuthWithoutAutopilotProfile, azureADJoinedWithOfflineAutopilotProfile, azureADJoinedWithWhiteGlove, offlineDomainJoinedWithWhiteGlove, offlineDomainJoinedWithOfflineAutopilotProfile.
    *
    * @return WindowsAutopilotEnrollmentType|null The enrollmentType
    */
    public function getEnrollmentType()
    {
        if (array_key_exists("enrollmentType", $this->_propDict)) {
            if (is_a($this->_propDict["enrollmentType"], "\Beta\Microsoft\Graph\Model\WindowsAutopilotEnrollmentType") || is_null($this->_propDict["enrollmentType"])) {
                return $this->_propDict["enrollmentType"];
            } else {
                $this->_propDict["enrollmentType"] = new WindowsAutopilotEnrollmentType($this->_propDict["enrollmentType"]);
                return $this->_propDict["enrollmentType"];
            }
        }
        return null;
    }

    /**
    * Sets the enrollmentType
    * Enrollment type. Possible values are: unknown, azureADJoinedWithAutopilotProfile, offlineDomainJoined, azureADJoinedUsingDeviceAuthWithAutopilotProfile, azureADJoinedUsingDeviceAuthWithoutAutopilotProfile, azureADJoinedWithOfflineAutopilotProfile, azureADJoinedWithWhiteGlove, offlineDomainJoinedWithWhiteGlove, offlineDomainJoinedWithOfflineAutopilotProfile.
    *
    * @param WindowsAutopilotEnrollmentType $val The enrollmentType
    *
    * @return DeviceManagementAutopilotEvent
    */
    public function setEnrollmentType($val)
    {
        $this->_propDict["enrollmentType"] = $val;
        return $this;
    }

    /**
    * Gets the eventDateTime
    * Time when the event occurred .
    *
    * @return \DateTime|null The eventDateTime
    */
    public function getEventDateTime()
    {
        if (array_key_exists("eventDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["eventDateTime"], "\DateTime") || is_null($this->_propDict["eventDateTime"])) {
                return $this->_propDict["eventDateTime"];
            } else {
                $this->_propDict["eventDateTime"] = new \DateTime($this->_propDict["eventDateTime"]);
                return $this->_propDict["eventDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the eventDateTime
    * Time when the event occurred .
    *
    * @param \DateTime $val The eventDateTime
    *
    * @return DeviceManagementAutopilotEvent
    */
    public function setEventDateTime($val)
    {
        $this->_propDict["eventDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the managedDeviceName
    * Managed device name.
    *
    * @return string|null The managedDeviceName
    */
    public function getManagedDeviceName()
    {
        if (array_key_exists("managedDeviceName", $this->_propDict)) {
            return $this->_propDict["managedDeviceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managedDeviceName
    * Managed device name.
    *
    * @param string $val The managedDeviceName
    *
    * @return DeviceManagementAutopilotEvent
    */
    public function setManagedDeviceName($val)
    {
        $this->_propDict["managedDeviceName"] = $val;
        return $this;
    }

    /**
    * Gets the osVersion
    * Device operating system version.
    *
    * @return string|null The osVersion
    */
    public function getOsVersion()
    {
        if (array_key_exists("osVersion", $this->_propDict)) {
            return $this->_propDict["osVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the osVersion
    * Device operating system version.
    *
    * @param string $val The osVersion
    *
    * @return DeviceManagementAutopilotEvent
    */
    public function setOsVersion($val)
    {
        $this->_propDict["osVersion"] = $val;
        return $this;
    }

    /**
    * Gets the targetedAppCount
    * Count of applications targeted.
    *
    * @return int|null The targetedAppCount
    */
    public function getTargetedAppCount()
    {
        if (array_key_exists("targetedAppCount", $this->_propDict)) {
            return $this->_propDict["targetedAppCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the targetedAppCount
    * Count of applications targeted.
    *
    * @param int $val The targetedAppCount
    *
    * @return DeviceManagementAutopilotEvent
    */
    public function setTargetedAppCount($val)
    {
        $this->_propDict["targetedAppCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the targetedPolicyCount
    * Count of policies targeted.
    *
    * @return int|null The targetedPolicyCount
    */
    public function getTargetedPolicyCount()
    {
        if (array_key_exists("targetedPolicyCount", $this->_propDict)) {
            return $this->_propDict["targetedPolicyCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the targetedPolicyCount
    * Count of policies targeted.
    *
    * @param int $val The targetedPolicyCount
    *
    * @return DeviceManagementAutopilotEvent
    */
    public function setTargetedPolicyCount($val)
    {
        $this->_propDict["targetedPolicyCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the userPrincipalName
    * User principal name used to enroll the device.
    *
    * @return string|null The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userPrincipalName
    * User principal name used to enroll the device.
    *
    * @param string $val The userPrincipalName
    *
    * @return DeviceManagementAutopilotEvent
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }

    /**
    * Gets the windows10EnrollmentCompletionPageConfigurationDisplayName
    * Enrollment Status Page profile name
    *
    * @return string|null The windows10EnrollmentCompletionPageConfigurationDisplayName
    */
    public function getWindows10EnrollmentCompletionPageConfigurationDisplayName()
    {
        if (array_key_exists("windows10EnrollmentCompletionPageConfigurationDisplayName", $this->_propDict)) {
            return $this->_propDict["windows10EnrollmentCompletionPageConfigurationDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the windows10EnrollmentCompletionPageConfigurationDisplayName
    * Enrollment Status Page profile name
    *
    * @param string $val The windows10EnrollmentCompletionPageConfigurationDisplayName
    *
    * @return DeviceManagementAutopilotEvent
    */
    public function setWindows10EnrollmentCompletionPageConfigurationDisplayName($val)
    {
        $this->_propDict["windows10EnrollmentCompletionPageConfigurationDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the windows10EnrollmentCompletionPageConfigurationId
    * Enrollment Status Page profile ID
    *
    * @return string|null The windows10EnrollmentCompletionPageConfigurationId
    */
    public function getWindows10EnrollmentCompletionPageConfigurationId()
    {
        if (array_key_exists("windows10EnrollmentCompletionPageConfigurationId", $this->_propDict)) {
            return $this->_propDict["windows10EnrollmentCompletionPageConfigurationId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the windows10EnrollmentCompletionPageConfigurationId
    * Enrollment Status Page profile ID
    *
    * @param string $val The windows10EnrollmentCompletionPageConfigurationId
    *
    * @return DeviceManagementAutopilotEvent
    */
    public function setWindows10EnrollmentCompletionPageConfigurationId($val)
    {
        $this->_propDict["windows10EnrollmentCompletionPageConfigurationId"] = $val;
        return $this;
    }

    /**
    * Gets the windowsAutopilotDeploymentProfileDisplayName
    * Autopilot profile name.
    *
    * @return string|null The windowsAutopilotDeploymentProfileDisplayName
    */
    public function getWindowsAutopilotDeploymentProfileDisplayName()
    {
        if (array_key_exists("windowsAutopilotDeploymentProfileDisplayName", $this->_propDict)) {
            return $this->_propDict["windowsAutopilotDeploymentProfileDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the windowsAutopilotDeploymentProfileDisplayName
    * Autopilot profile name.
    *
    * @param string $val The windowsAutopilotDeploymentProfileDisplayName
    *
    * @return DeviceManagementAutopilotEvent
    */
    public function setWindowsAutopilotDeploymentProfileDisplayName($val)
    {
        $this->_propDict["windowsAutopilotDeploymentProfileDisplayName"] = $val;
        return $this;
    }


     /**
     * Gets the policyStatusDetails
    * Policy and application status details for this device.
     *
     * @return array|null The policyStatusDetails
     */
    public function getPolicyStatusDetails()
    {
        if (array_key_exists("policyStatusDetails", $this->_propDict)) {
           return $this->_propDict["policyStatusDetails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the policyStatusDetails
    * Policy and application status details for this device.
    *
    * @param DeviceManagementAutopilotPolicyStatusDetail[] $val The policyStatusDetails
    *
    * @return DeviceManagementAutopilotEvent
    */
    public function setPolicyStatusDetails($val)
    {
        $this->_propDict["policyStatusDetails"] = $val;
        return $this;
    }

}
