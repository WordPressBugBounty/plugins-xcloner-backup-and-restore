<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EdiscoveryReviewSet File
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
* EdiscoveryReviewSet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EdiscoveryReviewSet extends DataSet
{

     /**
     * Gets the files
    * Represents files within the review set.
     *
     * @return array|null The files
     */
    public function getFiles()
    {
        if (array_key_exists("files", $this->_propDict)) {
           return $this->_propDict["files"];
        } else {
            return null;
        }
    }

    /**
    * Sets the files
    * Represents files within the review set.
    *
    * @param EdiscoveryFile[] $val The files
    *
    * @return EdiscoveryReviewSet
    */
    public function setFiles($val)
    {
        $this->_propDict["files"] = $val;
        return $this;
    }


     /**
     * Gets the queries
    * Represents queries within the review set.
     *
     * @return array|null The queries
     */
    public function getQueries()
    {
        if (array_key_exists("queries", $this->_propDict)) {
           return $this->_propDict["queries"];
        } else {
            return null;
        }
    }

    /**
    * Sets the queries
    * Represents queries within the review set.
    *
    * @param EdiscoveryReviewSetQuery[] $val The queries
    *
    * @return EdiscoveryReviewSet
    */
    public function setQueries($val)
    {
        $this->_propDict["queries"] = $val;
        return $this;
    }

}
