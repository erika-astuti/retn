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
		// 'id_pembayaran',
		array(
			'name'=>'id_bank',
			'value'=>'$data->bank->nama_bank',
			'filter'=>CHtml::listData(
				Bank::model()->findAll(),
				'id_bank', 'nama_bank'
			)
		),
		array(
			'name'=>'id_detail_proyek',
			'type'=>'raw',
			'filter'=>CHtml::listData(
				DetailProyek::model()->findAll(),
				'id_detail_proyek', 'no_detail_invoice'
			),
			'value'=>'Pembayaran::model()->getProyekDetail($data);'
		),
		'waktu_transfer',
		array(
			'name'=>'jumlah_transfer',
			'filter'=>false,
			'value'=>'\'Rp \'.number_format($data->jumlah_transfer)',
			'htmlOptions'=>array(
				'style'=>'text-align:right;'
			)
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
