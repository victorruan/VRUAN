<?php
/**
 * Article Model
 */
class Article  extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'articles';
    }
}