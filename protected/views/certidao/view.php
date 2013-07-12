<?php
/* @var $this CertidaoController */
/* @var $model Certidao */

$this->breadcrumbs=array(
	'Licitação '.$model->participante->licitacao->nu_ProcessoLicitatorio=>array('/licitacao/view','id'=>$model->participante->licitacao->id),
	'Participante '.$model->participante->cd_CicParticipante=>array('/participanteLicitacao/view','id'=>$model->participante->id),
	'Certidões'=>array('/certidao/admin','participante'=>$model->participante->id),
	$model->nu_Certidao,
);

$this->menu=array(
	array('label'=>'Adicionar', 'url'=>array('create','participante'=>$model->participante_licitacao_id)),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Excluir', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Deseja realmente excluir este item?')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tipo.descricao',
		'pessoa.descricao',
		'dt_EmissaoCertidao',
		'dt_ValidadeCertidao',
	),
)); ?>
