<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nas".
 *
 * @property integer $id
 * @property string $nasname
 * @property string $shortname
 * @property string $type
 * @property integer $ports
 * @property string $secret
 * @property string $server
 * @property string $community
 * @property string $description
 */
class Nas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nasname'], 'required'],
            [['ports'], 'integer'],
            [['nasname'], 'string', 'max' => 128],
            [['shortname'], 'string', 'max' => 32],
            [['type'], 'string', 'max' => 30],
            [['secret'], 'string', 'max' => 60],
            [['server'], 'string', 'max' => 64],
            [['community'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nasname' => Yii::t('app', 'Nasname'),
            'shortname' => Yii::t('app', 'Shortname'),
            'type' => Yii::t('app', 'Type'),
            'ports' => Yii::t('app', 'Ports'),
            'secret' => Yii::t('app', 'Secret'),
            'server' => Yii::t('app', 'Server'),
            'community' => Yii::t('app', 'Community'),
            'description' => Yii::t('app', 'Description'),
        ];
    }
}
