<?php
/* @var $this DetailProyekController */
/* @var $model DetailProyek */

$this->breadcrumbs=array(
	'Detail Proyek'=>array('index'),
	$model->no_detail_invoice,
);

$this->menu=array(
	//array('label'=>'List DetailProyek', 'url'=>array('index')),
	array('label'=>'Entri Detail Proyek Baru', 'url'=>array('create')),
	array('label'=>'Update', 'url'=>array('update', 'id'=>$model->id_detail_proyek)),
	array('label'=>'Hapus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_detail_proyek),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage DetailProyek', 'url'=>array('admin')),
);
?>

<h1>View Detail Proyek <?php echo $model->keterangan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_detail_proyek',
		'idProyek.nama_proyek',
		'tanggal_jatuh_tempo',
		'no_detail_invoice',
		'waktu_terselesaikan',
		array(
			'header'=>'Status',
			'name'=>'status_pengerjaan',
			'value'=>$model->getDetailStatus()
		),
		'harga_detail',
	),
)); ?>
