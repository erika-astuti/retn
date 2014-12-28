<?php
/* @var $this PembayaranController */
/* @var $model Pembayaran */

$this->breadcrumbs=array(
	'Pembayaran'=>array('index'),
	'Atur',
);

$this->menu=array(
	array('label'=>'Daftar Pembayaran', 'url'=>array('index')),
	array('label'=>'Buat Baru Pembayaran', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pembayaran-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Atur Data Pembayaran</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pembayaran-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_pembayaran',
		'id_detail_proyek',
		'jumlah_transfer',
		'waktu_transfer',
		'id_bank',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
