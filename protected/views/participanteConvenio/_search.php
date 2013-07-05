<?php
/* @var $this ParticipanteConvenioController */
/* @var $model ParticipanteConvenio */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cd_CicParticipante'); ?>
		<?php echo $form->textField($model,'cd_CicParticipante'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tp_PessoaParticipante'); ?>
		<?php echo $form->dropDownList($model,'tp_PessoaParticipante',TipoPessoa::model()->listAll(), array(
			'empty'=>'Todos',
		)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nm_Participante'); ?>
		<?php echo $form->textField($model,'nm_Participante',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vl_Participacao'); ?>
		<?php echo $form->textField($model,'vl_Participacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vl_PercentualParticipacao'); ?>
		<?php echo $form->textField($model,'vl_PercentualParticipacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_CertidaoCASAN'); ?>
		<?php echo $form->textField($model,'nu_CertidaoCASAN',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_CertidaoCASAN'); ?>
		<?php echo $form->textField($model,'dt_CertidaoCASAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_ValidadeCertidaoCASAN'); ?>
		<?php echo $form->textField($model,'dt_ValidadeCertidaoCASAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_CertidaoCELESC'); ?>
		<?php echo $form->textField($model,'nu_CertidaoCELESC',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_CertidaoCELESC'); ?>
		<?php echo $form->textField($model,'dt_CertidaoCELESC'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_ValidadeCertidaoCELESC'); ?>
		<?php echo $form->textField($model,'dt_ValidadeCertidaoCELESC'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_CertidaoIPESC'); ?>
		<?php echo $form->textField($model,'nu_CertidaoIPESC',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_CertidaoIPESC'); ?>
		<?php echo $form->textField($model,'dt_CertidaoIPESC'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_ValidadeCertidaoIPESC'); ?>
		<?php echo $form->textField($model,'dt_ValidadeCertidaoIPESC'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_CertidaoFazendaMunicipal'); ?>
		<?php echo $form->textField($model,'nu_CertidaoFazendaMunicipal',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_CertidaoFazendaMunicipal'); ?>
		<?php echo $form->textField($model,'dt_CertidaoFazendaMunicipal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_ValidadeFazendaMunicipal'); ?>
		<?php echo $form->textField($model,'dt_ValidadeFazendaMunicipal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_CertidaoFazendaFederal'); ?>
		<?php echo $form->textField($model,'nu_CertidaoFazendaFederal',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_CertidaoFazendaFederal'); ?>
		<?php echo $form->textField($model,'dt_CertidaoFazendaFederal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_ValidadeFazendaFederal'); ?>
		<?php echo $form->textField($model,'dt_ValidadeFazendaFederal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nu_CertidaoOutras'); ?>
		<?php echo $form->textField($model,'nu_CertidaoOutras',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_CertidaoOutras'); ?>
		<?php echo $form->textField($model,'dt_CertidaoOutras'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dt_ValidadeCertidaoOutras'); ?>
		<?php echo $form->textField($model,'dt_ValidadeCertidaoOutras'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Pesquisar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->