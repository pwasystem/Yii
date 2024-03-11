<?php

/**
 * This is the model class for table "tbl_cliente".
 *
 * The followings are the available columns in table 'tbl_cliente':
 * @property integer $id
 * @property string $nome
 * @property string $cpf
 * @property string $cep
 * @property string $logradouro
 * @property integer $numero
 * @property string $cidade
 * @property string $estado
 * @property string $complemento
 * @property string $foto
 * @property string $sexo
 *
 * The followings are the available model relations:
 * @property TblProduto[] $tblProdutos
 */
class Cliente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, cpf, cep, logradouro, numero, cidade, estado, sexo', 'required'),
			array('numero', 'numerical', 'integerOnly'=>true),
			array('nome, logradouro, complemento', 'length', 'max'=>255),
			array('cpf', 'length', 'max'=>14),
			array('cpf', 'ext.validators.cpf'),
			array('cep', 'length', 'max'=>10),
			array('cidade, estado', 'length', 'max'=>100),
			array('sexo', 'length', 'max'=>9),
			array('foto', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nome, cpf, cep, logradouro, numero, cidade, estado, complemento, foto, sexo', 'safe', 'on'=>'search'),
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
			'tblProdutos' => array(self::HAS_MANY, 'TblProduto', 'cliente_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nome' => 'Nome',
			'cpf' => 'Cpf',
			'cep' => 'Cep',
			'logradouro' => 'Logradouro',
			'numero' => 'Numero',
			'cidade' => 'Cidade',
			'estado' => 'Estado',
			'complemento' => 'Complemento',
			'foto' => 'Foto',
			'sexo' => 'Sexo',
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
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('cpf',$this->cpf,true);
		$criteria->compare('cep',$this->cep,true);
		$criteria->compare('logradouro',$this->logradouro,true);
		$criteria->compare('numero',$this->numero);
		$criteria->compare('cidade',$this->cidade,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('complemento',$this->complemento,true);
		$criteria->compare('foto',$this->foto,true);
		$criteria->compare('sexo',$this->sexo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cliente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
