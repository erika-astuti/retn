<?php
/* @var $this PembayaranController */
/* @var $model Pembayaran */

$this->breadcrumbs=array(
	'Pembayaran'=>array('index'),
	'Buat Baru',
);

$this->menu=array(
	array('label'=>'Daftar Pembayaran', 'url'=>array('index')),
	array('label'=>'Atur Pembayaran', 'url'=>array('admin')),
    array('label'=>'Laporan Pembayaran', 'url'=>array('laporan')),
);
?>

<h1>Buat Pembayaran</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>