<?php
/* @var $this AdesaoAtaLicitacaoController */
/* @var $model AdesaoAtaLicitacao */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'adesao-ata-licitacao-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_ProcessoCompra'); ?>
		<?php echo $form->textField($model,'nu_ProcessoCompra',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'nu_ProcessoCompra'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_Ata'); ?>
		<?php echo $form->textField($model,'nu_Ata',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'nu_Ata'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_ProcessoLicitatorio'); ?>
		<?php echo $form->textField($model,'nu_ProcessoLicitatorio',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'nu_ProcessoLicitatorio'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'dt_Publicacao'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_Publicacao'
		)); ?>
		<?php echo $form->error($model,'dt_Publicacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_Validade'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_Validade'
		)); ?>
		<?php echo $form->error($model,'dt_Validade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_DiarioOficial'); ?>
		<?php echo $form->textField($model,'nu_DiarioOficial',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'nu_DiarioOficial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_Adesao'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'mask'=>'99/99/9999',
			'model'=>$model,
			'attribute'=>'dt_Adesao'
		)); ?>
		<?php echo $form->error($model,'dt_Adesao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tp_Adesao'); ?>
		<?php echo $form->dropDownList($model,'tp_Adesao',TipoAdesaoAta::model()->listAll()); ?>
		<?php echo $form->error($model,'tp_Adesao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Adicionar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->