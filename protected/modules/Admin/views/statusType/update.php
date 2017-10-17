<?php
/* @var $this StatusTypeController */
/* @var $model StatusType */

$this->breadcrumbs=array(
	'Status Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StatusType', 'url'=>array('index')),
	array('label'=>'Create StatusType', 'url'=>array('create')),
	array('label'=>'View StatusType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage StatusType', 'url'=>array('admin')),
);
?>

<h1>Update StatusType <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>