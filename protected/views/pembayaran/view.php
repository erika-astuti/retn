<?php
/* @var $this PembayaranController */
/* @var $model Pembayaran */

$this->breadcrumbs=array(
	'Pembayaran'=>array('index'),
	$model->id_pembayaran,
);

$this->menu=array(
	array('label'=>'Daftar Pembayaran', 'url'=>array('index')),
	array('label'=>'Buat Baru Pembayaran', 'url'=>array('create')),
	array('label'=>'Perbarui Pembayaran', 'url'=>array('update', 'id'=>$model->id_pembayaran)),
	array('label'=>'Hapus Pembayaran', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pembayaran),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Atur Pembayaran', 'url'=>array('admin')),
);
?>

<h1>Lihat Pembayaran #<?php echo $model->id_pembayaran; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_pembayaran',
		'idDetailProyek.keterangan',
		'jumlah_transfer',
		'waktu_transfer',
		'bank.nama_bank',
	),
)); ?>
