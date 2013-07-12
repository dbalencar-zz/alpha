<?php
/* @var $this ConvenioController */
/* @var $model Convenio */

$this->breadcrumbs=array(
	'Convênios',
);

$this->menu=array(
	array('label'=>'Adicionar', 'url'=>array('create')),
	array('label'=>'Arquivos', 'url'=>'#', 'linkOptions'=>array(
		'onclick'=>CHtml::ajax(array(
			'type'=>'POST',
			'url'=>array('geraREM'),
			'data'=>array('convenios'=>'js:$.fn.yiiGridView.getSelection("convenio-grid")'),
			'success'=>'js:downloadrem',
		))
	)),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#convenio-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<script>
<!--
function downloadrem(data)
{
	if(data==='fail')
	{
		alert("Nenhum item selecionado!");
	}
	else
	{
		window.location='index.php?r=convenio/arquivo';	
	}
}
//-->
</script>

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
	'id'=>'convenio-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'selectableRows'=>'2',
	'columns'=>array(
		'nu_Convenio',
		'nu_DiarioOficial',
		'de_ObjetivoConvenio',
		'vl_Convenio',
		'dt_PublicacaoConvenio',
		'dt_VencimentoConvenio',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
