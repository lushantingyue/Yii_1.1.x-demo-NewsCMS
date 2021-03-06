<?php

/**
 * This is the model class for table "{{news}}".
 *
 * The followings are the available columns in table '{{news}}':
 * @property string $id
 * @property string $news_title
 * @property string $news_content
 * @property string $author_name
 * @property integer $type_id
 * @property integer $status_id
 * @property string $create_time
 * @property string $update_time
 * @property string $create_user_id
 * @property string $update_user_id
 */
class News extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return '{{news}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
//		    create_time
            array('news_title, news_content, author_name', 'required'),
            array('type_id, status_id', 'numerical', 'integerOnly' => true),
            array('news_title', 'length', 'max' => 15, 'encoding' => 'utf-8'),
            array('news_content', 'length', 'max' => 8000, 'encoding' => 'utf-8'),
            array('author_name', 'length', 'max' => 10, 'encoding' => 'utf-8'),
//			It should make sure the data which hasnot been validated is safe.
            array('type_id, status_id, update_time, create_time, update_time, create_user_id, update_user_id', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, news_title, news_content, author_name, type_id, status_id, create_time, update_time, create_user_id, update_user_id', 'safe', 'on' => 'search'),
        );
    }

    protected function beforeSave()
    {
        if (parent::beforeSave()) {
            if ($this->isNewRecord) {
                $this->create_time = date('Y-m-d H:m:s');
                $this->create_user_id = Yii::app()->user->id;
            } else {
                // update a news.
                $this->update_time = date('Y-m-d H:m:s');
                $this->update_user_id = Yii::app()->user->id;
            }
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'typeName' => array(self::BELONGS_TO, 'NewsType', 'type_id'),
            'statusName' => array(self::BELONGS_TO, 'StatusType', 'status_id')
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'news_title' => '新闻标题',
            'news_content' => 'News Content',
            'author_name' => '作者',
            'type_id' => '类型',
            'status_id' => '状态',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'create_user_id' => 'Create User',
            'update_user_id' => 'Update User',
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

        $criteria->compare('id', $this->id, true);
        $criteria->compare('news_title', $this->news_title, true);
        $criteria->compare('news_content', $this->news_content, true);
        $criteria->compare('author_name', $this->author_name, true);
        $criteria->compare('type_id', $this->type_id);
        $criteria->compare('status_id', $this->status_id);
        $criteria->compare('create_time', $this->create_time, true);
        $criteria->compare('update_time', $this->update_time, true);
        $criteria->compare('create_user_id', $this->create_user_id, true);
        $criteria->compare('update_user_id', $this->update_user_id, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

//    public function isNewRecord() {
//        News::model()->findByAttributes();
//    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return News the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
