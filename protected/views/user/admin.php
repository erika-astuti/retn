<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Atur',
);

$this->menu=array(
	array('label'=>'Daftar User', 'url'=>array('index')),
	array('label'=>'Buat User', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Atur Data User</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'username',
		'nama',
		array(
			'name'=>'email',
			'filter'=>false
		),
		array(
			'name'=>'status_pengguna',
			'value'=>array($model, 'getStatusPengguna'),
			'filter'=>$model->getAllAktifStatus()
		),
		/*
		'telepon',
		'mobile',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
