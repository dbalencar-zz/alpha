<?php
/* @var $this LicitacaoController */
/* @var $model Licitacao */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'nu_ProcessoLicitatorio'); ?>
		<?php echo $form->textField($model,'nu_ProcessoLicitatorio',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_DiarioOficial'); ?>
		<?php echo $form->textField($model,'nu_DiarioOficial'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_PublicacaoEdital'); ?>
		<?php echo $form->textField($model,'dt_PublicacaoEdital'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cd_Modalidade'); ?>
		<?php echo $form->textField($model,'cd_Modalidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'de_ObjetoLicitacao'); ?>
		<?php echo $form->textField($model,'de_ObjetoLicitacao',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vl_TotalPrevisto'); ?>
		<?php echo $form->textField($model,'vl_TotalPrevisto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_Edital'); ?>
		<?php echo $form->textField($model,'nu_Edital',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tp_Licitacao'); ?>
		<?php echo $form->textField($model,'tp_Licitacao',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Pesquisar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->