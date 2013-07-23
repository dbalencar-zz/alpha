<?php

/**
 * This is the model class for table "publicacao".
 *
 * The followings are the available columns in table 'publicacao':
 * @property string $id
 * @property string $dt_PublicacaoEdital
 * @property integer $nu_SequencialPublicacao
 * @property string $nm_VeiculoComunicacao
 * @property string $licitacao_id
 *
 * The followings are the available model relations:
 * @property Licitacao $licitacao
 */
class Publicacao extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'publicacao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dt_PublicacaoEdital, nu_SequencialPublicacao, nm_VeiculoComunicacao, licitacao_id', 'required'),
			array('nu_SequencialPublicacao', 'numerical', 'integerOnly'=>true),
			array('nm_VeiculoComunicacao', 'length', 'max'=>50),
			array('licitacao_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, dt_PublicacaoEdital, nu_SequencialPublicacao, nm_VeiculoComunicacao, licitacao_id', 'safe', 'on'=>'search'),
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
			'licitacao' => array(self::BELONGS_TO, 'Licitacao', 'licitacao_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'dt_PublicacaoEdital' => 'Publicação Edital',
			'nu_SequencialPublicacao' => 'Sequencial Publicação',
			'nm_VeiculoComunicacao' => 'Veículo Comunicação',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search($licitacao)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('licitacao_id',$licitacao->id);
		$criteria->compare('dt_PublicacaoEdital',$this->dt_PublicacaoEdital,true);
		$criteria->compare('nu_SequencialPublicacao',$this->nu_SequencialPublicacao);
		$criteria->compare('nm_VeiculoComunicacao',$this->nm_VeiculoComunicacao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	private function mb_str_pad($ps_input, $pn_pad_length, $ps_pad_string = " ", $pn_pad_type = STR_PAD_RIGHT, $ps_encoding = NULL) {
		mb_internal_encoding('utf-8');
		$ret = "";
	
		if (is_null($ps_encoding))
			$ps_encoding = mb_internal_encoding();
	
		$hn_length_of_padding = $pn_pad_length - mb_strlen($ps_input, $ps_encoding);
		$hn_psLength = mb_strlen($ps_pad_string, $ps_encoding); // pad string length
	
		if ($hn_psLength <= 0 || $hn_length_of_padding <= 0) {
			// Padding string equal to 0:
			//
			$ret = $ps_input;
		}
		else {
			$hn_repeatCount = floor($hn_length_of_padding / $hn_psLength); // how many times repeat
	
			if ($pn_pad_type == STR_PAD_BOTH) {
				$hs_lastStrLeft = "";
				$hs_lastStrRight = "";
				$hn_repeatCountLeft = $hn_repeatCountRight = ($hn_repeatCount - $hn_repeatCount % 2) / 2;
	
				$hs_lastStrLength = $hn_length_of_padding - 2 * $hn_repeatCountLeft * $hn_psLength; // the rest length to pad
				$hs_lastStrLeftLength = $hs_lastStrRightLength = floor($hs_lastStrLength / 2);      // the rest length divide to 2 parts
				$hs_lastStrRightLength += $hs_lastStrLength % 2; // the last char add to right side
	
				$hs_lastStrLeft = mb_substr($ps_pad_string, 0, $hs_lastStrLeftLength, $ps_encoding);
				$hs_lastStrRight = mb_substr($ps_pad_string, 0, $hs_lastStrRightLength, $ps_encoding);
	
				$ret = str_repeat($ps_pad_string, $hn_repeatCountLeft) . $hs_lastStrLeft;
				$ret .= $ps_input;
				$ret .= str_repeat($ps_pad_string, $hn_repeatCountRight) . $hs_lastStrRight;
			}
			else {
				$hs_lastStr = mb_substr($ps_pad_string, 0, $hn_length_of_padding % $hn_psLength, $ps_encoding); // last part of pad string
	
				if ($pn_pad_type == STR_PAD_LEFT)
					$ret = str_repeat($ps_pad_string, $hn_repeatCount) . $hs_lastStr . $ps_input;
				else
					$ret = $ps_input . str_repeat($ps_pad_string, $hn_repeatCount) . $hs_lastStr;
			}
		}
	
		return $ret;
	}
	
	public function formataREM() {
		$formatado = str_pad ( $this->licitacao->nu_ProcessoLicitatorio, 16, chr ( 32 ), STR_PAD_RIGHT );
		$formatado .= $this->formataData ($this->dt_PublicacaoEdital);
		$formatado .= str_pad ( $this->nu_SequencialPublicacao, 2, '0', STR_PAD_LEFT );		
		$formatado .= $this->mb_str_pad ( $this->nm_VeiculoComunicacao, 50, chr ( 32 ), STR_PAD_RIGHT );
		$formatado .= chr ( 13 ) . chr ( 10 );
	
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
	
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Publicacao the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
