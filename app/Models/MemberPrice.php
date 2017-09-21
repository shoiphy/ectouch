<?php

namespace App\Models;

use Yii;

/**
 * This is the model class for table "{{%member_price}}".
 *
 * @property integer $price_id
 * @property integer $goods_id
 * @property integer $user_rank
 * @property string $user_price
 */
class MemberPrice extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%member_price}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_id', 'user_rank'], 'integer'],
            [['user_price'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'price_id' => 'Price ID',
            'goods_id' => 'Goods ID',
            'user_rank' => 'User Rank',
            'user_price' => 'User Price',
        ];
    }
}
