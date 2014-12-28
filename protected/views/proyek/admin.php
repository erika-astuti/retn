<?php
/* @var $this ProyekController */
/* @var $model Proyek */

$this->breadcrumbs=array(
	'Proyek'=>array('index'),
	'Atur',
);

$this->menu=array(
	array('label'=>'Daftar Proyek', 'url'=>array('index')),
	array('label'=>'Buat Proyek', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#proyek-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manajemen Data Proyek</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'proyek-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		// 'id_proyek',
		'nama_proyek',
		'tanggal_proyek',
		'no_po',
		'no_piutang',
		array(
			'name'=>'id_pelanggan',
			'value'=>'$data->pelanggan->nama_pelanggan'
		),
		/*
		'biaya_proyek',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
