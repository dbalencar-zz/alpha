<?php
/* @var $this ParticipanteLicitacaoController */
/* @var $model ParticipanteLicitacao */

$this->breadcrumbs=array(
	'Participante Licitacaos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ParticipanteLicitacao', 'url'=>array('index')),
	array('label'=>'Create ParticipanteLicitacao', 'url'=>array('create')),
	array('label'=>'Update ParticipanteLicitacao', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ParticipanteLicitacao', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ParticipanteLicitacao', 'url'=>array('admin')),
);
?>

<h1>View ParticipanteLicitacao #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nu_ProcessoLicitatorio',
		'cd_CicParticipante',
		'tp_Pessoa',
		'nm_Participante',
		'tp_Participacao',
		'cd_CGCConsorcio',
	),
)); ?>
