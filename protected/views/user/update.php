<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'User'=>array('index'),
	$model->id_user=>array('view','id'=>$model->id_user),
	'Perbarui Data',
);

$this->menu=array(
	array('label'=>'Daftar User', 'url'=>array('index')),
	array('label'=>'Buat Baru User', 'url'=>array('create')),
	array('label'=>'Lihat Data User', 'url'=>array('view', 'id'=>$model->id_user)),
	array('label'=>'Atur User', 'url'=>array('admin')),
);
?>

<h1>Perbarui Data User <?php echo $model->id_user; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>