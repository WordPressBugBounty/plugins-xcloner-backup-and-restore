<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RequestorManager File
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
* RequestorManager class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RequestorManager extends SubjectSet
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.requestorManager");
    }

    /**
    * Gets the managerLevel
    * The hierarchical level of the manager with respect to the requestor. For example, the direct manager of a requestor would have a managerLevel of 1, while the manager of the requestor's manager would have a managerLevel of 2. Default value for managerLevel is 1. Possible values for this property range from 1 to 2.
    *
    * @return int|null The managerLevel
    */
    public function getManagerLevel()
    {
        if (array_key_exists("managerLevel", $this->_propDict)) {
            return $this->_propDict["managerLevel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managerLevel
    * The hierarchical level of the manager with respect to the requestor. For example, the direct manager of a requestor would have a managerLevel of 1, while the manager of the requestor's manager would have a managerLevel of 2. Default value for managerLevel is 1. Possible values for this property range from 1 to 2.
    *
    * @param int $val The value of the managerLevel
    *
    * @return RequestorManager
    */
    public function setManagerLevel($val)
    {
        $this->_propDict["managerLevel"] = $val;
        return $this;
    }
}
