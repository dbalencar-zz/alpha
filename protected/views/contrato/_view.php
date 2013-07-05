<?php
/* @var $this ContratoController */
/* @var $data Contrato */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_Contrato')); ?>:</b>
	<?php echo CHtml::encode($data->nu_Contrato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vl_Contrato')); ?>:</b>
	<?php echo CHtml::encode($data->vl_Contrato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dt_AssinaturaContrato')); ?>:</b>
	<?php echo CHtml::encode($data->dt_AssinaturaContrato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('de_ObjetivoContrato')); ?>:</b>
	<?php echo CHtml::encode($data->de_ObjetivoContrato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_ProcessoLicitatorio')); ?>:</b>
	<?php echo CHtml::encode($data->nu_ProcessoLicitatorio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cd_Moeda')); ?>:</b>
	<?php echo CHtml::encode($data->cd_Moeda); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tp_PessoaContratado')); ?>:</b>
	<?php echo CHtml::encode($data->tp_PessoaContratado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cd_CicContratado')); ?>:</b>
	<?php echo CHtml::encode($data->cd_CicContratado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nm_Contratado')); ?>:</b>
	<?php echo CHtml::encode($data->nm_Contratado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dt_VencimentoContrato')); ?>:</b>
	<?php echo CHtml::encode($data->dt_VencimentoContrato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_DiarioOficial')); ?>:</b>
	<?php echo CHtml::encode($data->nu_DiarioOficial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dt_Publicacao')); ?>:</b>
	<?php echo CHtml::encode($data->dt_Publicacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('st_RecebeValor')); ?>:</b>
	<?php echo CHtml::encode($data->st_RecebeValor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_CertidaoINSS')); ?>:</b>
	<?php echo CHtml::encode($data->nu_CertidaoINSS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dt_CertidaoINSS')); ?>:</b>
	<?php echo CHtml::encode($data->dt_CertidaoINSS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dt_ValidadeINSS')); ?>:</b>
	<?php echo CHtml::encode($data->dt_ValidadeINSS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_CertidaoFGTS')); ?>:</b>
	<?php echo CHtml::encode($data->nu_CertidaoFGTS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dt_CertidaoFGTS')); ?>:</b>
	<?php echo CHtml::encode($data->dt_CertidaoFGTS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dt_ValidadeFGTS')); ?>:</b>
	<?php echo CHtml::encode($data->dt_ValidadeFGTS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_CertidaoFazendaEstadual')); ?>:</b>
	<?php echo CHtml::encode($data->nu_CertidaoFazendaEstadual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('￼dt_CertidaoFazendaEstadual')); ?>:</b>
	<?php echo CHtml::encode($data->￼dt_CertidaoFazendaEstadual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('￼dt_ValidadeFazendaEstadual')); ?>:</b>
	<?php echo CHtml::encode($data->￼dt_ValidadeFazendaEstadual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_CertidaoFazendaMunicipal')); ?>:</b>
	<?php echo CHtml::encode($data->nu_CertidaoFazendaMunicipal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dt_CertidaoFazendaMunicipal')); ?>:</b>
	<?php echo CHtml::encode($data->dt_CertidaoFazendaMunicipal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dt_ValidadeFazendaMunicipal')); ?>:</b>
	<?php echo CHtml::encode($data->dt_ValidadeFazendaMunicipal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_CertidaoFazendaFederal')); ?>:</b>
	<?php echo CHtml::encode($data->nu_CertidaoFazendaFederal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dt_CertidaoFazendaFederal')); ?>:</b>
	<?php echo CHtml::encode($data->dt_CertidaoFazendaFederal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dt_ValidadeFazendaFederal')); ?>:</b>
	<?php echo CHtml::encode($data->dt_ValidadeFazendaFederal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nu_CertidaoOutras')); ?>:</b>
	<?php echo CHtml::encode($data->nu_CertidaoOutras); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dt_CertidaoOutras')); ?>:</b>
	<?php echo CHtml::encode($data->dt_CertidaoOutras); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dt_ValidadeCertidaoOutras')); ?>:</b>
	<?php echo CHtml::encode($data->dt_ValidadeCertidaoOutras); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tp_Contrato')); ?>:</b>
	<?php echo CHtml::encode($data->tp_Contrato); ?>
	<br />

	*/ ?>

</div>