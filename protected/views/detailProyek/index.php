<?php
/* @var $this DetailProyekController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detail Proyeks',
);

$this->menu=array(
	array('label'=>'Create DetailProyek', 'url'=>array('create')),
	array('label'=>'Manage DetailProyek', 'url'=>array('admin')),
);
?>

<h1>Detail Proyeks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
