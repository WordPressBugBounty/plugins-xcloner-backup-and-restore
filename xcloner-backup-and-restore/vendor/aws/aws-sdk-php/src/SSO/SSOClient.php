<?php
namespace Aws\SSO;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }


use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Single Sign-On** service.
 * @method \Aws\Result getRoleCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRoleCredentialsAsync(array $args = [])
 * @method \Aws\Result listAccountRoles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAccountRolesAsync(array $args = [])
 * @method \Aws\Result listAccounts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAccountsAsync(array $args = [])
 * @method \Aws\Result logout(array $args = [])
 * @method \GuzzleHttp\Promise\Promise logoutAsync(array $args = [])
 */
class SSOClient extends AwsClient {}
