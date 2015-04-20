<?php
/* @var $this ProyekController */
/* @var $model Proyek */

$this->breadcrumbs=array(
	'Proyek'=>array('index'),
	'Laporan',
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

<h1>Laporan Proyek</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'proyek-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		// 'id_proyek',
		'nama_proyek',
		'no_po',
		array(
			'name'=>'tanggal_proyek',
			'header'=>'Tanggal Terima',
			'filter'=>false,
		),
		array(
			'header'=>'Tanggal Selesai',
			'value'=>function($data) {
				return $data->getTanggalSelesai();
			},
			'footer'=>'Jumlah'
		),
		array(
			'name'=>'biaya_proyek',
			'header'=>'Harga Proyek',
			'filter'=>false,
			'htmlOptions'=>array(
				'style'=>'text-align: right;'
			),
			'value'=>function($data) {
				return 'Rp '.number_format($data->biaya_proyek);
			}	,
			'footer'=>'<div style="text-align: right;">Rp '.number_format(Proyek::model()->getSumBiayaProyek()).'</span>'
		),
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
