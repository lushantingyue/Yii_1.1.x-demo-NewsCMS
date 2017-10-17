<?php
/* @var $this StatusTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Status Types',
);

$this->menu=array(
	array('label'=>'Create StatusType', 'url'=>array('create')),
	array('label'=>'Manage StatusType', 'url'=>array('admin')),
);
?>

<h1>Status Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
