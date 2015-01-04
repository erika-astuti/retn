<?php

/**
 * This is the model class for table "tbl_detail_proyek".
 *
 * The followings are the available columns in table 'tbl_detail_proyek':
 * @property integer $id_detail_proyek
 * @property string $tanggal_jatuh_tempo
 * @property string $no_detail_invoice
 * @property string $keterangan
 * @property string $waktu_terselesaikan
 * @property string $status_pengerjaan
 * @property string $harga_detail
 * @property integer $id_proyek
 *
 * The followings are the available model relations:
 * @property Proyek $idProyek
 * @property Pembayaran[] $pembayarans
 */
class DetailProyek extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DetailProyek the static model class
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
		return 'tbl_detail_proyek';
	}

   public $kategoriStatusPengerjaan = array(
      'Pra Produksi',
      'Produksi',
      'Paska Produksi'
   );

   public $detailStatusPengerjaan = array(
      array( //pra produksi
         'naskah',
         'desain karakter dan non karakter',
         'storyboard',
         'modeling karakter dan non karakter',
         'rigging dan texturing',
         'dubbing'
      ),
      array( //produksi
         'animasi',
         'lighting dan rendering'
      ),
      array( //paska produksi
         'audio',
         'editing',
         'mastering',
         'delivery'
      ),
   );

	public function getAllKategoriStatus() {
		return $this->kategoriStatusPengerjaan;
	}

   public function beforeDelete() {
      Pembayaran::model()->deleteAllByAttributes(array(
         'id_detail_proyek'=>$this->id_detail_proyek
      ));

      return true;
   }

	public function getAllDetailStatus() {
      $dtstat = array();

      foreach($this->kategoriStatusPengerjaan as $catKey => $catVal) {
         if(isset($this->detailStatusPengerjaan[$catKey])) {
            foreach($this->detailStatusPengerjaan[$catKey] as $detKey => $detVal) {
               $dtstat[$catVal][$catKey.$detKey] = $detVal;
            }
         }
      }

		return $dtstat;
   }

   public function getDetailStatus() {
   	$dstat = explode(",", $this->status_pengerjaan);
   	$fl = "";

   	if(count($dstat) == 0) {
   		$fl = "-";
   		$buffer = array();
   	} else {
   		foreach ($dstat as $myStatus) {
   			$buffer[] = $this->getFlagStatus($myStatus);
   		}

   		$fl = implode(", ", $buffer);
   	}

   	return $fl;

   }

	public function getFlagStatus($flagCode) {
      if(strlen($flagCode) == 2) {
         $outstr = '';
         if(isset($this->kategoriStatusPengerjaan[$flagCode[0]]) ) {
            $outstr .= $this->kategoriStatusPengerjaan[$flagCode[0]];
            if(isset(
                  $this->detailStatusPengerjaan[$flagCode[0]]
                  [$flagCode[1]]
               )) {
               $outstr .= ' => '.$this->detailStatusPengerjaan[$flagCode[0]]
                  [$flagCode[1]];
            }
         }

         return $outstr;

      } else {
         return '-';
      }
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tanggal_jatuh_tempo, no_detail_invoice, keterangan, 
				waktu_terselesaikan, status_pengerjaan, harga_detail, id_proyek', 'required'),
			array('id_proyek', 'numerical', 'integerOnly'=>true),
			array('no_detail_invoice', 'length', 'max'=>128),
			array('keterangan', 'length', 'max'=>512),
			array('harga_detail', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_detail_proyek, tanggal_jatuh_tempo, no_detail_invoice, 
				keterangan, waktu_terselesaikan, status_pengerjaan, harga_detail, id_proyek', 'safe', 'on'=>'search'),
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
			'idProyek' => array(self::BELONGS_TO, 'Proyek', 'id_proyek'),
			'pembayarans' => array(self::HAS_MANY, 'Pembayaran', 'id_detail_proyek'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_detail_proyek' => 'Id Detail Proyek',
			'tanggal_jatuh_tempo' => 'Jatuh Tempo',
			'no_detail_invoice' => 'Detail Invoice',
			'keterangan' => 'Keterangan',
			'waktu_terselesaikan' => 'Waktu Selesai',
			'status_pengerjaan' => 'Status',
			'harga_detail' => 'Harga Detail',
			'id_proyek' => 'Id Proyek',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can 
	 *	return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_detail_proyek',$this->id_detail_proyek);
		$criteria->compare('tanggal_jatuh_tempo',$this->tanggal_jatuh_tempo,true);
		$criteria->compare('no_detail_invoice',$this->no_detail_invoice,true);
		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->compare('waktu_terselesaikan',$this->waktu_terselesaikan,true);
		$criteria->compare('status_pengerjaan',$this->status_pengerjaan);
		$criteria->compare('harga_detail',$this->harga_detail,true);
		$criteria->compare('id_proyek',$this->id_proyek);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
