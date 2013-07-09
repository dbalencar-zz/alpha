<?php
/* @var $this ParticipanteLicitacaoController */
/* @var $model ParticipanteLicitacao */
/* @var $form CActiveForm */
?>

<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.price_format.1.8.min.js'); ?>

<script>
$(function() {
	$('.value').priceFormat({
		limit: 15,
	    prefix: '',
	    thousandsSeparator: ''
	});
});
</script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'participante-licitacao-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cd_CicParticipante'); ?>
		<?php echo $form->textField($model,'cd_CicParticipante'); ?>
		<?php echo $form->error($model,'cd_CicParticipante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tp_Pessoa'); ?>
		<?php echo $form->dropDownList($model,'tp_Pessoa',TipoPessoa::model()->listAll()); ?>
		<?php echo $form->error($model,'tp_Pessoa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nm_Participante'); ?>
		<?php echo $form->textField($model,'nm_Participante',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nm_Participante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tp_Participacao'); ?>
		<?php echo $form->dropDownList($model,'tp_Participacao',TipoParticipante::model()->listAll()); ?>
		<?php echo $form->error($model,'tp_Participacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cd_CGCConsorcio'); ?>
		<?php echo $form->textField($model,'cd_CGCConsorcio'); ?>
		<?php echo $form->error($model,'cd_CGCConsorcio'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'tp_Convidado'); ?>
		<?php echo $form->dropDownList($model,'tp_Convidado',$model->simNaoOptions); ?>
		<?php echo $form->error($model,'tp_Convidado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Adicionar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->