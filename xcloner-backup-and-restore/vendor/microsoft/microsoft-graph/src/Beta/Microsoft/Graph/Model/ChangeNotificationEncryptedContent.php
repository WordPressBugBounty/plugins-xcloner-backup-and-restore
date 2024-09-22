<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChangeNotificationEncryptedContent File
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
* ChangeNotificationEncryptedContent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChangeNotificationEncryptedContent extends Entity
{
    /**
    * Gets the data
    * Base64-encoded encrypted data that produces a full resource respresented as JSON. The data has been encrypted with the provided dataKey using an AES/CBC/PKCS5PADDING cipher suite.
    *
    * @return string|null The data
    */
    public function getData()
    {
        if (array_key_exists("data", $this->_propDict)) {
            return $this->_propDict["data"];
        } else {
            return null;
        }
    }

    /**
    * Sets the data
    * Base64-encoded encrypted data that produces a full resource respresented as JSON. The data has been encrypted with the provided dataKey using an AES/CBC/PKCS5PADDING cipher suite.
    *
    * @param string $val The value of the data
    *
    * @return ChangeNotificationEncryptedContent
    */
    public function setData($val)
    {
        $this->_propDict["data"] = $val;
        return $this;
    }
    /**
    * Gets the dataKey
    * Base64-encoded symmetric key generated by Microsoft Graph to encrypt the data value and to generate the data signature. This key is encrypted with the certificate public key that was provided during the subscription. It must be decrypted with the certificate private key before it can be used to decrypt the data or verify the signature. This key has been encrypted with the following cipher suite: RSA/ECB/OAEPWithSHA1AndMGF1Padding.
    *
    * @return string|null The dataKey
    */
    public function getDataKey()
    {
        if (array_key_exists("dataKey", $this->_propDict)) {
            return $this->_propDict["dataKey"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dataKey
    * Base64-encoded symmetric key generated by Microsoft Graph to encrypt the data value and to generate the data signature. This key is encrypted with the certificate public key that was provided during the subscription. It must be decrypted with the certificate private key before it can be used to decrypt the data or verify the signature. This key has been encrypted with the following cipher suite: RSA/ECB/OAEPWithSHA1AndMGF1Padding.
    *
    * @param string $val The value of the dataKey
    *
    * @return ChangeNotificationEncryptedContent
    */
    public function setDataKey($val)
    {
        $this->_propDict["dataKey"] = $val;
        return $this;
    }
    /**
    * Gets the dataSignature
    * Base64-encoded HMAC-SHA256 hash of the data for validation purposes.
    *
    * @return string|null The dataSignature
    */
    public function getDataSignature()
    {
        if (array_key_exists("dataSignature", $this->_propDict)) {
            return $this->_propDict["dataSignature"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dataSignature
    * Base64-encoded HMAC-SHA256 hash of the data for validation purposes.
    *
    * @param string $val The value of the dataSignature
    *
    * @return ChangeNotificationEncryptedContent
    */
    public function setDataSignature($val)
    {
        $this->_propDict["dataSignature"] = $val;
        return $this;
    }
    /**
    * Gets the encryptionCertificateId
    * ID of the certificate used to encrypt the dataKey.
    *
    * @return string|null The encryptionCertificateId
    */
    public function getEncryptionCertificateId()
    {
        if (array_key_exists("encryptionCertificateId", $this->_propDict)) {
            return $this->_propDict["encryptionCertificateId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the encryptionCertificateId
    * ID of the certificate used to encrypt the dataKey.
    *
    * @param string $val The value of the encryptionCertificateId
    *
    * @return ChangeNotificationEncryptedContent
    */
    public function setEncryptionCertificateId($val)
    {
        $this->_propDict["encryptionCertificateId"] = $val;
        return $this;
    }
    /**
    * Gets the encryptionCertificateThumbprint
    * Hexadecimal representation of the thumbprint of the certificate used to encrypt the dataKey.
    *
    * @return string|null The encryptionCertificateThumbprint
    */
    public function getEncryptionCertificateThumbprint()
    {
        if (array_key_exists("encryptionCertificateThumbprint", $this->_propDict)) {
            return $this->_propDict["encryptionCertificateThumbprint"];
        } else {
            return null;
        }
    }

    /**
    * Sets the encryptionCertificateThumbprint
    * Hexadecimal representation of the thumbprint of the certificate used to encrypt the dataKey.
    *
    * @param string $val The value of the encryptionCertificateThumbprint
    *
    * @return ChangeNotificationEncryptedContent
    */
    public function setEncryptionCertificateThumbprint($val)
    {
        $this->_propDict["encryptionCertificateThumbprint"] = $val;
        return $this;
    }
}
