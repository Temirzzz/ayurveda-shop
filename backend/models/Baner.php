<?php

namespace app\models;

use Yii;

//use yii\base\Model;
use yii\web\UploadedFile;


/**
 * This is the model class for table "baner".
 *
 * @property int $id
 * @property string $image
 * @property string $contant
 */
class Baner extends \yii\db\ActiveRecord
//class Baner extends Model
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
        return 'baner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
          
            [['contant','title','href'], 'string', 'max' => 255],
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
            'contant' => 'Заголовок',
            'title' => 'Субзаголовок',
            'href' => 'Ссылка',
            'file' => 'Картинка',
        ];
    }

    
    

}
