<?php
/* @var $this LicitacaoController */
/* @var $model Licitacao */
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
	'id'=>'licitacao-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_ProcessoLicitatorio'); ?>
		<?php echo $form->textField($model,'nu_ProcessoLicitatorio',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'nu_ProcessoLicitatorio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_DiarioOficial'); ?>
		<?php echo $form->textField($model,'nu_DiarioOficial',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'nu_DiarioOficial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_PublicacaoEdital'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_PublicacaoEdital'
		)); ?>
		<?php echo $form->error($model,'dt_PublicacaoEdital'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cd_Modalidade'); ?>
		<?php echo $form->dropDownList($model,'cd_Modalidade',Modalidade::model()->listAll()); ?>
		<?php echo $form->error($model,'cd_Modalidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'de_ObjetoLicitacao'); ?>
		<?php echo $form->textField($model,'de_ObjetoLicitacao',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'de_ObjetoLicitacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vl_TotalPrevisto'); ?>
		<?php echo $form->textField($model,'vl_TotalPrevisto',array('class'=>'value')); ?>
		<?php echo $form->error($model,'vl_TotalPrevisto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_Edital'); ?>
		<?php echo $form->textField($model,'nu_Edital',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'nu_Edital'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tp_Licitacao'); ?>
		<?php echo $form->dropDownList($model,'tp_Licitacao',$model->tipoLicitacaoOptions()); ?>
		<?php echo $form->error($model,'tp_Licitacao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Adicionar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->