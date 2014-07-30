<?php
/* @var $this DetailProyekController */
/* @var $model DetailProyek */

$this->breadcrumbs=array(
	'Detail Proyeks'=>array('index'),
	$model->id_detail_proyek=>array('view','id'=>$model->id_detail_proyek),
	'Update',
);

$this->menu=array(
	//array('label'=>'List DetailProyek', 'url'=>array('index')),
	//array('label'=>'Create DetailProyek', 'url'=>array('create')),
	//array('label'=>'View DetailProyek', 'url'=>array('view', 'id'=>$model->id_detail_proyek)),
	//array('label'=>'Manage DetailProyek', 'url'=>array('admin')),
);
?>

<h1>Update DetailProyek <?php echo $model->keterangan; ?></h1>
<h3><?php echo $proyek->nama_proyek; ?></h3>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'id_proyek'=>$proyek->id_proyek)); ?>
