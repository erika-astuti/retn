<?php

/**
 * This is the model class for table "tbl_proyek".
 *
 * The followings are the available columns in table 'tbl_proyek':
 * @property integer $id_proyek
 * @property string $nama_proyek
 * @property string $tanggal_proyek
 * @property string $no_po
 * @property string $no_piutang
 * @property integer $id_pelanggan
 * @property string $biaya_proyek
 *
 * The followings are the available model relations:
 * @property DetailProyek[] $detailProyeks
 * @property Pelanggan $idPelanggan
 */
class Proyek extends CActiveRecord
{

	public $deliveryCode = '23';

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Proyek the static model class
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
		return 'tbl_proyek';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_proyek, tanggal_proyek, no_po, no_piutang, id_pelanggan, biaya_proyek, aktif', 'required'),
			array('id_pelanggan, aktif', 'numerical', 'integerOnly'=>true),
			array('nama_proyek', 'length', 'max'=>255),
			array('no_po, no_piutang', 'length', 'max'=>128),
			array('biaya_proyek', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_proyek, nama_proyek, tanggal_proyek, no_po, no_piutang, id_pelanggan, biaya_proyek, aktif', 
				'safe', 'on'=>'search'),
		);
	}

	public function getAllAktif()
	{
		return array(
			'Non aktif',
			'Aktif'
		);
	}

	public function getAktifFlag()
	{
		$fl = $this->getAllAktif();

		return isset($fl[$this->aktif]) ?
			$fl[$this->aktif] : '-';
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'detailProyeks' => array(self::HAS_MANY, 'DetailProyek', 'id_proyek'),
			'pelanggan' => array(self::BELONGS_TO, 'Pelanggan', 'id_pelanggan'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_proyek' => 'Id Proyek',
			'nama_proyek' => 'Nama Proyek',
			'tanggal_proyek' => 'Tanggal Proyek',
			'no_po' => 'No PO',
			'no_piutang' => 'No Piutang',
			'id_pelanggan' => 'Pelanggan',
			'biaya_proyek' => 'Biaya Proyek',
			'aktif' => 'Status Aktif',
		);
	}

   public function beforeDelete() {
      DetailProyek::model()->deleteAllByAttributes(array(
         'id_proyek'=>$this->id_proyek
      ));

      return true;
   }

   public function getJumlahTerbayar() 
   {
		$connection = Yii::app()->db;
		$sql = "select sum(jumlah_transfer) as mysum from tbl_pembayaran 
		where id_detail_proyek in (
		select id_detail_proyek from 
		    tbl_detail_proyek where 
		    id_proyek='{$this->id_proyek}'
		)";

		$command = $connection->createCommand($sql);
		$jumlah = $command->queryAll();

		if($jumlah[0]['mysum'] == NULL) {
			return 0;
		} else {
			return $jumlah[0]['mysum'];
		}
   }

   public function getTanggalSelesai()
   {
   		$cn =Yii::app()->db;
   		$sql = "select waktu_terselesaikan from tbl_detail_proyek where 
   			id_proyek='{$this->id_proyek}' and 
   			status_pengerjaan like '%{$this->deliveryCode}%' 
   			order by id_detail_proyek asc limit 1";

		$command = $cn->createCommand($sql);
		$tanggal = $command->queryAll();

		if (count($tanggal) == 0) {
			return '-';
		} else {
			return date('Y-m-d', strtotime($tanggal[0]['waktu_terselesaikan']));
		}
   }

   public function getTotalKas() 
   {
   		$cn =Yii::app()->db;
   		$sql = "select sum(jumlah_transfer) as transfer from tbl_pembayaran";

		$command = $cn->createCommand($sql);
		$pembayaran = $command->queryRow();

		if ($pembayaran['transfer'] == null) {
			$pembayaran['transfer'] = 0;
		}

   		return $pembayaran['transfer'];
   }

   public function getSumBiayaProyek()
   {
   		$cn =Yii::app()->db;
   		$sql = "select sum(biaya_proyek) as piutang from tbl_proyek";

		$command = $cn->createCommand($sql);
		$proyek = $command->queryRow();

		if ($proyek['piutang'] == null) {
			$proyek['piutang'] = 0;
		}

		return $proyek['piutang'];
   }

   public function getTotalPiutang()
   {
   		return $this->getSumBiayaProyek() - $this->getTotalKas(); 
   }

   public function getKas() 
   {
   		$cn =Yii::app()->db;
   		$sql = "select sum(jumlah_transfer) as kas from tbl_pembayaran 
			where id_detail_proyek in 
			(select id_detail_proyek from tbl_detail_proyek where id_proyek='{$this->id_proyek}')";

		$command = $cn->createCommand($sql);
		$pembayaran = $command->queryRow();
	
		if ($pembayaran['kas'] == null) {
			return 0;
		} else {
			return $pembayaran['kas'];
		}
   }

   public function getPiutang()
   {
   		return $this->biaya_proyek - $this->getKas();
   }

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return 
	 *		the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_proyek',$this->id_proyek);
		$criteria->compare('nama_proyek',$this->nama_proyek,true);
		$criteria->compare('tanggal_proyek',$this->tanggal_proyek,true);
		$criteria->compare('no_po',$this->no_po,true);
		$criteria->compare('no_piutang',$this->no_piutang,true);
		$criteria->compare('id_pelanggan',$this->id_pelanggan);
		$criteria->compare('biaya_proyek',$this->biaya_proyek,true);
		$criteria->compare('aktif',$this->aktif,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
