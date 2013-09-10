<?php
/* @var $this ItemAdesaoAtaController */
/* @var $model ItemAdesaoAta */
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
	'id'=>'item-adesao-ata-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sq_Item'); ?>
		<?php echo $form->textField($model,'sq_Item'); ?>
		<?php echo $form->error($model,'sq_Item'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'de_Item'); ?>
		<?php echo $form->textArea($model,'de_Item',array('size'=>100,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'de_Item'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'qt_Item'); ?>
		<?php echo $form->textField($model,'qt_Item',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'qt_Item'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'un_Medida'); ?>
		<?php echo $form->textField($model,'un_Medida',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'un_Medida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vl_Item'); ?>
		<?php echo $form->textField($model,'vl_Item',array('class'=>'value')); ?>
		<?php echo $form->error($model,'vl_Item'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Adicionar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->