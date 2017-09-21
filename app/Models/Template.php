<?php

namespace App\Models;

use Yii;

/**
 * This is the model class for table "{{%template}}".
 *
 * @property string $filename
 * @property string $region
 * @property string $library
 * @property integer $sort_order
 * @property integer $id
 * @property integer $number
 * @property integer $type
 * @property string $theme
 * @property string $remarks
 */
class Template extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%template}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sort_order', 'id', 'number', 'type'], 'integer'],
            [['filename', 'remarks'], 'string', 'max' => 30],
            [['region', 'library'], 'string', 'max' => 40],
            [['theme'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'filename' => 'Filename',
            'region' => 'Region',
            'library' => 'Library',
            'sort_order' => 'Sort Order',
            'id' => 'ID',
            'number' => 'Number',
            'type' => 'Type',
            'theme' => 'Theme',
            'remarks' => 'Remarks',
        ];
    }
}
