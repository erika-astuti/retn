<?php
/* @var $this PembayaranController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pembayaran',
);

$this->menu=array(
	array('label'=>'Buat Baru Pembayaran', 'url'=>array('create')),
	array('label'=>'Atur Pembayaran', 'url'=>array('admin')),
    array('label'=>'Laporan Pembayaran', 'url'=>array('laporan')),
);
?>

<h1>Daftar Pembayaran</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
