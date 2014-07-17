<?php
/* @var $this BankController */
/* @var $data Bank */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_bank')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nama_bank), array('view', 'id'=>$data->id_bank)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cabang')); ?>:</b>
	<?php echo CHtml::encode($data->cabang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_rek')); ?>:</b>
	<?php echo CHtml::encode($data->no_rek); ?>
	<br />


</div>
