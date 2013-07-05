<?php

/**
 * This is the model class for table "Item".
 *
 * The followings are the available columns in table 'Item':
 * @property string $id
 * @property string $nu_ProcessoLicitatorio
 * @property string $nu_SequencialItem
 * @property string $de_ItemLicitacao
 * @property integer $qt_ItemLicitado
 * @property string $dt_HomologacaoItem
 * @property string $dt_PublicacaoHomologacao
 * @property string $cd_ItemLote
 */
class Item extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Item the static model class
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
		return 'item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nu_SequencialItem, de_ItemLicitacao, qt_ItemLicitado, dt_HomologacaoItem, dt_PublicacaoHomologacao, cd_ItemLote', 'required'),
			array('qt_ItemLicitado', 'numerical', 'integerOnly'=>true),
			array('nu_SequencialItem', 'length', 'max'=>5),
			array('de_ItemLicitacao', 'length', 'max'=>60),
			array('cd_ItemLote', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nu_SequencialItem, de_ItemLicitacao, qt_ItemLicitado, dt_HomologacaoItem, dt_PublicacaoHomologacao, cd_ItemLote', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nu_SequencialItem' => 'Número Seq',
			'de_ItemLicitacao' => 'Descrição',
			'qt_ItemLicitado' => 'Quantidade',
			'dt_HomologacaoItem' => 'Homologação',
			'dt_PublicacaoHomologacao' => 'Publicação',
			'cd_ItemLote' => 'Item/Lote',
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

		$criteria->compare('licitacao_id',$licitacao->id);
		$criteria->compare('nu_SequencialItem',$this->nu_SequencialItem,true);
		$criteria->compare('de_ItemLicitacao',$this->de_ItemLicitacao,true);
		$criteria->compare('qt_ItemLicitado',$this->qt_ItemLicitado,true);
		$criteria->compare('dt_HomologacaoItem',$this->dt_HomologacaoItem,true);
		$criteria->compare('dt_PublicacaoHomologacao',$this->dt_PublicacaoHomologacao,true);
		$criteria->compare('cd_ItemLote',$this->cd_ItemLote,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
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