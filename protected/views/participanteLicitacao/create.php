<?php
/* @var $this ParticipanteLicitacaoController */
/* @var $model ParticipanteLicitacao */

$this->breadcrumbs=array(
	'Licitação '.$model->licitacao->nu_ProcessoLicitatorio=>array('/licitacao/view','id'=>$model->licitacao->id),
	'Participantes'=>array('admin','licitacao'=>$model->licitacao->id),
	'Adicionar',
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>