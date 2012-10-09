<?php
/**
 * This is the model class for table "tbl_info".
 *
 * The followings are the available columns in table 'tbl_info':
 * @property integer $id
 * @property string $username
 * @property string $about
 * @property string $locate
 * @property string $gender
 */
class info extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return info the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_info';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'numerical', 'integerOnly'=>true),
			array('username, about, locale, gender', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, about, locale, gender', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'username' => 'Username',
			'about' => 'About',
			'locale' => 'Locale',
			'gender' => 'Gender',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);

		$criteria->compare('username',$this->username,true);

		$criteria->compare('about',$this->about,true);

		$criteria->compare('locale',$this->locale,true);

		$criteria->compare('gender',$this->gender,true);

		return new CActiveDataProvider('info', array(
			'criteria'=>$criteria,
		));
	}
	public static function isThere($userId,$tableName)
	{
		$info = Yii::app()->db->createCommand(array(
            'select' => array('*'),
            'from' => $tableName, // tabloda bu id'ye sahip olanin tum bilgilerini al
            'where' => 'id=:id',
            'params' => array(':id'=>$userId),
          ))->queryRow();
		return $info;
	}
	public static function faceInfo($userProfile,$userId)
	{
			$u = new info; // yeni bir tablo ac ve bilgileri doldur
      $u->id = $userId;
      $u->username = $userProfile['username'];
			if ( $userProfile['bio'] )
	      $u->about = $userProfile['bio'];
			else
				$u->about = "";
      $u->locale = $userProfile['locale'];
      $u->gender = $userProfile['gender'];
      $u->save(); //kaydet
	}

}
