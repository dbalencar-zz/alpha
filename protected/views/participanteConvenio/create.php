<?php
/* @var $this ParticipanteConvenioController */
/* @var $model ParticipanteConvenio */

$this->breadcrumbs=array(
	'Convênios'=>array('/convenio'),
	$model->convenio->nu_Convenio=>array('/convenio/view','id'=>$model->convenio->id),
	'Participantes'=>array('admin','convenio'=>$model->convenio->id),
	'Adicionar',
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>