<?php
/* @var $this LicitacaoDotacaoController */
/* @var $model LicitacaoDotacao */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cd_CategoriaEconomica'); ?>
		<?php echo $form->textField($model,'cd_CategoriaEconomica'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cd_GrupoNatureza'); ?>
		<?php echo $form->textField($model,'cd_GrupoNatureza'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cd_ModalidadeAplicacao'); ?>
		<?php echo $form->textField($model,'cd_ModalidadeAplicacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cd_Elemento'); ?>
		<?php echo $form->textField($model,'cd_Elemento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cd_UnidadeOrcamentaria'); ?>
		<?php echo $form->textField($model,'cd_UnidadeOrcamentaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cd_FonteRecurso'); ?>
		<?php echo $form->textField($model,'cd_FonteRecurso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_AcaoGoverno'); ?>
		<?php echo $form->textField($model,'nu_AcaoGoverno'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cd_SubFuncao'); ?>
		<?php echo $form->textField($model,'cd_SubFuncao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cd_Funcao'); ?>
		<?php echo $form->textField($model,'cd_Funcao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cd_Programa'); ?>
		<?php echo $form->textField($model,'cd_Programa'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->