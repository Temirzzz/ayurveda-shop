<?php

namespace app\models;

use Yii;

use yii\web\UploadedFile;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $image
 * @property string $title
 * @property string $small_description
 * @property string $description
 * @property double $old_price
 * @property double $new_price
 */
class Product extends \yii\db\ActiveRecord
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
        return 'product';
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
    public function rules()
    {
        return [
            [['image', 'description'], 'string'],
            [['old_price', 'new_price'], 'number'],
            [['title'], 'string', 'max' => 255],
            [['small_description'], 'string', 'max' => 500],
        ];
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
            'small_description' => 'Краткое описание',
            'description' => 'Полное описание',
            'old_price' => 'Старая цена',
            'new_price' => 'Новая цена',
        ];
    }
}
