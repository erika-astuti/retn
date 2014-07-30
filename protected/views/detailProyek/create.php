<?php
/* @var $this DetailProyekController */
/* @var $model DetailProyek */

$this->breadcrumbs=array(
	'Detail Proyek'=>array('index'),
	'Create',
);

//$this->menu=array(
	//array('label'=>'List DetailProyek', 'url'=>array('index')),
	//array('label'=>'Manage DetailProyek', 'url'=>array('admin')),
//);
?>

<h1>Create Detail Proyek Untuk <?php echo $proyek->nama_proyek?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'id_proyek'=>$proyek->id_proyek)); ?>
