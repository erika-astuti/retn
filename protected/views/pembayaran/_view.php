<?php
/* @var $this PembayaranController */
/* @var $data Pembayaran */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_detail_proyek')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idDetailProyek->keterangan), 
		array('view', 'id'=>$data->id_pembayaran)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_transfer')); ?>:</b>
	Rp <?php echo CHtml::encode(number_format($data->jumlah_transfer)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('waktu_transfer')); ?>:</b>
	<?php echo CHtml::encode($data->waktu_transfer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_bank')); ?>:</b>
	<?php echo CHtml::encode($data->bank->nama_bank); ?>
	<br />

</div>
