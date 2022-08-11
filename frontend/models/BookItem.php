<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "book_items".
 *
 * @property int $id
 * @property string $name
 * @property string $desc
 * @property int $book_id
 */
class BookItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book_items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'desc', 'book_id'], 'required'],
            [['desc'], 'string'],
            [['book_id'], 'integer'],
            [['name'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'desc' => 'Desc',
            'book_id' => 'Book ID',
        ];
    }
}
