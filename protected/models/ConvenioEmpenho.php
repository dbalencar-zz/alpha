<?php

/**
 * This is the model class for table "convenio_empenho".
 *
 * The followings are the available columns in table 'convenio_empenho':
 * @property string $id
 * @property string $nu_NotaEmpenho
 * @property integer $ano_Empenho
 * @property integer $cd_UnidadeOrcamentaria
 * @property string $convenio_id
 *
 * The followings are the available model relations:
 * @property Convenio $convenio
 */
class ConvenioEmpenho extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'convenio_empenho';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nu_NotaEmpenho, ano_Empenho, cd_UnidadeOrcamentaria, convenio_id', 'required'),
			array('ano_Empenho, cd_UnidadeOrcamentaria', 'numerical', 'integerOnly'=>true),
			array('nu_NotaEmpenho, convenio_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nu_NotaEmpenho, ano_Empenho, cd_UnidadeOrcamentaria, convenio_id', 'safe', 'on'=>'search'),
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
			'convenio' => array(self::BELONGS_TO, 'Convenio', 'convenio_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nu_NotaEmpenho' => 'Nota de Empenho',
			'ano_Empenho' => 'Ano de Empenho',
			'cd_UnidadeOrcamentaria' => 'Unidade Orçamentária',
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
	public function search($convenio)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('convenio_id',$convenio->id);
		$criteria->compare('nu_NotaEmpenho',$this->nu_NotaEmpenho,true);
		$criteria->compare('ano_Empenho',$this->ano_Empenho);
		$criteria->compare('cd_UnidadeOrcamentaria',$this->cd_UnidadeOrcamentaria);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	private function mb_str_pad($ps_input, $pn_pad_length, $ps_pad_string = " ", $pn_pad_type = STR_PAD_RIGHT, $ps_encoding = NULL) {
		mb_internal_encoding ( 'utf-8' );
		$ret = "";
	
		if (is_null ( $ps_encoding ))
			$ps_encoding = mb_internal_encoding ();
	
		$hn_length_of_padding = $pn_pad_length - mb_strlen ( $ps_input, $ps_encoding );
		$hn_psLength = mb_strlen ( $ps_pad_string, $ps_encoding ); // pad string length
	
		if ($hn_psLength <= 0 || $hn_length_of_padding <= 0) {
			// Padding string equal to 0:
			//
			$ret = $ps_input;
		} else {
			$hn_repeatCount = floor ( $hn_length_of_padding / $hn_psLength ); // how many times repeat
	
			if ($pn_pad_type == STR_PAD_BOTH) {
				$hs_lastStrLeft = "";
				$hs_lastStrRight = "";
				$hn_repeatCountLeft = $hn_repeatCountRight = ($hn_repeatCount - $hn_repeatCount % 2) / 2;
	
				$hs_lastStrLength = $hn_length_of_padding - 2 * $hn_repeatCountLeft * $hn_psLength; // the rest length to pad
				$hs_lastStrLeftLength = $hs_lastStrRightLength = floor ( $hs_lastStrLength / 2 ); // the rest length divide to 2 parts
				$hs_lastStrRightLength += $hs_lastStrLength % 2; // the last char add to right side
	
				$hs_lastStrLeft = mb_substr ( $ps_pad_string, 0, $hs_lastStrLeftLength, $ps_encoding );
				$hs_lastStrRight = mb_substr ( $ps_pad_string, 0, $hs_lastStrRightLength, $ps_encoding );
	
				$ret = str_repeat ( $ps_pad_string, $hn_repeatCountLeft ) . $hs_lastStrLeft;
				$ret .= $ps_input;
				$ret .= str_repeat ( $ps_pad_string, $hn_repeatCountRight ) . $hs_lastStrRight;
			} else {
				$hs_lastStr = mb_substr ( $ps_pad_string, 0, $hn_length_of_padding % $hn_psLength, $ps_encoding ); // last part of pad string
	
				if ($pn_pad_type == STR_PAD_LEFT)
					$ret = str_repeat ( $ps_pad_string, $hn_repeatCount ) . $hs_lastStr . $ps_input;
				else
					$ret = $ps_input . str_repeat ( $ps_pad_string, $hn_repeatCount ) . $hs_lastStr;
			}
		}
	
		return $ret;
	}
	
	public function formataREM() {
		$formatado = $this->mb_str_pad ( $this->convenio->nu_Convenio, 16, chr ( 32 ), STR_PAD_RIGHT );
		$formatado .= str_pad ($this->nu_NotaEmpenho, 10, chr(32), STR_PAD_RIGHT );
		$formatado .= str_pad ( $this->ano_Empenho, 4, '0', STR_PAD_LEFT );
		$formatado .= str_pad ($this->cd_UnidadeOrcamentaria, 6, chr(32), STR_PAD_RIGHT );
		$formatado .= chr ( 13 ) . chr ( 10 );
	
		return $formatado;
	}

	public function beforeSave()
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
	}
	
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ConvenioEmpenho the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
