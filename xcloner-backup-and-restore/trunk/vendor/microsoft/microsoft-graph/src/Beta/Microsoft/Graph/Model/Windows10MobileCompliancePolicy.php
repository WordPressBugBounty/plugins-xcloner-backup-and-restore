<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10MobileCompliancePolicy File
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
* Windows10MobileCompliancePolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Windows10MobileCompliancePolicy extends DeviceCompliancePolicy
{
    /**
    * Gets the activeFirewallRequired
    * Require active firewall on Windows devices.
    *
    * @return bool|null The activeFirewallRequired
    */
    public function getActiveFirewallRequired()
    {
        if (array_key_exists("activeFirewallRequired", $this->_propDict)) {
            return $this->_propDict["activeFirewallRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the activeFirewallRequired
    * Require active firewall on Windows devices.
    *
    * @param bool $val The activeFirewallRequired
    *
    * @return Windows10MobileCompliancePolicy
    */
    public function setActiveFirewallRequired($val)
    {
        $this->_propDict["activeFirewallRequired"] = boolval($val);
        return $this;
    }

    /**
    * Gets the bitLockerEnabled
    * Require devices to be reported healthy by Windows Device Health Attestation - bit locker is enabled
    *
    * @return bool|null The bitLockerEnabled
    */
    public function getBitLockerEnabled()
    {
        if (array_key_exists("bitLockerEnabled", $this->_propDict)) {
            return $this->_propDict["bitLockerEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bitLockerEnabled
    * Require devices to be reported healthy by Windows Device Health Attestation - bit locker is enabled
    *
    * @param bool $val The bitLockerEnabled
    *
    * @return Windows10MobileCompliancePolicy
    */
    public function setBitLockerEnabled($val)
    {
        $this->_propDict["bitLockerEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the codeIntegrityEnabled
    * Require devices to be reported as healthy by Windows Device Health Attestation.
    *
    * @return bool|null The codeIntegrityEnabled
    */
    public function getCodeIntegrityEnabled()
    {
        if (array_key_exists("codeIntegrityEnabled", $this->_propDict)) {
            return $this->_propDict["codeIntegrityEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the codeIntegrityEnabled
    * Require devices to be reported as healthy by Windows Device Health Attestation.
    *
    * @param bool $val The codeIntegrityEnabled
    *
    * @return Windows10MobileCompliancePolicy
    */
    public function setCodeIntegrityEnabled($val)
    {
        $this->_propDict["codeIntegrityEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the earlyLaunchAntiMalwareDriverEnabled
    * Require devices to be reported as healthy by Windows Device Health Attestation - early launch antimalware driver is enabled.
    *
    * @return bool|null The earlyLaunchAntiMalwareDriverEnabled
    */
    public function getEarlyLaunchAntiMalwareDriverEnabled()
    {
        if (array_key_exists("earlyLaunchAntiMalwareDriverEnabled", $this->_propDict)) {
            return $this->_propDict["earlyLaunchAntiMalwareDriverEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the earlyLaunchAntiMalwareDriverEnabled
    * Require devices to be reported as healthy by Windows Device Health Attestation - early launch antimalware driver is enabled.
    *
    * @param bool $val The earlyLaunchAntiMalwareDriverEnabled
    *
    * @return Windows10MobileCompliancePolicy
    */
    public function setEarlyLaunchAntiMalwareDriverEnabled($val)
    {
        $this->_propDict["earlyLaunchAntiMalwareDriverEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the osMaximumVersion
    * Maximum Windows Phone version.
    *
    * @return string|null The osMaximumVersion
    */
    public function getOsMaximumVersion()
    {
        if (array_key_exists("osMaximumVersion", $this->_propDict)) {
            return $this->_propDict["osMaximumVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the osMaximumVersion
    * Maximum Windows Phone version.
    *
    * @param string $val The osMaximumVersion
    *
    * @return Windows10MobileCompliancePolicy
    */
    public function setOsMaximumVersion($val)
    {
        $this->_propDict["osMaximumVersion"] = $val;
        return $this;
    }

    /**
    * Gets the osMinimumVersion
    * Minimum Windows Phone version.
    *
    * @return string|null The osMinimumVersion
    */
    public function getOsMinimumVersion()
    {
        if (array_key_exists("osMinimumVersion", $this->_propDict)) {
            return $this->_propDict["osMinimumVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the osMinimumVersion
    * Minimum Windows Phone version.
    *
    * @param string $val The osMinimumVersion
    *
    * @return Windows10MobileCompliancePolicy
    */
    public function setOsMinimumVersion($val)
    {
        $this->_propDict["osMinimumVersion"] = $val;
        return $this;
    }

    /**
    * Gets the passwordBlockSimple
    * Whether or not to block syncing the calendar.
    *
    * @return bool|null The passwordBlockSimple
    */
    public function getPasswordBlockSimple()
    {
        if (array_key_exists("passwordBlockSimple", $this->_propDict)) {
            return $this->_propDict["passwordBlockSimple"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordBlockSimple
    * Whether or not to block syncing the calendar.
    *
    * @param bool $val The passwordBlockSimple
    *
    * @return Windows10MobileCompliancePolicy
    */
    public function setPasswordBlockSimple($val)
    {
        $this->_propDict["passwordBlockSimple"] = boolval($val);
        return $this;
    }

    /**
    * Gets the passwordExpirationDays
    * Number of days before password expiration. Valid values 1 to 255
    *
    * @return int|null The passwordExpirationDays
    */
    public function getPasswordExpirationDays()
    {
        if (array_key_exists("passwordExpirationDays", $this->_propDict)) {
            return $this->_propDict["passwordExpirationDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordExpirationDays
    * Number of days before password expiration. Valid values 1 to 255
    *
    * @param int $val The passwordExpirationDays
    *
    * @return Windows10MobileCompliancePolicy
    */
    public function setPasswordExpirationDays($val)
    {
        $this->_propDict["passwordExpirationDays"] = intval($val);
        return $this;
    }

    /**
    * Gets the passwordMinimumCharacterSetCount
    * The number of character sets required in the password.
    *
    * @return int|null The passwordMinimumCharacterSetCount
    */
    public function getPasswordMinimumCharacterSetCount()
    {
        if (array_key_exists("passwordMinimumCharacterSetCount", $this->_propDict)) {
            return $this->_propDict["passwordMinimumCharacterSetCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordMinimumCharacterSetCount
    * The number of character sets required in the password.
    *
    * @param int $val The passwordMinimumCharacterSetCount
    *
    * @return Windows10MobileCompliancePolicy
    */
    public function setPasswordMinimumCharacterSetCount($val)
    {
        $this->_propDict["passwordMinimumCharacterSetCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the passwordMinimumLength
    * Minimum password length. Valid values 4 to 16
    *
    * @return int|null The passwordMinimumLength
    */
    public function getPasswordMinimumLength()
    {
        if (array_key_exists("passwordMinimumLength", $this->_propDict)) {
            return $this->_propDict["passwordMinimumLength"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordMinimumLength
    * Minimum password length. Valid values 4 to 16
    *
    * @param int $val The passwordMinimumLength
    *
    * @return Windows10MobileCompliancePolicy
    */
    public function setPasswordMinimumLength($val)
    {
        $this->_propDict["passwordMinimumLength"] = intval($val);
        return $this;
    }

    /**
    * Gets the passwordMinutesOfInactivityBeforeLock
    * Minutes of inactivity before a password is required.
    *
    * @return int|null The passwordMinutesOfInactivityBeforeLock
    */
    public function getPasswordMinutesOfInactivityBeforeLock()
    {
        if (array_key_exists("passwordMinutesOfInactivityBeforeLock", $this->_propDict)) {
            return $this->_propDict["passwordMinutesOfInactivityBeforeLock"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordMinutesOfInactivityBeforeLock
    * Minutes of inactivity before a password is required.
    *
    * @param int $val The passwordMinutesOfInactivityBeforeLock
    *
    * @return Windows10MobileCompliancePolicy
    */
    public function setPasswordMinutesOfInactivityBeforeLock($val)
    {
        $this->_propDict["passwordMinutesOfInactivityBeforeLock"] = intval($val);
        return $this;
    }

    /**
    * Gets the passwordPreviousPasswordBlockCount
    * The number of previous passwords to prevent re-use of.
    *
    * @return int|null The passwordPreviousPasswordBlockCount
    */
    public function getPasswordPreviousPasswordBlockCount()
    {
        if (array_key_exists("passwordPreviousPasswordBlockCount", $this->_propDict)) {
            return $this->_propDict["passwordPreviousPasswordBlockCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordPreviousPasswordBlockCount
    * The number of previous passwords to prevent re-use of.
    *
    * @param int $val The passwordPreviousPasswordBlockCount
    *
    * @return Windows10MobileCompliancePolicy
    */
    public function setPasswordPreviousPasswordBlockCount($val)
    {
        $this->_propDict["passwordPreviousPasswordBlockCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the passwordRequired
    * Require a password to unlock Windows Phone device.
    *
    * @return bool|null The passwordRequired
    */
    public function getPasswordRequired()
    {
        if (array_key_exists("passwordRequired", $this->_propDict)) {
            return $this->_propDict["passwordRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordRequired
    * Require a password to unlock Windows Phone device.
    *
    * @param bool $val The passwordRequired
    *
    * @return Windows10MobileCompliancePolicy
    */
    public function setPasswordRequired($val)
    {
        $this->_propDict["passwordRequired"] = boolval($val);
        return $this;
    }

    /**
    * Gets the passwordRequiredType
    * The required password type. Possible values are: deviceDefault, alphanumeric, numeric.
    *
    * @return RequiredPasswordType|null The passwordRequiredType
    */
    public function getPasswordRequiredType()
    {
        if (array_key_exists("passwordRequiredType", $this->_propDict)) {
            if (is_a($this->_propDict["passwordRequiredType"], "\Beta\Microsoft\Graph\Model\RequiredPasswordType") || is_null($this->_propDict["passwordRequiredType"])) {
                return $this->_propDict["passwordRequiredType"];
            } else {
                $this->_propDict["passwordRequiredType"] = new RequiredPasswordType($this->_propDict["passwordRequiredType"]);
                return $this->_propDict["passwordRequiredType"];
            }
        }
        return null;
    }

    /**
    * Sets the passwordRequiredType
    * The required password type. Possible values are: deviceDefault, alphanumeric, numeric.
    *
    * @param RequiredPasswordType $val The passwordRequiredType
    *
    * @return Windows10MobileCompliancePolicy
    */
    public function setPasswordRequiredType($val)
    {
        $this->_propDict["passwordRequiredType"] = $val;
        return $this;
    }

    /**
    * Gets the passwordRequireToUnlockFromIdle
    * Require a password to unlock an idle device.
    *
    * @return bool|null The passwordRequireToUnlockFromIdle
    */
    public function getPasswordRequireToUnlockFromIdle()
    {
        if (array_key_exists("passwordRequireToUnlockFromIdle", $this->_propDict)) {
            return $this->_propDict["passwordRequireToUnlockFromIdle"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passwordRequireToUnlockFromIdle
    * Require a password to unlock an idle device.
    *
    * @param bool $val The passwordRequireToUnlockFromIdle
    *
    * @return Windows10MobileCompliancePolicy
    */
    public function setPasswordRequireToUnlockFromIdle($val)
    {
        $this->_propDict["passwordRequireToUnlockFromIdle"] = boolval($val);
        return $this;
    }

    /**
    * Gets the secureBootEnabled
    * Require devices to be reported as healthy by Windows Device Health Attestation - secure boot is enabled.
    *
    * @return bool|null The secureBootEnabled
    */
    public function getSecureBootEnabled()
    {
        if (array_key_exists("secureBootEnabled", $this->_propDict)) {
            return $this->_propDict["secureBootEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the secureBootEnabled
    * Require devices to be reported as healthy by Windows Device Health Attestation - secure boot is enabled.
    *
    * @param bool $val The secureBootEnabled
    *
    * @return Windows10MobileCompliancePolicy
    */
    public function setSecureBootEnabled($val)
    {
        $this->_propDict["secureBootEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the storageRequireEncryption
    * Require encryption on windows devices.
    *
    * @return bool|null The storageRequireEncryption
    */
    public function getStorageRequireEncryption()
    {
        if (array_key_exists("storageRequireEncryption", $this->_propDict)) {
            return $this->_propDict["storageRequireEncryption"];
        } else {
            return null;
        }
    }

    /**
    * Sets the storageRequireEncryption
    * Require encryption on windows devices.
    *
    * @param bool $val The storageRequireEncryption
    *
    * @return Windows10MobileCompliancePolicy
    */
    public function setStorageRequireEncryption($val)
    {
        $this->_propDict["storageRequireEncryption"] = boolval($val);
        return $this;
    }


     /**
     * Gets the validOperatingSystemBuildRanges
    * The valid operating system build ranges on Windows devices. This collection can contain a maximum of 10000 elements.
     *
     * @return array|null The validOperatingSystemBuildRanges
     */
    public function getValidOperatingSystemBuildRanges()
    {
        if (array_key_exists("validOperatingSystemBuildRanges", $this->_propDict)) {
           return $this->_propDict["validOperatingSystemBuildRanges"];
        } else {
            return null;
        }
    }

    /**
    * Sets the validOperatingSystemBuildRanges
    * The valid operating system build ranges on Windows devices. This collection can contain a maximum of 10000 elements.
    *
    * @param OperatingSystemVersionRange[] $val The validOperatingSystemBuildRanges
    *
    * @return Windows10MobileCompliancePolicy
    */
    public function setValidOperatingSystemBuildRanges($val)
    {
        $this->_propDict["validOperatingSystemBuildRanges"] = $val;
        return $this;
    }

}
