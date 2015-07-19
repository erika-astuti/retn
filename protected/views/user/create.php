<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'User'=>array('index'),
	'Buat Baru',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Atur Data User', 'url'=>array('admin')),
);
?>

<h1>Buat Baru User</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
