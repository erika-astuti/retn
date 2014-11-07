<?php
/* @var $this DetailProyekController */
/* @var $model DetailProyek */

$this->breadcrumbs=array(
	'Detail Proyek'=>array('index'),
	'Buat Baru',
);

//$this->menu=array(
	//array('label'=>'Daftar Detail Proyek', 'url'=>array('index')),
	//array('label'=>'Atur Detail Proyek', 'url'=>array('admin')),
//);
?>

<h1>Buat Detail Proyek Untuk <?php echo $proyek->nama_proyek?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'id_proyek'=>$proyek->id_proyek)); ?>
