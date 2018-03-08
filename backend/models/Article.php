<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property int $id
 * @property string $caption
 * @property string $description
 * @property string $thumbnail_image_url
 * @property string $details_url
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['caption', 'description', 'thumbnail_image_url'], 'required'],
            [['description'], 'string'],
            [['caption'], 'string', 'max' => 255],
            [['thumbnail_image_url', 'details_url'], 'string', 'max' => 128],
            [['caption'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'caption' => 'Caption',
            'description' => 'Description',
            'thumbnail_image_url' => 'Thumbnail Image Url',
            'details_url' => 'Details Url',
        ];
    }
}
