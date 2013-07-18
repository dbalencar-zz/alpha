<?php
/* @var $this ParticipanteConvenioController */
/* @var $model ParticipanteConvenio */
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
	$('.percent').priceFormat({
		limit: 6,
	    prefix: '',
	    thousandsSeparator: ''
	});	
});
</script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'participante-convenio-form',
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
		<?php echo $form->labelEx($model,'tp_PessoaParticipante'); ?>
		<?php echo $form->dropDownList($model,'tp_PessoaParticipante',TipoPessoa::model()->listAll()); ?>
		<?php echo $form->error($model,'tp_PessoaParticipante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nm_Participante'); ?>
		<?php echo $form->textField($model,'nm_Participante',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nm_Participante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vl_Participacao'); ?>
		<?php echo $form->textField($model,'vl_Participacao',array('class'=>'value')); ?>
		<?php echo $form->error($model,'vl_Participacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vl_PercentualParticipacao'); ?>
		<?php echo $form->textField($model,'vl_PercentualParticipacao',array('class'=>'percent')); ?>
		<?php echo $form->error($model,'vl_PercentualParticipacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_CertidaoCASAN'); ?>
		<?php echo $form->textField($model,'nu_CertidaoCASAN',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'nu_CertidaoCASAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_CertidaoCASAN'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_CertidaoCASAN'
		)); ?>
		<?php echo $form->error($model,'dt_CertidaoCASAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_ValidadeCertidaoCASAN'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_ValidadeCertidaoCASAN'
		)); ?>
		<?php echo $form->error($model,'dt_ValidadeCertidaoCASAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_CertidaoCELESC'); ?>
		<?php echo $form->textField($model,'nu_CertidaoCELESC',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'nu_CertidaoCELESC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_CertidaoCELESC'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_CertidaoCELESC'
		)); ?>
		<?php echo $form->error($model,'dt_CertidaoCELESC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_ValidadeCertidaoCELESC'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_ValidadeCertidaoCELESC'
		)); ?>
		<?php echo $form->error($model,'dt_ValidadeCertidaoCELESC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_CertidaoIPESC'); ?>
		<?php echo $form->textField($model,'nu_CertidaoIPESC',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'nu_CertidaoIPESC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_CertidaoIPESC'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_CertidaoIPESC'
		)); ?>
		<?php echo $form->error($model,'dt_CertidaoIPESC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_ValidadeCertidaoIPESC'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_ValidadeCertidaoIPESC'
		)); ?>
		<?php echo $form->error($model,'dt_ValidadeCertidaoIPESC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_CertidaoFazendaMunicipal'); ?>
		<?php echo $form->textField($model,'nu_CertidaoFazendaMunicipal',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'nu_CertidaoFazendaMunicipal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_CertidaoFazendaMunicipal'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_CertidaoFazendaMunicipal'
		)); ?>
		<?php echo $form->error($model,'dt_CertidaoFazendaMunicipal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_ValidadeFazendaMunicipal'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_ValidadeFazendaMunicipal'
		)); ?>
		<?php echo $form->error($model,'dt_ValidadeFazendaMunicipal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_CertidaoFazendaFederal'); ?>
		<?php echo $form->textField($model,'nu_CertidaoFazendaFederal',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'nu_CertidaoFazendaFederal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_CertidaoFazendaFederal'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_CertidaoFazendaFederal'
		)); ?>
		<?php echo $form->error($model,'dt_CertidaoFazendaFederal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_ValidadeFazendaFederal'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_ValidadeFazendaFederal'
		)); ?>
		<?php echo $form->error($model,'dt_ValidadeFazendaFederal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_CertidaoOutras'); ?>
		<?php echo $form->textField($model,'nu_CertidaoOutras',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'nu_CertidaoOutras'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_CertidaoOutras'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_CertidaoOutras'
		)); ?>
		<?php echo $form->error($model,'dt_CertidaoOutras'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_ValidadeCertidaoOutras'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_ValidadeCertidaoOutras'
		)); ?>
		<?php echo $form->error($model,'dt_ValidadeCertidaoOutras'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Adicionar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->