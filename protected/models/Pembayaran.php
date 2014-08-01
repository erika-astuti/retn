<?php

/**
 * This is the model class for table "tbl_pembayaran".
 *
 * The followings are the available columns in table 'tbl_pembayaran':
 * @property integer $id_pembayaran
 * @property integer $id_detail_proyek
 * @property string $jumlah_transfer
 * @property string $waktu_transfer
 * @property integer $id_bank
 *
 * The followings are the available model relations:
 * @property DetailProyek $idDetailProyek
 */
class Pembayaran extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pembayaran the static model class
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
		return 'tbl_pembayaran';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_detail_proyek, jumlah_transfer, waktu_transfer, id_bank', 'required'),
			array('id_detail_proyek, id_bank', 'numerical', 'integerOnly'=>true),
			array('jumlah_transfer', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_pembayaran, id_detail_proyek, jumlah_transfer, waktu_transfer, id_bank', 'safe', 'on'=>'search'),
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
			'idDetailProyek' => array(self::BELONGS_TO, 'DetailProyek', 'id_detail_proyek'),
			'bank' => array(self::BELONGS_TO, 'Bank', 'id_bank'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pembayaran' => 'Id Pembayaran',
			'id_detail_proyek' => 'Detail Proyek',
			'jumlah_transfer' => 'Jumlah Transfer',
			'waktu_transfer' => 'Waktu Transfer',
			'id_bank' => 'Bank',
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

		$criteria->compare('id_pembayaran',$this->id_pembayaran);
		$criteria->compare('id_detail_proyek',$this->id_detail_proyek);
		$criteria->compare('jumlah_transfer',$this->jumlah_transfer,true);
		$criteria->compare('waktu_transfer',$this->waktu_transfer,true);
		$criteria->compare('id_bank',$this->id_bank);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
