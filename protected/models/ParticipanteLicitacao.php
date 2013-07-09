<?php

/**
 * This is the model class for table "participante_licitacao".
 *
 * The followings are the available columns in table 'participante_licitacao':
 * @property string $id
 * @property string $nu_ProcessoLicitatorio
 * @property integer $cd_CicParticipante
 * @property integer $tp_Pessoa
 * @property string $nm_Participante
 * @property integer $tp_Participacao
 * @property integer $cd_CGCConsorcio
 */
class ParticipanteLicitacao extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ParticipanteLicitacao the static model class
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
		return 'participante_licitacao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cd_CicParticipante, tp_Pessoa, nm_Participante, tp_Participacao, tp_Convidado', 'required'),
			array('cd_CicParticipante, tp_Pessoa, tp_Participacao, cd_CGCConsorcio', 'numerical', 'integerOnly'=>true),
			array('nm_Participante', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cd_CicParticipante, tp_Pessoa, nm_Participante, tp_Participacao, cd_CGCConsorcio, tp_Convidado', 'safe', 'on'=>'search'),
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
			'licitacao'=>array(self::BELONGS_TO,'Licitacao','licitacao_id'),
			'pessoa'=>array(self::BELONGS_TO,'TipoPessoa','tp_Pessoa'),
			'participacao'=>array(self::BELONGS_TO,'TipoParticipante','tp_Participacao'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cd_CicParticipante' => 'CPF/CNPJ',
			'tp_Pessoa' => 'Tipo',
			'pessoa.descricao' => 'Tipo',
			'nm_Participante' => 'Nome',
			'tp_Participacao' => 'Participação',
			'participacao.descricao' => 'Participação',
			'cd_CGCConsorcio' => 'Consórcio',
			'tp_Convidado' => 'Convidado',
			'convidadoText' => 'Convidado',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search($licitacao)
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('licitacao_id',$licitacao->id,true);
		$criteria->compare('cd_CicParticipante',$this->cd_CicParticipante);
		$criteria->compare('tp_Pessoa',$this->tp_Pessoa);
		$criteria->compare('nm_Participante',$this->nm_Participante,true);
		$criteria->compare('tp_Participacao',$this->tp_Participacao);
		$criteria->compare('cd_CGCConsorcio',$this->cd_CGCConsorcio);
		$criteria->compare('tp_Convidado',$this->tp_Convidado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getSimNaoOptions()
	{
		return array(
				'S'=>'Sim',
				'N'=>'Não',
		);
	}
	
	public function getConvidadoText()
	{
		$options=$this->simNaoOptions;
		return $options[$this->tp_Convidado];
	}
	
	public function formataREM()
	{
		$formatado=str_pad($this->licitacao->nu_ProcessoLicitatorio, 16, chr(32), STR_PAD_RIGHT);
		$formatado.=str_pad($this->cd_CicParticipante, 14, '0', STR_PAD_LEFT);
		$formatado.=$this->tp_Pessoa;
		$formatado.=str_pad($this->nm_Participante, 50, chr(32), STR_PAD_RIGHT);
		$formatado.=$this->tp_Participacao;
		$formatado.=str_pad($this->cd_CGCConsorcio, 14, '0', STR_PAD_LEFT);
		$formatado.=$this->tp_Convidado;
		$formatado.=chr(13).chr(10);
	
		return $formatado;
	}
}