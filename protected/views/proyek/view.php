<?php
/* @var $this ProyekController */
/* @var $model Proyek */

$this->breadcrumbs=array(
	'Proyeks'=>array('index'),
	$model->id_proyek,
);

$this->menu=array(
	array('label'=>'List Proyek', 'url'=>array('index')),
	array('label'=>'Create Proyek', 'url'=>array('create')),
	array('label'=>'Update Proyek', 'url'=>array('update', 'id'=>$model->id_proyek)),
	array('label'=>'Delete Proyek', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_proyek),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Proyek', 'url'=>array('admin')),
);
?>

<h1>View Proyek #<?php echo $model->id_proyek; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_proyek',
		'nama_proyek',
		'tanggal_proyek',
		'no_po',
		'no_piutang',
		'id_pelanggan',
		'biaya_proyek',
	),
)); ?>
