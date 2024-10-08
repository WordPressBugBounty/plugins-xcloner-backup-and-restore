<?php


namespace As247\CloudStorages\Controllers;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }



use As247\CloudStorages\Support\OneDriveOauth;
use Exception;
use GuzzleHttp\Exception\GuzzleException;

class OneDriveController
{
	protected $oauth;
	public function __construct($clientId,$clientSecret,$tenantId='common')
	{
		$this->oauth=new OneDriveOauth();
		$this->oauth->setClientId($clientId);
		$this->oauth->setClientSecret($clientSecret);
		$this->oauth->setTenantId($tenantId);
	}
	public function dispatch(){
		if($code=$this->getCode()){
			try{
				$result=$this->oauth->fetchAccessTokenWithAuthCode($code);
				$refreshToken=$result['refresh_token'];
			}catch (Exception $e){
				$refreshToken=$e->getMessage();
			} catch (GuzzleException $e) {
				$refreshToken=$e->getMessage();
			}
			$this->showRefreshToken($refreshToken);
		}else{
			$this->redirectTo($this->oauth->createAuthUrl());
		}
	}
	protected function redirectTo($url){
		$redirect='<html lang="en">
					<head>
						<meta http-equiv="refresh" content="1; url=%1$s">
						<title>Redirecting....</title>
					</head>
					<body>Redirecting to %1$s...</body>
					</html>';
		printf($redirect,$url);
	}
	protected function showRefreshToken($refreshToken){
		echo '<textarea cols="100" rows="20">', htmlspecialchars($refreshToken,ENT_QUOTES) . '</textarea>';
	}
	protected function getCode(){
		return $_REQUEST['code']??null;
	}
}
