<?php

namespace kouosl\weather\models;

use Yii;

/**
 * This is the model class for table "weather".
 *
 * @property int $weatherID
 * @property string $zaman
 * @property int $sicaklik
 * @property int $yagis
 * @property int $basincOrani
 * @property int $nemOrani
 * @property int $cityID
 */
class Weather extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'weather';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['zaman', 'sicaklik', 'yagis', 'basincOrani', 'nemOrani', 'cityID'], 'required'],
            [['zaman'], 'safe'],
            [['sicaklik', 'yagis', 'basincOrani', 'nemOrani', 'cityID'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'weatherID' => 'Weather ID',
            'zaman' => 'Zaman',
            'sicaklik' => 'Sicaklik',
            'yagis' => 'Yagis',
            'basincOrani' => 'Basinc Orani',
            'nemOrani' => 'Nem Orani',
            'cityID' => 'City ID',
        ];
    }
}
