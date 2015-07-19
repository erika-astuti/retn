<?php
/* @var $this DetailProyekController */
/* @var $model DetailProyek */

$this->breadcrumbs=array(
	'Detail Proyek'=>array('index'),
	$model->no_detail_invoice,
);

$this->menu=array(
	//array('label'=>'Daftar Detail Proyek', 'url'=>array('index')),
	array('label'=>'Entri Detail Proyek Baru', 'url'=>array('detailProyek/create/proyekid/'.$model->id_proyek)),
	array('label'=>'Update', 'url'=>array('update', 
		'id'=>$model->id_detail_proyek,
		'proyekid'=>$model->id_proyek
	)),
	array('label'=>'Hapus', 'url'=>'#', 'linkOptions'=>array(
		'submit'=>array('delete',
			'id'=>$model->id_detail_proyek),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Atur Detail Proyek', 'url'=>array('admin')),
);
?>

<h1>Data Detail Proyek <?php echo $model->keterangan; ?></h1>

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
			'type'=>'raw',
			'value'=>$model->getDetailStatus()
		),
		'harga_detail',
	),
)); ?>
