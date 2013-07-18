<?php
/* @var $this ConvenioController */
/* @var $model Convenio */

$this->breadcrumbs=array(
	'Convênios'=>array('admin'),
	'Downloads',
);
?>

<h1>Arquivos REM</h1>

<ul>
<li><?php echo CHtml::link('Convênios', array('download')); ?></li>
<li><?php echo CHtml::link('Participantes', array('participanteConvenio/download')); ?></li>
<li><?php echo CHtml::link('Empenhos', array('convenioEmpenho/download')); ?></li>
</ul>