<?php
/* @var $this PelangganController */
/* @var $data Pelanggan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_pelanggan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nama_pelanggan), array('view', 'id'=>$data->id_pelanggan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_pelanggan')); ?>:</b>
	<?php echo CHtml::encode($data->kode_pelanggan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_institusi_pelanggan')); ?>:</b>
	<?php echo CHtml::encode($data->nama_institusi_pelanggan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat_pelanggan')); ?>:</b>
	<?php echo CHtml::encode($data->alamat_pelanggan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipe_pelanggan')); ?>:</b>
	<?php echo CHtml::encode($data->getTipePelanggan()); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_rekening')); ?>:</b>
	<?php echo CHtml::encode($data->no_rekening); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_bank')); ?>:</b>
	<?php echo CHtml::encode($data->nama_bank); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('no_telp_pelanggan')); ?>:</b>
	<?php echo CHtml::encode($data->no_telp_pelanggan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fax_pelanggan')); ?>:</b>
	<?php echo CHtml::encode($data->fax_pelanggan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_pelanggan')); ?>:</b>
	<?php echo CHtml::encode($data->email_pelanggan); ?>
	<br />

	*/ ?>

</div>
