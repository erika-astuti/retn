<?php
/* @var $this ProyekController */
/* @var $model Proyek */

$this->breadcrumbs=array(
	'Proyeks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Proyek', 'url'=>array('index')),
	array('label'=>'Manage Proyek', 'url'=>array('admin')),
);
?>

<h1>Create Proyek</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>