<?php
/* @var $this PelangganController */
/* @var $model Pelanggan */

$this->breadcrumbs=array(
	'Pelanggan'=>array('index'),
	$model->kode_pelanggan,
);

$this->menu=array(
	array('label'=>'List Pelanggan', 'url'=>array('index')),
	array('label'=>'Create Pelanggan', 'url'=>array('create')),
	array('label'=>'Update Pelanggan', 'url'=>array('update', 'id'=>$model->id_pelanggan)),
	array('label'=>'Delete Pelanggan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pelanggan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pelanggan', 'url'=>array('admin')),
);
?>

<h1>View Pelanggan <?php echo $model->kode_pelanggan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nama_pelanggan',
		'nama_institusi_pelanggan',
		'alamat_pelanggan',
		array(
			'label'=>'Tipe Pelanggan',
			'value'=>$model->getTipePelanggan()
		),
		'no_rekening',
		'nama_bank',
		'no_telp_pelanggan',
		'fax_pelanggan',
		'email_pelanggan'
	),
)); ?>
