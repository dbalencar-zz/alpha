<?php
/* @var $this CertidaoController */
/* @var $model Certidao */
/* @var $form CActiveForm */
?>

<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
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
	'id'=>'certidao-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tp_Certidao'); ?>
		<?php echo $form->dropDownList($model,'tp_Certidao',TipoCertidao::model()->listAll()); ?>
		<?php echo $form->error($model,'tp_Certidao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tp_Pessoa'); ?>
		<?php echo $form->dropDownList($model,'tp_Pessoa',TipoPessoa::model()->listAll()); ?>
		<?php echo $form->error($model,'tp_Pessoa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_Certidao'); ?>
		<?php echo $form->textField($model,'nu_Certidao',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nu_Certidao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_EmissaoCertidao'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_EmissaoCertidao'
		)); ?>
		<?php echo $form->error($model,'dt_EmissaoCertidao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_ValidadeCertidao'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_ValidadeCertidao'
		)); ?>
		<?php echo $form->error($model,'dt_ValidadeCertidao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Adicionar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->