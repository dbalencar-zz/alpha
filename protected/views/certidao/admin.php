<?php
/* @var $this CertidaoController */
/* @var $model Certidao */

$this->breadcrumbs=array(
	'Certidaos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Certidao', 'url'=>array('index')),
	array('label'=>'Create Certidao', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#certidao-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Certidaos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'certidao-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nu_ProcessoLicitatorio',
		'cd_CicParticipante',
		'tp_Certidao',
		'tp_Pessoa',
		'nu_Certidao',
		/*
		'dt_EmissaoCertidao',
		'dt_ValidadeCertidao',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
