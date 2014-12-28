<?php
/* @var $this ProyekController */
/* @var $model Proyek */

$this->breadcrumbs=array(
	'Proyek'=>array('index'),
	'Detail',
);

$this->menu=array(
	array('label'=>'Daftar Proyek', 'url'=>array('index')),
	array('label'=>'Buat Proyek', 'url'=>array('create')),
	array('label'=>'Perbarui Proyek', 'url'=>array('update', 'id'=>$model->id_proyek)),
	array('label'=>'Hapus Data Proyek', 'url'=>'#', 'linkOptions'=>array(
			'submit'=>array('delete','id'=>$model->id_proyek),
			'confirm'=>'Are you sure you want to delete this item?'
		)
	),
	//array('label'=>'Atur Proyek', 'url'=>array('admin')),
);
?>

<h2><i class="fa fa-cube"></i> Proyek <?php echo $model->nama_proyek; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tanggal_proyek',
		'no_po',
		'no_piutang',
		array(
			'name'=>'biaya_proyek',
			'value'=>'Rp '.number_format($model->biaya_proyek)
		),
		array(
			'name'=>'aktif',
			'value'=>$model->getAktifFlag()
		)
	),
)); ?>

<div class="menu-spacer">
	<h3><i class="fa fa-male"></i> Info Pelanggan</h3>
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
	<span style="display: block;float: right;">
	   <button class="button" id="po-print">
	      <i class="fa fa-print"></i> Cetak Purchase Order 
	   </button>
	</span>
</div>
<div class="menu-spacer">&nbsp;</div>

<div class="menu-spacer">
	<h3><i class="fa fa-eye"></i> Detail Proyek</h3>
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
         array(
            'header'=>'Cetak Invoice',
            'type'=>'raw',
            'value'=>function($data) {
               return '<center>'
                  .'<button class="detail-inv-print" data-id="'
                     .$data->id_detail_proyek.'"><i class="fa fa-print"></i></button>'
                  .'</center>';
             }
         ),
			'tanggal_jatuh_tempo', 
			'no_detail_invoice', 
			//'waktu_terselesaikan', 
			//array(
				//'name'=>'status_pengerjaan',
				//'value'=>function($data) {
					//return $data->getDetailStatus();
				//}
			//),
			array(
				'name'=>'harga_detail',
				'value'=>function($data) {
					return 'Rp '.number_format($data->harga_detail);
				},
				'htmlOptions'=>array(
					'style'=>'text-align: right;'
				)
			),
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
      $('#po-print').click(function(ev) {
         ev.preventDefault();
         window.open(
            '<?php echo Yii::app()->baseUrl; ?>/index.php/proyek/cetakpo/<?php 
               echo $model->id_proyek; ?>',
            'Cetak Purchase Order',
            "directories=0,titlebar=0,toolbar=0,location=0,status=0,menubar=0," 
               + "scrollbars=no,resizable=no,width=670px,height=730px"
            ); 
      });

      $('.detail-inv-print').click(function(ev) {
         ev.preventDefault();
         window.open(
            '<?php echo Yii::app()->baseUrl; ?>/index.php/proyek/cetakinvoice/' + $(this).attr('data-id'),
            'Cetak Invoice',
            "directories=0,titlebar=0,toolbar=0,location=0,status=0,menubar=0," 
               + "scrollbars=no,resizable=no,width=670px,height=750px"
            ); 
      });

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
