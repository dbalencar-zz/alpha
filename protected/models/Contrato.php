<?php

/**
 * This is the model class for table "contrato".
 *
 * The followings are the available columns in table 'contrato':
 * @property string $id
 * @property string $nu_Contrato
 * @property double $vl_Contrato
 * @property string $dt_AssinaturaContrato
 * @property string $de_ObjetivoContrato
 * @property string $nu_ProcessoLicitatorio
 * @property integer $cd_Moeda
 * @property integer $tp_PessoaContratado
 * @property string $cd_CicContratado
 * @property string $nm_Contratado
 * @property string $dt_VencimentoContrato
 * @property integer $nu_DiarioOficial
 * @property string $dt_Publicacao
 * @property string $st_RecebeValor
 * @property integer $nu_CertidaoINSS
 * @property string $dt_CertidaoINSS
 * @property string $dt_ValidadeINSS
 * @property integer $nu_CertidaoFGTS
 * @property string $dt_CertidaoFGTS
 * @property string $dt_ValidadeFGTS
 * @property integer $nu_CertidaoFazendaEstadual
 * @property string $￼dt_CertidaoFazendaEstadual
 * @property string $￼dt_ValidadeFazendaEstadual
 * @property integer $nu_CertidaoFazendaMunicipal
 * @property string $dt_CertidaoFazendaMunicipal
 * @property string $dt_ValidadeFazendaMunicipal
 * @property integer $nu_CertidaoFazendaFederal
 * @property string $dt_CertidaoFazendaFederal
 * @property string $dt_ValidadeFazendaFederal
 * @property integer $nu_CertidaoOutras
 * @property string $dt_CertidaoOutras
 * @property string $dt_ValidadeCertidaoOutras
 * @property integer $tp_Contrato
 */
