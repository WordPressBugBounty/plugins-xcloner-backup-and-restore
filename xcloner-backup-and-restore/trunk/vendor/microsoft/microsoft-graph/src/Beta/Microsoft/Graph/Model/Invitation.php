<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Invitation File
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
* Invitation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Invitation extends Entity
{
    /**
    * Gets the invitedUserDisplayName
    * The display name of the user being invited.
    *
    * @return string|null The invitedUserDisplayName
    */
    public function getInvitedUserDisplayName()
    {
        if (array_key_exists("invitedUserDisplayName", $this->_propDict)) {
            return $this->_propDict["invitedUserDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the invitedUserDisplayName
    * The display name of the user being invited.
    *
    * @param string $val The invitedUserDisplayName
    *
    * @return Invitation
    */
    public function setInvitedUserDisplayName($val)
    {
        $this->_propDict["invitedUserDisplayName"] = $val;
        return $this;
    }

    /**
    * Gets the invitedUserEmailAddress
    * The email address of the user being invited. Required. The following special characters are not permitted in the email address:Tilde (~)Exclamation point (!)At sign (@)Number sign (#)Dollar sign ($)Percent (%)Circumflex (^)Ampersand (&amp;)Asterisk (*)Parentheses (( ))Hyphen (-)Plus sign (+)Equal sign (=)Brackets ([ ])Braces ({ })Backslash (/)Slash mark (/)Pipe (`
    *
    * @return string|null The invitedUserEmailAddress
    */
    public function getInvitedUserEmailAddress()
    {
        if (array_key_exists("invitedUserEmailAddress", $this->_propDict)) {
            return $this->_propDict["invitedUserEmailAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the invitedUserEmailAddress
    * The email address of the user being invited. Required. The following special characters are not permitted in the email address:Tilde (~)Exclamation point (!)At sign (@)Number sign (#)Dollar sign ($)Percent (%)Circumflex (^)Ampersand (&amp;)Asterisk (*)Parentheses (( ))Hyphen (-)Plus sign (+)Equal sign (=)Brackets ([ ])Braces ({ })Backslash (/)Slash mark (/)Pipe (`
    *
    * @param string $val The invitedUserEmailAddress
    *
    * @return Invitation
    */
    public function setInvitedUserEmailAddress($val)
    {
        $this->_propDict["invitedUserEmailAddress"] = $val;
        return $this;
    }

    /**
    * Gets the invitedUserMessageInfo
    * Additional configuration for the message being sent to the invited user, including customizing message text, language and cc recipient list.
    *
    * @return InvitedUserMessageInfo|null The invitedUserMessageInfo
    */
    public function getInvitedUserMessageInfo()
    {
        if (array_key_exists("invitedUserMessageInfo", $this->_propDict)) {
            if (is_a($this->_propDict["invitedUserMessageInfo"], "\Beta\Microsoft\Graph\Model\InvitedUserMessageInfo") || is_null($this->_propDict["invitedUserMessageInfo"])) {
                return $this->_propDict["invitedUserMessageInfo"];
            } else {
                $this->_propDict["invitedUserMessageInfo"] = new InvitedUserMessageInfo($this->_propDict["invitedUserMessageInfo"]);
                return $this->_propDict["invitedUserMessageInfo"];
            }
        }
        return null;
    }

    /**
    * Sets the invitedUserMessageInfo
    * Additional configuration for the message being sent to the invited user, including customizing message text, language and cc recipient list.
    *
    * @param InvitedUserMessageInfo $val The invitedUserMessageInfo
    *
    * @return Invitation
    */
    public function setInvitedUserMessageInfo($val)
    {
        $this->_propDict["invitedUserMessageInfo"] = $val;
        return $this;
    }

    /**
    * Gets the invitedUserType
    * The userType of the user being invited. By default, this is Guest. You can invite as Member if you're are company administrator. The default is false.
    *
    * @return string|null The invitedUserType
    */
    public function getInvitedUserType()
    {
        if (array_key_exists("invitedUserType", $this->_propDict)) {
            return $this->_propDict["invitedUserType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the invitedUserType
    * The userType of the user being invited. By default, this is Guest. You can invite as Member if you're are company administrator. The default is false.
    *
    * @param string $val The invitedUserType
    *
    * @return Invitation
    */
    public function setInvitedUserType($val)
    {
        $this->_propDict["invitedUserType"] = $val;
        return $this;
    }

    /**
    * Gets the inviteRedeemUrl
    * The URL the user can use to redeem their invitation. Read-only.
    *
    * @return string|null The inviteRedeemUrl
    */
    public function getInviteRedeemUrl()
    {
        if (array_key_exists("inviteRedeemUrl", $this->_propDict)) {
            return $this->_propDict["inviteRedeemUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inviteRedeemUrl
    * The URL the user can use to redeem their invitation. Read-only.
    *
    * @param string $val The inviteRedeemUrl
    *
    * @return Invitation
    */
    public function setInviteRedeemUrl($val)
    {
        $this->_propDict["inviteRedeemUrl"] = $val;
        return $this;
    }

    /**
    * Gets the inviteRedirectUrl
    * The URL user should be redirected to once the invitation is redeemed. Required.
    *
    * @return string|null The inviteRedirectUrl
    */
    public function getInviteRedirectUrl()
    {
        if (array_key_exists("inviteRedirectUrl", $this->_propDict)) {
            return $this->_propDict["inviteRedirectUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inviteRedirectUrl
    * The URL user should be redirected to once the invitation is redeemed. Required.
    *
    * @param string $val The inviteRedirectUrl
    *
    * @return Invitation
    */
    public function setInviteRedirectUrl($val)
    {
        $this->_propDict["inviteRedirectUrl"] = $val;
        return $this;
    }

    /**
    * Gets the resetRedemption
    * Reset the user's redemption status and reinvite a user while retaining their user identifier, group memberships, and app assignments. This property allows you to enable a user to sign-in using a different email address from the one in the previous invitation. For more information about using this property, see Reset redemption status for a guest user (Preview).
    *
    * @return bool|null The resetRedemption
    */
    public function getResetRedemption()
    {
        if (array_key_exists("resetRedemption", $this->_propDict)) {
            return $this->_propDict["resetRedemption"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resetRedemption
    * Reset the user's redemption status and reinvite a user while retaining their user identifier, group memberships, and app assignments. This property allows you to enable a user to sign-in using a different email address from the one in the previous invitation. For more information about using this property, see Reset redemption status for a guest user (Preview).
    *
    * @param bool $val The resetRedemption
    *
    * @return Invitation
    */
    public function setResetRedemption($val)
    {
        $this->_propDict["resetRedemption"] = boolval($val);
        return $this;
    }

    /**
    * Gets the sendInvitationMessage
    * Indicates whether an email should be sent to the user being invited. The default is false.
    *
    * @return bool|null The sendInvitationMessage
    */
    public function getSendInvitationMessage()
    {
        if (array_key_exists("sendInvitationMessage", $this->_propDict)) {
            return $this->_propDict["sendInvitationMessage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sendInvitationMessage
    * Indicates whether an email should be sent to the user being invited. The default is false.
    *
    * @param bool $val The sendInvitationMessage
    *
    * @return Invitation
    */
    public function setSendInvitationMessage($val)
    {
        $this->_propDict["sendInvitationMessage"] = boolval($val);
        return $this;
    }

    /**
    * Gets the status
    * The status of the invitation. Possible values: PendingAcceptance, Completed, InProgress, and Error
    *
    * @return string|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            return $this->_propDict["status"];
        } else {
            return null;
        }
    }

    /**
    * Sets the status
    * The status of the invitation. Possible values: PendingAcceptance, Completed, InProgress, and Error
    *
    * @param string $val The status
    *
    * @return Invitation
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the invitedUser
    * The user created as part of the invitation creation. Read-Only
    *
    * @return User|null The invitedUser
    */
    public function getInvitedUser()
    {
        if (array_key_exists("invitedUser", $this->_propDict)) {
            if (is_a($this->_propDict["invitedUser"], "\Beta\Microsoft\Graph\Model\User") || is_null($this->_propDict["invitedUser"])) {
                return $this->_propDict["invitedUser"];
            } else {
                $this->_propDict["invitedUser"] = new User($this->_propDict["invitedUser"]);
                return $this->_propDict["invitedUser"];
            }
        }
        return null;
    }

    /**
    * Sets the invitedUser
    * The user created as part of the invitation creation. Read-Only
    *
    * @param User $val The invitedUser
    *
    * @return Invitation
    */
    public function setInvitedUser($val)
    {
        $this->_propDict["invitedUser"] = $val;
        return $this;
    }

}
