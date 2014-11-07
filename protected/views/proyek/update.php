<?php
/* @var $this ProyekController */
/* @var $model Proyek */

$this->breadcrumbs=array(
	'Proyek'=>array('index'),
	$model->id_proyek=>array('view','id'=>$model->id_proyek),
	'Perbarui',
);

$this->menu=array(
	array('label'=>'Daftar Proyek', 'url'=>array('index')),
	array('label'=>'Buat Proyek', 'url'=>array('create')),
	array('label'=>'Lihat Data Proyek', 'url'=>array('view', 'id'=>$model->id_proyek)),
	//array('label'=>'Atur Data Proyek', 'url'=>array('admin')),
);
?>

<h1>Perbarui Data Proyek <?php echo $model->nama_proyek; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
