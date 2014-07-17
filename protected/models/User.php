<?php

/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property integer $id_user
 * @property string $username
 * @property string $nama
 * @property string $alamat
 * @property string $status_pengguna
 * @property string $email
 * @property string $telepon
 * @property string $mobile
 *
 * The followings are the available model relations:
 * @property UserRole[] $userRoles
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'tbl_user';
	}

	public function getSandiSalt()
	{
		return '9548398###$%#$%$5**7!@$%';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, nama, alamat, status_pengguna, email, telepon, mobile, sandi', 'required'),
			array('username', 'length', 'max'=>8),
			array('nama', 'length', 'max'=>255),
			array('alamat', 'length', 'max'=>512),
			array('status_pengguna', 'length', 'max'=>5),
			array('email', 'length', 'max'=>64),
			array('sandi', 'length', 'max'=>255),
			array('telepon, mobile', 'length', 'max'=>24),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('username, nama, alamat, status_pengguna, telepon, mobile', 'safe', 'on'=>'search'),
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
			'userRoles' => array(self::HAS_MANY, 'UserRole', 'id_user'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_user' => 'Id User',
			'username' => 'Username',
			'nama' => 'Nama',
			'alamat' => 'Alamat',
			'status_pengguna' => 'Status Pengguna',
			'email' => 'Email',
			'telepon' => 'Telepon',
			'mobile' => 'Mobile',
			'sandi' => 'Sandi',
		);
	}

	public function getAllAktifStatus() 
	{
		return array(
			'NonAktif', 'Aktif' 
		);
	}
	
	public function encrypt($sandi) 
	{
		return md5($this->getSandiSalt().$sandi);
	}

	public function beforeSave() 
	{
		if($this->sandi == '') {
			unset($this['sandi']);
		} else {
			$this->sandi = $this->encrypt($this->sandi);
		}

		return true;
	}

	public function getStatusPengguna($data = false) 
	{
		if($data == false) {
			$fl = $this->status_pengguna;
		} else {
			$fl = $data->status_pengguna;
		}
		
		$status = $this->getAllAktifStatus();

		return isset($status[$fl]) ? $status[$fl] : '-';	
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

		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('status_pengguna',$this->status_pengguna,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('telepon',$this->telepon,true);
		$criteria->compare('mobile',$this->mobile,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
