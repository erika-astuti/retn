<?php
/* @var $this ProyekController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Proyek',
);

$this->menu=array(
	array('label'=>'Entri Data Proyek', 'url'=>array('create')),
	array('label'=>'Atur Data Proyek', 'url'=>array('admin')),
);
?>

<h1>Data Proyek</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
