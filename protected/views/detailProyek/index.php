<?php
/* @var $this DetailProyekController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detail Proyek',
);

$this->menu=array(
	array('label'=>'Entri Detail Proyek Baru', 'url'=>array('create')),
	//array('label'=>'Atur Detail Proyek', 'url'=>array('admin')),
);
?>

<h1>Daftar Detail Proyek</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
