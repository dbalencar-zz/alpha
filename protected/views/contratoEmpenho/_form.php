<?php
/* @var $this ContratoEmpenhoController */
/* @var $model ContratoEmpenho */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contrato-empenho-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_NotaEmpenho'); ?>
		<?php echo $form->textField($model,'nu_NotaEmpenho',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'nu_NotaEmpenho'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ano_Empenho'); ?>
		<?php echo $form->textField($model,'ano_Empenho',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'ano_Empenho'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cd_UnidadeOrcamentaria'); ?>
		<?php echo $form->textField($model,'cd_UnidadeOrcamentaria',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'cd_UnidadeOrcamentaria'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Adicionar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->