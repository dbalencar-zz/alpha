<?php
/* @var $this CertidaoController */
/* @var $model Certidao */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'certidao-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_ProcessoLicitatorio'); ?>
		<?php echo $form->textField($model,'nu_ProcessoLicitatorio',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'nu_ProcessoLicitatorio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cd_CicParticipante'); ?>
		<?php echo $form->textField($model,'cd_CicParticipante'); ?>
		<?php echo $form->error($model,'cd_CicParticipante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tp_Certidao'); ?>
		<?php echo $form->textField($model,'tp_Certidao'); ?>
		<?php echo $form->error($model,'tp_Certidao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tp_Pessoa'); ?>
		<?php echo $form->textField($model,'tp_Pessoa'); ?>
		<?php echo $form->error($model,'tp_Pessoa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_Certidao'); ?>
		<?php echo $form->textField($model,'nu_Certidao',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'nu_Certidao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_EmissaoCertidao'); ?>
		<?php echo $form->textField($model,'dt_EmissaoCertidao'); ?>
		<?php echo $form->error($model,'dt_EmissaoCertidao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_ValidadeCertidao'); ?>
		<?php echo $form->textField($model,'dt_ValidadeCertidao'); ?>
		<?php echo $form->error($model,'dt_ValidadeCertidao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->