<?php
/* @var $this LicitacaoController */
/* @var $model Licitacao */

$this->breadcrumbs=array(
	'Licitações'=>array('admin'),
	$model->nu_ProcessoLicitatorio,
);

$this->menu=array(
	array('label'=>'Itens', 'url'=>array('/item/admin','licitacao'=>$model->id)),
	array('label'=>'Participantes', 'url'=>array('/participanteLicitacao/admin','licitacao'=>$model->id)),
	array('label'=>'Adicionar', 'url'=>array('create')),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Excluir', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Deseja realmente excluir este item?')),
	array('label'=>'Gerar REM', 'url'=>array('geraREM', 'id'=>$model->id)),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nu_ProcessoLicitatorio',
		'nu_DiarioOficial',
		'dt_PublicacaoEdital',
		'modalidade.descricao',
		'de_ObjetoLicitacao',
		'vl_TotalPrevisto',
		'nu_Edital',
		'tipoLicitacaoText',
	),
)); ?>
