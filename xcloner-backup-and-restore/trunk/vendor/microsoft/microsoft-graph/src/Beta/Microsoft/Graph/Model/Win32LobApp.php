<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Win32LobApp File
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
* Win32LobApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Win32LobApp extends MobileLobApp
{
    /**
    * Gets the allowAvailableUninstall
    * When TRUE, indicates that uninstall is supported from the company portal for the Windows app (Win32) with an Available assignment. When FALSE, indicates that uninstall is not supported for the Windows app (Win32) with an Available assignment. Default value is FALSE.
    *
    * @return bool|null The allowAvailableUninstall
    */
    public function getAllowAvailableUninstall()
    {
        if (array_key_exists("allowAvailableUninstall", $this->_propDict)) {
            return $this->_propDict["allowAvailableUninstall"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowAvailableUninstall
    * When TRUE, indicates that uninstall is supported from the company portal for the Windows app (Win32) with an Available assignment. When FALSE, indicates that uninstall is not supported for the Windows app (Win32) with an Available assignment. Default value is FALSE.
    *
    * @param bool $val The allowAvailableUninstall
    *
    * @return Win32LobApp
    */
    public function setAllowAvailableUninstall($val)
    {
        $this->_propDict["allowAvailableUninstall"] = boolval($val);
        return $this;
    }

    /**
    * Gets the applicableArchitectures
    * The Windows architecture(s) for which this app can run on. Possible values are: none, x86, x64, arm, neutral, arm64.
    *
    * @return WindowsArchitecture|null The applicableArchitectures
    */
    public function getApplicableArchitectures()
    {
        if (array_key_exists("applicableArchitectures", $this->_propDict)) {
            if (is_a($this->_propDict["applicableArchitectures"], "\Beta\Microsoft\Graph\Model\WindowsArchitecture") || is_null($this->_propDict["applicableArchitectures"])) {
                return $this->_propDict["applicableArchitectures"];
            } else {
                $this->_propDict["applicableArchitectures"] = new WindowsArchitecture($this->_propDict["applicableArchitectures"]);
                return $this->_propDict["applicableArchitectures"];
            }
        }
        return null;
    }

    /**
    * Sets the applicableArchitectures
    * The Windows architecture(s) for which this app can run on. Possible values are: none, x86, x64, arm, neutral, arm64.
    *
    * @param WindowsArchitecture $val The applicableArchitectures
    *
    * @return Win32LobApp
    */
    public function setApplicableArchitectures($val)
    {
        $this->_propDict["applicableArchitectures"] = $val;
        return $this;
    }


     /**
     * Gets the detectionRules
    * The detection rules to detect Win32 Line of Business (LoB) app.
     *
     * @return array|null The detectionRules
     */
    public function getDetectionRules()
    {
        if (array_key_exists("detectionRules", $this->_propDict)) {
           return $this->_propDict["detectionRules"];
        } else {
            return null;
        }
    }

    /**
    * Sets the detectionRules
    * The detection rules to detect Win32 Line of Business (LoB) app.
    *
    * @param Win32LobAppDetection[] $val The detectionRules
    *
    * @return Win32LobApp
    */
    public function setDetectionRules($val)
    {
        $this->_propDict["detectionRules"] = $val;
        return $this;
    }

    /**
    * Gets the displayVersion
    * The version displayed in the UX for this app.
    *
    * @return string|null The displayVersion
    */
    public function getDisplayVersion()
    {
        if (array_key_exists("displayVersion", $this->_propDict)) {
            return $this->_propDict["displayVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayVersion
    * The version displayed in the UX for this app.
    *
    * @param string $val The displayVersion
    *
    * @return Win32LobApp
    */
    public function setDisplayVersion($val)
    {
        $this->_propDict["displayVersion"] = $val;
        return $this;
    }

    /**
    * Gets the installCommandLine
    * The command line to install this app
    *
    * @return string|null The installCommandLine
    */
    public function getInstallCommandLine()
    {
        if (array_key_exists("installCommandLine", $this->_propDict)) {
            return $this->_propDict["installCommandLine"];
        } else {
            return null;
        }
    }

    /**
    * Sets the installCommandLine
    * The command line to install this app
    *
    * @param string $val The installCommandLine
    *
    * @return Win32LobApp
    */
    public function setInstallCommandLine($val)
    {
        $this->_propDict["installCommandLine"] = $val;
        return $this;
    }

    /**
    * Gets the installExperience
    * The install experience for this app.
    *
    * @return Win32LobAppInstallExperience|null The installExperience
    */
    public function getInstallExperience()
    {
        if (array_key_exists("installExperience", $this->_propDict)) {
            if (is_a($this->_propDict["installExperience"], "\Beta\Microsoft\Graph\Model\Win32LobAppInstallExperience") || is_null($this->_propDict["installExperience"])) {
                return $this->_propDict["installExperience"];
            } else {
                $this->_propDict["installExperience"] = new Win32LobAppInstallExperience($this->_propDict["installExperience"]);
                return $this->_propDict["installExperience"];
            }
        }
        return null;
    }

    /**
    * Sets the installExperience
    * The install experience for this app.
    *
    * @param Win32LobAppInstallExperience $val The installExperience
    *
    * @return Win32LobApp
    */
    public function setInstallExperience($val)
    {
        $this->_propDict["installExperience"] = $val;
        return $this;
    }

    /**
    * Gets the minimumCpuSpeedInMHz
    * The value for the minimum CPU speed which is required to install this app.
    *
    * @return int|null The minimumCpuSpeedInMHz
    */
    public function getMinimumCpuSpeedInMHz()
    {
        if (array_key_exists("minimumCpuSpeedInMHz", $this->_propDict)) {
            return $this->_propDict["minimumCpuSpeedInMHz"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimumCpuSpeedInMHz
    * The value for the minimum CPU speed which is required to install this app.
    *
    * @param int $val The minimumCpuSpeedInMHz
    *
    * @return Win32LobApp
    */
    public function setMinimumCpuSpeedInMHz($val)
    {
        $this->_propDict["minimumCpuSpeedInMHz"] = intval($val);
        return $this;
    }

    /**
    * Gets the minimumFreeDiskSpaceInMB
    * The value for the minimum free disk space which is required to install this app.
    *
    * @return int|null The minimumFreeDiskSpaceInMB
    */
    public function getMinimumFreeDiskSpaceInMB()
    {
        if (array_key_exists("minimumFreeDiskSpaceInMB", $this->_propDict)) {
            return $this->_propDict["minimumFreeDiskSpaceInMB"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimumFreeDiskSpaceInMB
    * The value for the minimum free disk space which is required to install this app.
    *
    * @param int $val The minimumFreeDiskSpaceInMB
    *
    * @return Win32LobApp
    */
    public function setMinimumFreeDiskSpaceInMB($val)
    {
        $this->_propDict["minimumFreeDiskSpaceInMB"] = intval($val);
        return $this;
    }

    /**
    * Gets the minimumMemoryInMB
    * The value for the minimum physical memory which is required to install this app.
    *
    * @return int|null The minimumMemoryInMB
    */
    public function getMinimumMemoryInMB()
    {
        if (array_key_exists("minimumMemoryInMB", $this->_propDict)) {
            return $this->_propDict["minimumMemoryInMB"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimumMemoryInMB
    * The value for the minimum physical memory which is required to install this app.
    *
    * @param int $val The minimumMemoryInMB
    *
    * @return Win32LobApp
    */
    public function setMinimumMemoryInMB($val)
    {
        $this->_propDict["minimumMemoryInMB"] = intval($val);
        return $this;
    }

    /**
    * Gets the minimumNumberOfProcessors
    * The value for the minimum number of processors which is required to install this app.
    *
    * @return int|null The minimumNumberOfProcessors
    */
    public function getMinimumNumberOfProcessors()
    {
        if (array_key_exists("minimumNumberOfProcessors", $this->_propDict)) {
            return $this->_propDict["minimumNumberOfProcessors"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimumNumberOfProcessors
    * The value for the minimum number of processors which is required to install this app.
    *
    * @param int $val The minimumNumberOfProcessors
    *
    * @return Win32LobApp
    */
    public function setMinimumNumberOfProcessors($val)
    {
        $this->_propDict["minimumNumberOfProcessors"] = intval($val);
        return $this;
    }

    /**
    * Gets the minimumSupportedOperatingSystem
    * The value for the minimum applicable operating system.
    *
    * @return WindowsMinimumOperatingSystem|null The minimumSupportedOperatingSystem
    */
    public function getMinimumSupportedOperatingSystem()
    {
        if (array_key_exists("minimumSupportedOperatingSystem", $this->_propDict)) {
            if (is_a($this->_propDict["minimumSupportedOperatingSystem"], "\Beta\Microsoft\Graph\Model\WindowsMinimumOperatingSystem") || is_null($this->_propDict["minimumSupportedOperatingSystem"])) {
                return $this->_propDict["minimumSupportedOperatingSystem"];
            } else {
                $this->_propDict["minimumSupportedOperatingSystem"] = new WindowsMinimumOperatingSystem($this->_propDict["minimumSupportedOperatingSystem"]);
                return $this->_propDict["minimumSupportedOperatingSystem"];
            }
        }
        return null;
    }

    /**
    * Sets the minimumSupportedOperatingSystem
    * The value for the minimum applicable operating system.
    *
    * @param WindowsMinimumOperatingSystem $val The minimumSupportedOperatingSystem
    *
    * @return Win32LobApp
    */
    public function setMinimumSupportedOperatingSystem($val)
    {
        $this->_propDict["minimumSupportedOperatingSystem"] = $val;
        return $this;
    }

    /**
    * Gets the minimumSupportedWindowsRelease
    * The value for the minimum supported windows release.
    *
    * @return string|null The minimumSupportedWindowsRelease
    */
    public function getMinimumSupportedWindowsRelease()
    {
        if (array_key_exists("minimumSupportedWindowsRelease", $this->_propDict)) {
            return $this->_propDict["minimumSupportedWindowsRelease"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimumSupportedWindowsRelease
    * The value for the minimum supported windows release.
    *
    * @param string $val The minimumSupportedWindowsRelease
    *
    * @return Win32LobApp
    */
    public function setMinimumSupportedWindowsRelease($val)
    {
        $this->_propDict["minimumSupportedWindowsRelease"] = $val;
        return $this;
    }

    /**
    * Gets the msiInformation
    * The MSI details if this Win32 app is an MSI app.
    *
    * @return Win32LobAppMsiInformation|null The msiInformation
    */
    public function getMsiInformation()
    {
        if (array_key_exists("msiInformation", $this->_propDict)) {
            if (is_a($this->_propDict["msiInformation"], "\Beta\Microsoft\Graph\Model\Win32LobAppMsiInformation") || is_null($this->_propDict["msiInformation"])) {
                return $this->_propDict["msiInformation"];
            } else {
                $this->_propDict["msiInformation"] = new Win32LobAppMsiInformation($this->_propDict["msiInformation"]);
                return $this->_propDict["msiInformation"];
            }
        }
        return null;
    }

    /**
    * Sets the msiInformation
    * The MSI details if this Win32 app is an MSI app.
    *
    * @param Win32LobAppMsiInformation $val The msiInformation
    *
    * @return Win32LobApp
    */
    public function setMsiInformation($val)
    {
        $this->_propDict["msiInformation"] = $val;
        return $this;
    }


     /**
     * Gets the requirementRules
    * The requirement rules to detect Win32 Line of Business (LoB) app.
     *
     * @return array|null The requirementRules
     */
    public function getRequirementRules()
    {
        if (array_key_exists("requirementRules", $this->_propDict)) {
           return $this->_propDict["requirementRules"];
        } else {
            return null;
        }
    }

    /**
    * Sets the requirementRules
    * The requirement rules to detect Win32 Line of Business (LoB) app.
    *
    * @param Win32LobAppRequirement[] $val The requirementRules
    *
    * @return Win32LobApp
    */
    public function setRequirementRules($val)
    {
        $this->_propDict["requirementRules"] = $val;
        return $this;
    }


     /**
     * Gets the returnCodes
    * The return codes for post installation behavior.
     *
     * @return array|null The returnCodes
     */
    public function getReturnCodes()
    {
        if (array_key_exists("returnCodes", $this->_propDict)) {
           return $this->_propDict["returnCodes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the returnCodes
    * The return codes for post installation behavior.
    *
    * @param Win32LobAppReturnCode[] $val The returnCodes
    *
    * @return Win32LobApp
    */
    public function setReturnCodes($val)
    {
        $this->_propDict["returnCodes"] = $val;
        return $this;
    }


     /**
     * Gets the rules
    * The detection and requirement rules for this app.
     *
     * @return array|null The rules
     */
    public function getRules()
    {
        if (array_key_exists("rules", $this->_propDict)) {
           return $this->_propDict["rules"];
        } else {
            return null;
        }
    }

    /**
    * Sets the rules
    * The detection and requirement rules for this app.
    *
    * @param Win32LobAppRule[] $val The rules
    *
    * @return Win32LobApp
    */
    public function setRules($val)
    {
        $this->_propDict["rules"] = $val;
        return $this;
    }

    /**
    * Gets the setupFilePath
    * The relative path of the setup file in the encrypted Win32LobApp package.
    *
    * @return string|null The setupFilePath
    */
    public function getSetupFilePath()
    {
        if (array_key_exists("setupFilePath", $this->_propDict)) {
            return $this->_propDict["setupFilePath"];
        } else {
            return null;
        }
    }

    /**
    * Sets the setupFilePath
    * The relative path of the setup file in the encrypted Win32LobApp package.
    *
    * @param string $val The setupFilePath
    *
    * @return Win32LobApp
    */
    public function setSetupFilePath($val)
    {
        $this->_propDict["setupFilePath"] = $val;
        return $this;
    }

    /**
    * Gets the uninstallCommandLine
    * The command line to uninstall this app
    *
    * @return string|null The uninstallCommandLine
    */
    public function getUninstallCommandLine()
    {
        if (array_key_exists("uninstallCommandLine", $this->_propDict)) {
            return $this->_propDict["uninstallCommandLine"];
        } else {
            return null;
        }
    }

    /**
    * Sets the uninstallCommandLine
    * The command line to uninstall this app
    *
    * @param string $val The uninstallCommandLine
    *
    * @return Win32LobApp
    */
    public function setUninstallCommandLine($val)
    {
        $this->_propDict["uninstallCommandLine"] = $val;
        return $this;
    }

}
