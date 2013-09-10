<?php
/* @var $this ItemController */
/* @var $model Item */
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
	'id'=>'item-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_SequencialItem'); ?>
		<?php echo $form->textField($model,'nu_SequencialItem',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'nu_SequencialItem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'de_ItemLicitacao'); ?>
		<?php echo $form->textArea($model,'de_ItemLicitacao',array('size'=>100,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'de_ItemLicitacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qt_ItemLicitado'); ?>
		<?php echo $form->textField($model,'qt_ItemLicitado',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'qt_ItemLicitado'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'un_Medida'); ?>
		<?php echo $form->textField($model,'un_Medida',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'un_Medida'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'st_Item'); ?>
		<?php echo $form->dropDownList($model,'st_Item',StatusItemLicitacao::model()->listAll()); ?>
		<?php echo $form->error($model,'st_Item'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_HomologacaoItem'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_HomologacaoItem'
		)); ?>
		<?php echo $form->error($model,'dt_HomologacaoItem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_PublicacaoHomologacao'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_PublicacaoHomologacao'
		)); ?>
		<?php echo $form->error($model,'dt_PublicacaoHomologacao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Adicionar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->