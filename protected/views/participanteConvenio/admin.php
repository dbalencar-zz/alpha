<?php
/* @var $this ParticipanteConvenioController */
/* @var $model ParticipanteConvenio */

$this->breadcrumbs=array(
	'Convênios'=>array('/convenio'),
	$model->convenio->nu_Convenio=>array('/convenio/view','id'=>$model->convenio->id),
	'Participantes',
);

$this->menu=array(
	array('label'=>'Adicionar', 'url'=>array('create','convenio'=>$model->convenio->id)),
	array('label'=>'Gerar REM', 'url'=>'#', 'linkOptions'=>array('onclick'=>'alert($.fn.yiiGridView.getSelection("participante-convenio-grid"));')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#participante-convenio-grid').yiiGridView('update', {
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
	'id'=>'participante-convenio-grid',
	'dataProvider'=>$model->search($model->convenio),
	'filter'=>$model,
	'selectableRows'=>'2',
	'columns'=>array(
		array(
			'name'=>'tp_PessoaParticipante',
			'filter'=>TipoPessoa::model()->listAll(),
			'value'=>'$data->pessoa->descricao',
		),
		'nm_Participante',
		'cd_CicParticipante',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
