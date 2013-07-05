<?php
/* @var $this ContratoController */
/* @var $model Contrato */

$this->breadcrumbs=array(
	'Contratos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Contrato', 'url'=>array('index')),
	array('label'=>'Create Contrato', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#contrato-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Contratos</h1>

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
	'id'=>'contrato-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nu_Contrato',
		'vl_Contrato',
		'dt_AssinaturaContrato',
		'de_ObjetivoContrato',
		'nu_ProcessoLicitatorio',
		/*
		'cd_Moeda',
		'tp_PessoaContratado',
		'cd_CicContratado',
		'nm_Contratado',
		'dt_VencimentoContrato',
		'nu_DiarioOficial',
		'dt_Publicacao',
		'st_RecebeValor',
		'nu_CertidaoINSS',
		'dt_CertidaoINSS',
		'dt_ValidadeINSS',
		'nu_CertidaoFGTS',
		'dt_CertidaoFGTS',
		'dt_ValidadeFGTS',
		'nu_CertidaoFazendaEstadual',
		'￼dt_CertidaoFazendaEstadual',
		'￼dt_ValidadeFazendaEstadual',
		'nu_CertidaoFazendaMunicipal',
		'dt_CertidaoFazendaMunicipal',
		'dt_ValidadeFazendaMunicipal',
		'nu_CertidaoFazendaFederal',
		'dt_CertidaoFazendaFederal',
		'dt_ValidadeFazendaFederal',
		'nu_CertidaoOutras',
		'dt_CertidaoOutras',
		'dt_ValidadeCertidaoOutras',
		'tp_Contrato',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
