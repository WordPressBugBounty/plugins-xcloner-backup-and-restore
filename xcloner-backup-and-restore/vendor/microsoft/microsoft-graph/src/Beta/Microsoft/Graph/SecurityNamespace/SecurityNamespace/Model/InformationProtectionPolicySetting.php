<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InformationProtectionPolicySetting File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }


/**
* InformationProtectionPolicySetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InformationProtectionPolicySetting extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the defaultLabelId
    *
    * @return string|null The defaultLabelId
    */
    public function getDefaultLabelId()
    {
        if (array_key_exists("defaultLabelId", $this->_propDict)) {
            return $this->_propDict["defaultLabelId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultLabelId
    *
    * @param string $val The defaultLabelId
    *
    * @return InformationProtectionPolicySetting
    */
    public function setDefaultLabelId($val)
    {
        $this->_propDict["defaultLabelId"] = $val;
        return $this;
    }

    /**
    * Gets the isDowngradeJustificationRequired
    * Exposes whether justification input is required on label downgrade.
    *
    * @return bool|null The isDowngradeJustificationRequired
    */
    public function getIsDowngradeJustificationRequired()
    {
        if (array_key_exists("isDowngradeJustificationRequired", $this->_propDict)) {
            return $this->_propDict["isDowngradeJustificationRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isDowngradeJustificationRequired
    * Exposes whether justification input is required on label downgrade.
    *
    * @param bool $val The isDowngradeJustificationRequired
    *
    * @return InformationProtectionPolicySetting
    */
    public function setIsDowngradeJustificationRequired($val)
    {
        $this->_propDict["isDowngradeJustificationRequired"] = boolval($val);
        return $this;
    }

    /**
    * Gets the isMandatory
    * Exposes whether mandatory labeling is enabled.
    *
    * @return bool|null The isMandatory
    */
    public function getIsMandatory()
    {
        if (array_key_exists("isMandatory", $this->_propDict)) {
            return $this->_propDict["isMandatory"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isMandatory
    * Exposes whether mandatory labeling is enabled.
    *
    * @param bool $val The isMandatory
    *
    * @return InformationProtectionPolicySetting
    */
    public function setIsMandatory($val)
    {
        $this->_propDict["isMandatory"] = boolval($val);
        return $this;
    }

    /**
    * Gets the moreInfoUrl
    * Exposes the more information URL that can be configured by the administrator.
    *
    * @return string|null The moreInfoUrl
    */
    public function getMoreInfoUrl()
    {
        if (array_key_exists("moreInfoUrl", $this->_propDict)) {
            return $this->_propDict["moreInfoUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the moreInfoUrl
    * Exposes the more information URL that can be configured by the administrator.
    *
    * @param string $val The moreInfoUrl
    *
    * @return InformationProtectionPolicySetting
    */
    public function setMoreInfoUrl($val)
    {
        $this->_propDict["moreInfoUrl"] = $val;
        return $this;
    }

}
