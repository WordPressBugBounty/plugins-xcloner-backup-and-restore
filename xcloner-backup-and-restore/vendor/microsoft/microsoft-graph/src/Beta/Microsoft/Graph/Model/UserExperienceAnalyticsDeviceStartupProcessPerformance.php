<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsDeviceStartupProcessPerformance File
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
* UserExperienceAnalyticsDeviceStartupProcessPerformance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsDeviceStartupProcessPerformance extends Entity
{
    /**
    * Gets the deviceCount
    * User experience analytics device startup process summarized count.
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
    * User experience analytics device startup process summarized count.
    *
    * @param int $val The deviceCount
    *
    * @return UserExperienceAnalyticsDeviceStartupProcessPerformance
    */
    public function setDeviceCount($val)
    {
        $this->_propDict["deviceCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the medianImpactInMs
    * User experience analytics device startup process median impact in milliseconds.
    *
    * @return int|null The medianImpactInMs
    */
    public function getMedianImpactInMs()
    {
        if (array_key_exists("medianImpactInMs", $this->_propDict)) {
            return $this->_propDict["medianImpactInMs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the medianImpactInMs
    * User experience analytics device startup process median impact in milliseconds.
    *
    * @param int $val The medianImpactInMs
    *
    * @return UserExperienceAnalyticsDeviceStartupProcessPerformance
    */
    public function setMedianImpactInMs($val)
    {
        $this->_propDict["medianImpactInMs"] = intval($val);
        return $this;
    }

    /**
    * Gets the medianImpactInMs2
    * User experience analytics device startup process median impact in milliseconds.
    *
    * @return int|null The medianImpactInMs2
    */
    public function getMedianImpactInMs2()
    {
        if (array_key_exists("medianImpactInMs2", $this->_propDict)) {
            return $this->_propDict["medianImpactInMs2"];
        } else {
            return null;
        }
    }

    /**
    * Sets the medianImpactInMs2
    * User experience analytics device startup process median impact in milliseconds.
    *
    * @param int $val The medianImpactInMs2
    *
    * @return UserExperienceAnalyticsDeviceStartupProcessPerformance
    */
    public function setMedianImpactInMs2($val)
    {
        $this->_propDict["medianImpactInMs2"] = intval($val);
        return $this;
    }

    /**
    * Gets the processName
    * User experience analytics device startup process name.
    *
    * @return string|null The processName
    */
    public function getProcessName()
    {
        if (array_key_exists("processName", $this->_propDict)) {
            return $this->_propDict["processName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the processName
    * User experience analytics device startup process name.
    *
    * @param string $val The processName
    *
    * @return UserExperienceAnalyticsDeviceStartupProcessPerformance
    */
    public function setProcessName($val)
    {
        $this->_propDict["processName"] = $val;
        return $this;
    }

    /**
    * Gets the productName
    * The user experience analytics device startup process product name.
    *
    * @return string|null The productName
    */
    public function getProductName()
    {
        if (array_key_exists("productName", $this->_propDict)) {
            return $this->_propDict["productName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the productName
    * The user experience analytics device startup process product name.
    *
    * @param string $val The productName
    *
    * @return UserExperienceAnalyticsDeviceStartupProcessPerformance
    */
    public function setProductName($val)
    {
        $this->_propDict["productName"] = $val;
        return $this;
    }

    /**
    * Gets the publisher
    * The User experience analytics device startup process publisher.
    *
    * @return string|null The publisher
    */
    public function getPublisher()
    {
        if (array_key_exists("publisher", $this->_propDict)) {
            return $this->_propDict["publisher"];
        } else {
            return null;
        }
    }

    /**
    * Sets the publisher
    * The User experience analytics device startup process publisher.
    *
    * @param string $val The publisher
    *
    * @return UserExperienceAnalyticsDeviceStartupProcessPerformance
    */
    public function setPublisher($val)
    {
        $this->_propDict["publisher"] = $val;
        return $this;
    }

    /**
    * Gets the totalImpactInMs
    * User experience analytics device startup process total impact in milliseconds.
    *
    * @return int|null The totalImpactInMs
    */
    public function getTotalImpactInMs()
    {
        if (array_key_exists("totalImpactInMs", $this->_propDict)) {
            return $this->_propDict["totalImpactInMs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalImpactInMs
    * User experience analytics device startup process total impact in milliseconds.
    *
    * @param int $val The totalImpactInMs
    *
    * @return UserExperienceAnalyticsDeviceStartupProcessPerformance
    */
    public function setTotalImpactInMs($val)
    {
        $this->_propDict["totalImpactInMs"] = intval($val);
        return $this;
    }

    /**
    * Gets the totalImpactInMs2
    * User experience analytics device startup process total impact in milliseconds.
    *
    * @return int|null The totalImpactInMs2
    */
    public function getTotalImpactInMs2()
    {
        if (array_key_exists("totalImpactInMs2", $this->_propDict)) {
            return $this->_propDict["totalImpactInMs2"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalImpactInMs2
    * User experience analytics device startup process total impact in milliseconds.
    *
    * @param int $val The totalImpactInMs2
    *
    * @return UserExperienceAnalyticsDeviceStartupProcessPerformance
    */
    public function setTotalImpactInMs2($val)
    {
        $this->_propDict["totalImpactInMs2"] = intval($val);
        return $this;
    }

}
