<?php

namespace app\models;

use Yii;

use yii\web\UploadedFile;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $image
 * @property string $title
 * @property string $contant
 */
class News extends \yii\db\ActiveRecord
{

    /**
    * @var UploadedFile
    */
    public $imageFile; 
    public $file;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image', 'contant'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }


    public function upload()
    {
        if ($this->validate()) {
            $this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }


    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Картинка',
            'title' => 'Заголовок',
            'contant' => 'Статья',
        ];
    }
}
