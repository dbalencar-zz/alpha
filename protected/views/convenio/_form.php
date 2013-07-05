<?php
/* @var $this ConvenioController */
/* @var $model Convenio */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'convenio-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tp_EsferaConvenio'); ?>
		<?php echo $form->dropDownList($model,'tp_EsferaConvenio',EsferaConveniado::model()->listAll()); ?>
		<?php echo $form->error($model,'tp_EsferaConvenio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'st_RecebeValor'); ?>
		<?php echo $form->dropDownList($model,'st_RecebeValor',Convenio::model()->simNaoOptions); ?>
		<?php echo $form->error($model,'st_RecebeValor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_Convenio'); ?>
		<?php echo $form->textField($model,'nu_Convenio',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'nu_Convenio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vl_Convenio'); ?>
		<?php echo $form->textField($model,'vl_Convenio',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'vl_Convenio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cd_MoedaConvenio'); ?>
		<?php echo $form->dropDownList($model,'cd_MoedaConvenio',TipoMoeda::model()->listAll()); ?>
		<?php echo $form->error($model,'cd_MoedaConvenio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_AssinaturaConvenio'); ?>
		<?php echo $form->textField($model,'dt_AssinaturaConvenio'); ?>
		<?php echo $form->error($model,'dt_AssinaturaConvenio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'de_ObjetivoConvenio'); ?>
		<?php echo $form->textField($model,'de_ObjetivoConvenio',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'de_ObjetivoConvenio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_VencimentoConvenio'); ?>
		<?php echo $form->textField($model,'dt_VencimentoConvenio'); ?>
		<?php echo $form->error($model,'dt_VencimentoConvenio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_LeiAutorizativa'); ?>
		<?php echo $form->textField($model,'nu_LeiAutorizativa'); ?>
		<?php echo $form->error($model,'nu_LeiAutorizativa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_LeiAutorizativa'); ?>
		<?php echo $form->textField($model,'dt_LeiAutorizativa'); ?>
		<?php echo $form->error($model,'dt_LeiAutorizativa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_DiarioOficial'); ?>
		<?php echo $form->textField($model,'nu_DiarioOficial'); ?>
		<?php echo $form->error($model,'nu_DiarioOficial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_PublicacaoConvenio'); ?>
		<?php echo $form->textField($model,'dt_PublicacaoConvenio'); ?>
		<?php echo $form->error($model,'dt_PublicacaoConvenio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tp_Convenio'); ?>
		<?php echo $form->dropDownList($model,'tp_Convenio',TipoConvenio::model()->listAll()); ?>
		<?php echo $form->error($model,'tp_Convenio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Adicionar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->