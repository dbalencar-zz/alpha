<?php
/* @var $this AdesaoAtaLicitacaoController */
/* @var $model AdesaoAtaLicitacao */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_ProcessoCompra'); ?>
		<?php echo $form->textField($model,'nu_ProcessoCompra',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_Ata'); ?>
		<?php echo $form->textField($model,'nu_Ata',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_ProcessoLicitatorio'); ?>
		<?php echo $form->textField($model,'nu_ProcessoLicitatorio',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_Publicacao'); ?>
		<?php echo $form->textField($model,'dt_Publicacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_Validade'); ?>
		<?php echo $form->textField($model,'dt_Validade'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_DiarioOficial'); ?>
		<?php echo $form->textField($model,'nu_DiarioOficial',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_Adesao'); ?>
		<?php echo $form->textField($model,'dt_Adesao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tp_Adesao'); ?>
		<?php echo $form->textField($model,'tp_Adesao',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Pesquisar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->