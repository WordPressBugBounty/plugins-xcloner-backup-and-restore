<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ThumbnailSet File
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
* ThumbnailSet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ThumbnailSet extends Entity
{
    /**
    * Gets the large
    * A 1920x1920 scaled thumbnail.
    *
    * @return Thumbnail|null The large
    */
    public function getLarge()
    {
        if (array_key_exists("large", $this->_propDict)) {
            if (is_a($this->_propDict["large"], "\Microsoft\Graph\Model\Thumbnail") || is_null($this->_propDict["large"])) {
                return $this->_propDict["large"];
            } else {
                $this->_propDict["large"] = new Thumbnail($this->_propDict["large"]);
                return $this->_propDict["large"];
            }
        }
        return null;
    }

    /**
    * Sets the large
    * A 1920x1920 scaled thumbnail.
    *
    * @param Thumbnail $val The large
    *
    * @return ThumbnailSet
    */
    public function setLarge($val)
    {
        $this->_propDict["large"] = $val;
        return $this;
    }

    /**
    * Gets the medium
    * A 176x176 scaled thumbnail.
    *
    * @return Thumbnail|null The medium
    */
    public function getMedium()
    {
        if (array_key_exists("medium", $this->_propDict)) {
            if (is_a($this->_propDict["medium"], "\Microsoft\Graph\Model\Thumbnail") || is_null($this->_propDict["medium"])) {
                return $this->_propDict["medium"];
            } else {
                $this->_propDict["medium"] = new Thumbnail($this->_propDict["medium"]);
                return $this->_propDict["medium"];
            }
        }
        return null;
    }

    /**
    * Sets the medium
    * A 176x176 scaled thumbnail.
    *
    * @param Thumbnail $val The medium
    *
    * @return ThumbnailSet
    */
    public function setMedium($val)
    {
        $this->_propDict["medium"] = $val;
        return $this;
    }

    /**
    * Gets the small
    * A 48x48 cropped thumbnail.
    *
    * @return Thumbnail|null The small
    */
    public function getSmall()
    {
        if (array_key_exists("small", $this->_propDict)) {
            if (is_a($this->_propDict["small"], "\Microsoft\Graph\Model\Thumbnail") || is_null($this->_propDict["small"])) {
                return $this->_propDict["small"];
            } else {
                $this->_propDict["small"] = new Thumbnail($this->_propDict["small"]);
                return $this->_propDict["small"];
            }
        }
        return null;
    }

    /**
    * Sets the small
    * A 48x48 cropped thumbnail.
    *
    * @param Thumbnail $val The small
    *
    * @return ThumbnailSet
    */
    public function setSmall($val)
    {
        $this->_propDict["small"] = $val;
        return $this;
    }

    /**
    * Gets the source
    * A custom thumbnail image or the original image used to generate other thumbnails.
    *
    * @return Thumbnail|null The source
    */
    public function getSource()
    {
        if (array_key_exists("source", $this->_propDict)) {
            if (is_a($this->_propDict["source"], "\Microsoft\Graph\Model\Thumbnail") || is_null($this->_propDict["source"])) {
                return $this->_propDict["source"];
            } else {
                $this->_propDict["source"] = new Thumbnail($this->_propDict["source"]);
                return $this->_propDict["source"];
            }
        }
        return null;
    }

    /**
    * Sets the source
    * A custom thumbnail image or the original image used to generate other thumbnails.
    *
    * @param Thumbnail $val The source
    *
    * @return ThumbnailSet
    */
    public function setSource($val)
    {
        $this->_propDict["source"] = $val;
        return $this;
    }

}
