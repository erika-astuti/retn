<?php
/* @var $this PelangganController */
/* @var $model Pelanggan */

$this->breadcrumbs=array(
	'Pelanggans'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Pelanggan', 'url'=>array('index')),
	array('label'=>'Create Pelanggan', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pelanggan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Data Pelanggan</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pelanggan-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nama_pelanggan',
		'nama_institusi_pelanggan',
		'alamat_pelanggan',
		array(
			'name'=>'tipe_pelanggan',
			'value'=>array($model, 'getTipePelanggan'),
			'filter'=>$model->getAllTipePelanggan()
		),
		/*
		'nama_bank',
		'no_telp_pelanggan',
		'fax_pelanggan',
		'email_pelanggan',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
