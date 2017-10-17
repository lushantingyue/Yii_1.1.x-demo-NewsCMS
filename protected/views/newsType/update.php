<?php
/* @var $this NewsTypeController */
/* @var $model NewsType */

$this->breadcrumbs=array(
	'News Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List NewsType', 'url'=>array('index')),
	array('label'=>'Create NewsType', 'url'=>array('create')),
	array('label'=>'View NewsType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage NewsType', 'url'=>array('admin')),
);
?>

<h1>Update NewsType <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>