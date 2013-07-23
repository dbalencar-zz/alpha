<?php

/**
 * This is the model class for table "participante_convenio".
 *
 * The followings are the available columns in table 'participante_convenio':
 * @property string $id
 * @property integer $cd_CicParticipante
 * @property integer $tp_PessoaParticipante
 * @property string $nm_Participante
 * @property double $vl_Participacao
 * @property double $vl_PercentualParticipacao
 * @property string $nu_CertidaoCASAN
 * @property string $dt_CertidaoCASAN
 * @property string $dt_ValidadeCertidaoCASAN
 * @property string $nu_CertidaoCELESC
 * @property string $dt_CertidaoCELESC
 * @property string $dt_ValidadeCertidaoCELESC
 * @property string $nu_CertidaoIPESC
 * @property string $dt_CertidaoIPESC
 * @property string $dt_ValidadeCertidaoIPESC
 * @property string $nu_CertidaoFazendaMunicipal
 * @property string $dt_CertidaoFazendaMunicipal
 * @property string $dt_ValidadeFazendaMunicipal
 * @property string $nu_CertidaoFazendaFederal
 * @property string $dt_CertidaoFazendaFederal
 * @property string $dt_ValidadeFazendaFederal
 * @property string $nu_CertidaoOutras
 * @property string $dt_CertidaoOutras
 * @property string $dt_ValidadeCertidaoOutras
 */
class ParticipanteConvenio extends CActiveRecord {
	/**
	 * Returns the static model of the specified AR class.
	 * 
	 * @param string $className
	 *        	active record class name.
	 * @return ParticipanteConvenio the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model ( $className );
	}
	
	/**
	 *
	 * @return string the associated database table name
	 */
	public function tableName() {
		return 'participante_convenio';
	}
	
	/**
	 *
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array (
				array (
						'cd_CicParticipante, tp_PessoaParticipante, nm_Participante, vl_Participacao, vl_PercentualParticipacao, nu_CertidaoCASAN, dt_CertidaoCASAN, dt_ValidadeCertidaoCASAN, nu_CertidaoCELESC, dt_CertidaoCELESC, dt_ValidadeCertidaoCELESC, nu_CertidaoIPESC, dt_CertidaoIPESC, dt_ValidadeCertidaoIPESC, nu_CertidaoFazendaMunicipal, dt_CertidaoFazendaMunicipal, dt_ValidadeFazendaMunicipal, nu_CertidaoFazendaFederal, dt_CertidaoFazendaFederal, dt_ValidadeFazendaFederal, nu_CertidaoOutras, dt_CertidaoOutras, dt_ValidadeCertidaoOutras',
						'required' 
				),
				array (
						'cd_CicParticipante, tp_PessoaParticipante',
						'numerical',
						'integerOnly' => true 
				),
				array (
						'dt_CertidaoCASAN, dt_ValidadeCertidaoCASAN, dt_CertidaoCELESC, dt_ValidadeCertidaoCELESC, dt_CertidaoIPESC, dt_ValidadeCertidaoIPESC, dt_CertidaoFazendaMunicipal, dt_ValidadeFazendaMunicipal, dt_CertidaoFazendaFederal, dt_ValidadeFazendaFederal, dt_CertidaoOutras, dt_ValidadeCertidaoOutras',
						'date',
						'format' => 'dd/MM/yyyy' 
				),
				array (
						'vl_Participacao, vl_PercentualParticipacao',
						'numerical',
						'numberPattern' => '/([0-9][0-9]*?)(\.[0-9]{2})/',
						'message' => '{attribute} deve ter duas casas decimais, separadas por um ponto.' 
				),
				array (
						'nm_Participante',
						'length',
						'max' => 50 
				),
				array (
						'nu_CertidaoCASAN, nu_CertidaoCELESC, nu_CertidaoIPESC, nu_CertidaoFazendaMunicipal, nu_CertidaoFazendaFederal, nu_CertidaoOutras',
						'length',
						'max' => 25 
				),
				// The following rule is used by search().
				// Please remove those attributes that should not be searched.
				array (
						'cd_CicParticipante, tp_PessoaParticipante, nm_Participante, vl_Participacao, vl_PercentualParticipacao, nu_CertidaoCASAN, dt_CertidaoCASAN, dt_ValidadeCertidaoCASAN, nu_CertidaoCELESC, dt_CertidaoCELESC, dt_ValidadeCertidaoCELESC, nu_CertidaoIPESC, dt_CertidaoIPESC, dt_ValidadeCertidaoIPESC, nu_CertidaoFazendaMunicipal, dt_CertidaoFazendaMunicipal, dt_ValidadeFazendaMunicipal, nu_CertidaoFazendaFederal, dt_CertidaoFazendaFederal, dt_ValidadeFazendaFederal, nu_CertidaoOutras, dt_CertidaoOutras, dt_ValidadeCertidaoOutras',
						'safe',
						'on' => 'search' 
				) 
		);
	}
	
	/**
	 *
	 * @return array relational rules.
	 */
	public function relations() {
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array (
				'convenio' => array (
						self::BELONGS_TO,
						'Convenio',
						'convenio_id' 
				),
				'pessoa' => array (
						self::BELONGS_TO,
						'TipoPessoa',
						'tp_PessoaParticipante' 
				) 
		);
	}
	
