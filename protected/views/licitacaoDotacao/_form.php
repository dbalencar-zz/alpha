<?php
/* @var $this LicitacaoDotacaoController */
/* @var $model LicitacaoDotacao */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'licitacao-dotacao-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cd_CategoriaEconomica'); ?>
		<?php echo $form->textField($model,'cd_CategoriaEconomica',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'cd_CategoriaEconomica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cd_GrupoNatureza'); ?>
		<?php echo $form->textField($model,'cd_GrupoNatureza',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'cd_GrupoNatureza'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cd_ModalidadeAplicacao'); ?>
		<?php echo $form->textField($model,'cd_ModalidadeAplicacao',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'cd_ModalidadeAplicacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cd_Elemento'); ?>
		<?php echo $form->textField($model,'cd_Elemento',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'cd_Elemento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cd_UnidadeOrcamentaria'); ?>
		<?php echo $form->textField($model,'cd_UnidadeOrcamentaria',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'cd_UnidadeOrcamentaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cd_FonteRecurso'); ?>
		<?php echo $form->textField($model,'cd_FonteRecurso',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cd_FonteRecurso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_AcaoGoverno'); ?>
		<?php echo $form->textField($model,'nu_AcaoGoverno',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'nu_AcaoGoverno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cd_SubFuncao'); ?>
		<?php echo $form->textField($model,'cd_SubFuncao',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'cd_SubFuncao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cd_Funcao'); ?>
		<?php echo $form->textField($model,'cd_Funcao',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'cd_Funcao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cd_Programa'); ?>
		<?php echo $form->textField($model,'cd_Programa',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'cd_Programa'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Adicionar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->