<?php
/* @var $this PelangganController */
/* @var $model Pelanggan */

$this->breadcrumbs=array(
	'Pelanggan'=>array('index'),
	$model->kode_pelanggan=>array('view','id'=>$model->id_pelanggan),
	'Perbarui Data',
);

$this->menu=array(
	array('label'=>'Daftar Data Pelanggan', 'url'=>array('index')),
	array('label'=>'Buat Data Pelanggan', 'url'=>array('create')),
	array('label'=>'Lihat Pelanggan', 'url'=>array('view', 'id'=>$model->id_pelanggan)),
	array('label'=>'Atur Pelanggan', 'url'=>array('admin')),
);
?>

<h1>Perbarui Data Pelanggan <?php echo $model->id_pelanggan; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