class Contrato extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Contrato the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contrato';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nu_Contrato, vl_Contrato, dt_AssinaturaContrato, de_ObjetivoContrato, nu_ProcessoLicitatorio, cd_Moeda, tp_PessoaContratado, cd_CicContratado, nm_Contratado, dt_VencimentoContrato, nu_DiarioOficial, dt_Publicacao, st_RecebeValor, nu_CertidaoINSS, dt_CertidaoINSS, dt_ValidadeINSS, nu_CertidaoFGTS, dt_CertidaoFGTS, dt_ValidadeFGTS, nu_CertidaoFazendaEstadual, dt_CertidaoFazendaEstadual, dt_ValidadeFazendaEstadual, nu_CertidaoFazendaMunicipal, dt_CertidaoFazendaMunicipal, dt_ValidadeFazendaMunicipal, nu_CertidaoFazendaFederal, dt_CertidaoFazendaFederal, dt_ValidadeFazendaFederal, nu_CertidaoOutras, dt_CertidaoOutras, dt_ValidadeCertidaoOutras, tp_Contrato', 'required'),
			array('cd_Moeda, tp_PessoaContratado, nu_DiarioOficial, tp_Contrato', 'numerical', 'integerOnly'=>true),
			array('dt_AssinaturaContrato, dt_VencimentoContrato, dt_Publicacao, dt_CertidaoINSS, dt_ValidadeINSS, dt_CertidaoFGTS, dt_ValidadeFGTS, dt_CertidaoFazendaMunicipal, dt_ValidadeFazendaMunicipal, dt_CertidaoFazendaEstadual, dt_ValidadeFazendaEstadual, dt_CertidaoFazendaFederal, dt_ValidadeFazendaFederal, dt_CertidaoOutras, dt_ValidadeCertidaoOutras', 'date', 'format'=>'dd/MM/yyyy'),
			array('vl_Contrato', 'numerical', 'numberPattern'=>'/([0-9][0-9]*?)(\.[0-9]{2})/', 'message'=>'{attribute} deve ter duas casas decimais, separadas por um ponto.'),
			array('nu_Contrato, nu_ProcessoLicitatorio, nu_CertidaoINSS, nu_CertidaoFGTS, nu_CertidaoFazendaEstadual, nu_CertidaoFazendaMunicipal, nu_CertidaoFazendaFederal, nu_CertidaoOutras', 'length', 'max'=>16),
			array('de_ObjetivoContrato, nm_Contratado', 'length', 'max'=>50),
			array('cd_CicContratado', 'length', 'max'=>14),
			array('st_RecebeValor', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nu_Contrato, vl_Contrato, dt_AssinaturaContrato, de_ObjetivoContrato, nu_ProcessoLicitatorio, cd_Moeda, tp_PessoaContratado, cd_CicContratado, nm_Contratado, dt_VencimentoContrato, nu_DiarioOficial, dt_Publicacao, st_RecebeValor, nu_CertidaoINSS, dt_CertidaoINSS, dt_ValidadeINSS, nu_CertidaoFGTS, dt_CertidaoFGTS, dt_ValidadeFGTS, nu_CertidaoFazendaEstadual, dt_CertidaoFazendaEstadual, dt_ValidadeFazendaEstadual, nu_CertidaoFazendaMunicipal, dt_CertidaoFazendaMunicipal, dt_ValidadeFazendaMunicipal, nu_CertidaoFazendaFederal, dt_CertidaoFazendaFederal, dt_ValidadeFazendaFederal, nu_CertidaoOutras, dt_CertidaoOutras, dt_ValidadeCertidaoOutras, tp_Contrato', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'moeda'=>array(self::BELONGS_TO,'TipoMoeda','cd_Moeda'),
			'pessoa'=>array(self::BELONGS_TO,'TipoPessoa','tp_PessoaContratado'),
			'tipo'=>array(self::BELONGS_TO,'TipoContrato','tp_Contrato'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nu_Contrato' => 'Número',
			'vl_Contrato' => 'Valor',
			'dt_AssinaturaContrato' => 'Dt. Assinatura',
			'de_ObjetivoContrato' => 'Objeto',
			'nu_ProcessoLicitatorio' => 'Processo Licitatório',
			'cd_Moeda' => 'Moeda',
			'moeda.descricao' => 'Moeda',
			'tp_PessoaContratado' => 'Tipo Pessoa',
			'pessoa.descricao' => 'Tipo Pessoa',
			'cd_CicContratado' => 'CPF/CNPJ',
			'nm_Contratado' => 'Nome',
			'dt_VencimentoContrato' => 'Dt. Vencimento',
			'nu_DiarioOficial' => 'DOE',
			'dt_Publicacao' => 'Dt. Publicação',
			'st_RecebeValor' => 'Recebe Valor',
			'nu_CertidaoINSS' => 'Certidão INSS',
			'dt_CertidaoINSS' => 'Data INSS',
			'dt_ValidadeINSS' => 'Validade INSS',
			'nu_CertidaoFGTS' => 'Certidão FGTS',
			'dt_CertidaoFGTS' => 'Data FGTS',
			'dt_ValidadeFGTS' => 'Validade FGTS',
			'nu_CertidaoFazendaEstadual' => 'Certidão Fazenda Estadual',
			'dt_CertidaoFazendaEstadual' => 'Data Fazenda Estadual',
			'dt_ValidadeFazendaEstadual' => 'Validade Fazenda Estadual',
			'nu_CertidaoFazendaMunicipal' => 'Certidão Fazenda Municipal',
			'dt_CertidaoFazendaMunicipal' => 'Data Fazenda Municipal',
			'dt_ValidadeFazendaMunicipal' => 'Validade Fazenda Municipal',
			'nu_CertidaoFazendaFederal' => 'Certidão Fazenda Federal',
			'dt_CertidaoFazendaFederal' => 'Data Fazenda Federal',
			'dt_ValidadeFazendaFederal' => 'Validade Fazenda Federal',
			'nu_CertidaoOutras' => 'Certidão Outra',
			'dt_CertidaoOutras' => 'Data Certidão Outra',
			'dt_ValidadeCertidaoOutras' => 'Validade Certidão Outra',
			'tp_Contrato' => 'Tipo',
			'tipo.descricao' => 'Tipo',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.
		
		$criteria=new CDbCriteria;

		$criteria->compare('nu_Contrato',$this->nu_Contrato,true);
		$criteria->compare('vl_Contrato',$this->vl_Contrato,true);
		$criteria->compare('date_format(dt_AssinaturaContrato,"%d/%m/%Y")',$this->dt_AssinaturaContrato,true);
		$criteria->compare('de_ObjetivoContrato',$this->de_ObjetivoContrato,true);
		$criteria->compare('nu_ProcessoLicitatorio',$this->nu_ProcessoLicitatorio,true);
		$criteria->compare('cd_Moeda',$this->cd_Moeda);
		$criteria->compare('tp_PessoaContratado',$this->tp_PessoaContratado);
		$criteria->compare('cd_CicContratado',$this->cd_CicContratado,true);
		$criteria->compare('nm_Contratado',$this->nm_Contratado,true);
		$criteria->compare('date_format(dt_VencimentoContrato,"%d/%m/%Y")',$this->dt_VencimentoContrato,true);
		$criteria->compare('nu_DiarioOficial',$this->nu_DiarioOficial,true);
		$criteria->compare('date_format(dt_Publicacao,"%d/%m/%Y")',$this->dt_Publicacao,true);
		$criteria->compare('st_RecebeValor',$this->st_RecebeValor);
		$criteria->compare('nu_CertidaoINSS',$this->nu_CertidaoINSS,true);
		$criteria->compare('date_format(dt_CertidaoINSS,"%d/%m/%Y")',$this->dt_CertidaoINSS,true);
		$criteria->compare('date_format(dt_ValidadeINSS,"%d/%m/%Y")',$this->dt_ValidadeINSS,true);
		$criteria->compare('nu_CertidaoFGTS',$this->nu_CertidaoFGTS,true);
		$criteria->compare('date_format(dt_CertidaoFGTS,"%d/%m/%Y")',$this->dt_CertidaoFGTS,true);
		$criteria->compare('date_format(dt_ValidadeFGTS,"%d/%m/%Y")',$this->dt_ValidadeFGTS,true);
		$criteria->compare('nu_CertidaoFazendaEstadual',$this->nu_CertidaoFazendaEstadual,true);
		$criteria->compare('date_format(dt_CertidaoFazendaEstadual,"%d/%m/%Y")', $this->dt_CertidaoFazendaEstadual,true);
		$criteria->compare('date_format(dt_ValidadeFazendaEstadual,"%d/%m/%Y")', $this->dt_ValidadeFazendaEstadual,true);
		$criteria->compare('nu_CertidaoFazendaMunicipal',$this->nu_CertidaoFazendaMunicipal,true);
		$criteria->compare('date_format(dt_CertidaoFazendaMunicipal,"%d/%m/%Y")',$this->dt_CertidaoFazendaMunicipal,true);
		$criteria->compare('date_format(dt_ValidadeFazendaMunicipal,"%d/%m/%Y")',$this->dt_ValidadeFazendaMunicipal,true);
		$criteria->compare('nu_CertidaoFazendaFederal',$this->nu_CertidaoFazendaFederal,true);
		$criteria->compare('date_format(dt_CertidaoFazendaFederal,"%d/%m/%Y")',$this->dt_CertidaoFazendaFederal,true);
		$criteria->compare('date_format(dt_ValidadeFazendaFederal,"%d/%m/%Y")',$this->dt_ValidadeFazendaFederal,true);
		$criteria->compare('nu_CertidaoOutras',$this->nu_CertidaoOutras,true);
		$criteria->compare('date_format(dt_CertidaoOutras,"%d/%m/%Y")',$this->dt_CertidaoOutras,true);
		$criteria->compare('date_format(dt_ValidadeCertidaoOutras,"%d/%m/%Y")',$this->dt_ValidadeCertidaoOutras,true);
		$criteria->compare('tp_Contrato',$this->tp_Contrato);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function formataREM()
	{
		$formatado=str_pad($this->nu_Contrato, 16, chr(32), STR_PAD_RIGHT);
		$formatado.=str_pad($this->formataValor($this->vl_Contrato), 16, '0', STR_PAD_LEFT);
		$formatado.=$this->formataData($this->dt_AssinaturaContrato);
		$formatado.=str_pad($this->de_ObjetivoContrato, 50, chr(32), STR_PAD_RIGHT); //Diferente do Documento
		$formatado.=str_pad($this->nu_ProcessoLicitatorio, 16, chr(32), STR_PAD_RIGHT);
		$formatado.=str_pad($this->cd_Moeda, 3, '0', STR_PAD_LEFT);
		$formatado.=$this->tp_PessoaContratado;
		$formatado.=str_pad($this->cd_CicContratado, 14, '0', STR_PAD_LEFT);
		$formatado.=str_pad($this->nm_Contratado, 50, chr(32), STR_PAD_RIGHT);
		$formatado.=$this->formataData($this->dt_VencimentoContrato);
		$formatado.=str_pad($this->nu_DiarioOficial, 6, '0', STR_PAD_LEFT);
		$formatado.=$this->formataData($this->dt_Publicacao);
		$formatado.=$this->st_RecebeValor;
		$formatado.=str_pad($this->nu_CertidaoINSS, 16, '0', STR_PAD_LEFT);
		$formatado.=$this->formataData($this->dt_CertidaoINSS);
		$formatado.=$this->formataData($this->dt_ValidadeINSS);
		$formatado.=str_pad($this->nu_CertidaoFGTS, 16, '0', STR_PAD_LEFT);
		$formatado.=$this->formataData($this->dt_CertidaoFGTS);
		$formatado.=$this->formataData($this->dt_ValidadeFGTS);
		$formatado.=str_pad($this->nu_CertidaoFazendaEstadual, 16, '0', STR_PAD_LEFT);
		$formatado.=$this->formataData($this->dt_CertidaoFazendaEstadual);
		$formatado.=$this->formataData($this->dt_ValidadeFazendaEstadual);
		$formatado.=str_pad($this->nu_CertidaoFazendaMunicipal, 16, '0', STR_PAD_LEFT);
		$formatado.=$this->formataData($this->dt_CertidaoFazendaMunicipal);
		$formatado.=$this->formataData($this->dt_ValidadeFazendaMunicipal);
		$formatado.=str_pad($this->nu_CertidaoFazendaFederal, 16, '0', STR_PAD_LEFT);
		$formatado.=$this->formataData($this->dt_CertidaoFazendaFederal);
		$formatado.=$this->formataData($this->dt_ValidadeFazendaFederal);
		$formatado.=str_pad($this->nu_CertidaoOutras, 16, '0', STR_PAD_LEFT);
		$formatado.=$this->formataData($this->dt_CertidaoOutras);
		$formatado.=$this->formataData($this->dt_ValidadeCertidaoOutras);
		$formatado.=str_pad($this->tp_Contrato, 2, '0', STR_PAD_LEFT);
		$formatado.=chr(13).chr(10);
	
		return $formatado;
	}
	
	public function getSimNaoOptions()
	{
		return array(
				'S'=>'Sim',
				'N'=>'Não',
		);
	}
	
	public function getRecebeValorText()
	{
		$options=$this->simNaoOptions;
		return $options[$this->st_RecebeValor];
	}
	
	private function formataValor($valor)
	{
		return str_replace('.', ',', $valor);
	}
	
	private function formataData($data)
	{
		return date('Ymd', CDateTimeParser::parse($data, Yii::app()->locale->dateFormat));
	}
	
	protected function beforeSave()
	{
		foreach($this->metadata->tableSchema->columns as $columnName => $column)
		{
			if ($column->dbType == 'date')
			{
				$this->$columnName = date('Y-m-d', CDateTimeParser::parse($this->$columnName, Yii::app()->locale->dateFormat));
			}
			elseif ($column->dbType == 'datetime')
			{
				$this->$columnName = date('Y-m-d H:i:s', CDateTimeParser::parse($this->$columnName, Yii::app()->locale->dateFormat));
			}
		}
	
		return parent::beforeSave();
	}
	
	protected function afterFind()
	{
		foreach($this->metadata->tableSchema->columns as $columnName => $column)
		{
			if (!strlen($this->$columnName)) continue;
			
			if ($column->dbType == 'date')
			{
				$this->$columnName = Yii::app()->dateFormatter->formatDateTime(CDateTimeParser::parse($this->$columnName, 'yyyy-MM-dd'),'medium',null);
			}
			elseif ($column->dbType == 'datetime')
			{
				$this->$columnName = Yii::app()->dateFormatter->formatDateTime(CDateTimeParser::parse($this->$columnName, 'yyyy-MM-dd hh:mm:ss'));
			}
		}
	
		return parent::afterFind();
	}
}