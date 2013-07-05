<?php

/**
 * This is the model class for table "Licitacao".
 *
 * The followings are the available columns in table 'Licitacao':
 * @property string $id
 * @property string $nu_ProcessoLicitatorio
 * @property integer $nu_DiarioOficial
 * @property string $dt_PublicacaoEdital
 * @property integer $cd_Modalidade
 * @property string $de_ObjetoLicitacao
 * @property double $vl_TotalPrevisto
 * @property string $nu_Edital
 * @property string $tp_Licitacao
 */
class Licitacao extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Licitacao the static model class
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
		return 'licitacao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nu_ProcessoLicitatorio, nu_DiarioOficial, dt_PublicacaoEdital, cd_Modalidade, de_ObjetoLicitacao, vl_TotalPrevisto, nu_Edital, tp_Licitacao', 'required'),
			array('nu_DiarioOficial, cd_Modalidade', 'numerical', 'integerOnly'=>true),
			array('vl_TotalPrevisto', 'numerical'),
			array('nu_ProcessoLicitatorio, nu_Edital', 'length', 'max'=>16),
			array('de_ObjetoLicitacao', 'length', 'max'=>50),
			array('tp_Licitacao', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nu_ProcessoLicitatorio, nu_DiarioOficial, dt_PublicacaoEdital, cd_Modalidade, de_ObjetoLicitacao, vl_TotalPrevisto, nu_Edital, tp_Licitacao', 'safe', 'on'=>'search'),
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
			'modalidade'=>array(self::BELONGS_TO,'Modalidade','cd_Modalidade'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nu_ProcessoLicitatorio' => 'Número',
			'nu_DiarioOficial' => 'DOE',
			'dt_PublicacaoEdital' => 'Publicação',
			'cd_Modalidade' => 'Modalidade',
			'de_ObjetoLicitacao' => 'Objeto',
			'vl_TotalPrevisto' => 'Valor Total',
			'nu_Edital' => 'Edital',
			'tp_Licitacao' => 'Tipo',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('nu_ProcessoLicitatorio',$this->nu_ProcessoLicitatorio,true);
		$criteria->compare('nu_DiarioOficial',$this->nu_DiarioOficial);
		$criteria->compare('dt_PublicacaoEdital',$this->dt_PublicacaoEdital,true);
		$criteria->compare('cd_Modalidade',$this->cd_Modalidade);
		$criteria->compare('de_ObjetoLicitacao',$this->de_ObjetoLicitacao,true);
		$criteria->compare('vl_TotalPrevisto',$this->vl_TotalPrevisto);
		$criteria->compare('nu_Edital',$this->nu_Edital,true);
		$criteria->compare('tp_Licitacao',$this->tp_Licitacao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function tipoLicitacaoOptions()
	{
		return array(
			'I'=>'Item',
			'L'=>'Lote',
		);
	}
	
	public function getTipoLicitacaoText()
	{
		$options=$this->tipoLicitacaoOptions();
		return $options[$this->tp_Licitacao];
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