<?php
/* @var $this DetailProyekController */
/* @var $model DetailProyek */

$this->breadcrumbs=array(
	'Detail Proyeks'=>array('index'),
	$model->id_detail_proyek,
);

$this->menu=array(
	array('label'=>'List DetailProyek', 'url'=>array('index')),
	array('label'=>'Create DetailProyek', 'url'=>array('create')),
	array('label'=>'Update DetailProyek', 'url'=>array('update', 'id'=>$model->id_detail_proyek)),
	array('label'=>'Delete DetailProyek', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_detail_proyek),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DetailProyek', 'url'=>array('admin')),
);
?>

<h1>View DetailProyek #<?php echo $model->id_detail_proyek; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_detail_proyek',
		'tanggal_jatuh_tempo',
		'no_detail_invoice',
		'keterangan',
		'waktu_terselesaikan',
		'status_pengerjaan',
		'harga_detail',
		'id_proyek',
	),
)); ?>
