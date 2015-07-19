<?php
/* @var $this PembayaranController */
/* @var $model Pembayaran */

$this->breadcrumbs=array(
	'Pembayaran'=>array('index'),
	$model->id_pembayaran=>array('view','id'=>$model->id_pembayaran),
	'Perbarui',
);

$this->menu=array(
	array('label'=>'Daftar Pembayaran', 'url'=>array('index')),
	array('label'=>'Buat Baru Pembayaran', 'url'=>array('create')),
	array('label'=>'Lihat Pembayaran', 'url'=>array('view', 'id'=>$model->id_pembayaran)),
	array('label'=>'Atur Pembayaran', 'url'=>array('admin')),
);
?>

<h1>Perbarui Data Pembayaran <?php echo $model->id_pembayaran; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>