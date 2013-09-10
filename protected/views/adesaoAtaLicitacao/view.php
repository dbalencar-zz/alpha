<?php
/* @var $this AdesaoAtaLicitacaoController */
/* @var $model AdesaoAtaLicitacao */

$this->breadcrumbs=array(
	'Atas'=>array('admin'),
	$model->nu_Ata,
);

$this->menu=array(
	array('label'=>'Itens', 'url'=>array('/itemAdesaoAta','ata'=>$model->id)),
	array('label'=>'Adicionar', 'url'=>array('create')),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Excluir', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Deseja realmente excluir este item?')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nu_ProcessoCompra',
		'nu_Ata',
		'nu_ProcessoLicitatorio',
		'dt_Validade',
		'dt_Adesao',
		'dt_Publicacao',
		'nu_DiarioOficial',
		'tipo.descricao',
	),
)); ?>

<?php $this->widget('zii.widgets.jui.CJuiAccordion',array(
	'panels'=>array(
		'Itens'=>$this->renderPartial('_itens',array('model'=>$model),true),
	),
	'options'=>array(
		'animated'=>'bounceslide',
	),
)); ?>
