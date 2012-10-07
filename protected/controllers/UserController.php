<?php
/* database üzerinde 2 tablo mevcut , info tablosu facebook uzerindeki bilgileri, user tablosu son ekrana gelemeden once kullanici
tarafindan doldurulan tablo
 */
class UserController extends Controller
{
	public function actionIndex()
	{
		$f = new Helper();	// facebook api'lerini kullanmak icin olusturulan sinif
		$model = info::model(); // info tablosu icin olusturulan model
	
		$userId = $f->currentUser(); // Helperda tanimlanan face apileri ile mevcut kisinin userid'si

		$info = $model->isThere($userId); // bu userid bilgisi `user` tablosunda mevcut ise bilgilerini al

		if ($userId)
		{
			if ($f->isLike($userId)) // begenildimi ?
				if($info) // user tablosuna kayitli mi
				{	
					$this->render('kayitli',array('user'=>$info)); //son ekrane gonder
				}
				else
				{
					$userProfile = $f->faceInfoSave($userId); // kullanicinin facebook bilgilerini kaydet
					$this->actionSave($userId); // kullanicidan bilgi al
				}
			else
				$this->render('index',array('loginUrl' => $f->login())); //begenilmesi gerekir.
		}
		else
		{
			$this->render('index',array('loginUrl' => $f->login())); //katilmasi gerekir
		}
	}
	public function actionSave($userId)
	{
		if ( isset($_GET['name'])) // veri formdan mi geliyor ?	
		{
			$name = $_GET['name'];
			$email = $_GET['email'];
			$number = $_GET['number'];
			$userId = $_GET['id'];

			$model = user::model();
			$model->userSave($name,$email,$number,$userId);
			$this->actionIndex();
		}
		else // action indexden geliyorsan
			$this->render('kayitsiz',array('id' => $userId));
	}
}
