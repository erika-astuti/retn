<?php
/* @var $this PelangganController */
/* @var $model Pelanggan */

$this->breadcrumbs=array(
	'Pelanggan'=>array('index'),
	'Buat Baru',
);

$this->menu=array(
	array('label'=>'Daftar Pelanggan', 'url'=>array('index')),
	array('label'=>'Atur Data Pelanggan', 'url'=>array('admin')),
);
?>

<h1>Buat Pelanggan Baru</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
