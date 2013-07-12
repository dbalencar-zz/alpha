<?php
/* @var $this ParticipanteLicitacaoController */
/* @var $model ParticipanteLicitacao */

$this->breadcrumbs=array(
	'Licitação '.$model->licitacao->nu_ProcessoLicitatorio=>array('/licitacao/view','id'=>$model->licitacao_id),
	'Participantes'=>array('admin','licitacao'=>$model->licitacao_id),
	$model->cd_CicParticipante=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Adicionar', 'url'=>array('create','licitacao'=>$model->licitacao_id)),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>