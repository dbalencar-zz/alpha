<?php
/* @var $this CertidaoController */
/* @var $model Certidao */

$this->breadcrumbs=array(
	'Licitação '.$model->participante->licitacao->nu_ProcessoLicitatorio=>array('/licitacao/view','id'=>$model->participante->licitacao_id),
	'Participante '.$model->participante->cd_CicParticipante=>array('/participanteLicitacao/view','id'=>$model->participante_licitacao_id),
	'Certidões'=>array('admin','participante'=>$model->participante_licitacao_id),
	$model->nu_Certidao=>array('view','id'=>$model->id),
	'Editar'
);

$this->menu=array(
	array('label'=>'Adicionar', 'url'=>array('create','participante'=>$model->participante_licitacao_id)),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>