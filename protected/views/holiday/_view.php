<?php
/* @var $this HolidayController */
/* @var $model Holiday */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('staff_id')); ?>:</b>
	<?php echo CHtml::encode($data->staff_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hours_requested')); ?>:</b>
	<?php echo CHtml::encode($data->hours_requested); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prebooked')); ?>:</b>
	<?php echo CHtml::encode($data->prebooked); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('request_date_from')); ?>:</b>
	<?php echo CHtml::encode($data->request_date_from); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('request_date_to')); ?>:</b>
	<?php echo CHtml::encode($data->request_date_to); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('approved')); ?>:</b>
	<?php echo CHtml::encode($data->approved); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('requested_on_date')); ?>:</b>
	<?php echo CHtml::encode($data->requested_on_date); ?>
	<br />

	*/ ?>

</div>