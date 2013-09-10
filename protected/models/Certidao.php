<?php

/**
 * This is the model class for table "Certidao".
 *
 * The followings are the available columns in table 'Certidao':
 * @property string $id
 * @property string $nu_ProcessoLicitatorio
 * @property integer $cd_CicParticipante
 * @property integer $tp_Certidao
 * @property integer $tp_Pessoa
 * @property string $nu_Certidao
 * @property string $dt_EmissaoCertidao
 * @property string $dt_ValidadeCertidao
 */
class Certidao extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Certidao the static model class
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
		return 'certidao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tp_Certidao, tp_Pessoa, nu_Certidao, dt_EmissaoCertidao, dt_ValidadeCertidao', 'required'),
			array('tp_Certidao, tp_Pessoa', 'numerical', 'integerOnly'=>true),
			array('nu_Certidao', 'length', 'max'=>60),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('tp_Certidao, tp_Pessoa, nu_Certidao, dt_EmissaoCertidao, dt_ValidadeCertidao', 'safe', 'on'=>'search'),
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
			'participante'=>array(self::BELONGS_TO,'ParticipanteLicitacao','participante_licitacao_id'),
			'pessoa'=>array(self::BELONGS_TO,'TipoPessoa','tp_Pessoa'),
			'tipo'=>array(self::BELONGS_TO,'TipoCertidao','tp_Certidao'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tp_Certidao' => 'Tipo',
			'tipo.descricao' => 'Tipo',
			'tp_Pessoa' => 'Tp Pessoa',
			'pessoa.descricao' => 'Pessoa',
			'nu_Certidao' => 'Certidão',
			'dt_EmissaoCertidao' => 'Emissão',
			'dt_ValidadeCertidao' => 'Validade',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search($participante)
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('participante_licitacao_id', $participante->id);
		$criteria->compare('tp_Certidao',$this->tp_Certidao);
		$criteria->compare('tp_Pessoa',$this->tp_Pessoa);
		$criteria->compare('nu_Certidao',$this->nu_Certidao,true);
		$criteria->compare('dt_EmissaoCertidao',$this->dt_EmissaoCertidao,true);
		$criteria->compare('dt_ValidadeCertidao',$this->dt_ValidadeCertidao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function formataREM()
	{
		$formatado=str_pad($this->participante->licitacao->nu_ProcessoLicitatorio, 18, chr(32), STR_PAD_RIGHT);
		$formatado.=str_pad($this->participante->cd_CicParticipante, 14, '0', STR_PAD_LEFT);
		$formatado.=str_pad($this->tp_Certidao, 2, '0', STR_PAD_LEFT);
		$formatado.=$this->tp_Pessoa;
		$formatado.=str_pad($this->nu_Certidao, 60, chr(32), STR_PAD_RIGHT);		
		$formatado.=$this->formataData($this->dt_EmissaoCertidao);
		$formatado.=$this->formataData($this->dt_ValidadeCertidao);
		$formatado.=chr(13).chr(10);
	
		//iconv(mb_detect_encoding($formatado, mb_detect_order(), true), "UTF-8", $formatado);
	
		return $formatado;
	}
	
	private function formataData($data)
	{
		return date('Ymd', CDateTimeParser::parse($data, Yii::app()->locale->dateFormat));
	}
	
	protected function beforeSave()
	{
		if($this->isNewRecord)
		{
			$this->created_by=Yii::app()->user->UID;
			$this->created_at=new CDbExpression('NOW()');
		}
		else
		{
			$this->updated_by=Yii::app()->user->UID;
			$this->updated_at=new CDbExpression('NOW()');
		}
		
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