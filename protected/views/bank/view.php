<?php
/* @var $this BankController */
/* @var $model Bank */

$this->breadcrumbs=array(
	'Bank'=>array('index'),
	$model->nama_bank,
);

$this->menu=array(
	array('label'=>'Daftar Bank', 'url'=>array('index')),
	array('label'=>'Entri Bank', 'url'=>array('Create')),
	array('label'=>'Perbarui Data', 'url'=>array('update', 'id'=>$model->id_bank)),
	array('label'=>'Hapus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_bank),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data Bank', 'url'=>array('admin')),
);
?>

<h1>View Bank #<?php echo $model->id_bank; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nama_bank',
		'cabang',
		'no_rek',
	),
)); ?>
