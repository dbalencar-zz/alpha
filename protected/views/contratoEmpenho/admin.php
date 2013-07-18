<?php
/* @var $this ContratoEmpenhoController */
/* @var $model ContratoEmpenho */

$this->breadcrumbs=array(
	'Contrato '.$model->contrato->nu_Contrato=>array('/contrato/view','id'=>$model->contrato->id),
	'Empenhos',
);

$this->menu=array(
	array('label'=>'Adicionar', 'url'=>array('create','contrato'=>$model->contrato->id)),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#contrato-empenho-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerenciar</h1>

<p>
Você pode opcionalmente usar um operador de comparação (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
ou <b>=</b>) no início de cada um de seus valores para especificar como a comparação deve ser feita.
</p>

<?php echo CHtml::link('Pesquisa Avançada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'contrato-empenho-grid',
	'dataProvider'=>$model->search($model->contrato),
	'filter'=>$model,
	'columns'=>array(
		'nu_NotaEmpenho',
		'ano_Empenho',
		'cd_UnidadeOrcamentaria',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
