<?php
/* @var $this DetailProyekController */
/* @var $model DetailProyek */

$this->breadcrumbs=array(
	'Detail Proyek'=>array('index'),
	$model->id_detail_proyek=>array('view','id'=>$model->id_detail_proyek),
	'Perbarui',
);

$this->menu=array(
	//array('label'=>'Daftar Detail Proyek', 'url'=>array('index')),
	//array('label'=>'Buat Detail Proyek Baru', 'url'=>array('create')),
	//array('label'=>'Lihat Detail Proyek', 'url'=>array('view', 'id'=>$model->id_detail_proyek)),
	//array('label'=>'Atur Detail Proyek', 'url'=>array('admin')),
);
?>

<h1>Perbarui Detail Proyek <?php echo $model->keterangan; ?></h1>
<h3><?php echo $proyek->nama_proyek; ?></h3>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'id_proyek'=>$proyek->id_proyek)); ?>
