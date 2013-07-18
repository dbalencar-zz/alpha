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
				array('nu_ProcessoLicitatorio, nu_DiarioOficial, dt_PublicacaoEdital, cd_Modalidade, de_ObjetoLicitacao, vl_TotalPrevisto, nu_Edital, tp_Licitacao, competencia_id', 'required'),
				array('nu_DiarioOficial, cd_Modalidade', 'numerical', 'integerOnly'=>true),
				array('vl_TotalPrevisto', 'numerical'),
				array('nu_ProcessoLicitatorio, nu_Edital', 'length', 'max'=>16),
				array('de_ObjetoLicitacao', 'length', 'max'=>50),
				array('tp_Licitacao', 'length', 'max'=>1),
				// The following rule is used by search().
				// Please remove those attributes that should not be searched.
				array('nu_ProcessoLicitatorio, nu_DiarioOficial, dt_PublicacaoEdital, cd_Modalidade, de_ObjetoLicitacao, vl_TotalPrevisto, nu_Edital, tp_Licitacao, competencia_id', 'safe', 'on'=>'search'),
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
				'participantes'=>array(self::HAS_MANY,'ParticipanteLicitacao','licitacao_id'),
				'itens'=>array(self::HAS_MANY,'Item','licitacao_id'),
				'dotacoes'=>array(self::HAS_MANY,'LicitacaoDotacao','licitacao_id'),
				'publicacoes'=>array(self::HAS_MANY,'Publicacao','licitacao_id'),
		);
	}

	public function defaultScope()
	{
		return array(
				'condition'=>'competencia_id='.Yii::app()->competencia->id,
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
				'tipoLicitacaoText' => 'Tipo',
				'competencia_id' => 'Competência',
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

		$criteria->compare ( 'competencia_id', $this->competencia_id );
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

	public function getTipoLicitacaoOptions()
	{
		return array(
				'I'=>'Item',
				'L'=>'Lote',
		);
	}

	public function getTipoLicitacaoText()
	{
		$options=$this->tipoLicitacaoOptions;
		return $options[$this->tp_Licitacao];
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

	public function formataREM()
	{
		$formatado=str_pad($this->nu_ProcessoLicitatorio, 16, chr(32), STR_PAD_RIGHT);
		$formatado.=str_pad($this->nu_DiarioOficial, 6, '0', STR_PAD_LEFT);
		$formatado.=$this->formataData($this->dt_PublicacaoEdital);
		$formatado.=str_pad($this->cd_Modalidade, 2, '0', STR_PAD_LEFT);
		$formatado.=$this->mb_str_pad($this->de_ObjetoLicitacao, 50, chr(32), STR_PAD_RIGHT);
		$formatado.=str_pad($this->formataValor($this->vl_TotalPrevisto), 16, '0', STR_PAD_LEFT);
		$formatado.=str_pad($this->nu_Edital, 16, chr(32), STR_PAD_RIGHT);
		$formatado.=$this->tp_Licitacao;
		$formatado.=chr(13).chr(10);

		return $formatado;
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