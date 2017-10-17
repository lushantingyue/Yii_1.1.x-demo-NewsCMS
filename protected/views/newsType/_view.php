<?php
/* @var $this NewsTypeController */
/* @var $data NewsType */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('news_type_name')); ?>:</b>
	<?php echo CHtml::encode($data->news_type_name); ?>
	<br />


</div>