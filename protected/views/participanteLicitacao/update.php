<?php
/* @var $this ParticipanteLicitacaoController */
/* @var $model ParticipanteLicitacao */

$this->breadcrumbs=array(
	'Participante Licitacaos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ParticipanteLicitacao', 'url'=>array('index')),
	array('label'=>'Create ParticipanteLicitacao', 'url'=>array('create')),
	array('label'=>'View ParticipanteLicitacao', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ParticipanteLicitacao', 'url'=>array('admin')),
);
?>

<h1>Update ParticipanteLicitacao <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>