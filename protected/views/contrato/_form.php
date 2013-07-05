<?php
/* @var $this ContratoController */
/* @var $model Contrato */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contrato-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_Contrato'); ?>
		<?php echo $form->textField($model,'nu_Contrato',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'nu_Contrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vl_Contrato'); ?>
		<?php echo $form->textField($model,'vl_Contrato'); ?>
		<?php echo $form->error($model,'vl_Contrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_AssinaturaContrato'); ?>
		<?php echo $form->textField($model,'dt_AssinaturaContrato'); ?>
		<?php echo $form->error($model,'dt_AssinaturaContrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'de_ObjetivoContrato'); ?>
		<?php echo $form->textField($model,'de_ObjetivoContrato',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'de_ObjetivoContrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_ProcessoLicitatorio'); ?>
		<?php echo $form->textField($model,'nu_ProcessoLicitatorio',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'nu_ProcessoLicitatorio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cd_Moeda'); ?>
		<?php echo $form->textField($model,'cd_Moeda'); ?>
		<?php echo $form->error($model,'cd_Moeda'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tp_PessoaContratado'); ?>
		<?php echo $form->textField($model,'tp_PessoaContratado'); ?>
		<?php echo $form->error($model,'tp_PessoaContratado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cd_CicContratado'); ?>
		<?php echo $form->textField($model,'cd_CicContratado',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'cd_CicContratado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nm_Contratado'); ?>
		<?php echo $form->textField($model,'nm_Contratado',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nm_Contratado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_VencimentoContrato'); ?>
		<?php echo $form->textField($model,'dt_VencimentoContrato'); ?>
		<?php echo $form->error($model,'dt_VencimentoContrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_DiarioOficial'); ?>
		<?php echo $form->textField($model,'nu_DiarioOficial'); ?>
		<?php echo $form->error($model,'nu_DiarioOficial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_Publicacao'); ?>
		<?php echo $form->textField($model,'dt_Publicacao'); ?>
		<?php echo $form->error($model,'dt_Publicacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'st_RecebeValor'); ?>
		<?php echo $form->textField($model,'st_RecebeValor',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'st_RecebeValor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_CertidaoINSS'); ?>
		<?php echo $form->textField($model,'nu_CertidaoINSS'); ?>
		<?php echo $form->error($model,'nu_CertidaoINSS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_CertidaoINSS'); ?>
		<?php echo $form->textField($model,'dt_CertidaoINSS'); ?>
		<?php echo $form->error($model,'dt_CertidaoINSS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_ValidadeINSS'); ?>
		<?php echo $form->textField($model,'dt_ValidadeINSS'); ?>
		<?php echo $form->error($model,'dt_ValidadeINSS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_CertidaoFGTS'); ?>
		<?php echo $form->textField($model,'nu_CertidaoFGTS'); ?>
		<?php echo $form->error($model,'nu_CertidaoFGTS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_CertidaoFGTS'); ?>
		<?php echo $form->textField($model,'dt_CertidaoFGTS'); ?>
		<?php echo $form->error($model,'dt_CertidaoFGTS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_ValidadeFGTS'); ?>
		<?php echo $form->textField($model,'dt_ValidadeFGTS'); ?>
		<?php echo $form->error($model,'dt_ValidadeFGTS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_CertidaoFazendaEstadual'); ?>
		<?php echo $form->textField($model,'nu_CertidaoFazendaEstadual'); ?>
		<?php echo $form->error($model,'nu_CertidaoFazendaEstadual'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'dt_CertidaoFazendaEstadual'); ?>
		<?php echo $form->textField($model,'dt_CertidaoFazendaEstadual'); ?>
		<?php echo $form->error($model,'dt_CertidaoFazendaEstadual'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'dt_ValidadeFazendaEstadual'); ?>
		<?php echo $form->textField($model,'dt_ValidadeFazendaEstadual'); ?>
		<?php echo $form->error($model,'dt_ValidadeFazendaEstadual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_CertidaoFazendaMunicipal'); ?>
		<?php echo $form->textField($model,'nu_CertidaoFazendaMunicipal'); ?>
		<?php echo $form->error($model,'nu_CertidaoFazendaMunicipal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_CertidaoFazendaMunicipal'); ?>
		<?php echo $form->textField($model,'dt_CertidaoFazendaMunicipal'); ?>
		<?php echo $form->error($model,'dt_CertidaoFazendaMunicipal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_ValidadeFazendaMunicipal'); ?>
		<?php echo $form->textField($model,'dt_ValidadeFazendaMunicipal'); ?>
		<?php echo $form->error($model,'dt_ValidadeFazendaMunicipal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_CertidaoFazendaFederal'); ?>
		<?php echo $form->textField($model,'nu_CertidaoFazendaFederal'); ?>
		<?php echo $form->error($model,'nu_CertidaoFazendaFederal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_CertidaoFazendaFederal'); ?>
		<?php echo $form->textField($model,'dt_CertidaoFazendaFederal'); ?>
		<?php echo $form->error($model,'dt_CertidaoFazendaFederal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_ValidadeFazendaFederal'); ?>
		<?php echo $form->textField($model,'dt_ValidadeFazendaFederal'); ?>
		<?php echo $form->error($model,'dt_ValidadeFazendaFederal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nu_CertidaoOutras'); ?>
		<?php echo $form->textField($model,'nu_CertidaoOutras'); ?>
		<?php echo $form->error($model,'nu_CertidaoOutras'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_CertidaoOutras'); ?>
		<?php echo $form->textField($model,'dt_CertidaoOutras'); ?>
		<?php echo $form->error($model,'dt_CertidaoOutras'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_ValidadeCertidaoOutras'); ?>
		<?php echo $form->textField($model,'dt_ValidadeCertidaoOutras'); ?>
		<?php echo $form->error($model,'dt_ValidadeCertidaoOutras'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tp_Contrato'); ?>
		<?php echo $form->textField($model,'tp_Contrato'); ?>
		<?php echo $form->error($model,'tp_Contrato'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->