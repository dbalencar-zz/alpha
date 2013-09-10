<?php
/* @var $this ConvenioController */
/* @var $model Convenio */

$this->breadcrumbs=array(
	'Atas'=>array('admin'),
	'Downloads',
);
?>

<h1>Arquivos REM</h1>

<ul>
<li><?php echo CHtml::link('Atas', array('download')); ?></li>
<li><?php echo CHtml::link('Itens', array('itemAdesaoAta/download')); ?></li>
</ul>