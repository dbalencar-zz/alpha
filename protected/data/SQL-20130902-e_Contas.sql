Alterações Convênio:

ALTER TABLE `convenio` CHANGE `de_ObjetivoConvenio` `de_ObjetivoConvenio` VARCHAR( 300 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;

ALTER TABLE `convenio` DROP FOREIGN KEY `convenio_ibfk_2`;

ALTER TABLE `convenio` DROP `tp_EsferaConvenio`;

INSERT INTO `econtas`.`tipo_convenio` (
`codigo` ,
`descricao`
)
VALUES (
'12', 'Cessão'
), (
'13', 'Aditivo de Cessão'
);

ALTER TABLE `participante_convenio` CHANGE `nu_CertidaoCASAN` `nu_CertidaoCASAN` VARCHAR( 60 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
CHANGE `nu_CertidaoCELESC` `nu_CertidaoCELESC` VARCHAR( 60 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
CHANGE `nu_CertidaoIPESC` `nu_CertidaoIPESC` VARCHAR( 60 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
CHANGE `nu_CertidaoFazendaMunicipal` `nu_CertidaoFazendaMunicipal` VARCHAR( 60 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
CHANGE `nu_CertidaoFazendaFederal` `nu_CertidaoFazendaFederal` VARCHAR( 60 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
CHANGE `nu_CertidaoOutras` `nu_CertidaoOutras` VARCHAR( 60 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

ALTER TABLE `participante_convenio` ADD `nu_CertidaoCNDT` VARCHAR( 60 ) NOT NULL AFTER `dt_ValidadeFazendaFederal` ,
ADD `dt_CertidaoCNDT` DATE NOT NULL AFTER `nu_CertidaoCNDT` ,
ADD `dt_ValidadeCertidaoCNDT` DATE NOT NULL AFTER `dt_CertidaoCNDT`;

ALTER TABLE `participante_convenio` CHANGE `nu_CertidaoCNDT` `nu_CertidaoCNDT` VARCHAR( 60 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
CHANGE `dt_CertidaoCNDT` `dt_CertidaoCNDT` DATE NULL DEFAULT NULL ,
CHANGE `dt_ValidadeCertidaoCNDT` `dt_ValidadeCertidaoCNDT` DATE NULL DEFAULT NULL;

ALTER TABLE `participante_convenio` ADD `tp_EsferaConvenio` INT( 1 ) UNSIGNED NOT NULL AFTER `dt_ValidadeCertidaoOutras`;

ALTER TABLE `participante_convenio` ADD INDEX ( `tp_EsferaConvenio` );

--Falta ativar o relacionamento com a tabela ESFERA_CONVENIADO (atualizar valores dos registros existentes)

INSERT INTO `econtas`.`esfera_conveniado` (
`codigo` ,
`descricao`
)
VALUES (
'5', 'Outros'
);










