<?php
/* @var $this LicitacaoDotacaoController */
/* @var $model LicitacaoDotacao */

$this->breadcrumbs=array(
	'Licitação '.$model->licitacao->nu_ProcessoLicitatorio=>array('/licitacao/view','id'=>$model->licitacao_id),
	'Dotações'=>array('admin','licitacao'=>$model->licitacao_id),
	$model->id,
);

$this->menu=array(
	array('label'=>'Adicionar', 'url'=>array('create','licitacao'=>$model->licitacao_id)),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Excluir', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Deseja realmente excluir este item?')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cd_CategoriaEconomica',
		'cd_GrupoNatureza',
		'cd_ModalidadeAplicacao',
		'cd_Elemento',
		'cd_UnidadeOrcamentaria',
		'cd_FonteRecurso',
		'nu_AcaoGoverno',
		'cd_SubFuncao',
		'cd_Funcao',
		'cd_Programa',
	),
)); ?>
