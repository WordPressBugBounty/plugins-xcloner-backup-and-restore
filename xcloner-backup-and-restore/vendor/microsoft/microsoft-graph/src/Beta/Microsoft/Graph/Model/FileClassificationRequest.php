<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FileClassificationRequest File
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
* FileClassificationRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FileClassificationRequest extends Entity
{
    /**
    * Gets the file
    *
    * @return \GuzzleHttp\Psr7\Stream|null The file
    */
    public function getFile()
    {
        if (array_key_exists("file", $this->_propDict)) {
            if (is_a($this->_propDict["file"], "\GuzzleHttp\Psr7\Stream") || is_null($this->_propDict["file"])) {
                return $this->_propDict["file"];
            } else {
                $this->_propDict["file"] = \GuzzleHttp\Psr7\Utils::streamFor($this->_propDict["file"]);
                return $this->_propDict["file"];
            }
        }
        return null;
    }

    /**
    * Sets the file
    *
    * @param \GuzzleHttp\Psr7\Stream $val The file
    *
    * @return FileClassificationRequest
    */
    public function setFile($val)
    {
        $this->_propDict["file"] = $val;
        return $this;
    }

    /**
    * Gets the sensitiveTypeIds
    *
    * @return array|null The sensitiveTypeIds
    */
    public function getSensitiveTypeIds()
    {
        if (array_key_exists("sensitiveTypeIds", $this->_propDict)) {
            return $this->_propDict["sensitiveTypeIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sensitiveTypeIds
    *
    * @param string[] $val The sensitiveTypeIds
    *
    * @return FileClassificationRequest
    */
    public function setSensitiveTypeIds($val)
    {
        $this->_propDict["sensitiveTypeIds"] = $val;
        return $this;
    }

}
