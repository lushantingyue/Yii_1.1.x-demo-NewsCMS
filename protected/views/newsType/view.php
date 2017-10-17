<?php
/* @var $this NewsTypeController */
/* @var $model NewsType */

$this->breadcrumbs=array(
	'News Types'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List NewsType', 'url'=>array('index')),
	array('label'=>'Create NewsType', 'url'=>array('create')),
	array('label'=>'Update NewsType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete NewsType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NewsType', 'url'=>array('admin')),
);
?>

<h1>View NewsType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'news_type_name',
	),
)); ?>
