<?php
/* @var $this ProyekController */
/* @var $model Proyek */

$this->breadcrumbs=array(
	'Proyek'=>array('index'),
	'Detail',
);

$this->menu=array(
	array('label'=>'List Proyek', 'url'=>array('index')),
	array('label'=>'Create Proyek', 'url'=>array('create')),
	array('label'=>'Update Proyek', 'url'=>array('update', 'id'=>$model->id_proyek)),
	array('label'=>'Delete Proyek', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_proyek),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Proyek', 'url'=>array('admin')),
);
?>

<h2>Proyek <?php echo $model->nama_proyek; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tanggal_proyek',
		'no_po',
		'no_piutang',
		'biaya_proyek',
	),
)); ?>

<div class="menu-spacer">
	<h3>Info Pelanggan</h3>
	<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model->pelanggan,
		'attributes'=>array(
			'nama_pelanggan',
			'nama_institusi_pelanggan',
			'tipe_pelanggan',
		),
	)); ?>
</div>

<div class="menu-spacer">
	<h3>Detail Proyek</h3>
	<?php 
	$dProProvider = new CActiveDataProvider('DetailProyek', array(
		'criteria'=>array(
			'condition'=>'id_proyek=:id',
			'params'=>array(':id'=>$model->id_proyek)
		),
		'pagination' => array(
			 'pageSize' => 10,
		),
	));

	$this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'detail-proyek-grid',
		'dataProvider'=>$dProProvider,
		'columns'=>array(
			'tanggal_jatuh_tempo', 
			'no_detail_invoice', 
			'waktu_terselesaikan', 
			array(
				'name'=>'status_pengerjaan',
				'value'=>function($data) {
					return $data->getDetailStatus();
				}
			),
			'harga_detail', 
			'keterangan', 
			array(
				'header'=>'Opsi',
				'name'=>'id_detail_proyek',
				'type'=>'raw',
				'value'=>function($data) {
					return '<a href="'.Yii::app()->baseUrl.'/index.php/detailProyek/update/id/'
						.$data->id_detail_proyek.'/proyekid/'.$data->id_proyek
						.'"><i class="fa fa-edit"></i> edit</a> <br />'
						.'<a class="grid-del" href="#" data-id="'
						.$data->id_detail_proyek.'"><i class="fa fa-times"></i> hapus</a>';
				},
			)
		),
	)); ?>

	<div class="push-14">
		<a href="<?php 
			echo Yii::app()->baseUrl.'/index.php/detailProyek/create/proyekid/'.$model->id_proyek;
		?>"><i class="fa fa-plus"></i>&nbsp;Tambah Detail Proyek</a>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('.grid-del').click(function(ev) {
			ev.preventDefault();
			var url = '<?php echo Yii::app()->baseUrl ?>/index.php';
			if(confirm('Apakah yakin akan menghapus detail proyek ini?')
						=== true) {
				$.post(url + '/detailProyek/delete/id/' + $(this).attr('data-id'), {},
				function(data) {
					document.location = url + '/proyek/<?php echo $model->id_proyek ?>';
				});
			}
		});
	});
</script>
