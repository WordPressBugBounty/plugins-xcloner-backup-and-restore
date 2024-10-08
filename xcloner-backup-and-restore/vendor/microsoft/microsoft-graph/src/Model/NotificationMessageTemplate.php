<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NotificationMessageTemplate File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }


/**
* NotificationMessageTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class NotificationMessageTemplate extends Entity
{
    /**
    * Gets the brandingOptions
    * The Message Template Branding Options. Branding is defined in the Intune Admin Console. Possible values are: none, includeCompanyLogo, includeCompanyName, includeContactInformation, includeDeviceDetails.
    *
    * @return NotificationTemplateBrandingOptions|null The brandingOptions
    */
    public function getBrandingOptions()
    {
        if (array_key_exists("brandingOptions", $this->_propDict)) {
            if (is_a($this->_propDict["brandingOptions"], "\Microsoft\Graph\Model\NotificationTemplateBrandingOptions") || is_null($this->_propDict["brandingOptions"])) {
                return $this->_propDict["brandingOptions"];
            } else {
                $this->_propDict["brandingOptions"] = new NotificationTemplateBrandingOptions($this->_propDict["brandingOptions"]);
                return $this->_propDict["brandingOptions"];
            }
        }
        return null;
    }

    /**
    * Sets the brandingOptions
    * The Message Template Branding Options. Branding is defined in the Intune Admin Console. Possible values are: none, includeCompanyLogo, includeCompanyName, includeContactInformation, includeDeviceDetails.
    *
    * @param NotificationTemplateBrandingOptions $val The brandingOptions
    *
    * @return NotificationMessageTemplate
    */
    public function setBrandingOptions($val)
    {
        $this->_propDict["brandingOptions"] = $val;
        return $this;
    }

    /**
    * Gets the defaultLocale
    * The default locale to fallback onto when the requested locale is not available.
    *
    * @return string|null The defaultLocale
    */
    public function getDefaultLocale()
    {
        if (array_key_exists("defaultLocale", $this->_propDict)) {
            return $this->_propDict["defaultLocale"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultLocale
    * The default locale to fallback onto when the requested locale is not available.
    *
    * @param string $val The defaultLocale
    *
    * @return NotificationMessageTemplate
    */
    public function setDefaultLocale($val)
    {
        $this->_propDict["defaultLocale"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * Display name for the Notification Message Template.
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
    * Display name for the Notification Message Template.
    *
    * @param string $val The displayName
    *
    * @return NotificationMessageTemplate
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * DateTime the object was last modified.
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    * DateTime the object was last modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return NotificationMessageTemplate
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }


     /**
     * Gets the localizedNotificationMessages
    * The list of localized messages for this Notification Message Template.
     *
     * @return array|null The localizedNotificationMessages
     */
    public function getLocalizedNotificationMessages()
    {
        if (array_key_exists("localizedNotificationMessages", $this->_propDict)) {
           return $this->_propDict["localizedNotificationMessages"];
        } else {
            return null;
        }
    }

    /**
    * Sets the localizedNotificationMessages
    * The list of localized messages for this Notification Message Template.
    *
    * @param LocalizedNotificationMessage[] $val The localizedNotificationMessages
    *
    * @return NotificationMessageTemplate
    */
    public function setLocalizedNotificationMessages($val)
    {
        $this->_propDict["localizedNotificationMessages"] = $val;
        return $this;
    }

}
