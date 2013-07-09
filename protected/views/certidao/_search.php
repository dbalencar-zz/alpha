<?php
/* @var $this CertidaoController */
/* @var $model Certidao */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'tp_Certidao'); ?>
		<?php echo $form->dropDownList($model,'tp_Certidao',TipoCertidao::model()->listAll(),array('empty'=>'Todos')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_Certidao'); ?>
		<?php echo $form->textField($model,'nu_Certidao',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_EmissaoCertidao'); ?>
		<?php echo $form->textField($model,'dt_EmissaoCertidao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_ValidadeCertidao'); ?>
		<?php echo $form->textField($model,'dt_ValidadeCertidao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->