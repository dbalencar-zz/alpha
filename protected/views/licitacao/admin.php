<?php
/* @var $this LicitacaoController */
/* @var $model Licitacao */

$this->breadcrumbs=array(
	'Licitações',
);

$this->menu=array(
	array('label'=>'Adicionar', 'url'=>array('create')),
	array('label'=>'Arquivos', 'url'=>'#', 'linkOptions'=>array(
		'onclick'=>'if($.fn.yiiGridView.getSelection("licitacao-grid")=="") if(!confirm("Você não selecionou nenhuma Licitação, um arquivo de remessa com TODAS as Licitações da Competência atual será gerado. Confirma?")) return false;',
		'ajax'=>array(
			'type'=>'POST',
			'url'=>array('geraREM'),
			'data'=>array(
				'licitacoes'=>'js:$.fn.yiiGridView.getSelection("licitacao-grid")',
				'competencia'=>Yii::app()->user->competencia,
			),
			'success'=>'js:downloadrem',
		)
	)),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#licitacao-grid').yiiGridView('update', {
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
		window.location='index.php?r=licitacao/arquivo';	
	}
}
//-->
</script>

<h1>Competência: <?php echo Yii::app()->user->competenciaText; ?></h1>

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
	'id'=>'licitacao-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'selectableRows'=>'2',
	'columns'=>array(
		'nu_ProcessoLicitatorio',
		'nu_DiarioOficial',
		'de_ObjetoLicitacao',
		'dt_PublicacaoEdital',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
