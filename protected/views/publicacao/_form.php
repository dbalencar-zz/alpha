<?php
/* @var $this PublicacaoController */
/* @var $model Publicacao */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'publicacao-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

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
		<?php echo $form->labelEx($model,'nm_VeiculoComunicacao'); ?>
		<?php echo $form->textField($model,'nm_VeiculoComunicacao',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nm_VeiculoComunicacao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Adicionar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->