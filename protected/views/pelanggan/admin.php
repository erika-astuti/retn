<?php
/* @var $this PelangganController */
/* @var $model Pelanggan */

$this->breadcrumbs=array(
	'Pelanggan'=>array('index'),
	'Atur Data Pelanggan',
);

$this->menu=array(
	array('label'=>'Buat Pelanggan', 'url'=>array('index')),
	array('label'=>'Entri Pelanggan Baru', 'url'=>array('create')),
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

<h1>Atur Data Pelanggan</h1>


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
