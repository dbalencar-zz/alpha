<?php
/* @var $this CotacaoController */
/* @var $model Cotacao */

$this->breadcrumbs=array(
	'Licitação '.$model->item->licitacao->nu_ProcessoLicitatorio=>array('/licitacao/view','id'=>$model->item->licitacao->id),
	'Item '.$model->item->nu_SequencialItem=>array('/item/view','id'=>$model->item->id),
	'Cotações',
);

$this->menu=array(
	array('label'=>'Adicionar', 'url'=>array('create','item'=>$model->item->id)),
	array('label'=>'Gerar REM', 'url'=>'#', 'linkOptions'=>array('onclick'=>'alert($.fn.yiiGridView.getSelection("item-grid"));')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cotacao-grid').yiiGridView('update', {
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
	'id'=>'cotacao-grid',
	'dataProvider'=>$model->search($model->item),
	'filter'=>$model,
	'columns'=>array(
		'cd_CicParticipante',
		array(
			'name'=>'tp_Valor',
			'filter'=>Cotacao::model()->tipoValorOptions(),
			'value'=>'$data->tipoValorText',
		),
		'vl_TotalCotadoItem',
		array(
			'name'=>'cd_VencedorPerdedor',
			'filter'=>Cotacao::model()->vencedorPerdedorOptions(),
			'value'=>'$data->vencedorPerdedorText',
		),
		'qt_ItemCotado',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
