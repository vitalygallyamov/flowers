<?php

/**
 * This is the model class for table "flowers".
 *
 * The followings are the available columns in table 'flowers':
 * @property integer $id
 * @property string $title
 * @property integer $price
 * @property integer $discount_price
 * @property string $img
 * @property string $desc
 */
class Catalog extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'catalog';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, price', 'required'),
			array('price, discount_price, gallery_id', 'numerical', 'integerOnly'=>true),
			array('title, desc', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, price, discount_price,  desc', 'safe', 'on'=>'search'),
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
			'categories'=>array(self::MANY_MANY, 'Category', 'catalog_category(catalog_id, category_id)'),
			'reasons'=>array(self::MANY_MANY, 'Reasons', 'catalog_reasons(catalog_id, reason_id)'),
			'flowers'=>array(self::MANY_MANY, 'Flowers', 'catalog_flowers(catalog_id, flower_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Название букета',
			'price' => 'Цена',
			'discount_price' => 'Цена со скидкой',
			'desc' => 'Описание',
		);
	}

	public function behaviors()
	{
	    return array(
	        'galleryBehavior' => array(
	            'class' => 'admin_ext.imagesgallery.GalleryBehavior',
	            'idAttribute' => 'gallery_id',
	            'versions' => array(
	                'mini' => array(
	                    'adaptiveResize' => array(326, 426),
	                ),
	                'medium' => array(
	                    'resize' => array(1200, 1000),
	                )
	            ),
	            'name' => true,
	            'description' => true,
	        )
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('discount_price',$this->discount_price);
		$criteria->compare('desc',$this->desc,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Flowers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public static function getPriceBoundsList(){
		$bounds = array(
			0 => "Цены",
			1 => '990 – 1500 р.',
			2 => '1590 – 3000 р',
			3 => '3100 – 5000 р.',
			4 => 'от 5000 р.'
		);
		return $bounds;
	}

	public static function setPriceCondition($index, &$criteria){
		switch ($index) {
			case 1:
				$criteria->addBetweenCondition('price', '990', '1500');
				break;
			case 2:
				$criteria->addBetweenCondition('price', '1590', '3000');
				break;
			case 3:
				$criteria->addBetweenCondition('price', '3100', '5000');
				break;
			case 4:
				$criteria->addCondition('price > 5000');
				break;
		}
	}
}
