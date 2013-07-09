<?php
/* @var $this ParticipanteConvenioController */
/* @var $model ParticipanteConvenio */

$this->breadcrumbs=array(
	'Convênio '.$model->convenio->nu_Convenio=>array('/convenio/view','id'=>$model->convenio_id),
	'Participantes'=>array('admin','convenio'=>$model->convenio_id),
	$model->nm_Participante=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Adicionar', 'url'=>array('create','convenio'=>$model->convenio_id)),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>