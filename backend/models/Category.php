<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $parent_id
 * @property string $title
 * @property string $alias
 * @property string $description
 * @property array $options
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['options'], 'safe'],
            [['parent_id'], 'string', 'max' => 50],
            [['title', 'alias'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'title' => 'Заголовок',
            'alias' => 'Alias',
            'description' => 'Описание',
            'options' => 'Options',
        ];
    }
}
