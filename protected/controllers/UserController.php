<?php

class UserController extends Controller
{
	public function actionIndex()
	{
		$f = new Helper();	
		$model = info::model();
	
		$userId = $f->currentUser();

		$info = $model->isThere($userId);

		if ($userId)
		{
			if ($f->isLike($userId))
				if($info)
				{	
					$this->render('kayitli',array('user'=>$info));
				}
				else
				{
					$userProfile = $f->faceInfoSave($userId);
					$this->actionSave($userId);
				}
			else
				$this->render('index',array('loginUrl' => $f->login()));
		}
		else
		{
			$this->render('index',array('loginUrl' => $f->login()));
		}
	}
	public function actionSave($userId)
	{
		if ( isset($_GET['name']) )	
		{
			$name = $_GET['name'];
			$email = $_GET['email'];
			$number = $_GET['number'];
			$userId = $_GET['id'];

			$model = user::model();
			$model->userSave($name,$email,$number,$userId);
			$this->actionIndex();
		}
		else
			$this->render('kayitsiz',array('id' => $userId));
	}
}
