<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EdgeSearchEngineCustom File
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
* EdgeSearchEngineCustom class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EdgeSearchEngineCustom extends EdgeSearchEngineBase
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.edgeSearchEngineCustom");
    }

    /**
    * Gets the edgeSearchEngineOpenSearchXmlUrl
    * Points to a https link containing the OpenSearch xml file that contains, at minimum, the short name and the URL to the search Engine.
    *
    * @return string|null The edgeSearchEngineOpenSearchXmlUrl
    */
    public function getEdgeSearchEngineOpenSearchXmlUrl()
    {
        if (array_key_exists("edgeSearchEngineOpenSearchXmlUrl", $this->_propDict)) {
            return $this->_propDict["edgeSearchEngineOpenSearchXmlUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the edgeSearchEngineOpenSearchXmlUrl
    * Points to a https link containing the OpenSearch xml file that contains, at minimum, the short name and the URL to the search Engine.
    *
    * @param string $val The value of the edgeSearchEngineOpenSearchXmlUrl
    *
    * @return EdgeSearchEngineCustom
    */
    public function setEdgeSearchEngineOpenSearchXmlUrl($val)
    {
        $this->_propDict["edgeSearchEngineOpenSearchXmlUrl"] = $val;
        return $this;
    }
}
