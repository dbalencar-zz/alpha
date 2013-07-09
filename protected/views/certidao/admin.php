<?php
/* @var $this CertidaoController */
/* @var $model Certidao */

$this->breadcrumbs=array(
	'Licitação '.$model->participante->licitacao->nu_ProcessoLicitatorio=>array('/licitacao/view','id'=>$model->participante->licitacao->id),
	'Participante '.$model->participante->cd_CicParticipante=>array('/participanteLicitacao/view','id'=>$model->participante->id),
	'Certidões',
);

$this->menu=array(
	array('label'=>'Adicionar', 'url'=>array('create','participante'=>$model->participante->id)),
	array('label'=>'Gerar REM', 'url'=>'#', 'linkOptions'=>array('onclick'=>'alert($.fn.yiiGridView.getSelection("item-grid"));')),
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
	'id'=>'certidao-grid',
	'dataProvider'=>$model->search($model->participante),
	'filter'=>$model,
	'columns'=>array(
		'nu_Certidao',
		array(
			'name'=>'tp_Certidao',
			'filter'=>TipoCertidao::model()->listAll(),
			'value'=>'$data->tipo->descricao',
		),
		'dt_EmissaoCertidao',
		'dt_ValidadeCertidao',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
