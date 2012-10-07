<?php
require 'sdk/facebook.php';

class Helper{

	function __construct() {
		$this->facebook = new Facebook(array(
			'appId'  => '438883099491250',
			'secret' => 'b9a9e1f68b66425e5ef611a583fdd1fd',
		));
	}
	public function isLike($userId) {
		$likes = $this->facebook->api($userId.'/likes?');
		foreach($likes['data'] as $like)
		{
			if( $like['name'] == 'Challenge uygulaması')
				return 1;
			else
				return 0;
		}
	}
	public function currentUser(){

		$userId = $this->facebook->getUser();
		return $userId;
	}
	public function login()
	{
		$loginUrl = $this->facebook->getLoginUrl();
		return $loginUrl;
	}
	public function faceInfoSave($userId)
  {
		$model = info::model();
    $userProfile = $this->facebook->api($userId);
		$model->faceInfo($userProfile,$userId);
		return $userProfile;
  }
};
?>

