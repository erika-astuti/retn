<?php
/* @var $this ProyekController */
/* @var $model Proyek */

$this->breadcrumbs=array(
	'Proyek'=>array('index'),
	'Buat Baru',
);

$this->menu=array(
	array('label'=>'Daftar Proyek', 'url'=>array('index')),
	array('label'=>'Atur Proyek', 'url'=>array('admin')),
);
?>

<h1>Buat Data Proyek</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>