<?php
/* @var $this ParticipanteLicitacaoController */
/* @var $model ParticipanteLicitacao */

$this->breadcrumbs=array(
	'Participante Licitacaos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ParticipanteLicitacao', 'url'=>array('index')),
	array('label'=>'Manage ParticipanteLicitacao', 'url'=>array('admin')),
);
?>

<h1>Create ParticipanteLicitacao</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>