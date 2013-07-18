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
	array('label'=>'Dotações', 'url'=>array('/licitacaoDotacao/admin','licitacao'=>$model->id)),
	array('label'=>'Publicações', 'url'=>array('/publicacao/admin','licitacao'=>$model->id)),
	array('label'=>'Adicionar', 'url'=>array('create')),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Excluir', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Deseja realmente excluir este item?')),
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

<?php $this->widget('zii.widgets.jui.CJuiAccordion',array(
	'panels'=>array(
		'Itens'=>$this->renderPartial('_itens',array('model'=>$model),true),
		'Participantes'=>$this->renderPartial('_participantes',array('model'=>$model),true),
		'Dotações'=>$this->renderPartial('_dotacoes',array('model'=>$model),true),
		'Publicações'=>$this->renderPartial('_publicacoes',array('model'=>$model),true),
	),
	'options'=>array(
		'animated'=>'bounceslide',
	),
)); ?>