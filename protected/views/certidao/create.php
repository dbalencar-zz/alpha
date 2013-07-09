<?php
/* @var $this CertidaoController */
/* @var $model Certidao */

$this->breadcrumbs=array(
	'Licitação '.$model->participante->licitacao->nu_ProcessoLicitatorio=>array('/licitacao/view','id'=>$model->participante->licitacao_id),
	'Participante '.$model->participante->cd_CicParticipante=>array('/participanteLicitacao/view','id'=>$model->participante_licitacao_id),
	'Certidões'=>array('admin','participante'=>$model->participante_licitacao_id),
	'Adicionar'
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>