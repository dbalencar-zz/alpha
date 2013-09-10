<?php
/* @var $this CotacaoController */
/* @var $model Cotacao */
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
	'id'=>'cotacao-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tp_Valor'); ?>
		<?php echo $form->dropDownList($model,'tp_Valor',$model->tipoValorOptions()); ?>
		<?php echo $form->error($model,'tp_Valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tp_Pessoa'); ?>
		<?php echo $form->dropDownList($model,'tp_Pessoa',TipoPessoa::model()->listAll()); ?>
		<?php echo $form->error($model,'tp_Pessoa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cd_CicParticipante'); ?>
		<?php echo $form->textField($model,'cd_CicParticipante',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'cd_CicParticipante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vl_TotalCotadoItem'); ?>
		<?php echo $form->textField($model,'vl_TotalCotadoItem',array('class'=>'value')); ?>
		<?php echo $form->error($model,'vl_TotalCotadoItem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cd_VencedorPerdedor'); ?>
		<?php echo $form->dropDownList($model,'cd_VencedorPerdedor',$model->vencedorPerdedorOptions()); ?>
		<?php echo $form->error($model,'cd_VencedorPerdedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qt_ItemCotado'); ?>
		<?php echo $form->textField($model,'qt_ItemCotado',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'qt_ItemCotado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Adicionar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->