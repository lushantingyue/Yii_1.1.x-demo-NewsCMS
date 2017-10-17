<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs = array(
    'News' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List News', 'url' => array('index')),
    array('label' => 'Create News', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#news-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage News</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>,
    <b>&lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php $this->renderPartial('_search', array(
        'model' => $model,
    )); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'news-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
//		'news_title',
        array('name' => 'news_title', 'type' => 'raw', 'value' => 'CHtml::link($data->news_title, array("news/view",\'id\'=>$data->id), array("target"=>"_blank"))'),
        'news_content',
        'author_name',
//        'type_id',
        array('name' => 'type_id', 'htmlOptions' => array('width' => '50px'), 'filter' => NewsType::model()->getNewsTypeList(), 'value' => '$data->typeName->news_type_name'),
//        'status_id',
        array('name' => 'status_id', 'htmlOptions' => array('width' => '50px'), 'filter' => StatusType::model()->getStatusTypeList(), 'value' => '$data->statusName->status_name'),
        /*
        'create_time',
        'update_time',
        'create_user_id',
        'update_user_id',
        */
        array(
            'class' => 'CButtonColumn',
            'template' => '{update}{delete}'
        ),
    ),
)); ?>
