<?php
/* @var $this BankController */
/* @var $model Bank */

$this->breadcrumbs=array(
	'Bank'=>array('index'),
	'Entri Baru',
);

$this->menu=array(
	array('label'=>'List Data Bank', 'url'=>array('index')),
	array('label'=>'Atur Bank', 'url'=>array('admin')),
);
?>

<h1>Create Bank</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
