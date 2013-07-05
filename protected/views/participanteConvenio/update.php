<?php
/* @var $this ParticipanteConvenioController */
/* @var $model ParticipanteConvenio */

$this->breadcrumbs=array(
	'Convênios'=>array('/convenio'),
	$model->convenio->nu_Convenio=>array('/convenio/view','id'=>$model->convenio_id),
	'Participantes'=>array('admin','convenio'=>$model->convenio_id),
	$model->nm_Participante=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Adicionar', 'url'=>array('create')),
	array('label'=>'Exibir', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>