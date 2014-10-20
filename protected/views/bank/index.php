<?php
/* @var $this BankController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bank',
);

$this->menu=array(
	array('label'=>'Entri Baru', 'url'=>array('create')),
	array('label'=>'Atur Data Bank', 'url'=>array('admin')),
);
?>

<h1>List Data Bank</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
