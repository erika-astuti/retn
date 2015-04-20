<?php
/* @var $this PelangganController */
/* @var $model Pelanggan */

$this->breadcrumbs=array(
	'Pelanggan'=>array('index'),
	'Laporan',
);

$this->menu=array(
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

<h1>Laporan Pelanggan</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pelanggan-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'name'=>'id_pelanggan',
			'header'=>'No',
			'filter'=>false,
			'value'=> function($data, $rowId) {
				return $rowId + 1;
			}
		),
		'nama_pelanggan',
		'alamat_pelanggan',
		'nama_institusi_pelanggan',
		'no_telp_pelanggan',
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
