<?php

/**
 * This is the model class for table "product_images".
 *
 * The followings are the available columns in table 'product_images':
 * @property integer $id
 * @property string $image_url
 * @property integer $products_id
 *
 * The followings are the available model relations:
 * @property Products $products
 */
class ProductImages extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product_images';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('image_url, products_id', 'required'),
			array('products_id', 'numerical', 'integerOnly'=>true),
			// array('image_url', 'file', 'types'=>'jpg,jpeg,png,gif'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, image_url, products_id', 'safe', 'on'=>'search'),
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
			'product' => array(self::BELONGS_TO, 'Products', 'products_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'image_url' => 'Ruta de la imagen',
			'products_id' => 'Producto',
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
		$criteria->compare('image_url',$this->image_url,true);
		$criteria->compare('products_id',$this->products_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProductImages the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
