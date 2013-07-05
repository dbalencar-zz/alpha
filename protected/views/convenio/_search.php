<?php
/* @var $this ConvenioController */
/* @var $model Convenio */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'tp_EsferaConvenio'); ?>
		<?php echo $form->dropDownList($model, 'tp_EsferaConvenio', EsferaConveniado::model()->listAll(), array(
			'empty'=>'Todos',
		)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'st_RecebeValor'); ?>
		<?php echo $form->textField($model,'st_RecebeValor',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_Convenio'); ?>
		<?php echo $form->textField($model,'nu_Convenio',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vl_Convenio'); ?>
		<?php echo $form->textField($model,'vl_Convenio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cd_MoedaConvenio'); ?>
		<?php echo $form->dropDownList($model, 'cd_MoedaConvenio', TipoMoeda::model()->listAll(), array(
			'empty'=>'Todos',
		)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_AssinaturaConvenio'); ?>
		<?php echo $form->textField($model,'dt_AssinaturaConvenio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'de_ObjetivoConvenio'); ?>
		<?php echo $form->textField($model,'de_ObjetivoConvenio',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_VencimentoConvenio'); ?>
		<?php echo $form->textField($model,'dt_VencimentoConvenio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_LeiAutorizativa'); ?>
		<?php echo $form->textField($model,'nu_LeiAutorizativa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_LeiAutorizativa'); ?>
		<?php echo $form->textField($model,'dt_LeiAutorizativa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_DiarioOficial'); ?>
		<?php echo $form->textField($model,'nu_DiarioOficial'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_PublicacaoConvenio'); ?>
		<?php echo $form->textField($model,'dt_PublicacaoConvenio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tp_Convenio'); ?>
		<?php echo $form->dropDownList($model,'tp_Convenio', TipoConvenio::model()->listAll(), array(
			'empty'=>'Todos',
		)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Pesquisar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->