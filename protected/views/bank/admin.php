<?php
/* @var $this BankController */
/* @var $model Bank */

$this->breadcrumbs=array(
	'Bank'=>array('index'),
	'Atur',
);

$this->menu=array(
	array('label'=>'List Data Bank', 'url'=>array('index')),
	array('label'=>'Entri Bank', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#bank-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Atur Data Bank</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'bank-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nama_bank',
		'cabang',
		'no_rek',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
