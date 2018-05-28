<?php

namespace kouosl\weather\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property int $cityID
 * @property int $cityCode
 * @property string $cityName
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cityCode', 'cityName'], 'required'],
            [['cityCode'], 'integer'],
            [['cityName'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cityID' => 'City ID',
            'cityCode' => 'City Code',
            'cityName' => 'City Name',
        ];
    }
}
