<?php
/* @var $this PelangganController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pelanggan',
);

$this->menu=array(
	array('label'=>'Create Pelanggan', 'url'=>array('create')),
	array('label'=>'Manage Pelanggan', 'url'=>array('admin')),
);
?>

<h1>Daftar Pelanggan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
