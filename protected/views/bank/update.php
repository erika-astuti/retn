<?php
/* @var $this BankController */
/* @var $model Bank */

$this->breadcrumbs=array(
	'Bank'=>array('index'),
	$model->nama_bank=>array('view','id'=>$model->id_bank),
	'Perbarui Data',
);

$this->menu=array(
	array('label'=>'List Bank', 'url'=>array('index')),
);
?>

<h1>Perbarui Data Bank "<?php echo $model->nama_bank; ?>"</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
