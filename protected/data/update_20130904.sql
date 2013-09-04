ALTER TABLE `contrato` CHANGE `de_ObjetivoContrato` `de_ObjetivoContrato` VARCHAR( 300 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;

ALTER TABLE `contrato` CHANGE `nu_CertidaoINSS` `nu_CertidaoINSS` VARCHAR( 60 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
CHANGE `nu_CertidaoFGTS` `nu_CertidaoFGTS` VARCHAR( 60 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
CHANGE `nu_CertidaoFazendaEstadual` `nu_CertidaoFazendaEstadual` VARCHAR( 60 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
CHANGE `nu_CertidaoFazendaMunicipal` `nu_CertidaoFazendaMunicipal` VARCHAR( 60 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
CHANGE `nu_CertidaoFazendaFederal` `nu_CertidaoFazendaFederal` VARCHAR( 60 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
CHANGE `nu_CertidaoOutras` `nu_CertidaoOutras` VARCHAR( 60 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

ALTER TABLE `contrato` ADD `nu_CertidaoCNDT` VARCHAR( 60 ) NULL DEFAULT NULL AFTER `dt_ValidadeFazendaFederal` ,
ADD `dt_CertidaoCNDT` DATE NULL DEFAULT NULL AFTER `nu_CertidaoCNDT` ,
ADD `dt_ValidadeCertidaoCNDT` DATE NULL DEFAULT NULL AFTER `dt_CertidaoCNDT`;
