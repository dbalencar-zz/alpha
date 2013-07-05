<?php
/* @var $this ParticipanteLicitacaoController */
/* @var $model ParticipanteLicitacao */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'participante-licitacao-form',
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
		<?php echo $form->labelEx($model,'tp_Pessoa'); ?>
		<?php echo $form->textField($model,'tp_Pessoa'); ?>
		<?php echo $form->error($model,'tp_Pessoa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nm_Participante'); ?>
		<?php echo $form->textField($model,'nm_Participante',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nm_Participante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tp_Participacao'); ?>
		<?php echo $form->textField($model,'tp_Participacao'); ?>
		<?php echo $form->error($model,'tp_Participacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cd_CGCConsorcio'); ?>
		<?php echo $form->textField($model,'cd_CGCConsorcio'); ?>
		<?php echo $form->error($model,'cd_CGCConsorcio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->