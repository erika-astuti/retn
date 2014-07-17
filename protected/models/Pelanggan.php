<?php

/**
 * This is the model class for table "tbl_pelanggan".
 *
 * The followings are the available columns in table 'tbl_pelanggan':
 * @property integer $id_pelanggan
 * @property string $nama_pelanggan
 * @property string $nama_institusi_pelanggan
 * @property string $alamat_pelanggan
 * @property integer $tipe_pelanggan
 * @property string $no_rekening
 * @property string $nama_bank
 * @property string $no_telp_pelanggan
 * @property string $fax_pelanggan
 * @property string $email_pelanggan
 *
 * The followings are the available model relations:
 * @property Proyek[] $proyeks
 */
class Pelanggan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pelanggan the static model class
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
		return 'tbl_pelanggan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_pelanggan, nama_institusi_pelanggan, alamat_pelanggan, no_rekening, tipe_pelanggan, nama_bank, no_telp_pelanggan, fax_pelanggan, email_pelanggan', 'required'),
			array('nama_pelanggan', 'length', 'max'=>255),
			array('nama_institusi_pelanggan, nama_bank, email_pelanggan', 'length', 'max'=>128),
			array('alamat_pelanggan', 'length', 'max'=>512),
			array('no_rekening, no_telp_pelanggan, fax_pelanggan', 'length', 'max'=>32),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_pelanggan, nama_pelanggan, nama_institusi_pelanggan, alamat_pelanggan, tipe_pelanggan, no_rekening, nama_bank, no_telp_pelanggan, fax_pelanggan, email_pelanggan', 'safe', 'on'=>'search'),
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
			'proyeks' => array(self::HAS_MANY, 'Proyek', 'id_pelanggan'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pelanggan' => 'Id Pelanggan',
			'nama_pelanggan' => 'Nama Pelanggan',
			'nama_institusi_pelanggan' => 'Nama Institusi Pelanggan',
			'alamat_pelanggan' => 'Alamat Pelanggan',
			'tipe_pelanggan' => 'Tipe Pelanggan',
			'no_rekening' => 'No Rekening',
			'nama_bank' => 'Nama Bank',
			'no_telp_pelanggan' => 'No Telp Pelanggan',
			'fax_pelanggan' => 'Fax Pelanggan',
			'email_pelanggan' => 'Email Pelanggan',
		);
	}


	public function getAllPelanggan() 
	{
		$res = $this->findAll(array(
			'order'=>'nama_pelanggan asc'
		));

		$list = array();

		foreach($res as $r) {
			$list[$r->id_pelanggan] = $r->nama_pelanggan
				.' ~ '.$r->nama_institusi_pelanggan;
		}

		return $list;
	}

	public function getAllTipePelanggan() 
	{
		return array(
			'institusi'=>'Institusi', 
			'individu'=>'Individu'
		);
	}

	public function getTipePelanggan($data = false) 
	{
		$tipe = $this->getAllTipePelanggan();
		
		if($data == false) {
			$fl = $this->tipe_pelanggan;
		} else {
			$fl = $data->tipe_pelanggan;
		}

		return isset($tipe[$fl]) ? $tipe[$fl] : '-';	
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

		$criteria->compare('id_pelanggan',$this->id_pelanggan);
		$criteria->compare('nama_pelanggan',$this->nama_pelanggan,true);
		$criteria->compare('nama_institusi_pelanggan',$this->nama_institusi_pelanggan,true);
		$criteria->compare('alamat_pelanggan',$this->alamat_pelanggan,true);
		$criteria->compare('tipe_pelanggan',$this->tipe_pelanggan);
		$criteria->compare('no_rekening',$this->no_rekening,true);
		$criteria->compare('nama_bank',$this->nama_bank,true);
		$criteria->compare('no_telp_pelanggan',$this->no_telp_pelanggan,true);
		$criteria->compare('fax_pelanggan',$this->fax_pelanggan,true);
		$criteria->compare('email_pelanggan',$this->email_pelanggan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
