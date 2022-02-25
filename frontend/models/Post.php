<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string|null $post_author
 * @property int|null $post_number
 * @property string|null $article
 * @property string|null $position
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['post_number'], 'integer'],
            [['post_author', 'article', 'position'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'post_author' => 'Post Author',
            'post_number' => 'Post Number',
            'article' => 'Article',
            'position' => 'Position',
        ];
    }
}
