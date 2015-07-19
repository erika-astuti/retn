<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'User'=>array('index'),
	$model->username,
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id_user)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_user),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Atur User', 'url'=>array('admin')),
);
?>

<h1>Lihat Data User <?php echo $model->username; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'username',
		'nama',
		'alamat',
		array(
			'label'=>'Status Pengguna',
			'type'=>'raw',
			'value'=>$model->getStatusPengguna()
		),
		'email',
		'telepon',
		'mobile',
	),
)); ?>