	/**
	 *
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		return array (
				'id' => 'ID',
				'cd_CicParticipante' => 'CPF/CNPJ',
				'tp_PessoaParticipante' => 'Tipo Pessoa',
				'pessoa.descricao' => 'Tipo Pessoa',
				'nm_Participante' => 'Nome',
				'vl_Participacao' => 'Valor de Participação',
				'vl_PercentualParticipacao' => 'Percentual de Participação',
				'nu_CertidaoCASAN' => 'Certidão CASAN',
				'dt_CertidaoCASAN' => 'Data CASAN',
				'dt_ValidadeCertidaoCASAN' => 'Validade CASAN',
				'nu_CertidaoCELESC' => 'Certidão CELESC',
				'dt_CertidaoCELESC' => 'Data CELESC',
				'dt_ValidadeCertidaoCELESC' => 'Validade CELESC',
				'nu_CertidaoIPESC' => 'Certidão IPESC',
				'dt_CertidaoIPESC' => 'Data IPESC',
				'dt_ValidadeCertidaoIPESC' => 'Validade IPESC',
				'nu_CertidaoFazendaMunicipal' => 'Certidão da Fazenda Municipal',
				'dt_CertidaoFazendaMunicipal' => 'Data Fazenda Municipal',
				'dt_ValidadeFazendaMunicipal' => 'Validade Fazenda Municipal',
				'nu_CertidaoFazendaFederal' => 'Certidão da Fazenda Federal',
				'dt_CertidaoFazendaFederal' => 'Data Fazenda Federal',
				'dt_ValidadeFazendaFederal' => 'Validade Fazenda Federal',
				'nu_CertidaoOutras' => 'Outra Certidão',
				'dt_CertidaoOutras' => 'Data Outra Certidão',
				'dt_ValidadeCertidaoOutras' => 'Validade Outra Certidão' 
		);
	}
	
	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * 
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search($convenio) {
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.
		$criteria = new CDbCriteria ();
		
		$criteria->compare ( 'convenio_id', $convenio->id );
		$criteria->compare ( 'cd_CicParticipante', $this->cd_CicParticipante, true );
		$criteria->compare ( 'tp_PessoaParticipante', $this->tp_PessoaParticipante );
		$criteria->compare ( 'nm_Participante', $this->nm_Participante, true );
		$criteria->compare ( 'vl_Participacao', $this->vl_Participacao, true );
		$criteria->compare ( 'vl_PercentualParticipacao', $this->vl_PercentualParticipacao, true );
		$criteria->compare ( 'nu_CertidaoCASAN', $this->nu_CertidaoCASAN, true );
		$criteria->compare ( 'date_format(dt_CertidaoCASAN,"%d/%m/%Y")', $this->dt_CertidaoCASAN, true );
		$criteria->compare ( 'date_format(dt_ValidadeCertidaoCASAN,"%d/%m/%Y")', $this->dt_ValidadeCertidaoCASAN, true );
		$criteria->compare ( 'nu_CertidaoCELESC', $this->nu_CertidaoCELESC, true );
		$criteria->compare ( 'date_format(dt_CertidaoCELESC,"%d/%m/%Y")', $this->dt_CertidaoCELESC, true );
		$criteria->compare ( 'date_format(dt_ValidadeCertidaoCELESC,"%d/%m/%Y")', $this->dt_ValidadeCertidaoCELESC, true );
		$criteria->compare ( 'nu_CertidaoIPESC', $this->nu_CertidaoIPESC, true );
		$criteria->compare ( 'date_format(dt_CertidaoIPESC,"%d/%m/%Y")', $this->dt_CertidaoIPESC, true );
		$criteria->compare ( 'date_format(dt_ValidadeCertidaoIPESC,"%d/%m/%Y")', $this->dt_ValidadeCertidaoIPESC, true );
		$criteria->compare ( 'nu_CertidaoFazendaMunicipal', $this->nu_CertidaoFazendaMunicipal, true );
		$criteria->compare ( 'date_format(dt_CertidaoFazendaMunicipal,"%d/%m/%Y")', $this->dt_CertidaoFazendaMunicipal, true );
		$criteria->compare ( 'date_format(dt_ValidadeFazendaMunicipal,"%d/%m/%Y")', $this->dt_ValidadeFazendaMunicipal, true );
		$criteria->compare ( 'nu_CertidaoFazendaFederal', $this->nu_CertidaoFazendaFederal, true );
		$criteria->compare ( 'date_format(dt_CertidaoFazendaFederal,"%d/%m/%Y")', $this->dt_CertidaoFazendaFederal, true );
		$criteria->compare ( 'date_format(dt_ValidadeFazendaFederal,"%d/%m/%Y")', $this->dt_ValidadeFazendaFederal, true );
		$criteria->compare ( 'nu_CertidaoOutras', $this->nu_CertidaoOutras, true );
		$criteria->compare ( 'date_format(dt_CertidaoOutras,"%d/%m/%Y")', $this->dt_CertidaoOutras, true );
		$criteria->compare ( 'date_format(dt_ValidadeCertidaoOutras,"%d/%m/%Y")', $this->dt_ValidadeCertidaoOutras, true );
		
		return new CActiveDataProvider ( $this, array (
				'criteria' => $criteria 
		) );
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
		$formatado = str_pad ( $this->cd_CicParticipante, 14, '0', STR_PAD_LEFT );
		$formatado .= $this->tp_PessoaParticipante;
		$formatado .= $this->mb_str_pad ( $this->nm_Participante, 50, chr ( 32 ), STR_PAD_RIGHT );
		$formatado .= str_pad ( $this->formataValor ( $this->vl_Participacao ), 16, '0', STR_PAD_LEFT );
		$formatado .= str_pad ( $this->formataValor ( $this->vl_PercentualParticipacao), 7, '0', STR_PAD_LEFT );
		$formatado .= str_pad ( $this->nu_CertidaoCASAN, 25, '0', STR_PAD_RIGHT );
		$formatado .= $this->formataData ( $this->dt_CertidaoCASAN );
		$formatado .= $this->formataData ( $this->dt_ValidadeCertidaoCASAN );
		$formatado .= str_pad ( $this->nu_CertidaoCELESC, 25, '0', STR_PAD_RIGHT );
		$formatado .= $this->formataData ( $this->dt_CertidaoCELESC );
		$formatado .= $this->formataData ( $this->dt_ValidadeCertidaoCELESC );
		$formatado .= str_pad ( $this->nu_CertidaoIPESC, 25, '0', STR_PAD_RIGHT );
		$formatado .= $this->formataData ( $this->dt_CertidaoIPESC );
		$formatado .= $this->formataData ( $this->dt_ValidadeCertidaoIPESC );
		$formatado .= str_pad ( $this->nu_CertidaoFazendaMunicipal, 25, '0', STR_PAD_RIGHT );
		$formatado .= $this->formataData ( $this->dt_CertidaoFazendaMunicipal );
		$formatado .= $this->formataData ( $this->dt_ValidadeFazendaMunicipal );
		$formatado .= str_pad ( $this->nu_CertidaoFazendaFederal, 25, '0', STR_PAD_RIGHT );
		$formatado .= $this->formataData ( $this->dt_CertidaoFazendaFederal );
		$formatado .= $this->formataData ( $this->dt_ValidadeFazendaFederal );
		$formatado .= str_pad ( $this->nu_CertidaoOutras, 25, '0', STR_PAD_RIGHT );
		$formatado .= $this->formataData ( $this->dt_CertidaoOutras );
		$formatado .= $this->formataData ( $this->dt_ValidadeCertidaoOutras );
		$formatado .= str_pad ( $this->convenio->nu_Convenio, 16, chr ( 32 ), STR_PAD_RIGHT );
		$formatado .= chr ( 13 ) . chr ( 10 );
		
		return $formatado;
	}
	private function formataValor($valor) {
		return str_replace ( '.', ',', $valor );
	}
	private function formataData($data) {
		return date ( 'Ymd', CDateTimeParser::parse ( $data, Yii::app ()->locale->dateFormat ) );
	}
	protected function beforeSave() {
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
		foreach ( $this->metadata->tableSchema->columns as $columnName => $column ) {
			if ($column->dbType == 'date') {
				$this->$columnName = date ( 'Y-m-d', CDateTimeParser::parse ( $this->$columnName, Yii::app ()->locale->dateFormat ) );
			} elseif ($column->dbType == 'datetime') {
				$this->$columnName = date ( 'Y-m-d H:i:s', CDateTimeParser::parse ( $this->$columnName, Yii::app ()->locale->dateFormat ) );
			}
		}
		
		return parent::beforeSave ();
	}
	protected function afterFind() {
		foreach ( $this->metadata->tableSchema->columns as $columnName => $column ) {
			if (! strlen ( $this->$columnName ))
				continue;
			
			if ($column->dbType == 'date') {
				$this->$columnName = Yii::app ()->dateFormatter->formatDateTime ( CDateTimeParser::parse ( $this->$columnName, 'yyyy-MM-dd' ), 'medium', null );
			} elseif ($column->dbType == 'datetime') {
				$this->$columnName = Yii::app ()->dateFormatter->formatDateTime ( CDateTimeParser::parse ( $this->$columnName, 'yyyy-MM-dd hh:mm:ss' ) );
			}
		}
		
		return parent::afterFind ();
	}
}