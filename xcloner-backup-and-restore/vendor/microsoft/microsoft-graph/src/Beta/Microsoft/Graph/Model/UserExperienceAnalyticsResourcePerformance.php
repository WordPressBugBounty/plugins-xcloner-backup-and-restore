<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsResourcePerformance File
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
* UserExperienceAnalyticsResourcePerformance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsResourcePerformance extends Entity
{
    /**
    * Gets the averageSpikeTimeScore
    * AverageSpikeTimeScore of a device or a model type. Valid values 0 to 100
    *
    * @return int|null The averageSpikeTimeScore
    */
    public function getAverageSpikeTimeScore()
    {
        if (array_key_exists("averageSpikeTimeScore", $this->_propDict)) {
            return $this->_propDict["averageSpikeTimeScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the averageSpikeTimeScore
    * AverageSpikeTimeScore of a device or a model type. Valid values 0 to 100
    *
    * @param int $val The averageSpikeTimeScore
    *
    * @return UserExperienceAnalyticsResourcePerformance
    */
    public function setAverageSpikeTimeScore($val)
    {
        $this->_propDict["averageSpikeTimeScore"] = intval($val);
        return $this;
    }

    /**
    * Gets the cpuSpikeTimePercentage
    * CPU spike time in percentage. Valid values 0 to 100
    *
    * @return float|null The cpuSpikeTimePercentage
    */
    public function getCpuSpikeTimePercentage()
    {
        if (array_key_exists("cpuSpikeTimePercentage", $this->_propDict)) {
            return $this->_propDict["cpuSpikeTimePercentage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cpuSpikeTimePercentage
    * CPU spike time in percentage. Valid values 0 to 100
    *
    * @param float $val The cpuSpikeTimePercentage
    *
    * @return UserExperienceAnalyticsResourcePerformance
    */
    public function setCpuSpikeTimePercentage($val)
    {
        $this->_propDict["cpuSpikeTimePercentage"] = floatval($val);
        return $this;
    }

    /**
    * Gets the cpuSpikeTimePercentageThreshold
    * Threshold of cpuSpikeTimeScore. Valid values 0 to 100
    *
    * @return float|null The cpuSpikeTimePercentageThreshold
    */
    public function getCpuSpikeTimePercentageThreshold()
    {
        if (array_key_exists("cpuSpikeTimePercentageThreshold", $this->_propDict)) {
            return $this->_propDict["cpuSpikeTimePercentageThreshold"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cpuSpikeTimePercentageThreshold
    * Threshold of cpuSpikeTimeScore. Valid values 0 to 100
    *
    * @param float $val The cpuSpikeTimePercentageThreshold
    *
    * @return UserExperienceAnalyticsResourcePerformance
    */
    public function setCpuSpikeTimePercentageThreshold($val)
    {
        $this->_propDict["cpuSpikeTimePercentageThreshold"] = floatval($val);
        return $this;
    }

    /**
    * Gets the cpuSpikeTimeScore
    * The user experience analytics device CPU spike time score. Valid values 0 to 100
    *
    * @return int|null The cpuSpikeTimeScore
    */
    public function getCpuSpikeTimeScore()
    {
        if (array_key_exists("cpuSpikeTimeScore", $this->_propDict)) {
            return $this->_propDict["cpuSpikeTimeScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cpuSpikeTimeScore
    * The user experience analytics device CPU spike time score. Valid values 0 to 100
    *
    * @param int $val The cpuSpikeTimeScore
    *
    * @return UserExperienceAnalyticsResourcePerformance
    */
    public function setCpuSpikeTimeScore($val)
    {
        $this->_propDict["cpuSpikeTimeScore"] = intval($val);
        return $this;
    }

    /**
    * Gets the deviceCount
    * User experience analytics summarized device count.
    *
    * @return int|null The deviceCount
    */
    public function getDeviceCount()
    {
        if (array_key_exists("deviceCount", $this->_propDict)) {
            return $this->_propDict["deviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceCount
    * User experience analytics summarized device count.
    *
    * @param int $val The deviceCount
    *
    * @return UserExperienceAnalyticsResourcePerformance
    */
    public function setDeviceCount($val)
    {
        $this->_propDict["deviceCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the deviceId
    * The id of the device.
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
    * The id of the device.
    *
    * @param string $val The deviceId
    *
    * @return UserExperienceAnalyticsResourcePerformance
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }

    /**
    * Gets the deviceName
    * The name of the device.
    *
    * @return string|null The deviceName
    */
    public function getDeviceName()
    {
        if (array_key_exists("deviceName", $this->_propDict)) {
            return $this->_propDict["deviceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceName
    * The name of the device.
    *
    * @param string $val The deviceName
    *
    * @return UserExperienceAnalyticsResourcePerformance
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }

    /**
    * Gets the deviceResourcePerformanceScore
    * Resource performance score of a specific device. Valid values 0 to 100
    *
    * @return int|null The deviceResourcePerformanceScore
    */
    public function getDeviceResourcePerformanceScore()
    {
        if (array_key_exists("deviceResourcePerformanceScore", $this->_propDict)) {
            return $this->_propDict["deviceResourcePerformanceScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceResourcePerformanceScore
    * Resource performance score of a specific device. Valid values 0 to 100
    *
    * @param int $val The deviceResourcePerformanceScore
    *
    * @return UserExperienceAnalyticsResourcePerformance
    */
    public function setDeviceResourcePerformanceScore($val)
    {
        $this->_propDict["deviceResourcePerformanceScore"] = intval($val);
        return $this;
    }

    /**
    * Gets the manufacturer
    * The user experience analytics device manufacturer.
    *
    * @return string|null The manufacturer
    */
    public function getManufacturer()
    {
        if (array_key_exists("manufacturer", $this->_propDict)) {
            return $this->_propDict["manufacturer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the manufacturer
    * The user experience analytics device manufacturer.
    *
    * @param string $val The manufacturer
    *
    * @return UserExperienceAnalyticsResourcePerformance
    */
    public function setManufacturer($val)
    {
        $this->_propDict["manufacturer"] = $val;
        return $this;
    }

    /**
    * Gets the model
    * The user experience analytics device model.
    *
    * @return string|null The model
    */
    public function getModel()
    {
        if (array_key_exists("model", $this->_propDict)) {
            return $this->_propDict["model"];
        } else {
            return null;
        }
    }

    /**
    * Sets the model
    * The user experience analytics device model.
    *
    * @param string $val The model
    *
    * @return UserExperienceAnalyticsResourcePerformance
    */
    public function setModel($val)
    {
        $this->_propDict["model"] = $val;
        return $this;
    }

    /**
    * Gets the ramSpikeTimePercentage
    * RAM spike time in percentage. Valid values 0 to 100
    *
    * @return float|null The ramSpikeTimePercentage
    */
    public function getRamSpikeTimePercentage()
    {
        if (array_key_exists("ramSpikeTimePercentage", $this->_propDict)) {
            return $this->_propDict["ramSpikeTimePercentage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ramSpikeTimePercentage
    * RAM spike time in percentage. Valid values 0 to 100
    *
    * @param float $val The ramSpikeTimePercentage
    *
    * @return UserExperienceAnalyticsResourcePerformance
    */
    public function setRamSpikeTimePercentage($val)
    {
        $this->_propDict["ramSpikeTimePercentage"] = floatval($val);
        return $this;
    }

    /**
    * Gets the ramSpikeTimePercentageThreshold
    * Threshold of ramSpikeTimeScore. Valid values 0 to 100
    *
    * @return float|null The ramSpikeTimePercentageThreshold
    */
    public function getRamSpikeTimePercentageThreshold()
    {
        if (array_key_exists("ramSpikeTimePercentageThreshold", $this->_propDict)) {
            return $this->_propDict["ramSpikeTimePercentageThreshold"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ramSpikeTimePercentageThreshold
    * Threshold of ramSpikeTimeScore. Valid values 0 to 100
    *
    * @param float $val The ramSpikeTimePercentageThreshold
    *
    * @return UserExperienceAnalyticsResourcePerformance
    */
    public function setRamSpikeTimePercentageThreshold($val)
    {
        $this->_propDict["ramSpikeTimePercentageThreshold"] = floatval($val);
        return $this;
    }

    /**
    * Gets the ramSpikeTimeScore
    * The user experience analytics device RAM spike time score. Valid values 0 to 100
    *
    * @return int|null The ramSpikeTimeScore
    */
    public function getRamSpikeTimeScore()
    {
        if (array_key_exists("ramSpikeTimeScore", $this->_propDict)) {
            return $this->_propDict["ramSpikeTimeScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ramSpikeTimeScore
    * The user experience analytics device RAM spike time score. Valid values 0 to 100
    *
    * @param int $val The ramSpikeTimeScore
    *
    * @return UserExperienceAnalyticsResourcePerformance
    */
    public function setRamSpikeTimeScore($val)
    {
        $this->_propDict["ramSpikeTimeScore"] = intval($val);
        return $this;
    }

}
