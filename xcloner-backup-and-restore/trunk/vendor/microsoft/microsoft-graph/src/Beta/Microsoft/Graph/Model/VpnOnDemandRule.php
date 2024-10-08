<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VpnOnDemandRule File
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
* VpnOnDemandRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VpnOnDemandRule extends Entity
{

    /**
    * Gets the action
    * Action. Possible values are: connect, evaluateConnection, ignore, disconnect.
    *
    * @return VpnOnDemandRuleConnectionAction|null The action
    */
    public function getAction()
    {
        if (array_key_exists("action", $this->_propDict)) {
            if (is_a($this->_propDict["action"], "\Beta\Microsoft\Graph\Model\VpnOnDemandRuleConnectionAction") || is_null($this->_propDict["action"])) {
                return $this->_propDict["action"];
            } else {
                $this->_propDict["action"] = new VpnOnDemandRuleConnectionAction($this->_propDict["action"]);
                return $this->_propDict["action"];
            }
        }
        return null;
    }

    /**
    * Sets the action
    * Action. Possible values are: connect, evaluateConnection, ignore, disconnect.
    *
    * @param VpnOnDemandRuleConnectionAction $val The value to assign to the action
    *
    * @return VpnOnDemandRule The VpnOnDemandRule
    */
    public function setAction($val)
    {
        $this->_propDict["action"] = $val;
         return $this;
    }
    /**
    * Gets the dnsSearchDomains
    * DNS Search Domains.
    *
    * @return string|null The dnsSearchDomains
    */
    public function getDnsSearchDomains()
    {
        if (array_key_exists("dnsSearchDomains", $this->_propDict)) {
            return $this->_propDict["dnsSearchDomains"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dnsSearchDomains
    * DNS Search Domains.
    *
    * @param string $val The value of the dnsSearchDomains
    *
    * @return VpnOnDemandRule
    */
    public function setDnsSearchDomains($val)
    {
        $this->_propDict["dnsSearchDomains"] = $val;
        return $this;
    }
    /**
    * Gets the dnsServerAddressMatch
    * DNS Search Server Address.
    *
    * @return string|null The dnsServerAddressMatch
    */
    public function getDnsServerAddressMatch()
    {
        if (array_key_exists("dnsServerAddressMatch", $this->_propDict)) {
            return $this->_propDict["dnsServerAddressMatch"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dnsServerAddressMatch
    * DNS Search Server Address.
    *
    * @param string $val The value of the dnsServerAddressMatch
    *
    * @return VpnOnDemandRule
    */
    public function setDnsServerAddressMatch($val)
    {
        $this->_propDict["dnsServerAddressMatch"] = $val;
        return $this;
    }

    /**
    * Gets the domainAction
    * Domain Action (Only applicable when Action is evaluate connection). Possible values are: connectIfNeeded, neverConnect.
    *
    * @return VpnOnDemandRuleConnectionDomainAction|null The domainAction
    */
    public function getDomainAction()
    {
        if (array_key_exists("domainAction", $this->_propDict)) {
            if (is_a($this->_propDict["domainAction"], "\Beta\Microsoft\Graph\Model\VpnOnDemandRuleConnectionDomainAction") || is_null($this->_propDict["domainAction"])) {
                return $this->_propDict["domainAction"];
            } else {
                $this->_propDict["domainAction"] = new VpnOnDemandRuleConnectionDomainAction($this->_propDict["domainAction"]);
                return $this->_propDict["domainAction"];
            }
        }
        return null;
    }

    /**
    * Sets the domainAction
    * Domain Action (Only applicable when Action is evaluate connection). Possible values are: connectIfNeeded, neverConnect.
    *
    * @param VpnOnDemandRuleConnectionDomainAction $val The value to assign to the domainAction
    *
    * @return VpnOnDemandRule The VpnOnDemandRule
    */
    public function setDomainAction($val)
    {
        $this->_propDict["domainAction"] = $val;
         return $this;
    }
    /**
    * Gets the domains
    * Domains (Only applicable when Action is evaluate connection).
    *
    * @return string|null The domains
    */
    public function getDomains()
    {
        if (array_key_exists("domains", $this->_propDict)) {
            return $this->_propDict["domains"];
        } else {
            return null;
        }
    }

    /**
    * Sets the domains
    * Domains (Only applicable when Action is evaluate connection).
    *
    * @param string $val The value of the domains
    *
    * @return VpnOnDemandRule
    */
    public function setDomains($val)
    {
        $this->_propDict["domains"] = $val;
        return $this;
    }

    /**
    * Gets the interfaceTypeMatch
    * Network interface to trigger VPN. Possible values are: notConfigured, ethernet, wiFi, cellular.
    *
    * @return VpnOnDemandRuleInterfaceTypeMatch|null The interfaceTypeMatch
    */
    public function getInterfaceTypeMatch()
    {
        if (array_key_exists("interfaceTypeMatch", $this->_propDict)) {
            if (is_a($this->_propDict["interfaceTypeMatch"], "\Beta\Microsoft\Graph\Model\VpnOnDemandRuleInterfaceTypeMatch") || is_null($this->_propDict["interfaceTypeMatch"])) {
                return $this->_propDict["interfaceTypeMatch"];
            } else {
                $this->_propDict["interfaceTypeMatch"] = new VpnOnDemandRuleInterfaceTypeMatch($this->_propDict["interfaceTypeMatch"]);
                return $this->_propDict["interfaceTypeMatch"];
            }
        }
        return null;
    }

    /**
    * Sets the interfaceTypeMatch
    * Network interface to trigger VPN. Possible values are: notConfigured, ethernet, wiFi, cellular.
    *
    * @param VpnOnDemandRuleInterfaceTypeMatch $val The value to assign to the interfaceTypeMatch
    *
    * @return VpnOnDemandRule The VpnOnDemandRule
    */
    public function setInterfaceTypeMatch($val)
    {
        $this->_propDict["interfaceTypeMatch"] = $val;
         return $this;
    }
    /**
    * Gets the probeRequiredUrl
    * Probe Required Url (Only applicable when Action is evaluate connection and DomainAction is connect if needed).
    *
    * @return string|null The probeRequiredUrl
    */
    public function getProbeRequiredUrl()
    {
        if (array_key_exists("probeRequiredUrl", $this->_propDict)) {
            return $this->_propDict["probeRequiredUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the probeRequiredUrl
    * Probe Required Url (Only applicable when Action is evaluate connection and DomainAction is connect if needed).
    *
    * @param string $val The value of the probeRequiredUrl
    *
    * @return VpnOnDemandRule
    */
    public function setProbeRequiredUrl($val)
    {
        $this->_propDict["probeRequiredUrl"] = $val;
        return $this;
    }
    /**
    * Gets the probeUrl
    * A URL to probe. If this URL is successfully fetched (returning a 200 HTTP status code) without redirection, this rule matches.
    *
    * @return string|null The probeUrl
    */
    public function getProbeUrl()
    {
        if (array_key_exists("probeUrl", $this->_propDict)) {
            return $this->_propDict["probeUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the probeUrl
    * A URL to probe. If this URL is successfully fetched (returning a 200 HTTP status code) without redirection, this rule matches.
    *
    * @param string $val The value of the probeUrl
    *
    * @return VpnOnDemandRule
    */
    public function setProbeUrl($val)
    {
        $this->_propDict["probeUrl"] = $val;
        return $this;
    }
    /**
    * Gets the ssids
    * Network Service Set Identifiers (SSIDs).
    *
    * @return string|null The ssids
    */
    public function getSsids()
    {
        if (array_key_exists("ssids", $this->_propDict)) {
            return $this->_propDict["ssids"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ssids
    * Network Service Set Identifiers (SSIDs).
    *
    * @param string $val The value of the ssids
    *
    * @return VpnOnDemandRule
    */
    public function setSsids($val)
    {
        $this->_propDict["ssids"] = $val;
        return $this;
    }
}
