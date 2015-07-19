<?php
/* @var $this PelangganController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pelanggan',
);

$this->menu=array(
	array('label'=>'Buat Pelanggan', 'url'=>array('create')),
	array('label'=>'Atur Data Pelanggan', 'url'=>array('admin')),
);
?>

<h1>Daftar Pelanggan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
