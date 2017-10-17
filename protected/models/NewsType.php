<?php

/**
 * This is the model class for table "{{news_type}}".
 *
 * The followings are the available columns in table '{{news_type}}':
 * @property integer $id
 * @property string $news_type_name
 */
class NewsType extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return '{{news_type}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('news_type_name', 'required'),
            array('news_type_name', 'length', 'max' => 6),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, news_type_name', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array();
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'news_type_name' => 'News Type Name',
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

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('news_type_name', $this->news_type_name, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function getNewsTypeList()
    {
        $newsTypeList = NewsType::model()->findAll();
//        echo '<pre>';
//        foreach ($newsTypeList as $newsType) {
//            print_r($newsType->attributes);
//        }
//        echo '</pre>';
//        exit();

        return CHtml::listData($newsTypeList, 'id', 'news_type_name');
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return NewsType the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
