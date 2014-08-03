<?php
/* @var $this PelangganController */
/* @var $model Pelanggan */

$this->breadcrumbs=array(
	'Pelanggan'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pelanggan', 'url'=>array('index')),
	array('label'=>'Manage Pelanggan', 'url'=>array('admin')),
);
?>

<h1>Create Pelanggan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
