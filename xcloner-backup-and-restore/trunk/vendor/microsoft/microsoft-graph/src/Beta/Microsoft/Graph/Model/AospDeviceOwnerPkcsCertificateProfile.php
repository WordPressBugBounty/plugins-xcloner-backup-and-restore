<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AospDeviceOwnerPkcsCertificateProfile File
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
* AospDeviceOwnerPkcsCertificateProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AospDeviceOwnerPkcsCertificateProfile extends AospDeviceOwnerCertificateProfileBase
{
    /**
    * Gets the certificateStore
    * Target store certificate. Possible values are: user, machine.
    *
    * @return CertificateStore|null The certificateStore
    */
    public function getCertificateStore()
    {
        if (array_key_exists("certificateStore", $this->_propDict)) {
            if (is_a($this->_propDict["certificateStore"], "\Beta\Microsoft\Graph\Model\CertificateStore") || is_null($this->_propDict["certificateStore"])) {
                return $this->_propDict["certificateStore"];
            } else {
                $this->_propDict["certificateStore"] = new CertificateStore($this->_propDict["certificateStore"]);
                return $this->_propDict["certificateStore"];
            }
        }
        return null;
    }

    /**
    * Sets the certificateStore
    * Target store certificate. Possible values are: user, machine.
    *
    * @param CertificateStore $val The certificateStore
    *
    * @return AospDeviceOwnerPkcsCertificateProfile
    */
    public function setCertificateStore($val)
    {
        $this->_propDict["certificateStore"] = $val;
        return $this;
    }

    /**
    * Gets the certificateTemplateName
    * PKCS Certificate Template Name
    *
    * @return string|null The certificateTemplateName
    */
    public function getCertificateTemplateName()
    {
        if (array_key_exists("certificateTemplateName", $this->_propDict)) {
            return $this->_propDict["certificateTemplateName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the certificateTemplateName
    * PKCS Certificate Template Name
    *
    * @param string $val The certificateTemplateName
    *
    * @return AospDeviceOwnerPkcsCertificateProfile
    */
    public function setCertificateTemplateName($val)
    {
        $this->_propDict["certificateTemplateName"] = $val;
        return $this;
    }

    /**
    * Gets the certificationAuthority
    * PKCS Certification Authority
    *
    * @return string|null The certificationAuthority
    */
    public function getCertificationAuthority()
    {
        if (array_key_exists("certificationAuthority", $this->_propDict)) {
            return $this->_propDict["certificationAuthority"];
        } else {
            return null;
        }
    }

    /**
    * Sets the certificationAuthority
    * PKCS Certification Authority
    *
    * @param string $val The certificationAuthority
    *
    * @return AospDeviceOwnerPkcsCertificateProfile
    */
    public function setCertificationAuthority($val)
    {
        $this->_propDict["certificationAuthority"] = $val;
        return $this;
    }

    /**
    * Gets the certificationAuthorityName
    * PKCS Certification Authority Name
    *
    * @return string|null The certificationAuthorityName
    */
    public function getCertificationAuthorityName()
    {
        if (array_key_exists("certificationAuthorityName", $this->_propDict)) {
            return $this->_propDict["certificationAuthorityName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the certificationAuthorityName
    * PKCS Certification Authority Name
    *
    * @param string $val The certificationAuthorityName
    *
    * @return AospDeviceOwnerPkcsCertificateProfile
    */
    public function setCertificationAuthorityName($val)
    {
        $this->_propDict["certificationAuthorityName"] = $val;
        return $this;
    }

    /**
    * Gets the certificationAuthorityType
    * Certification authority type. Possible values are: notConfigured, microsoft, digiCert.
    *
    * @return DeviceManagementCertificationAuthority|null The certificationAuthorityType
    */
    public function getCertificationAuthorityType()
    {
        if (array_key_exists("certificationAuthorityType", $this->_propDict)) {
            if (is_a($this->_propDict["certificationAuthorityType"], "\Beta\Microsoft\Graph\Model\DeviceManagementCertificationAuthority") || is_null($this->_propDict["certificationAuthorityType"])) {
                return $this->_propDict["certificationAuthorityType"];
            } else {
                $this->_propDict["certificationAuthorityType"] = new DeviceManagementCertificationAuthority($this->_propDict["certificationAuthorityType"]);
                return $this->_propDict["certificationAuthorityType"];
            }
        }
        return null;
    }

    /**
    * Sets the certificationAuthorityType
    * Certification authority type. Possible values are: notConfigured, microsoft, digiCert.
    *
    * @param DeviceManagementCertificationAuthority $val The certificationAuthorityType
    *
    * @return AospDeviceOwnerPkcsCertificateProfile
    */
    public function setCertificationAuthorityType($val)
    {
        $this->_propDict["certificationAuthorityType"] = $val;
        return $this;
    }


     /**
     * Gets the customSubjectAlternativeNames
    * Custom Subject Alternative Name Settings. This collection can contain a maximum of 500 elements.
     *
     * @return array|null The customSubjectAlternativeNames
     */
    public function getCustomSubjectAlternativeNames()
    {
        if (array_key_exists("customSubjectAlternativeNames", $this->_propDict)) {
           return $this->_propDict["customSubjectAlternativeNames"];
        } else {
            return null;
        }
    }

    /**
    * Sets the customSubjectAlternativeNames
    * Custom Subject Alternative Name Settings. This collection can contain a maximum of 500 elements.
    *
    * @param CustomSubjectAlternativeName[] $val The customSubjectAlternativeNames
    *
    * @return AospDeviceOwnerPkcsCertificateProfile
    */
    public function setCustomSubjectAlternativeNames($val)
    {
        $this->_propDict["customSubjectAlternativeNames"] = $val;
        return $this;
    }

    /**
    * Gets the subjectAlternativeNameFormatString
    * Custom String that defines the AAD Attribute.
    *
    * @return string|null The subjectAlternativeNameFormatString
    */
    public function getSubjectAlternativeNameFormatString()
    {
        if (array_key_exists("subjectAlternativeNameFormatString", $this->_propDict)) {
            return $this->_propDict["subjectAlternativeNameFormatString"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subjectAlternativeNameFormatString
    * Custom String that defines the AAD Attribute.
    *
    * @param string $val The subjectAlternativeNameFormatString
    *
    * @return AospDeviceOwnerPkcsCertificateProfile
    */
    public function setSubjectAlternativeNameFormatString($val)
    {
        $this->_propDict["subjectAlternativeNameFormatString"] = $val;
        return $this;
    }

    /**
    * Gets the subjectNameFormatString
    * Custom format to use with SubjectNameFormat = Custom. Example: CN={{EmailAddress}},E={{EmailAddress}},OU=Enterprise Users,O=Contoso Corporation,L=Redmond,ST=WA,C=US
    *
    * @return string|null The subjectNameFormatString
    */
    public function getSubjectNameFormatString()
    {
        if (array_key_exists("subjectNameFormatString", $this->_propDict)) {
            return $this->_propDict["subjectNameFormatString"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subjectNameFormatString
    * Custom format to use with SubjectNameFormat = Custom. Example: CN={{EmailAddress}},E={{EmailAddress}},OU=Enterprise Users,O=Contoso Corporation,L=Redmond,ST=WA,C=US
    *
    * @param string $val The subjectNameFormatString
    *
    * @return AospDeviceOwnerPkcsCertificateProfile
    */
    public function setSubjectNameFormatString($val)
    {
        $this->_propDict["subjectNameFormatString"] = $val;
        return $this;
    }


     /**
     * Gets the managedDeviceCertificateStates
    * Certificate state for devices. This collection can contain a maximum of 2147483647 elements.
     *
     * @return array|null The managedDeviceCertificateStates
     */
    public function getManagedDeviceCertificateStates()
    {
        if (array_key_exists("managedDeviceCertificateStates", $this->_propDict)) {
           return $this->_propDict["managedDeviceCertificateStates"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managedDeviceCertificateStates
    * Certificate state for devices. This collection can contain a maximum of 2147483647 elements.
    *
    * @param ManagedDeviceCertificateState[] $val The managedDeviceCertificateStates
    *
    * @return AospDeviceOwnerPkcsCertificateProfile
    */
    public function setManagedDeviceCertificateStates($val)
    {
        $this->_propDict["managedDeviceCertificateStates"] = $val;
        return $this;
    }

}
