<?php
require 'sdk/facebook.php';

class Helper{

	function __construct() {
		$this->facebook = new Facebook(array( //keyler
			'appId'  => '438883099491250',
			'secret' => 'b9a9e1f68b66425e5ef611a583fdd1fd',
			'cookie'  => true,
		));
		$this->params = array(
      'scope' => 'user_likes, user_about_me',
    );
	}
	public function isLike($userId) {
		$likes = $this->facebook->api('/me/likes?');
		foreach($likes['data'] as $like) //begendikleri icinde bizim uygulamamiz mevcut mu?
		{
			if( $like['name'] == 'Challenge uygulaması')
				return 1;
		}
		return 0;
	}
	public function currentUser(){

		$userId = $this->facebook->getUser(); // user id bilgisi
		return $userId;
	}
	public function login()
	{
		$loginUrl = $this->facebook->getLoginUrl($this->params); //login url bilgisi
		return $loginUrl;
	}
	public function faceInfoSave($userId)
  {
		$model = info::model(); //info tablosunu olustur
    $userProfile = $this->facebook->api('/me'); //profil bilgilerini al
		$model->faceInfo($userProfile,$userId); //modelin bu methodu ile tabloya ekle
		return $userProfile;
  }
};
?>

