<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EvidenceRemediationStatus File
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


use Microsoft\Graph\Core\Enum;

/**
* EvidenceRemediationStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EvidenceRemediationStatus extends Enum
{
    /**
    * The Enum EvidenceRemediationStatus
    */
    const NONE = "none";
    const REMEDIATED = "remediated";
    const PREVENTED = "prevented";
    const BLOCKED = "blocked";
    const NOT_FOUND = "notFound";
    const ACTIVE = "active";
    const PENDING_APPROVAL = "pendingApproval";
    const DECLINED = "declined";
    const NOT_REMEDIATED = "notRemediated";
    const RUNNING = "running";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
