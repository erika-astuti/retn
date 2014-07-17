<?php
/* @var $this PembayaranController */
/* @var $data Pembayaran */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pembayaran')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pembayaran), array('view', 'id'=>$data->id_pembayaran)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_detail_proyek')); ?>:</b>
	<?php echo CHtml::encode($data->id_detail_proyek); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_transfer')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_transfer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('waktu_transfer')); ?>:</b>
	<?php echo CHtml::encode($data->waktu_transfer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_bank')); ?>:</b>
	<?php echo CHtml::encode($data->id_bank); ?>
	<br />


</div>