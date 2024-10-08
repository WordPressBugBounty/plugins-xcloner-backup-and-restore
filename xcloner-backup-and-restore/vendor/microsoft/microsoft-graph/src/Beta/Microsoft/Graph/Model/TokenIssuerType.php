<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TokenIssuerType File
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


use Microsoft\Graph\Core\Enum;

/**
* TokenIssuerType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TokenIssuerType extends Enum
{
    /**
    * The Enum TokenIssuerType
    */
    const AZURE_AD = "azureAD";
    const AD_FEDERATION_SERVICES = "aDFederationServices";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    const AZURE_AD_BACKUP_AUTH = "azureADBackupAuth";
    const AD_FEDERATION_SERVICES_MFA_ADAPTER = "aDFederationServicesMFAAdapter";
    const NPS_EXTENSION = "nPSExtension";
}
