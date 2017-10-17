<?php
/* @var $this StatusTypeController */
/* @var $model StatusType */

$this->breadcrumbs=array(
	'Status Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StatusType', 'url'=>array('index')),
	array('label'=>'Manage StatusType', 'url'=>array('admin')),
);
?>

<h1>Create StatusType</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>