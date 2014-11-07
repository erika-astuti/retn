<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User',
);

$this->menu=array(
	array('label'=>'Buat Baru User', 'url'=>array('create')),
	array('label'=>'Atur User', 'url'=>array('admin')),
);
?>

<h1>User</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
