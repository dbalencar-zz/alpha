<?php
/* @var $this ConvenioController */
/* @var $model Convenio */

$this->breadcrumbs=array(
	'Licitações'=>array('admin'),
	'Downloads',
);
?>

<h1>Arquivos REM</h1>

<ul>
<li><?php echo CHtml::link('Licitações', array('download')); ?></li>
<li><?php echo CHtml::link('Itens', array('item/download')); ?></li>
<li><?php echo CHtml::link('Participantes', array('participanteLicitacao/download')); ?></li>
<li><?php echo CHtml::link('Cotações', array('cotacao/download')); ?></li>
<li><?php echo CHtml::link('Certidões', array('certidao/download')); ?></li>
<li><?php echo CHtml::link('Publicações', array('publicacao/download')); ?></li>
</ul>