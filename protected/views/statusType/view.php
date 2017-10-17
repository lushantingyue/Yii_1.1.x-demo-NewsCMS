<?php
/* @var $this StatusTypeController */
/* @var $model StatusType */

$this->breadcrumbs=array(
	'Status Types'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List StatusType', 'url'=>array('index')),
	array('label'=>'Create StatusType', 'url'=>array('create')),
	array('label'=>'Update StatusType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete StatusType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StatusType', 'url'=>array('admin')),
);
?>

<h1>View StatusType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'status_name',
	),
)); ?>
