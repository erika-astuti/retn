<?php

/**
 * This is the model class for table "tbl_bank".
 *
 * The followings are the available columns in table 'tbl_bank':
 * @property integer $id_bank
 * @property string $nama_bank
 * @property string $cabang
 * @property string $no_rek
 */
class Bank extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Bank the static model class
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
		return 'tbl_bank';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_bank, cabang, no_rek', 'required'),
			array('nama_bank, cabang', 'length', 'max'=>128),
			array('no_rek', 'length', 'max'=>32),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_bank, nama_bank, cabang, no_rek', 'safe', 'on'=>'search'),
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
			'id_bank' => 'Id Bank',
			'nama_bank' => 'Nama Bank',
			'cabang' => 'Cabang',
			'no_rek' => 'No Rek',
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

		$criteria->compare('id_bank',$this->id_bank);
		$criteria->compare('nama_bank',$this->nama_bank,true);
		$criteria->compare('cabang',$this->cabang,true);
		$criteria->compare('no_rek',$this->no_rek,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}