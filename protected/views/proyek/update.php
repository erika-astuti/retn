<?php
/* @var $this ProyekController */
/* @var $model Proyek */

$this->breadcrumbs=array(
	'Proyeks'=>array('index'),
	$model->id_proyek=>array('view','id'=>$model->id_proyek),
	'Update',
);

$this->menu=array(
	array('label'=>'List Proyek', 'url'=>array('index')),
	array('label'=>'Create Proyek', 'url'=>array('create')),
	array('label'=>'View Proyek', 'url'=>array('view', 'id'=>$model->id_proyek)),
	array('label'=>'Manage Proyek', 'url'=>array('admin')),
);
?>

<h1>Update Proyek <?php echo $model->id_proyek; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>